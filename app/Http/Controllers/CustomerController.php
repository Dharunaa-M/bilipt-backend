<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Auth;
class CustomerController extends Controller
{
    public function insertCustomer(Request $request)
{
    $customer = Customer::create([
        'customer_id' => Auth::user()->id,
        'customer_name'  => $request->customer_name,
        'customer_email' => $request->customer_email,
        'customer_phone' => $request->customer_phone,
        'customer_address' => $request->customer_address,
    ]);

    //return response()->json(['message' => 'Customer added successfully', 'data' => $customer]);
}
}
