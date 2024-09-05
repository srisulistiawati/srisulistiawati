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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('deskripsi');
            $table->integer('harga');
            $table->text('foto');
            $table->timestamps();
        });

        {
            Schema::create('produk', function (Blueprint $table) {
                $table->id(); // Kolom id
                $table->string('id_produk'); // Kolom id_produk
                $table->decimal('total_harga', 10, 2); // Kolom total_harga dengan tipe decimal
                $table->decimal('ongkir', 10, 2); // Kolom ongkir dengan tipe decimal
                $table->timestamps(); // Kolom created_at dan updated_at
            });
        }
    }

   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
