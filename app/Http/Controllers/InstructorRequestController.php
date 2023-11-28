<?php

namespace App\Http\Controllers;

use App\Models\InstructorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InstructorRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.profile.instructor-request');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'coursesType' => 'required|string',
            'whyShouldWeAccept' => 'required|string'
        ]);

        $doesExist = InstructorRequest::where('user_id', Auth::user()->id)->first();

        if($doesExist) {
            flash()->addError('You had requested before, Please wait for a response');
            return redirect()->route('go-profile', Auth::user());
        }

        InstructorRequest::create([
            'what_kind_of_courses' => $request->input('coursesType'),
            'why_to_accept' => $request->input('whyShouldWeAccept'),
            'user_id' => Auth::user()->id,
        ]);

        flash()->addSuccess('Request sent successfully!');

        return redirect()->route('go-profile', Auth::user());
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InstructorRequest $instructorRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InstructorRequest $instructorRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstructorRequest $instructorRequest)
    {
        //
    }
}
