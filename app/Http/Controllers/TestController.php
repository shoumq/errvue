<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Validation\ValidationException;
use Mockery\Exception;

class TestController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        return Inertia::render('List', compact('products'));
    }

    public function login_for_first_page()
    {
        return Inertia::render('Login1');
    }

    public function login_for_second_page()
    {
        return Inertia::render('Login2');
    }

    public function login_for_second_page_post(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return response()->json($product);
//        if ($request->description == null) {
//            throw ValidationException::withMessages(['description' => 'description is incorrect']);
//        } else {
//            return "Success!";
//        }
    }

    public function login_for_third_page()
    {
        return Inertia::render('Login3');
    }

    public function login_for_fourth_page()
    {
        return Inertia::render('Login4');
    }

    public function login_for_fourth_page_post(Request $request)
    {
        try {
            $product = new Product();
            $product->title = $request->title;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->save();

            return response()->json($product);
        } catch (Exception $exception) {
            return response()->json(['Message' => '400 error'], 400);
        }
    }

    public function login_for_fifth_page()
    {
        return Inertia::render('Login5');
    }

    public function login_for_fifth_page_post(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
//        $product->save();
    }

    public function login_for_sixth_page()
    {
        return Inertia::render('Login6');
    }

    public function login_for_sixth_page_post()
    {
        return abort(500, 'backend error');
    }

    public function login_for_seventh_page()
    {
        return Inertia::render('Login7');
    }

    public function login_for_seventh_page_post(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return $product;
    }
}
