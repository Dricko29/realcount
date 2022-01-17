<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pollings', function (Blueprint $table) {
            $table->id();
            $table->String('kode_polling');
            $table->foreignId('tps_id')->constrained('tps')->on('tps')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('paslon_id')->constrained('paslons')->on('paslons')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('jumlah_suara');
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
        Schema::dropIfExists('pollings');
    }
}
