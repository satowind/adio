<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;
use App\Loan;

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

class LoanController extends Controller
{
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

      

        if(empty($request->input("home_address"))   ){
            Session::flash('error', 'Home Address is Empty');
            return back();
        }

        if(empty($request->input("dob"))   ){
            Session::flash('error', 'Date of birth is empty');
            return back();
        }

        if(empty($request->input("title"))   ){
            Session::flash('error', 'Title  is empty');
            return back();
        }

        if(empty($request->input("marital_status"))   ){
            Session::flash('error', 'Marital Status is empty');
            return back();
        }

        if(empty($request->input("number_of_dependent"))   ){
            Session::flash('error', 'Number of Dependents is Empty');
            return back();
        }

        if(empty($request->input("next_of_kin")) ){
            Session::flash('error', 'Next of Kin is Empty');
            return back();
        }

        if(empty($request->input("next_of_kin_mobile")) ){
            Session::flash('error', 'Next of Kin\'s Phone Number is Empty');
            return back();
        }

        if(empty($request->input("employment"))  ){
            Session::flash('error', 'Employment is Empty');
            return back();
        }

        if(empty($request->input("current_employer"))  ){
            Session::flash('error', 'Current Employer is Empty');
            return back();
        }

        if(empty($request->input("employer_address"))  ){
            Session::flash('error', 'Employer Address is Empty');
            return back();
        }

        if(empty($request->input("pension_number"))  ){
            Session::flash('error', 'Pension Number is Empty');
            return back();
        }

        if(empty($request->input("tax_number"))  ){
            Session::flash('error', 'Tax Number is Empty');
            return back();
        }

        if(empty($request->input("next_month_salary"))  ){
            Session::flash('error', 'Next Month Salary is Empty');
            return back();
        }

        if(empty($request->input("pay_day"))  ){
            Session::flash('error', 'Pay Day is Empty');
            return back();
        }

        if(empty($request->input("loan_amount"))  ){
            Session::flash('error', 'Loan Amount is Empty');
            return back();
        }

        if(empty($request->input("tenure"))  ){
            Session::flash('error', 'Tenure is Empty');
            return back();
        }

        if(empty($request->input("loan_purpose"))  ){
            Session::flash('error', 'Loan Purpose is Empty');
            return back();
        }

        if(empty($request->input("salary_bank"))  ){
            Session::flash('error', 'Salary Bank is Empty');
            return back();
        }

        if(empty($request->input("account_number"))  ){
            Session::flash('error', 'Account Number is Empty');
            return back();
        }

        if(empty($request->input("existing_loan"))  ){
            Session::flash('error', 'Existing Loan is Empty');
            return back();
        }

        if(empty($request->input("bvn"))  ){
            Session::flash('error', 'Bank Verification Number (BVN) is Empty');
            return back();
        }

       

        // if(empty($request->input("valid_id"))  ){
        //     Session::flash('error', 'Valid ID is Empty');
        //     return back();
        // }

        // if(empty($request->input("employment_id_card"))  ){
        //     Session::flash('error', 'Employment ID is Empty');
        //     return back();
        // }

        // if(empty($request->input("utility_bill"))  ){
        //     Session::flash('error', 'Utility Bills is Empty');
        //     return back();
        // }

        // if(empty($request->input("bank_statement"))  ){
        //     Session::flash('error', 'Bank Statement is Empty');
        //     return back();
        // }

        // if(empty($request->input("g_valid_id"))  ){
        //     Session::flash('error', 'Guarantors Valid ID is Empty');
        //     return back();
        // }

        // if(empty($request->input("g_work_id"))  ){
        //     Session::flash('error', 'Guarantor Valid ID is Empty');
        //     return back();
        // }

        if ($request->hasFile('valid_id') ) {
            $this->validate($request, [
                'valid_id' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
    
    
                $image = $request->file('valid_id');
                $valid_id = time().'1.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('images/loan');
                $image->move($destinationPath, $valid_id);
        }       

        if ($request->hasFile('employment_id') ) {
            $this->validate($request, [
                'employment_id' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
    
    
                $image = $request->file('employment_id');
                $employment_id = time().'2.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('images/loan');
                $image->move($destinationPath, $employment_id);
        }

        if ($request->hasFile('utility_bill') ) {
            $this->validate($request, [
                'utility_bill' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
    
    
                $image = $request->file('utility_bill');
                $utility_bill = time().'3.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('images/loan');
                $image->move($destinationPath, $utility_bill);
        }


        if ($request->hasFile('bank_statement') ) {
            $this->validate($request, [
                'bank_statement' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
    
    
                $image = $request->file('bank_statement');
                $bank_statement = time().'4.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('images/loan');
                $image->move($destinationPath, $bank_statement);
        }

        if ($request->hasFile('g_work_id') ) {
            $this->validate($request, [
                'g_work_id' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
    
    
                $image = $request->file('g_work_id');
                $g_work_id = time().'5.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('images/loan');
                $image->move($destinationPath, $g_work_id);
        }

        if ($request->hasFile('g_valid_id') ) {
            $this->validate($request, [
                'g_valid_id' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
    
    
                $image = $request->file('g_valid_id');
                $g_valid_id = time().'6.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('images/loan');
                $image->move($destinationPath, $g_valid_id);
        }

        if ($request->hasFile('g_utility_bill') ) {
            $this->validate($request, [
                'g_utility_bill' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
    
    
                $image = $request->file('g_utility_bill');
                $g_utility_bill = time().'7.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('images/loan');
                $image->move($destinationPath, $g_utility_bill);
        }


       // var_dump($g_utility_bill);die();

        $loan = new Loan;
        $loan->title = $request->input('title');
        $loan->first_name = $request->input('fname');
        $loan->surname = $request->input('sname');
        $loan->dob = $request->input('dob');
        $loan->marital_status = $request->input('marital_status');
        $loan->no_of_dependent = $request->input('number_of_dependent');
        $loan->mobile_number = $request->input('phone');
        $loan->primary_email = $request->input('email');
        $loan->home_address = $request->input('home_address');
        $loan->next_of_kin = $request->input('next_of_kin');
        $loan->next_of_kin_phone_number = $request->input('next_of_kin_mobile');
        $loan->employment_status = $request->input('employment');
        $loan->current_employer = $request->input('current_employer');
        $loan->employers_address = $request->input('employer_address');
        $loan->work_mail = $request->input('work_email');
        $loan->pension_number = $request->input('pension_number');
        $loan->tax_number = $request->input('tax_number');
        $loan->next_month_salary = $request->input('next_month_salary');
        $loan->pay_day = $request->input('pay_day');
        $loan->loan_amount = $request->input('loan_amount');
        $loan->tenure = $request->input('tenure');
        $loan->purpose_of_loan = $request->input('loan_purpose');
        $loan->salary_bank = $request->input('salary_bank');
        $loan->account_number = $request->input('account_number');
        $loan->existing_loan = $request->input('existing_loan');
        $loan->outstanding_balance = $request->input('outstanding_balance');
        $loan->dept_obligation = $request->input('dept_obligation');
        $loan->bvn = $request->input('bvn');
        $loan->status = 2;
        


        if(!empty($valid_id)){
            $loan->valid_id = $valid_id;
        }

        if(!empty($employment_id)){
            $loan->employment_id = $employment_id;
        }

        if(!empty($utility_bill)){
            $loan->utility_bill = $utility_bill;
        }

        if(!empty($bank_statement)){
            $loan->bank_statement = $bank_statement;
        }

        if(!empty($g_valid_id)){
            $loan->g_valid_id = $g_valid_id;
        }

        if(!empty($g_utility_bill)){
            $loan->g_utility_bill = $g_utility_bill;
        }

        if(!empty($g_work_id)){
            $loan->g_work_id = $g_work_id;
        }
        
        $loan->application_date =  Carbon::now();

        if( $loan->save()){

            Session::flash('success', 'We will review your request and get back to you');
            return redirect('/apply_for_loan');
        }
        else{
            Session::flash('error', 'Ooops! An error occured pls try again later');
            return back();
        }
        
        
    }

    public function g_loan($id = null){
        
        $loans = Loan::get();

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
