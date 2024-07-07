<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Support\Facades\Log;
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

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $departments = Department::all(); // Ambil semua data departemen

        return view('employees.edit_data', compact('employee', 'departments'));
    }

    public function update(Request $request, $id)
    {
        Log::info('Update request received for employee ID: ' . $id);

        $request->validate([
            'nomor_induk' => 'required|unique:employees,nomor_induk,' . $id,
            'nama_karyawan' => 'required|string|max:255',
            'no_ktp' => 'required|string|size:16',
            'alamat' => 'required|string|max:100',
            'tempat_lahir' => 'required|string|max:25',
            'tanggal_lahir' => 'required|date',
            'no_telepon' => 'required|string|max:15',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'agama' => 'required|string',
            'status_pernikahan' => 'required|string',
            'jenjang_pendidikan' => 'required|string',
            'tahun_lulus' => 'required|numeric|between:1960,2099',
            'tahun_bergabung' => 'required|numeric|between:1960,2099',
            'lama_bekerja' => 'required|numeric',
            'department_id' => 'required|exists:departments,id',
        ]);

        try {
            $employee = Employee::findOrFail($id);
            Log::info('Employee found: ', $employee->toArray());

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
            $employee->department_id = $request->department_id;

            $employee->save();

            Log::info('Employee updated successfully: ', $employee->toArray());

            return redirect()->route('employees.index')->with('update', 'Data karyawan berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('Failed to update employee: ', ['error' => $e->getMessage()]);

            return redirect()->route('employees.edit', $id)->with('error', 'Gagal mengupdate karyawan. Silakan coba lagi.');
        }
    }



    public function show($id)
    {
        $employee = Employee::with('department')->findOrFail($id);

        return view('employees.show_data', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('delete', 'Karyawan berhasil dihapus.');
    }
}
