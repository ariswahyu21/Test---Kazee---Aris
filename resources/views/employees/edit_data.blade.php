<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Karyawan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Employee Form -->
                    <form method="POST" action="{{ route('employees.update', $employee->id) }}" id="edit-form">
                        @csrf
                        @method('PUT')

                        <!-- Nomor Induk Karyawan -->
                        <div class="mt-4">
                            <label for="nomor_induk" class="block font-medium text-sm text-gray-700">{{ __('Nomor Induk Karyawan') }}</label>
                            <input id="nomor_induk" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="nomor_induk" maxlength="16" value="{{ old('nomor_induk', $employee->nomor_induk) }}" required autofocus />
                        </div>

                        <!-- Nama Karyawan -->
                        <div class="mt-4">
                            <label for="nama_karyawan" class="block font-medium text-sm text-gray-700">{{ __('Nama Karyawan') }}</label>
                            <input id="nama_karyawan" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="nama_karyawan" value="{{ old('nama_karyawan', $employee->nama_karyawan) }}" required />
                        </div>

                        <!-- No KTP -->
                        <div class="mt-4">
                            <label for="no_ktp" class="block font-medium text-sm text-gray-700">{{ __('No KTP') }}</label>
                            <input id="no_ktp" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="no_ktp" value="{{ old('no_ktp', $employee->no_ktp) }}" required />
                        </div>

                        <!-- Alamat -->
                        <div class="mt-4">
                            <label for="alamat" class="block font-medium text-sm text-gray-700">{{ __('Alamat') }}</label>
                            <input id="alamat" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="alamat" value="{{ old('alamat', $employee->alamat) }}" required />
                        </div>

                        <!-- Tempat Lahir -->
                        <div class="mt-4">
                            <label for="tempat_lahir" class="block font-medium text-sm text-gray-700">{{ __('Tempat Lahir') }}</label>
                            <input id="tempat_lahir" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $employee->tempat_lahir) }}" required />
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="mt-4">
                            <label for="tanggal_lahir" class="block font-medium text-sm text-gray-700">{{ __('Tanggal Lahir') }}</label>
                            <input id="tanggal_lahir" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}" required />
                        </div>

                        <!-- No Telepon -->
                        <div class="mt-4">
                            <label for="no_telepon" class="block font-medium text-sm text-gray-700">{{ __('No Telepon') }}</label>
                            <input id="no_telepon" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="no_telepon" value="{{ old('no_telepon', $employee->no_telepon) }}" required />
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="mt-4">
                            <label for="jenis_kelamin" class="block font-medium text-sm text-gray-700">{{ __('Jenis Kelamin') }}</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="Laki-laki" {{ $employee->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $employee->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <!-- Agama -->
                        <div class="mt-4">
                            <label for="agama" class="block font-medium text-sm text-gray-700">{{ __('Agama') }}</label>
                            <select id="agama" name="agama" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="Islam" {{ $employee->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $employee->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Hindu" {{ $employee->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Budha" {{ $employee->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Katholik" {{ $employee->agama == 'Katholik' ? 'selected' : '' }}>Katholik</option>
                                <option value="Konghuchu" {{ $employee->agama == 'Konghuchu' ? 'selected' : '' }}>Konghuchu</option>
                            </select>
                        </div>

                        <!-- Status Pernikahan -->
                        <div class="mt-4">
                            <label for="status_pernikahan" class="block font-medium text-sm text-gray-700">{{ __('Status Pernikahan') }}</label>
                            <select id="status_pernikahan" name="status_pernikahan" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="Belum Kawin" {{ $employee->status_pernikahan == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                                <option value="Kawin" {{ $employee->status_pernikahan == 'Kawin' ? 'selected' : '' }}>Kawin</option>
                                <option value="Cerai Hidup" {{ $employee->status_pernikahan == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                                <option value="Cerai Mati" {{ $employee->status_pernikahan == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                            </select>
                        </div>

                        <!-- Jenjang Pendidikan -->
                        <div class="mt-4">
                            <label for="jenjang_pendidikan" class="block font-medium text-sm text-gray-700">{{ __('Jenjang Pendidikan') }}</label>
                            <select id="jenjang_pendidikan" name="jenjang_pendidikan" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="SD" {{ $employee->jenjang_pendidikan == 'SD' ? 'selected' : '' }}>SD</option>
                                <option value="SMP" {{ $employee->jenjang_pendidikan == 'SMP' ? 'selected' : '' }}>SMP</option>
                                <option value="SMA/SMK" {{ $employee->jenjang_pendidikan == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                                <option value="D3/D4" {{ $employee->jenjang_pendidikan == 'D3/D4' ? 'selected' : '' }}>D3/D4</option>
                                <option value="S1" {{ $employee->jenjang_pendidikan == 'S1' ? 'selected' : '' }}>S1</option>
                                <option value="S2" {{ $employee->jenjang_pendidikan == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ $employee->jenjang_pendidikan == 'S3' ? 'selected' : '' }}>S3</option>
                            </select>
                        </div>

                        <!-- Tahun Lulus -->
                        <div class="mt-4">
                            <label for="tahun_lulus" class="block font-medium text-sm text-gray-700">{{ __('Tahun Lulus') }}</label>
                            <input id="tahun_lulus" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="tahun_lulus" value="{{ old('tahun_lulus', $employee->tahun_lulus) }}" required />
                        </div>

                        <!-- Tahun Bergabung -->
                        <div class="mt-4">
                            <label for="tahun_bergabung" class="block font-medium text-sm text-gray-700">{{ __('Tahun Bergabung') }}</label>
                            <input id="tahun_bergabung" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="tahun_bergabung" value="{{ old('tahun_bergabung', $employee->tahun_bergabung) }}" required />
                        </div>

                        <!-- Lama Bekerja -->
                        <div class="mt-4">
                            <label for="lama_bekerja" class="block font-medium text-sm text-gray-700">{{ __('Lama Bekerja') }}</label>
                            <input id="lama_bekerja" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="lama_bekerja" value="{{ old('lama_bekerja', $employee->lama_bekerja) }}" required />
                        </div>

                        <!-- Status Karyawan -->
                        <div class="mt-4">
                            <label for="status_karyawan" class="block font-medium text-sm text-gray-700">{{ __('Status Karyawan') }}</label>
                            <select id="status_karyawan" name="status_karyawan" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="Tetap" {{ $employee->status_karyawan == 'Tetap' ? 'selected' : '' }}>Tetap</option>
                                <option value="Kontrak" {{ $employee->status_karyawan == 'Kontrak' ? 'selected' : '' }}>Kontrak</option>
                                <option value="Magang" {{ $employee->status_karyawan == 'Magang' ? 'selected' : '' }}>Magang</option>
                            </select>
                        </div>

                        <div class="flex justify-end mt-4 space-x-6">
                            <a href="{{ route('employees.index') }}" class="px-4 py-2 bg-gray-50 hover:bg-gray-100 text-indigo-600 hover:text-indigo-900">Kembali</a>
                            <button type="button" onclick="confirmEdit()" class="px-4 py-2 bg-gray-50 hover:bg-gray-100 text-indigo-600 hover:text-indigo-900">{{ __('Update') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmEdit() {
            Swal.fire({
                title: 'Apa anda sudah yakin?',
                text: "Anda akan mengedit data karyawan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Perbarui!',
                cancelButtonText: 'Batalkan'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('edit-form').submit();
                }
            })
        }
    </script>
</x-app-layout>