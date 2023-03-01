<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view ('CustomerForm');
    }


    public function store(Request $request)
    {
        // validate input data
        // $validatedData = $request->validate([
        //     'customer_name' => 'required|string|max:80',
        //     'email' => 'required|email|unique:customer|max:80',
        //     'gender' => 'nullable|in:male,female,other',
        //     'Address' => 'nullable|string',
        //     'DOB' => 'nullable|date',
        //     'password' => 'required|string',
        // ]);
        echo "<pre>";
            print_r($request->all());

            $customer = new Customer;
            $customer->customer_name=$request['name'];
            $customer->email= $request['eMail'];
            $customer->password= md5($request['password']);
            $customer->address= $request['Address'];
            $customer->gender= $request['gender'];
            $customer->dob= $request['dob'];
            $customer->save();
            
            


            // if($validatedData==true) {
            //     echo "<pre>";
            //         print_r($request->all());
            //     }
            //     else {
            //         echo "Validation failed";}
        // create new customer record
        // $customer = Customer::saveCustomer(
        //     $validatedData['customer_name'],
        //     $validatedData['email'],
        //     $validatedData['gender'],
        //     $validatedData['Address'],
        //     $validatedData['DOB'],
        //     $validatedData['password']
        // );
    
        // // redirect to login page or wherever you want to send the user
        // return redirect()->route('login');
    }
       



//     public function store(Request $request)
// {
//     // validate input data
//     $validatedData = $request->validate([
//         'customer_name' => 'required|string|max:80',
//         'email' => 'required|email|unique:customer|max:80',
//         'gender' => 'nullable|in:male,female,other',
//         'Address' => 'nullable|string',
//         'DOB' => 'nullable|date',
//         'password' => 'required|string',
//     ]);

//    public create new customer record
//     $customer = new Customer;
//     $customer->customer_name = $validatedData['customer_name'];
//     $customer->email = $validatedData['email'];
//     $customer->gender = $validatedData['gender'];
//     if (array_key_exists('Address', $validatedData)) {
//         $customer->Address = $validatedData['Address'];
//     }
//     if (array_key_exists('DOB', $validatedData)) {
//         $customer->DOB = $validatedData['DOB'];
//     }
//     $customer->DOB = $validatedData['DOB'];
//     $customer->password = bcrypt($validatedData['password']);
//     $customer->save();

//     redirect to login page or wherever you want to send the user
//     return redirect()->route('login');
// }

}
