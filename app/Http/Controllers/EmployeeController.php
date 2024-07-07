<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10); // Default per_page to 10
        if ($perPage == 'all') {
            $employees = Employee::all(); // Retrieve all records
        } else {
            $employees = Employee::paginate((int)$perPage); // Paginate based on per_page value
        }

        return view('dashboard', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('employees.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_induk' => 'required|unique:employees',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        try {
            $employee = new Employee;
            $employee->nomor_induk = $request->nomor_induk;
            $employee->nama_karyawan = $request->nama_karyawan;
            $employee->no_ktp = $request->no_ktp;
            $employee->alamat = $request->alamat;
            $employee->tempat_lahir = $request->tempat_lahir;
            $employee->tanggal_lahir = $request->tanggal_lahir;
            $employee->no_telepon = $request->no_telepon;
            $employee->jenis_kelamin = $request->jenis_kelamin;
            $employee->agama = $request->agama;
            $employee->status_pernikahan = $request->status_pernikahan;
            $employee->jenjang_pendidikan = $request->jenjang_pendidikan;
            $employee->tahun_lulus = $request->tahun_lulus;
            $employee->tahun_bergabung = $request->tahun_bergabung;
            $employee->lama_bekerja = $request->lama_bekerja;
            $employee->status_karyawan = $request->status_karyawan;
            $employee->department_id = $request->department_id; // Pastikan Anda memiliki field ini di form dan tabel employees
            $employee->save();

            return redirect()->route('employees.index')
                ->with('success', 'Data karyawan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('employees.create')
                ->with('error', 'Gagal menambahkan karyawan. Data dengan nomor induk tersebut sudah ada.');
        }
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

        return redirect()->route('employees.index')
            ->with('update', 'Karyawan berhasil diubah.');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show_data', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('delete', 'Karyawan berhasil dihapus.');
    }
}
