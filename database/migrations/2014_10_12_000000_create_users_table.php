<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('ac_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('profid')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });


        DB::table("ac_users")->insert([
            ["name" =>'Administrador',
             "profid"=>1,
             "email" => 'demo@demo.com',
             "password" => '$2b$10$GEKciVRhblV0AhblI9xv5uXg.hCCowbnhHJ8I1jeo9U/PrP9DoHz.' ,
             "created_at"=> Carbon::now()
            ]
        ],true);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ac_users');
    }
}
