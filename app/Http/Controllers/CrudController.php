<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Crud;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

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
        $viewPatients = Crud::all();
        return view('ds.pl', ['all_patients' => $viewPatients]);
    }

    public function add_patient()
    {
        return view('ds.add_patient');
    }

    public function patient_info($id)
    {
        $patient = Crud::findOrFail($id);
        return view('ds.patient_info', ['patient' => $patient]);
    }

    public function calendar()
    {
        return view('ds.calendar');
    }
    public function vg()
    {
        return view('ds.vg');
    }
    public function apt()
    {
        return view('ds.apt');
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
            'patient_name' => 'required|string|max:255',
            'age' => 'required|integer',
            'phone' => 'required|string|max:15',
            'doctor' => 'required|string|max:255',
            'service' => 'required|string|max:255',
        ]);

        $currentYear = Carbon::now()->format('y');

        // Get the latest patient record to determine the last custom ID
        $latestPatient = Crud::orderBy('_id', 'desc')->first();

        // Determine the next custom ID
        if ($latestPatient && $latestPatient->patient_id) {
            $lastIdParts = explode('-', $latestPatient->patient_id);
            $lastYear = $lastIdParts[1]; // Adjusted index because of the letter
            $lastNumber = (int) $lastIdParts[2]; // Adjusted index because of the letter

            if ($lastYear == $currentYear) {
                $newNumber = $lastNumber + 1;
            } else {
                $newNumber = 1; // Reset the number for the new year
            }
        } else {
            $newNumber = 1; // No existing records, start with 1
        }

        // Add the letter 'A' in front of the custom ID
        $newCustomId = sprintf('A-%s-%04d', $currentYear, $newNumber);

        // Create a new patient record with the custom ID
        $crud = new Crud();
        $crud->patient_id = $newCustomId;
        $crud->patient_name = $validatedData['patient_name'];
        $crud->age = $validatedData['age'];
        $crud->phone = $validatedData['phone'];
        $crud->doctor = $validatedData['doctor'];
        $crud->service = $validatedData['service'];
        $crud->save();

        return redirect()->route('patient_list')->with('message', 'Patient Added Successfully!');
    }



    /**
     * Display the specified resource.
     */
    public function show(Crud $Crud)
    {
        //
    }
    public function edit_patient($id)
    {
        $crud = Crud::find($id);
        return view('ds.edit_patient', ['value' => $crud]);
    }
    public function edit(Request $request)
    {
        $crud = Crud::find($request->id);

        // Check if the patient record is found
        if (!$crud) {
            return redirect()->route('patient_list')->with('error', 'Patient not found!');
        }

        // Update patient information
        $crud->patient_name = $request->patient_name;
        $crud->age = $request->age;
        $crud->phone = $request->phone;
        $crud->doctor = $request->doctor;
        $crud->service = $request->service;

        $crud->save();

        return redirect()->route('patient_list')->with('message', 'Patient Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Crud $Crud)
    {
        //
    }
}
