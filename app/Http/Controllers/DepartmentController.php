<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{

    const DEFAULT_NUMBER_OF_COURSES = 0;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view('admin-dashboard.departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input and return if validation fails
        if (!$this->validateAddDepartmentInputs($request)) {
            return redirect()->back();
        } 
        
        else {
            Department::create([
                'image' => $request->icon,
                'title' => $request->title,
                'description' => $request->description,
                'number_of_courses' => self::DEFAULT_NUMBER_OF_COURSES,
            ]);
    
            flash()->addSuccess($request->title . ' department created successfully');
        }
    
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('admin-dashboard.departments.edit-department', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        if (!$this->validateAddDepartmentInputs($request)) {
            return redirect()->back();
        } 

        $department->update([
            'image' => $request->input('icon'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        flash()->addSuccess($department->title . " department updated");

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        flash()->addSuccess($department->title . ' Department deleted');
        return redirect()->back();
    }

    public function validateAddDepartmentInputs(Request $request)
    {
        // Define validation rules
        $rules = [
            'icon' => 'required|string',
            'title' => 'required|max:50',
            'description' => 'required|max:100',
        ];
    
        // Define custom error messages (optional)
        $messages = [
            'icon.regex' => 'The icon must be an &lt;i&gt; tag',
            'title.max' => 'The title field should not exceed 50 characters.',
            'description.max' => 'The description field should not exceed 100 characters.',
        ];
    
        // Validate the input
        $validator = Validator::make($request->all(), $rules, $messages);
    
        // Check if validation fails
        if ($validator->fails()) {
            // Get the specific error messages for each field
            $errors = $validator->errors();
            
            // Check and flash the error message for 'icon' field
            if ($errors->has('icon')) {
                flash()->addError($messages['icon.regex']);
            }
            
            // Check and flash the error message for 'title' field
            if ($errors->has('title')) {
                flash()->addError($messages['title.max']);
            }
            
            // Check and flash the error message for 'description' field
            if ($errors->has('description')) {
                flash()->addError($messages['description.max']);
            }
    
            return false;
        }
    
        return true;
    }
    

}
