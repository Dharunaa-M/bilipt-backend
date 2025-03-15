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
public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $request->validate([
            'customer_name' => 'sometimes|string|max:255',
            'customer_email' => 'sometimes|email|unique:customers,customer_email,'.$id.',customer_id',
            'customer_phone' => 'sometimes|string|max:15',
            'customer_address' => 'sometimes|string',
        ]);

        $customer->update($request->all());

        //return response()->json(['message' => 'Customer updated successfully', 'customer' => $customer], 200);
    }
}
