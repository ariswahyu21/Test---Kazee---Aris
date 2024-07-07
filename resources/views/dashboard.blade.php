<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manajemen Data Karyawan
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Add New Employee Button -->
                    <div class="mb-4 flex justify-between items-center">
                        <a href="{{ route('employees.create') }}" class="px-6 py-3 bg-gray-50 inline-block">
                            Tambah Data Karyawan
                        </a>
                        <div>
                            <form method="GET" action="{{ route('employees.index') }}">
                                <label for="per_page" class="text-sm text-gray-700 mr-2">Tampilkan:</label>
                                <select name="per_page" id="per_page" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" onchange="this.form.submit()">
                                    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                                    <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                                    <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                                    <option value="all" {{ request('per_page') == 'all' ? 'selected' : '' }}>Semua</option>
                                </select>
                            </form>
                        </div>
                    </div>

                    <!-- Content of Employee Index -->
                    <div class="overflow-x-auto">
                        <table class="w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Karyawan</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Departemen</th>
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
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $employee->department->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $employee->status_karyawan }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $employee->tahun_bergabung }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('employees.show', $employee->id) }}" class="inline-flex items-center px-2 py-1 border border-blue-600 rounded-md text-blue-600 hover:bg-blue-600 hover:text-white" title="Lihat">
                                            <i class="las la-eye"></i>
                                        </a>

                                        <a href="{{ route('employees.edit', $employee->id) }}" class="inline-flex items-center px-2 py-1 border border-indigo-600 rounded-md text-indigo-600 hover:bg-indigo-600 hover:text-white" title="Edit">
                                            <i class="las la-edit"></i>
                                        </a>

                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirmDelete(event)" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center px-2 py-1 border border-red-600 rounded-md text-red-600 hover:bg-red-600 hover:text-white" title="Delete">
                                                <i class="las la-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Links -->
                    @if(request('per_page') != 'all')
                    <div class="mt-4">
                        {{ $employees->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'Data berhasil ditambahkan',
                showConfirmButton: false,
                timer: 1000,
                width: 600,
            });
        });
    </script>
    @endif
    @if(session('update'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'Data berhasil diperbarui',
                showConfirmButton: false,
                timer: 1000,
                width: 600,
            });
        });
    </script>
    @endif
    @if(session('delete'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'Data berhasill dihapus',
                showConfirmButton: false,
                timer: 1000,
                width: 600,
            });
        });
    </script>
    @endif
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