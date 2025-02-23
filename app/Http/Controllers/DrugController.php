<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    // Display a listing of the drugs
    public function index()
    {
        $drugs = Drug::all();
        return response()->json($drugs);
    }

    // Show the form for creating a new drug
    public function create()
    {
        // Return a view for creating a drug (if using views)
    }

    // Store a newly created drug in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'dosage' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'manufacturer' => 'nullable|string',
        ]);

        $drug = Drug::create($request->all());
        return response()->json($drug, 201);
    }

    // Display the specified drug
    public function show($id)
    {
        $drug = Drug::findOrFail($id);
        return response()->json($drug);
    }

    // Show the form for editing the specified drug
    public function edit($id)
    {
        // Return a view for editing the drug (if using views)
    }

    // Update the specified drug in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'dosage' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'manufacturer' => 'nullable|string',
        ]);

        $drug = Drug::findOrFail($id);
        $drug->update($request->all());
        return response()->json($drug);
    }

    // Remove the specified drug from storage
    public function destroy($id)
    {
        $drug = Drug::findOrFail($id);
        $drug->delete();
        return response()->json(null, 204);
    }
}