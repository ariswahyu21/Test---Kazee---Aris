<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all(); // Mengambil semua data karyawan
        return view('dashboard', compact('employees')); // Mengirim data ke view
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_induk' => 'required|max:16',
            'nama_karyawan' => 'required|string|max:255',
            'no_ktp' => 'nullable|digits:16',
            'alamat' => 'nullable|string|max:255',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'no_telepon' => 'nullable|string|max:15',
            'jenis_kelamin' => 'nullable|string|max:255',
            'agama' => 'nullable|string|max:255',
            'status_pernikahan' => 'nullable|string|max:255',
            'jenjang_pendidikan' => 'nullable|string|max:255',
            'tahun_lulus' => 'nullable|digits:4',
            'tahun_bergabung' => 'nullable|digits:4',
            'lama_bekerja' => 'nullable|integer|max:100',
            'status_karyawan' => 'nullable|string|max:255',
        ]);

        Employee::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Employee created successfully.');
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'position' => 'required',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }
}
