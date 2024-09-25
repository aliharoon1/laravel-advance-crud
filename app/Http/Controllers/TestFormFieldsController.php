<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormFieldsController extends Controller
{
    public function indexPhone()
    {
        return view('form-fields.phone');
    }
    public function storePhone(Request $request)
    {
        $request->validate([
            'phone' => 'phone',
        ]);

        dd($request->phone);

        return 'Valid phone number';
    }
}
