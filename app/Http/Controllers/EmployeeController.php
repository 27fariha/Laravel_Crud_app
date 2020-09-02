<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['emp'] =Employee::orderBy('name','asc')->paginate(5);
       return view('employee',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$request ->validate([
    'name'=>'required',
    'gender'=>'required',
    'desig'=>'required'
]);

$emp= new Employee();
$emp->name=$request->input('name');
$emp->gender=$request->input('gender');
$emp->designation=$request->input('desig');
$emp->save();
        return redirect('/employee')->with('Insert_msg','Data Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp =Employee::find($id);
       // return $emp;
       return view('/edit')->with('emp',$emp);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emp=Employee::find($id);
        $emp->name=$request->input('name');
        $emp->gender=$request->input('gender');
        $emp->designation=$request->input('desig');
        $emp->save();

return redirect('/employee')->with('Update_msg','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = Employee::find($id);
        $emp->delete();
        return redirect('/employee')->with('delete_msg','Data Deleted Successfully');;
    }
}
