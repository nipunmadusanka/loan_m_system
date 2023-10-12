<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Payment;
use App\Models\User;
use App\Models\userdatas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class userdata extends Controller
{

    public function index() {
        return view('pages.login.index');
    }

    public function dashboard() {

    return view('pages.viewdata.viewdata');
    }

    public function viewloan(){
        $result1 = Customer::all();
        return view('pages.viewloan.viewloan', ['result1' => $result1]);
    }

    public function viewcustomers(){
        $result = Customer::all();
        return view('pages.viewCustomers.viewCustomers', ['result' => $result]);
    }

    public function userRegister (Request $request){
     $request->validate([
            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required',
        ]);

        $pro = new User();
       $pro->name = $request->input('name');
       $pro->email = $request->input('email');
       $pro->password = Hash::make($request->input('password'));

       $pro->save();

        return redirect('/')->with('success', 'User registration completed successfully');
    }

    public function customerLoan(Request $request){
      $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phonenumber' => 'required',
        'interest' => 'required',
        'installment' => 'required',
        'amount' => 'required',
       ]);

       $pro = new Customer();
       $pro->name = $request->input('name');
       $pro->email = $request->input('email');
       $pro->phonenumber = $request->input('phonenumber');
       $pro->interest = $request->input('interest');
       $pro->installment = $request->input('installment');
       $pro->amount = $request->input('amount');

       $pro->save();

       return redirect('/dashboard')->with('success', 'Added new Customer loan successfully');
    }

    public function customerpayment(Request $request){
        $data = $request->validate([
        'cusId' => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'phonenumber' => 'required',
        'interest_rate' => 'required',
        'installment' => 'required',
        'amount' => 'required',
        ]);

        $cID = $request->input('cusId');
        $newamount = $request->input('amount');
        $oldamount = $request->input('amountOld');
        $drivervalue = $request->input('interest_rate');

        $pro = new Payment();
        $pro->cusId = $request->input('cusId');
       $pro->name = $request->input('name');
       $pro->email = $request->input('email');
       $pro->phonenumber = $request->input('phonenumber');
       $pro->interest = $request->input('interest_rate');
       $pro->installment = $request->input('installment');
       $pro->amount = $request->input('amount');

       $pro->save();

       $new = intval($newamount);
       $old = intval($oldamount);
       $percentdiff = intval($drivervalue);


       $amount = DB::select('select amount from customers where id = ?', [$cID]);

        $old *= (1 + $percentdiff / 100);
        $a = $old - $new;
        // dd($a);

        $results = DB::update('update customers set amount = ? where id = ?', [$a, $cID]);

        return redirect('/viewcustomers')->with('success', 'Added Customer loan payment successfully');
    }

    public function viewhistry($id){
        $paymentdata = DB::select('select * from payments where cusId = ?', [$id]);
        return view('pages.viewloan.viewlhistry', ['paymentdata' => $paymentdata]);
    }

    public function login(Request $request){
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

            if(Auth::attempt($credentials)){
                return redirect('/dashboard');
            };

            return redirect('/')->with('success', 'Your login not valid');
    }


    public function logout(){

        Session::flush();

        Auth::logout();

        return Redirect('/');
    }

    public function store(Request $request)
    {
        User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password
        ]);
        userdatas::create([
            'phoneNumber' => $request->phone,
            'address' => $request->address
        ]);

        return redirect('/');
    }
}
