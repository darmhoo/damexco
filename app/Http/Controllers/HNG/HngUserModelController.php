<?php

namespace App\Http\Controllers\HNG;

use App\Http\Controllers\Controller;
use App\Models\HngUserModel;
use Illuminate\Http\Request;

class HngUserModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = HngUserModel::all();
        return response()->json([
            "person" => $data,
            "message" => "Person fetched successfully"

        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string',
            'state' => 'sometimes|string',
            'age' => "sometimes|string"
        ]);

        $user = new HngUserModel($validated);
        $user->save();
        return response()->json([
            "person" => $user,
            "message" => "Person created successfully"

        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // dd($id);
        $hngUserModel = HngUserModel::where('id', $id)->first();

        return response()->json([
            "person" => $hngUserModel->toArray(),
            "message" => "Fetch successfully"
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HngUserModel $hngUserModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string',
            'state' => 'sometimes|string',
            'age' => "sometimes|string"
        ]);
        $hngUserModel = HngUserModel::where('id', $id)->first();

        $resp = $hngUserModel->update($validated);
        return response()->json([
            "person" => $hngUserModel,
            "message" => "Person updated successfully"
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $hngUserModel = HngUserModel::where('id', $id)->first();

        $hngUserModel->delete();
        return response()->json(["message" => "deleted successfully"], 200);
    }
}
