<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    //
    function openRegister(){
        return view("register");
    }

    function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'gender'=>'required',
                'city'=>'required',
                'hobby'=>'required',
                'dob'=>'required',
                'image'=>'image'
            ]
        );
        $result = $request->all();
        $result["hobby"]=implode(",",$result["hobby"]);
        print($request);
        if($request->image != ""){
            $image=$request->image;
            $ext=$image->getClientOriginalExtension();
            $imagename=time().".".$ext;

            $image->move(public_path('upload/product'),$imagename);

            $result["image"]=$imagename;
        }
        Employee::create($result);
        return redirect()->route("display");
    }

    function display(){
        $employee = Employee::get();
        return view("display",["employee"=>$employee]);
    }

    function delete($id){
        $e = Employee::where("eid",'=',$id)->first();

        File::delete(public_path('upload/product/'.$e->image));

        Employee::where("eid","=",$id)->delete(); 

        return redirect()->route("display");

    }

    function editData($id){
        $employee = Employee::where("eid",'=',$id)->first();

        return view("update",["employee"=>$employee]);
    }

    function update(Request $request){
        if($request->image != ""){

            File::delete(public_path('upload/product/'.$request->image));

            $image=$request->image;
            $ext=$image->getClientOriginalExtension();
            $imagename=time().".".$ext;

            $image->move(public_path('upload/product'),$imagename);

            // $result["image"]=$imagename;
        }
        Employee::where("eid","=",$request->eid)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'hobby'=>implode(",",$request->hobby),
            'city'=>$request->city,
            'dob'=>$request->dob,
            'image'=>$imagename
            
        ]);
        return redirect()->route("display");
    }
}
