<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->string('jabatan', 255);
            $table->string('perguruan_tinggi', 255);
            $table->string('kategori_sekolah', 255);
            $table->string('jalan', 255);
            $table->string('rt_rw_desa_kel', 255);
            $table->string('kecamatan', 255);
            $table->string('provinsi', 255);
            $table->string('kabupaten_kota', 255);
            $table->bigInteger('kode_pos');
            $table->bigInteger('npsn');
            $table->bigInteger('telp');
            $table->bigInteger('no_fax');
            $table->string('email')->unique();
            $table->string('resi_pembayaran', 255);
            $table->string('created_by')->default('default_value');
            $table->string('updated_by')->default('default_value');
            $table->string('deleted_by')->default('default_value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
