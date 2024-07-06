<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesForTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_induk')->unique();
            $table->string('no_ktp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->string('jenjang_pendidikan')->nullable();
            $table->year('tahun_lulus')->nullable();
            $table->year('tahun_bergabung')->nullable();
            $table->string('lama_bekerja')->nullable();
            $table->string('status_karyawan')->nullable(); // Ubah dari 'Position' menjadi 'Status Karyawan'
            $table->string('nama_karyawan'); // Ubah dari 'name' menjadi 'Nama Karyawan'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
