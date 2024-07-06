<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Menajemen Data Karyawan
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Add New Employee Button -->
                    <div class="mb-4">
                        <a href="{{ route('employees.create') }}" class="px-6 py-3 bg-gray-50 inline-block">
                            Tambah Data Karyawan
                        </a>
                    </div>

                    <!-- Content of Employee Index -->
                    <div class="overflow-x-auto">
                        <table class="w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIK</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No Telp</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status Karyawan</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun Bergabung</th>
                                    <th class="px-6 py-3 bg-gray-50">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($employees as $employee)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $employee->nomor_induk }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $employee->nama_karyawan }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $employee->no_telepon }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $employee->status_karyawan }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $employee->tahun_bergabung }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('employees.show', $employee->id) }}" class="text-blue-600 hover:text-blue-900">Lihat</a>
                                        <a href="{{ route('employees.edit', $employee->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirmDelete(event)" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(event) {
            event.preventDefault();
            const form = event.target;
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda akan menghapus data karyawan tersebut!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batalkan'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        }
    </script>
</x-app-layout>