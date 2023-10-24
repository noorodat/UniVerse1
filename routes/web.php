<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/pages.php';
require __DIR__.'/dashboard.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Paypal
// U can implement the buyCouse in the user controller and call it in the checkout controller
Route::post('/buy-course', [CheckoutController::class, 'buyCourse'])->name('buy-course');
Route::get('paypal/success', [CheckoutController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [CheckoutController::class, 'cancel'])->name('paypal_cancel');
// sami //////






// public function storeShipment(Request $request)
// {

//     // dd($request);
//     // Validate the form data
//     $request->validate([
//         'name' => 'required|string',
//         'email' => 'required|email',
//         'phone' => 'required|numeric',
//         'company' => 'nullable|string',
//         'address' => 'required|string',
//         'city' => 'required|string',
//     ]);
//     $user = User::find(Auth::user()->id);
//     $address = $user->address()->updateOrCreate([], [
//         "company" => $request->company,
//         "address" => $request->address,
//         "city" => $request->city,
//         "customerId" => Auth::user()->id,

//     ]);

//     $user->name = $request->name;
//     $user->email = $request->email;
//     $user->phone = $request->phone;
//     $user->update();

//     if (isset($request->paypal)) {
//         $payment = $user->payment()->create([

//             "maethod" => $request->paypal,
//             "paymentTotal" => $request->total,
//             // Change the total to the course price
//             "customerId" => Auth::user()->id,



//         ]);
//         $provider = new PayPalClient;
//         $provider->setApiCredentials(config('paypal'));
//         $PaypalToken = $provider->getAccessToken();


//         $response = $provider->createOrder([
//             "intent" => "CAPTURE",
//             "application_context" => [
//                 "return_url" =>  route('paypal_success'),
//                 "cancel_url" => route('paypal_cancel'),
//             ],
//             "purchase_units" => [
//                 [
//                     "amount" => [
//                         "currency_code" => "USD",
//                         "value" => $request->total
//             // Change the total to the course price

//                     ]
//                 ]
//             ]
//         ]);
//         // dd($response);




//         if (isset($response['id']) && $response['id'] != null) {
//             foreach ($response['links'] as $link) {

//                 if ($link['rel'] === 'approve') {
//                     return redirect()->away($link['href']);
//                 }
//             }
//         } else {
//             return redirect()->route('paypal_cancel');
//         }
//     } else if (isset($request->cash)) {
//         $payment = $user->payment()->create([
//             "maethod" => $request->cash,
//             "paymentTotal" => $request->total,
//             "customerId" => Auth::user()->id,
//         ]);



//         $order =  orders::create([
//             "totalPrice" => $request->total,
//             "shipmentId" => $address->id,
//             "paymentId" => $payment->id,
//             "customerId" => Auth::user()->id,
//         ]);
//         dd($order);
//         $cart = carts::where("customerId", $user->id)->get();

//         // dd($cart);
//         foreach ($cart as $product) {
//             orderItems::create([
//                 "quantity" => $product->quantity,
//                 "price" => $product->quantity * $product->product->price,
//                 "orderId" => $order->id,
//                 "customerId" => Auth::user()->id,
//                 "productId" => $product->productId,
//             ]);
//             $product->delete();
//         }
//     }
//     // session()->flash('success', 'Thank you for your purchase. Your order will be shipped to you soon.!');

//     return redirect()->route('home')->with('success', 'Thank you for your purchase. Your order will be shipped to you soon.!');
// }



// public function success(Request $request)
// {


//     $provider = new PayPalClient;
//     $provider->setApiCredentials(config('paypal'));
//     $PaypalToken = $provider->getAccessToken();
//     $response = $provider->capturePaymentOrder($request->token);

//     if (isset($response['status']) && $response['status'] == 'COMPLETED') {
//         $order =   orders::create([
//             "totalPrice" => Auth::user()->payment->last()->paymentTotal,
//             "shipmentId" => Auth::user()->address->last()->id,
//             "paymentId" => Auth::user()->payment->last()->id,
//             "customerId" => Auth::user()->id,
//         ]);

//         $cart = carts::where("customerId", Auth::user()->id)->get();

//         // dd($cart);
//         foreach ($cart as $product) {
//             orderItems::create([
//                 "quantity" => $product->quantity,
//                 "price" => $product->quantity * $product->product->price,
//                 "orderId" => $order->id,
//                 "customerId" => Auth::user()->id,
//                 "productId" => $product->productId,
//             ]);
//             $product->delete();
//         }
//         return redirect()->route('home')->with('success', 'Thank you for your purchase. Your order will be shipped to you soon.!');
//     } else {
//         return redirect()->route('paypal_cancel');
//     }
// }

// public function cancel()
// {
//     return view('pagess.contact.contact');
// }

