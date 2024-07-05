<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ds.index');
    }

    public function pl()
    {
        return view('ds.pl');
    }

    public function add_patient()
    {
        return view('ds.add_patient');
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
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);
        // Debugging
        Log::info('Validated Data:', $validatedData);


        $crud = new Crud();
        $crud->first_name = $validatedData['first_name'];
        $crud->last_name = $validatedData['last_name'];
        $crud->phone = $validatedData['phone'];

        $crud->save();

        return redirect()->route('index')->with('message', 'Patient Added Successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Crud $Crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crud $Crud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crud $Crud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crud $Crud)
    {
        //
    }
}
