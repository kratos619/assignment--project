<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //

    public function store(Request $request)
    {

        $validatedData = Validator::make(
            $request->all(),
            [
                'package_type' => 'required',
                'field_of_text' => 'required',
                'number_of_word' => 'required',
                'type_duration' => 'required',
                'discount' => 'required',
                'complementry' => 'required',
                'name' => 'required',
                'email' => 'required',
            ]
        );
        if ($validatedData->fails()) {
            return view('welcome')->withErrors($validatedData->getMessageBag());
            // return redirect()->back()->withErrors($validatedData->errors());
        } else {

            Product::create($request->all());
            return redirect('/')->with('message', "entry added");
        }
    }
}
