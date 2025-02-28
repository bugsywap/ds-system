<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Crud;
use App\Models\NewPatient;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CrudController extends Controller
{
    public function index()
    {

        return view('ds.index');
    }

    public function pl()
    {
        $viewPatients = Crud::all();
        $viewNew = NewPatient::all();
        return view('ds.pl', [
            'all_patients' => $viewPatients,
            'new_patients' => $viewNew,
        ]);
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

    public function store(Request $request)
    {
        // Validate individual fields
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:1',
            'age' => 'required|integer',
            'phone' => 'required|string|max:15',
            'doctor' => 'required|string|max:255',
            'service' => 'required|string|max:255',
        ]);

        // Function to capitalize the first letter of each part of the name
        function capitalizeName($name)
        {
            return ucwords(strtolower($name));
        }

        // Concatenate first name, last name, and middle initial with proper capitalization
        $patientName = capitalizeName($validatedData['last_name']) . ', ' . capitalizeName($validatedData['first_name']) . ' ' . strtoupper(substr($validatedData['middle_name'], 0, 1));

        // Get the current year
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

        $newCustomId = sprintf('A-%s-%04d', $currentYear, $newNumber);

        // Get the latest patient record to determine the last custom ID
        $latestPatient_New = NewPatient::orderBy('_id', 'desc')->first();


        // Determine the next custom ID
        if ($latestPatient_New && $latestPatient_New->patient_id) {
            $lastIdParts_New = explode('-', $latestPatient_New->patient_id);
            $lastYear_New = $lastIdParts_New[1]; // Adjusted index because of the letter
            $lastNumber_New = (int) $lastIdParts_New[2]; // Adjusted index because of the letter

            if ($lastYear_New == $currentYear) {
                $newNumber_New = $lastNumber_New + 1;
            } else {
                $newNumber_New = 1; // Reset the number for the new year
            }
        } else {
            $newNumber_New = 1; // No existing records, start with 1
        }

        // Add the letter 'A' in front of the custom ID
        $newCustomId_New = sprintf('N-%s-%04d', $currentYear, $newNumber_New);

        // Create a new patient record with the custom ID
        $crud = new Crud();
        $crud->patient_id = $newCustomId;
        $crud->patient_name = $patientName;
        $crud->age = $validatedData['age'];
        $crud->phone = $validatedData['phone'];
        $crud->doctor = $validatedData['doctor'];
        $crud->service = $validatedData['service'];
        $crud->save();

        $newPatient = new NewPatient();
        $newPatient->patient_id = $newCustomId_New;
        $newPatient->patient_name = $patientName;
        $newPatient->age = $validatedData['age'];
        $newPatient->phone = $validatedData['phone'];
        $newPatient->doctor = $validatedData['doctor'];
        $newPatient->service = $validatedData['service'];
        $newPatient->save();

        return redirect()->route('patient_list')->with('message', 'Patient Added Successfully!');
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
}
