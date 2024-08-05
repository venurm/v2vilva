<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimationsTable extends Migration
{
    public function up()
    {
        Schema::create('estimations', function (Blueprint $table) {
            $table->id();
            $table->json('items');
            $table->foreignId('lead_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estimations');
    }
}
