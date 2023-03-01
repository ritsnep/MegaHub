<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table="customer";
    protected $primarykey="customer_id";

//  public static function saveCustomer($customer_name, $email, $gender, $address, $dob, $password)
//     {
//         $customer = new self;
//         $customer->customer_name = $customer_name;
//         $customer->email = $email;
//         $customer->gender = $gender;
//         $customer->Address = $address;
//         $customer->DOB = $dob;
//         $customer->password = bcrypt($password);
//         $customer->save();
        
//         return $customer;
//     }



//     public function save(array $options = [])
// {
//     $data = [
//         'customer_name' => $this->customer_name,
//         'email' => $this->email,
//         'gender' => $this->gender,
//         'Address' => $this->Address,
//         'DOB' => $this->DOB,
//         'password' => $this->password
//     ];

//     DB::table('customers')->insert($data);
// }
}
