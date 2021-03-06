<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Inbox;
use App\Inbox_users;
use Illuminate\Http\Request;
use App\Banks;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


use Session;
use Redirect;
use App\Customers;
use App\User;
use App\Transactions;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use App\Branch;
use App\Loan;



class CustomersController extends Controller
{
    

    public function p_register(Request $request){

        if(empty($request->input("fname"))   ){
            Session::flash('error', 'First Name is Empty');
            return back();
        }

        // if(empty($request->input("fnamess"))   ){
        //     Session::flash('error', 'First Name is Empty');
        //     return Redirect::back()->withInput();
        // }

        if(empty($request->input("fname"))   ){
            Session::flash('error', 'First Name is Empty');
            return back();
        }


        if(empty($request->input("username"))   ){
            Session::flash('error', 'Username is Empty');
            return back();
        }

        if( User::where("username",$request->input("username"))->first()){
            Session::flash('error' , 'Username Already Exist');
            return back();
        }

        if(empty($request->input("password"))   ){
            Session::flash('error', 'Password is Empty');
            return back();
        }

        if( !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/', $request->input('password')) ){
            Session::flash('error', 'Passwords Must be 6 character long, with atleast one capital letter, one number, and one symbol');
            return back();
        }

        if(empty($request->input("re_password"))   ){
            Session::flash('error', 'Password is Empty');
            return back();
        }

        if( $request->input('password') != $request->input('re_password') ){
            Session::flash('error', 'Passwords Dont Match');
            return back();
        }

        if(empty($request->input("email"))  ){
            Session::flash('error', 'Email is Empty');
            return back();
        }

        if( Customers::where( "email",$request->input("email"))->first() ){
            Session::flash('error', 'Email Already Exist');
            return back();
        }

        if(empty($request->input("phone")) ){
            Session::flash('error', 'Phone Number is Empty');
            return back();
        }

        if( Customers::where( "phone",$request->input("phone"))->first() ){
            Session::flash('error', 'Phone Already Exist');
            return back();
        }


        $user = new User;
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->status = 2; // Not yet verified
        $user->user_type = 2; // 2 for Customers profile
        $user->flag = 1; // Active user

        if($user->save()){


            $loan = new Loan;
            $loan->user_id = $user->id;
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
            $loan->status = 4;


            if($loan->save()){
                Session::flash('success', 'Congrats! You account have been created');
                return redirect('/register');
            }
            else{
                Session::flash('error', 'Ooops! An error occurred pls try again later');
                return back();
            }
        }
        else{
            Session::flash('error', 'Ooops! An error occurred pls try again later');
            return back();
        }

    }

 

    public function p_login(Request $request){

        $username = $request->input('username');

        $password = $request->input('password');

        if (Auth::attempt(['username' => $username, 'password' => $password, 'status'=> 1,'user_type'=>2])){
            //Authentication passed...

            $user = Auth::user();

            Session::flash('success', 'Login Successful');
            return redirect('/login');
            
        }else{

            //Authentication Failed
            Session::flash('error', 'Invalid login details supplied');

            return back();

        }

    }

    public function g_logout($id=null){
        Auth::logout();
        return view('betabet/logout');
    }



    public function g_users(){

        $customers = User::join('loan','loan.user_id','=','users.id')
        ->where('users.user_type','2')->get();
        return view('admin/users', compact('customers'));

    }


    public function g_approvereg($id=null){

        $user = Auth::user();

        if(!$user){
            return redirect('admin/login');
        }

        $name = Admin::where("user_id",$user->id)
            ->first();

        $privillage = Units::where('id',$name->staff_unit_id)
            ->first();










        $access = Branch::where('id',$name->branch)
            ->first();

        $customers = [];

        if($access->hierachy == 'head office') {

//            $customers = Customers::where('customers.flag', '!=', '0')
//                ->join('branch', 'branch.id', '=', 'customers.branch')
//                ->join('users', 'users.id', '=', 'customers.user_id')
//                ->select('customers.*', 'users.username','branch.name')
//                ->where('status', 1)
//                ->get();

            $customers = Customers::where('status','!=',1 )
                ->join('users', 'users.id','=','customers.user_id')
                ->join('branch', 'branch.id', '=', 'customers.branch')
                ->select('users.*','customers.*','customers.id as ids', 'users.id as ides','branch.name')
                ->where('customers.flag','!=',0)
                ->get();

        }elseif ($access->hierachy == 'regional office'){

            //get first regional office ** object

            $reg = Branch::where('id',$name->branch)
                ->first();

            //Fetch the regional again as an object

            $regional = Branch::where('id',$name->branch)
                ->get();

            // fetch all area office having the regional office as parent

            $area = Branch::where('under',$reg->id)
                ->where('hierachy','area office')
                ->get() ;

            // fetch all hub2  office having the regional office as parent

            $hub_2 = Branch::where('under',$reg->id)
                ->where('hierachy','hub 2 office')
                ->get();

            //assign empty hub1

            $hub_1 =[];

            // fetch all hub 1 office having the area offices under the regional parent

            foreach ($area as $are){

                $hub = Branch::where('under', $are->id)
                    ->where('hierachy','hub 1 office')
                    ->get();

                array_push($hub_1 , $hub);
            };

            //assign empty branch
            $branch =[];

            // fetch all branch office having the area offices under the regional parent

            foreach ($area as $are){
                $bra= Branch::where('under',$are->id)
                    ->where('hierachy','branch office')
                    ->get();

                array_push($branch, $bra);

            }

            // fetch all branch office having the hub2 offices under the regional parent

            foreach ($hub_2 as $hub_two){

                $bran = Branch::where('under',$hub_two->id)
                    ->where('hierachy','branch office')
                    ->get();

                array_push($branch, $bran);

            }

            // fetch all branch office having the hub1  offices under the regional parent by double looping and push them to the branch

            foreach ($hub_1 as $hub_one){

                foreach ($hub_one as $hub_one_2){

                    $branc = Branch::where('under',$hub_one_2->id)
                        ->where('hierachy','branch office')
                        ->get();

                    array_push($branch, $branc);
                }

            }

            //people array should be desclared as empty array and the result of regional,branch,hub 1,area,hub 2 assigned to them.

            $people = [];

            array_push($people , $regional , $area, $hub_2);

            foreach ($hub_1 as $hub1){

                array_push($people , $hub1 );

            }

            foreach ($branch as $bra1){

                array_push($people , $bra1 );

            }

            //customer is fetched after looping through people array twice

            $customerss = [];

            foreach ( $people as $person ){

                foreach ($person as $persons){

//                    $customer = Customers::where('branch', $persons->id)
//                        ->join('users', 'users.id', '=', 'customers.user_id')
//                        ->join('branch', 'branch.id', '=', 'customers.branch')
//                        ->select('customers.*', 'users.username','branch.name')
//                        ->where('status', 1)
//                        ->get();

                    $customer = Customers::where('status','!=',1 )
                        ->join('users', 'users.id','=','customers.user_id')
                        ->join('branch', 'branch.id', '=', 'customers.branch')
                        ->select('users.*','customers.*','customers.id as ids', 'users.id as ides','branch.name')
                        ->where('customers.flag','!=',0)
                        ->where('branch', $persons->id)
                        ->get();

                    array_push($customerss,$customer);

                }

            }

            // the result is then flattened to get desired result

            $customers = array_flatten($customerss);

        }elseif ($access->hierachy == 'area office'){

            $are = Branch::where('id',$name->branch)
                ->first();

            $area = Branch::where('id',$name->branch)
                ->get();



            $branches = Branch::where('under',$are->id)
                ->where('hierachy','branch office')
                ->get() ;



            $hub_1 = Branch::where('under',$are->id)
                ->where('hierachy','hub 1 office')
                ->get() ;



            $branch = [];

            foreach ($hub_1 as $hub){

                $bra= Branch::where('under',$hub->id)
                    ->where('hierachy','branch office')
                    ->get();

                array_push($branch, $bra);

            }



            $people = [];

            array_push($people , $area, $branches );

            foreach ($branch as $bra1){

                array_push($people , $bra1 );

            }

            $customerss =[];

            foreach($people as $person){

                foreach ($person as $persons){

//                    $customer = Customers::where('branch', $persons->id )
//                        ->join('users', 'users.id', '=', 'customers.user_id')
//                        ->join('branch', 'branch.id', '=', 'customers.branch')
//                        ->select('customers.*', 'users.username','branch.name')
//                        ->where('status', 1)
//                        ->get();

                    $customer = Customers::where('status','!=',1 )
                        ->join('users', 'users.id','=','customers.user_id')
                        ->join('branch', 'branch.id', '=', 'customers.branch')
                        ->select('users.*','customers.*','customers.id as ids', 'users.id as ides','branch.name')
                        ->where('customers.flag','!=',0)
                        ->where('branch', $persons->id )
                        ->get();

                    array_push($customerss,$customer);

                }

            }

            $customers = array_flatten($customerss);

        }elseif ($access->hierachy == 'hub 1 office'){

            $hub = Branch::where('id',$name->branch)
                ->first();

            $hub_1 = Branch::where('id',$name->branch)
                ->get();

            $branches = Branch::where('under',$hub->id)
                ->where('hierachy','branch office')
                ->get() ;

            $people=[];

            array_push($people,$hub_1,$branches);

            $customerss =[];

            foreach($people as $person){

                foreach ($person as $persons){

//                    $customer = Customers::where('branch', $persons->id )
//                        ->join('users', 'users.id', '=', 'customers.user_id')
//                        ->join('branch', 'branch.id', '=', 'customers.branch')
//                        ->select('customers.*', 'users.username','branch.name')
//                        ->where('status', 1)
//                        ->get();

                    $customer = Customers::where('status','!=',1 )
                        ->join('users', 'users.id','=','customers.user_id')
                        ->join('branch', 'branch.id', '=', 'customers.branch')
                        ->select('users.*','customers.*','customers.id as ids', 'users.id as ides','branch.name')
                        ->where('customers.flag','!=',0)
                        ->where('branch', $persons->id )
                        ->get();

                    array_push($customerss,$customer);

                }

            }



            $customers = array_flatten($customerss);



        }elseif ($access->hierachy == 'hub 2 office'){

            $hub = Branch::where('id',$name->branch)
                ->first();

            $hub_2 = Branch::where('id',$name->branch)
                ->get();

            $branches = Branch::where('under',$hub->id)
                ->where('hierachy','branch office')
                ->get() ;

            $people=[];

            array_push($people,$hub_2,$branches);

            $customerss =[];

            foreach($people as $person){

                foreach ($person as $persons){

//                    $customer = Customers::where('branch', $persons->id )
//                        ->join('users', 'users.id', '=', 'customers.user_id')
//                        ->join('branch', 'branch.id', '=', 'customers.branch')
//                        ->select('customers.*', 'users.username','branch.name')
//                        ->where('status', 1)
//                        ->get();

                    $customer = Customers::where('status','!=',1 )
                        ->join('users', 'users.id','=','customers.user_id')
                        ->join('branch', 'branch.id', '=', 'customers.branch')
                        ->select('users.*','customers.*','customers.id as ids', 'users.id as ides','branch.name')
                        ->where('customers.flag','!=',0)
                        ->where('branch', $persons->id )
                        ->get();

                    array_push($customerss,$customer);

                }

            }

            $customers = array_flatten($customerss);


        }elseif ($access->hierachy == 'branch office'){

            $branch = Branch::where('id',$name->branch)
                ->first();

//            $customers = Customers::where('branch', $branch->id )
//                ->join('users', 'users.id', '=', 'customers.user_id')
//                ->join('branch', 'branch.id', '=', 'customers.branch')
//                ->select('customers.*', 'users.username','branch.name')
//                ->where('status', 1)
//                ->get();

            $customers = Customers::where('status','!=',1 )
                ->join('users', 'users.id','=','customers.user_id')
                ->join('branch', 'branch.id', '=', 'customers.branch')
                ->select('users.*','customers.*','customers.id as ids', 'users.id as ides','branch.name')
                ->where('customers.flag','!=',0)
                ->where('branch', $branch->id )
                ->get();

        }elseif ($access->hierachy == 'virtual branch'){

            $vir = Branch::where('id',$name->branch)
                ->first();

//            $customers = Customers::where('branch', $vir->id )
//                ->join('users', 'users.id', '=', 'customers.user_id')
//                ->join('branch', 'branch.id', '=', 'customers.branch')
//                ->select('customers.*', 'users.username','branch.name')
//                ->where('status', 1)
//                ->get();

            $customers = Customers::where('status','!=',1 )
                ->join('users', 'users.id','=','customers.user_id')
                ->join('branch', 'branch.id', '=', 'customers.branch')
                ->select('users.*','customers.*','customers.id as ids', 'users.id as ides','branch.name')
                ->where('customers.flag','!=',0)
                ->where('branch', '2' )
                ->get();

        }else{

            $customers = [];

        }














//        $customers = Customers::where('status','!=',1 )
//            ->join('users', 'users.id','=','customers.user_id')
//            ->select('users.*','customers.*','customers.id as ids', 'users.id as ides')
//            ->where('customers.flag','!=',0)
//            ->get();




        return view('admin/approvereg', compact("name",'customers','id','privillage'));

    }


    public function p_approve_account(){

        $id = request()->id;


        $customer = User::where('id',$id)->first();

        if( $customer->flag != 2 ){

            return response()->json(['message' => 'error']);

        }

        $customer->status = 1;


        if ($customer->save()) {

            Session::flash('delete', 'Congrats! Unit record saved');
            return redirect('/admin/approvereg/approve');

        }else{

            Session::flash('error', 'Sorry! Unit cant be deleted try again');
            return redirect('/admin/approvereg/error');

        }

    }

    public function p_deny_account(){

        $id = request()->id;

        $customer = User::where('id',$id)->first();

        $customer->status = 0;

        if ($customer->save()) {

            Session::flash('delete', 'Congrats! Unit record saved');
            return redirect('/admin/units');

        }else{

             Session::flash('error', 'Sorry! Unit cant be deleted try again');
            return redirect('/admin/units');

        }

    }


    public function g_editusers_virtual($id=null){

        $user = Auth::user();

        if(!$user){
            return redirect('admin/login');
        }

        $name = Admin::where("user_id",$user->id)
            ->first();

        $customers = Customers::where('users.flag','!=','0')
            ->join('users', 'users.id','=','customers.user_id')
            ->select('customers.*','users.username')
            ->where('customers.id', $id)
            ->first();

        $privillage = Units::where('id',$name->staff_unit_id)
            ->first();

        return view('admin/edituser', compact("name",'customers','id','privillage'));

    }

    public function g_editusers_app($id=null){

        $user = Auth::user();

        if(!$user){
            return redirect('admin/login');
        }

        $name = Admin::where("user_id",$user->id)
            ->first();

        $customers = Customers::where('users.flag','!=','0')
            ->join('users', 'users.id','=','customers.user_id')
            ->select('customers.*','users.username')
            ->where('customers.id', $id)
            ->first();

        $privillage = Units::where('id',$name->staff_unit_id)
            ->first();

        return view('admin/edituser2', compact("name",'customers','id','privillage'));

    }



    public function p_editusers_app(Request $request)
    {

        $id = $request->input("ids");

        if (empty($request->input("bet_id"))) {
            Session::flash('error', 'Bet9ja id is Empty');
            return back();
        }

        $customers = Customers::where('id', $id)
            ->first();

        if( $customers->branch == 'virtual branch' ){

            if (Customers::where("bet9ja_id", $request->input("bet_id"))->first()) {
                Session::flash('error', 'Bet9ja id Already Exist');
                return back();
            }

        }

        if (empty($request->input("email"))) {
            Session::flash('error', 'Email is Empty');
            return back();
        }

//        if (Customers::where("email", $request->input("email"))->first()) {
//            Session::flash('error', 'Email Already Exist');
//            return back();
//        }

        if (empty($request->input("phone"))) {
            Session::flash('error', 'Phone Id is Empty');
            return back();
        }

//        if (Customers::where("phone", $request->input("phone"))->first()) {
//            Session::flash('error', 'Phone Already Exist');
//            return back();
//        }

        if (empty($request->input("sname"))) {
            Session::flash('error', 'Surname is Empty');
            return back();
        }

        if (empty($request->input("fname"))) {
            Session::flash('error', 'First Name is Empty');
            return back();
        }

        if (empty($request->input("address"))) {
            Session::flash('error', 'Address is Empty');
            return back();
        }

        if (empty($request->input("dob"))) {
            Session::flash('error', 'Date of birth is empty');
            return back();
        }

        if (empty($request->input("gender"))) {
            Session::flash('error', 'Gender is Empty');
            return back();
        }

        if (empty($request->input("local"))) {
            Session::flash('error', 'Local Government is Empty');
            return back();
        }

        if (empty($request->input("state"))) {
            Session::flash('error', 'State is Empty');
            return back();
        }



        $customer = Customers::find($id);

        $customers = Customers::where('id', $id)
            ->first();

        $customer->surname = $request->input('sname');

        $customer->bet9ja_id = $request->input('bet_id');

        $customer->dob = $request->input('dob');

        $customer->firstname = $request->input('fname');

        $customer->email = $request->input('email');

        $customer->phone = $request->input('phone');

        $customer->gender = $request->input('gender');

        $customer->address = $request->input('address');

        $customer->street = $request->input('street');

        $customer->state = $request->input('state');

        $customer->lga = $request->input('local');

        $customer->flag = 1;


        $user = User::find( $customers->user_id);

        $user->flag = 2;


        if($customer->save()){

            if($user->save()){

                return redirect('admin/approvereg/edit');
            }else{
                Session::flash('error', 'Ooops! An error occured pls try agian later');
                return back();
            }
        }
        else{
            Session::flash('error', 'Ooops! An error occured pls try agian later');
            return back();
        }

    }

    public function p_editusers2_app(Request $request)
    {
if( User::where("username",$request->input("username"))->first()){
            Session::flash('error' , 'Username Already Exist');
            return back();
        }
        $id = $request->input("ids");

        if (empty($request->input("email"))) {
            Session::flash('error', 'Email is Empty');
            return back();
        }

        if (empty($request->input("phone"))) {
            Session::flash('error', 'Phone is Empty');
            return back();
        }

        $customer = Customers::find($id);

        $customer->email = $request->input('email');

        $customer->phone = $request->input('phone');

        if($customer->save()){


                return redirect('admin/customers/edit');

        }
        else{
            Session::flash('error', 'Ooops! An error occured pls try agian later');
            return back();
        }

    }

    public function p_delete_user(Request $request){

        $id = $request->input("id");
        $customer = Customers::find($id);

        $customer->flag = 0;

        $customers = Customers::where('id', $id)
            ->first();

        $user = User::find( $customers->user_id);

        $user->flag = 0;

        if($customer->save()){

            if($user->save()){

                return redirect('admin/customers/delete');

            }else{

                Session::flash('error', 'Ooops! An error occured pls try agian later');

                return back();
            }
        }else{

            Session::flash('error', 'Ooops! An error occured pls try agian later');

            return back();
        }

    }

    public function g_change_password(){

        $user = Auth::user();
        if(!$user){
            return redirect('betabet/login');
        }

        $name = Customers::where("user_id",$user->id)->first();


        return view('betabet/change_password', compact("name"));

    }

    public function p_change_password(Request $request){

        if(empty($request->input("old_pass"))  ){
            Session::flash('error', 'Old Password is Empty');
            return back();
        }

        $database_pass = Auth::user()->password;

        $old_pass = $request->input("old_pass");

        if( Hash::check($old_pass ,$database_pass ) ){



        }else{
            Session::flash('error', 'Old password is incorrect');

            return back();
        }

        if(empty($request->input("new_pass"))  ){
            Session::flash('error', 'New Password is Empty');
            return back();
        }

        if(empty($request->input("re_pass"))  ){
            Session::flash('error', 'Re-Enter Password is Empty');
            return back();
        }

        if( $request->input('new_pass') != $request->input('re_pass') ){
            Session::flash('error', 'Passwords Don\'t Match');
            return back();
        }


        if( !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/', $request->input('new_pass')) ){
            Session::flash('error', 'Passwords Must be 6 character long, with atleast one capital letter, one number, and one symbol');
            return back();
        }


        $user = Auth::user();

        $user->password = bcrypt($request->input('new_pass'));


        if($user->save()){

                Session::flash('success', 'Congrats! Password Have been changed');
                return back();
            }
            else{
                Session::flash('error', 'Ooops! An error occured pls try agian later');
                return back();
            }


    }

}
