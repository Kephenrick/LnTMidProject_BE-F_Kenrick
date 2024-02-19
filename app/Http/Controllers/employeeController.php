<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class employeeController extends Controller
{
    public function AddEmployee () {
        return view('addEmployee');
    }

    public function StoreEmployee (Request $req) {
        Employee::create([
            'employeeName' => $req->namaEmployee,
            'age' => $req->umurEmployee,
            'address' => $req->alamatEmployee,
            'phoneNumber' => $req->noTelpEmployee,
        ]);

        return redirect('/');
    }

    public function ViewEmployee () {
        $emp = Employee::all();

        return view('welcome')->with('karyawan', $emp);
    }

    public function UpdateEmployee ($id) {
        $emp = Employee::findOrFail($id);

        return view('updateEmployee')->with('karyawan', $emp);
    }

    public function UpdateSave ($id, Request $req) {
        $emp = Employee::findOrFail($id)->update([
            'employeeName' => $req->namaEmployee,
            'age' => $req->umurEmployee,
            'address' => $req->alamatEmployee,
            'phoneNumber' => $req->noTelpEmployee,
        ]);

        return redirect('/');
    }

    public function DeleteEmployee ($id) {
        $emp = Employee::findOrFail($id);

        $emp->delete();

        return redirect('/')->with('status', "Data deleted successfully");
    }
}
