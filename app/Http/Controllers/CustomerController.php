<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function search(Request $request)
    {
        $this->validate($request, [
            'nis' => 'required'
        ]);

        $customer = Customer::where('nis', $request->nis)->first();
        if ($customer) {
            return response()->json([
                'status' => 'success',
                'data' => $customer
            ], 200);
        }
        return response()->json([
            'status' => 'failed',
            'data' => []
        ]);
    }
}
