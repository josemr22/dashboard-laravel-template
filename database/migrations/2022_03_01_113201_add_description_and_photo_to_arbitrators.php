<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionAndPhotoToArbitrators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('arbitrators', function (Blueprint $table) {
            //
            $table->text('description')->nullable();
            $table->string('at_choice')->nullable();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('arbitrators', function (Blueprint $table) {
            //
            $table->dropColumn('description');
            $table->dropColumn('at_choice');
            $table->dropColumn('image');
        });
    }
}
