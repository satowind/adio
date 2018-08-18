<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;
use App\Application;

use Illuminate\Support\Facades\Auth;
use Session;

use Illuminate\Support\Facades\Route;


use Redirect;

use App\User;
use Carbon\Carbon; 
use App\Branch;
use App\Units;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

use Illuminate\Routing\Redirector;

class ApplicationController extends Controller
{

    public function g_apply(){
        $status = Application::count();
        return view('career',compact('status'));
    }
    public function p_apply(Request $request){

      

        if(empty($request->input("email"))  ){
            Session::flash('error', 'Email is Empty');
            return back();
        }


        if(empty($request->input("phone")) ){
            Session::flash('error', 'Phone Id is Empty');
            return back();
        }

      

        if(empty($request->input("sname"))   ){
            Session::flash('error', 'Surname is Empty');
            return back();
        }

        if(empty($request->input("fname"))   ){
            Session::flash('error', 'First Name is Empty');
            return back();
        }


        if(empty($request->input("title"))   ){
            Session::flash('error', 'Title  is empty');
            return back();
        }

        if(empty($request->input("cover"))  ){
            Session::flash('error', 'Cover Letter  is Empty');
            return back();
        }

        
        if ($request->hasFile('resume') ) {
            $validate = $this->validate($request, [
                'resume' => 'required|mimes:pdf,doc,docx|max:2048',
            ]);
           
                $doc = $request->file('resume');
                $resume = time().'1.'.$doc->getClientOriginalExtension();
                $destinationPath = public_path('images/document');
                $doc->move($destinationPath, $resume);
        }     
        
       

       if ($request->hasFile('passport') ) {
            $this->validate($request, [
                'passport' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
    
    
                $image = $request->file('passport');
                $passport = time().'1.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('images/loan');
                $image->move($destinationPath, $passport);
         }   

     

        $application = new Application;
        $application->title = $request->input('title');
        $application->first_name = $request->input('fname');
        $application->surname = $request->input('sname');
        $application->phone = $request->input('phone');
        $application->email = $request->input('email');
        $application->cover = $request->input('cover');

        if(!empty($passport)){
            $application->passport = $passport;
        }

        if(!empty($resume)){
            $application->resume = $resume;
        }else{
            Session::flash('error', 'Resume should be in pdf,doc or docx format and not less than 2MB');
                return back();
        }

        $application->application_date =  Carbon::now();

        if( $application->save()){

            Session::flash('success', 'We will review your application and get back to you');
            return redirect('/career');
        }
        else{
            Session::flash('error', 'Ooops! An error occurred pls try again later');
            return back();
        }
        
        
    }

    public function g_loan($id = null){
        
        $loans = Application::get();

       return view('admin/loan',compact('loans','id'));
    }

    public function g_decline_loan(){

        $id = request()->id;
        $loan = Loan::findOrFail($id);
        $loan->status =  0;
        $loan->save();

    }

    public function g_approve_loan(){

        $id = request()->id;
        $loan = Loan::findOrFail($id);
        $loan->status =  1;
        $loan->save();
    }
}
