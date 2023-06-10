<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::all();
        $data = compact('employee');
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('crud.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'email' => 'required',
                'address' => 'required',
                'image' => 'sometimes|image:gif,png,jpeg,jpg'
        ]);
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->save();

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('uploads/employees/'), $imageName);
        $employee->image = $imageName;
        $employee->save();
        return redirect('employee/index')->with('toast_success', 'Employee Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('crud.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $employee = Employee::find($request->employee_id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->update();
        
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('uploads/employees/'), $imageName);
        $employee->image = $imageName;
        $employee->update();
        return redirect('employee/index')->with('toast_success', 'Employee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect('employee/index')->with('toast_success', 'Employee Deleted Successfully');
    }
}
