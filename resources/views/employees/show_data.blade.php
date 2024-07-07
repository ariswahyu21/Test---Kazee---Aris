<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Karyawan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Field</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Value</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Nomor Induk Karyawan</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->nomor_induk }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Nama Karyawan</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->nama_karyawan }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">No KTP</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->no_ktp }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Alamat</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->alamat }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Tempat Lahir</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Tanggal Lahir</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">No Telepon</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->no_telepon }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Jenis Kelamin</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Agama</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->agama }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Status Pernikahan</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->status_pernikahan }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Jenjang Pendidikan</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->jenjang_pendidikan }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Tahun Lulus</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->tahun_lulus }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Tahun Bergabung</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->tahun_bergabung }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Lama Bekerja</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->lama_bekerja }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Status Karyawan</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->status_karyawan }}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-bold">Departemen</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->department->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex justify-end mt-4">
                        <a href="{{ route('employees.index') }}" class="px-4 py-2 bg-gray-50 hover:bg-gray-100 text-indigo-600 hover:text-indigo-900">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>