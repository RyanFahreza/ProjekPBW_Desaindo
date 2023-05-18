<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desains', function (Blueprint $table) {
            $table->id('id');
            $table->string('deskripsi');
            $table->integer('harga');
            $table->string('gambar');
            $table->string('user_email'); // tambahkan kolom user_email
            $table->integer('likes')->default(0); // tambahkan kolom likes
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desains');
    }
};
