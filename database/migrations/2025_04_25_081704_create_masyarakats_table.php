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
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->id();
            $table->string("nik", 16);
            $table->string("nama_lengkap", 50);
            $table->text("alamat");
            $table->string("no_hp", 15);
            $table->string("tempat_tanggal_lahir");
            $table->string("email");
            $table->enum("jenis_kelamin", ['Laki-laki', "Perempuan"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakats');
    }
};
