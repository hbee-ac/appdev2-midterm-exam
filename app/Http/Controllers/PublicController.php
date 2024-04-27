<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $data = [
        [
            'id' => 1,
            'name' => 'image 1',
        ],
        [
            'id' => 2,
            'name' => 'image 2',
        ],
    ];
    public function index()
    {
        return response()->json($this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Upload a image using public disk driver"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "Display a image using public disk driver with ID: " . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Update a image using public disk driver with ID: " . $id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Delete a image using public disk driver with ID: " . $id
        ]);
    }
}
