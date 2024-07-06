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
        return view('employees.edit_data', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'nomor_induk' => 'required|max:16',
            'nama_karyawan' => 'required|string|max:255',
            'no_ktp' => 'required|string|size:16',
            'alamat' => 'required|string|max:100',
            'tempat_lahir' => 'required|string|max:25',
            'tanggal_lahir' => 'required|date',
            'no_telepon' => 'required|string|max:15',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'agama' => 'required|string',
            'status_pernikahan' => 'required|string',
            'jenjang_pendidikan' => 'required|string',
            'tahun_lulus' => 'required|integer|between:1960,2099',
            'tahun_bergabung' => 'required|integer|between:1960,2099',
            'lama_bekerja' => 'required|integer',
            'status_karyawan' => 'required|string'
        ]);

        $employee->update($validatedData);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }
}
