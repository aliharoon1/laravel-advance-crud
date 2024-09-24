<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormFieldsController extends Controller
{
    public function phoneIndex()
    {
        return view('form-fields.phone');
    }
    public function storePhone(Request $request)
    {
        $request->validate([
            'phone' => 'phone:AUTO',
        ]);

        dd($request->phone);

        return 'Valid phone number';
    }
}
