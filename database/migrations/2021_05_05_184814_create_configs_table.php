<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_configs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('keyconf','50');
            $table->string('type','50');
            $table->string('class')->nullable();;
            $table->string('onclick')->nullable();;
            $table->string('onblur')->nullable();;
            $table->string('onchange')->nullable();;
            $table->integer('group')->nullable();;
            $table->text('value')->nullable();;
        });


        DB::table("ac_configs")->insert([
                                        ["keyconf" => "nameApp", "type" => "input", "value" => "Celsia - Sistema Gestión ZE" , "created_at"=> Carbon::now() ],
                                        ["keyconf" => "shortNameApp", "type" => "input", "value" => "Sistema Gestión ZE" , "created_at"=> Carbon::now() ],
                                        ["keyconf" => "paginacion", "type" => "input", "value" => "30" , "created_at"=> Carbon::now()] ,
                                        ["keyconf" => "logoApp", "type" => "file", "value" => "" , "created_at"=> Carbon::now() ]
        ],true);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ac_configs');
    }
}
