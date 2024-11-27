<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empmodel;
use App\Models\stdmodel;

class empcontroller extends Controller
{
    function openregister(){
        return view("register");
    }
    
    function store(request $request){
        $result = $request->all();
       // print_r($result);
        $result["hobby"]=implode(",",$result["hobby"]);
        print_r($result);
        empmodel::create($result);
        return redirect()->route("display");
    }

    function display(){
        $employees = empmodel::get();
        return view("display",["employees"=>$employees]);
    }

    function delete($id){
        empmodel::where("eid","=",$id)->delete();
        return redirect()->route("display");
    }

    function update($id){
       
         $updatedata=empmodel::where("eid","=",$id)->first();
        return view("update",["updatedata"=>$updatedata]);
    }

    function storeupdate(request $request){
        empmodel::where("eid","=",$request->eid)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'hobby'=>implode(",",$request->hobby),
            'city'=>$request->city,
            'dob'=>$request->dob
        ]);
        return redirect()->route("display");
    }

    // function update(){
    //     return view("update");
    // }


    //second crud
    function stdregister(){
        return view("stdregister");
    }

    function stdstore(request $request){
        $result = $request->all();
        print_r($result);
        $result["hobby"] = implode(",",$result["hobby"]);
        stdmodel::create($result);
        return redirect()->route("stddisplay");

    } 

    function stddisplay(){
        $stddata = stdmodel::get();
        return view("stddisplay",["stddata"=>$stddata]);
    }

    function stddelete($id){
        stdmodel::where("sid","=",$id)->delete();
        return redirect()->route("stddisplay");

    }
}
