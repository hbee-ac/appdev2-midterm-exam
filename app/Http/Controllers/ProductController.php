<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        [
            'id' => 1,
            'name' => 'shoes',
        ],
        [
            'id' => 2,
            'name' => 'pants',
        ],
        [
            'id' => 3,
            'name' => 'shirts',
        ],
    ];
    public function index()
    {
        return response()->json($this->products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Product created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "Display product with ID: " . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " Updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " Deleted successfully"
        ]);
    }

    public function uploadImageLocal(Request $request)
    {
        if ($request->hasFile('image')){
            Storage::disk('local')->put('/', $request.file('image'));
            return "Image successfully stored in LOCAL disk driver";
        }
        return "No image uploaded";
    }

    public function uploadImagePublic(Request $request)
    {
        if ($request->hasFile('image')){
            Storage::disk('public')->put('/', $request.file('image'));
            return "Image successfully stored in PUBLIC disk driver";
        } 
        return "No image uploaded";
    }
}
