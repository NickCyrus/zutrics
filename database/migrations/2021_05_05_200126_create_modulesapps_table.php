<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateModulesappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_modulesapps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nameapp');
            $table->string('iconapp')->nullable();
            $table->string('urlapp')->nullable();
            $table->string('orderapp')->nullable();
        });


            DB::table("ac_modulesapps")->insert([

                ["nameapp" => "Módulos",            "urlapp" => "modules",          "iconapp"=>'feather icon-grid',"orderapp"=>'1', "created_at"=> Carbon::now() ],
                ["nameapp" => "Perfiles",           "urlapp" => "perfiles",         "iconapp"=>'feather icon-grid',"orderapp"=>'2', "created_at"=> Carbon::now() ],
                ["nameapp" => "Usuarios",           "urlapp" => "usuarios",         "iconapp"=>'feather icon-grid',"orderapp"=>'3', "created_at"=> Carbon::now() ],
                ["nameapp" => "Empresas",           "urlapp" => "empresas",         "iconapp"=>'feather icon-grid',"orderapp"=>'4', "created_at"=> Carbon::now() ],
                ["nameapp" => "Logs de usuarios",   "urlapp" => "logsusers",        "iconapp"=>'feather icon-grid',"orderapp"=>'5', "created_at"=> Carbon::now() ]

            ],true);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ac_modulesapps');
    }
}
