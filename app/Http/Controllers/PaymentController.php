<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Course;
use App\Models\User;
use App\Models\CourseStudent;
use App\Models\Instructor;
use App\Models\Transaction;

class PaymentController extends Controller
{
    public function buyCourse(Request $request)
    {

        session()->flash('course_id', $request->input('courseID'));
        session()->flash('instructor_id', $request->input('instructorID'));
        session()->flash('student_id', $request->input('studentID'));


        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $request->coursePrice,
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);


        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // buy the course if the paymnet is successful
            try {
                $student_id = session('student_id');
                $course_id = session('course_id');
                $instructor_id = session('instructor_id');

                if (CourseStudent::where('course_id', $course_id)->where('student_id', $student_id)->exists()) {
                    return redirect()->back()->with('error', 'You already have this course.');
                }
                CourseStudent::create([
                    'course_id' => $course_id,
                    'student_id' => $student_id,
                    'instructor_id' => $instructor_id,
                ]);

                // Edit info for another tables
                $instructor = Instructor::findOrFail($instructor_id);
                $course = Course::findOrFail($course_id);
                $course->number_of_students++;
                $instructor->earnings += $course->price;
                $instructor->save();
                $course->save();

                // Save transaction in the table
                Transaction::create([
                    'amount' => $course->price,
                    'payment_type' => 'Paypal',
                    'course_id' => $course_id,
                    'user_id' => $student_id,
                ]);
                
                return redirect()->route('go-success');
            } catch (\Exception $e) {
                return redirect()->back();
            }
        } else {
            return redirect()->route('go-failure');
        }
    }

    public function cancel()
    {
        return "Payment is cancelled!";
    }
}