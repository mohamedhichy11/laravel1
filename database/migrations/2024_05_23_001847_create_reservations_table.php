<?php

// database/migrations/YYYY_MM_DD_create_reservations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_internaute');
            $table->unsignedBigInteger('id_hotel');
            $table->date('date_debut_sejour');
            $table->date('date_fin_sejour');
            $table->string('titre');
            $table->timestamps();

            $table->foreign('id_internaute')->references('id')->on('internautes')->onDelete('cascade');
            $table->foreign('id_hotel')->references('id')->on('hotels')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
