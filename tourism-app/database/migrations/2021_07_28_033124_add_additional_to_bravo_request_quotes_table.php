<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalToBravoRequestQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bravo_request_quotes', function (Blueprint $table) {
            $table->dateTime('start_date')->nullable();
            $table->integer('default_person_adult')->nullable();
            $table->integer('default_person_child')->nullable();
            $table->integer('ea_person_adult')->nullable();
            $table->integer('ea_person_child')->nullable();
            $table->integer('tz_person_adult')->nullable();
            $table->integer('tz_person_child')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bravo_request_quotes', function (Blueprint $table) {
            $table->dropColumn('start_date');
            $table->dropColumn('default_person_adult');
            $table->dropColumn('default_person_child');
            $table->dropColumn('ea_person_adult');
            $table->dropColumn('ea_person_child');
            $table->dropColumn('tz_person_adult');
            $table->dropColumn('tz_person_child');
        });
    }
}
