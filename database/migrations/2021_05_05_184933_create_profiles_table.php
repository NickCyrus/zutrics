<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('profname');
        });

        DB::table("ac_profiles")->insert([
            ["profname" => "Administrador", "created_at"=> Carbon::now()]
        ],true);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ac_profiles');
    }
}
