<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Employee Form -->
                    <form method="POST" action="{{ route('employees.store') }}">
                        @csrf

                        <!-- Nomor Induk Karyawan -->
                        <div class="mt-4">
                            <label for="nomor_induk" class="block font-medium text-sm text-gray-700">{{ __('Nomor Induk Karyawan') }}</label>
                            <input id="nomor_induk" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="nomor_induk" maxlength="16" placeholder="ID Karyawan | Contoh :121212" required autofocus />
                        </div>

                        <!-- Nama Karyawan -->
                        <div class="mt-4">
                            <label for="nama_karyawan" class="block font-medium text-sm text-gray-700">{{ __('Nama Karyawan') }}</label>
                            <input id="nama_karyawan" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="nama_karyawan" oninput="this.value = this.value.replace(/[^A-z]/g, '')" placeholder="Nama Lengkap Karyawan" />
                        </div>

                        <!-- No KTP -->
                        <div class="mt-4">
                            <label for="no_ktp" class="block font-medium text-sm text-gray-700">{{ __('No KTP') }}</label>
                            <input id="no_ktp" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="no_ktp" pattern="\d{16}" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 16)" placeholder="No KTP Karyawan | Contoh : 3220xxxxxxxxx (16 Digit)" />
                        </div>

                        <!-- Alamat -->
                        <div class="mt-4">
                            <label for="alamat" class="block font-medium text-sm text-gray-700">{{ __('Alamat') }}</label>
                            <input id="alamat" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="alamat" maxlength="100" placeholder="Alamat (Lengkap)" />
                        </div>

                        <!-- Tempat Lahir -->
                        <div class="mt-4">
                            <label for="tempat_lahir" class="block font-medium text-sm text-gray-700">{{ __('Tempat Lahir') }}</label>
                            <input id="tempat_lahir" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="tempat_lahir" oninput="this.value = this.value.replace(/[^A-z]/g, '')" maxlength="25" placeholder="Tempat Lahir | Contoh : Bandung" />
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="mt-4">
                            <label for="tanggal_lahir" class="block font-medium text-sm text-gray-700">{{ __('Tanggal Lahir') }}</label>
                            <input id="tanggal_lahir" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" name="tanggal_lahir" min="1960-01-01" max="2006-12-12" />
                        </div>

                        <!-- No Telepon -->
                        <div class="mt-4">
                            <label for="no_telepon" class="block font-medium text-sm text-gray-700">{{ __('No Telepon') }}</label>
                            <input id="no_telepon" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="no_telepon" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 15)" placeholder="Nomor Telepon Karyawan | Contoh : 62895xxxxxxx" />
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="mt-4">
                            <label for="jenis_kelamin" class="block font-medium text-sm text-gray-700">{{ __('Jenis Kelamin') }}</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <!-- Agama -->
                        <div class="mt-4">
                            <label for="agama" class="block font-medium text-sm text-gray-700">{{ __('Agama') }}</label>
                            <select id="agama" name="agama" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                        </div>

                        <!-- Status Pernikahan -->
                        <div class="mt-4">
                            <label for="status_pernikahan" class="block font-medium text-sm text-gray-700">{{ __('Status Pernikahan') }}</label>
                            <select id="status_pernikahan" name="status_pernikahan" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                            </select>
                        </div>

                        <!-- Jenjang Pendidikan -->
                        <div class="mt-4">
                            <label for="jenjang_pendidikan" class="block font-medium text-sm text-gray-700">{{ __('Jenjang Pendidikan') }}</label>
                            <select id="jenjang_pendidikan" name="jenjang_pendidikan" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="D3/D4">D3/D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>

                        <!-- Tahun Lulus -->
                        <div class="mt-4">
                            <label for="tahun_lulus" class="block font-medium text-sm text-gray-700">{{ __('Tahun Lulus') }}</label>
                            <input id="tahun_lulus" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="tahun_lulus" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 16)" maxlength="4" placeholder="Tahun Lulus | Contoh : 2005 " required min="1960" max="2099" />
                        </div>

                        <!-- Tahun Bergabung -->
                        <div class="mt-4">
                            <label for="tahun_bergabung" class="block font-medium text-sm text-gray-700">{{ __('Tahun Bergabung') }}</label>
                            <input id="tahun_bergabung" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="tahun_bergabung" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 16)" maxlength="4" placeholder="Tahun Bergabung | Contoh : 2020 " required min="1960" max="2099" />
                        </div>

                        <!-- Lama Bekerja -->
                        <div class="mt-4">
                            <label for="lama_bekerja" class="block font-medium text-sm text-gray-700">{{ __('Lama Bekerja') }}</label>
                            <input id="lama_bekerja" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="lama_bekerja" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 4)" placeholder="Lama Bekerja | Contoh : 2 Tahun isi dengan 24" />
                        </div>

                        <!-- Status Karyawan -->
                        <div class="mt-4">
                            <label for="status_karyawan" class="block font-medium text-sm text-gray-700">{{ __('Status Karyawan') }}</label>
                            <select id="status_karyawan" name="status_karyawan" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="Tetap">Tetap</option>
                                <option value="Kontrak">Kontrak</option>
                                <option value="Magang">Magang</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('employees.index') }}" class="px-4 py-2 bg-gray-50 hover:bg-gray-100 text-indigo-600 hover:text-indigo-900">Kembali</a>
                            <button type="submit" class="px-4 py-2 bg-gray-50 hover:bg-gray-100 text-indigo-600 hover:text-indigo-900">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>