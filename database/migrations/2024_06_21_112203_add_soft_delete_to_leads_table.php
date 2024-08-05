<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftDeleteToLeadsTable extends Migration
{
    public function up()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->softDeletes(); // Add softDeletes method here
        });
    }

    public function down()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Drop softDeletes method here if necessary
        });
    }
}
