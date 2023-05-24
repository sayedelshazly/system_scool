<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Auth;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = Department::get();
        return view('department.index',['departments' =>$department]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!\Illuminate\Support\Facades\Auth::user()){
            return Redirect('login');
        }
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!\Illuminate\Support\Facades\Auth::user()){
            return Redirect('login');
        }
        $formFields = $request->validate([
               'name' => 'required',
               'code' => 'required'
        ]);
        Department::create($formFields);
        return Redirect::route('department.index')->with('status','Department has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        if(!\Illuminate\Support\Facades\Auth::user()){
            return Redirect('login');
        }
        return view('department.edit',['departments' =>$department]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        if(!\Illuminate\Support\Facades\Auth::user()){
            return Redirect('login');
        }
        $formFields = $request->validate([
            'name' => 'required',
            'code' => 'required'
     ]);
     $department->update($formFields);
        return Redirect::route('department.index',$department->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Department $department)
    {
        if(!\Illuminate\Support\Facades\Auth::user()){
            return Redirect('login');
        }
        
        $department->delete();
       return Redirect::route('department.index')->with('status','Delete is Done!');
    }
}
