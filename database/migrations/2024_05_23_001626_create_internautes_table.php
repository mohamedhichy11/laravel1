<?php

// database/migrations/YYYY_MM_DD_create_internautes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternautesTable extends Migration
{
    public function up()
    {
        Schema::create('internautes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->date('date_naissance');
            $table->string('cin')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('internautes');
    }
}
