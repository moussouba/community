<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNonNullableToTelRecenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recense', function (Blueprint $table) {
            $table->string('tel')->nullable()->after('sexe');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('tel',20)->nullable()->after('sexe');
            $table->string('type',5)->default(3)->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recense', function (Blueprint $table) {
            //
        });
    }
}
