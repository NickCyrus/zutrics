<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateProfpermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_profpermissions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('profid');
            $table->integer('modappid');
            $table->integer('aview')->nullable();
            $table->integer('anew')->nullable();
            $table->integer('aedit')->nullable();
            $table->integer('adelete')->nullable();

        });

        DB::table("ac_profpermissions")->insert([
            ["profid" => 1,"modappid"=>1, "aview"=>1, "anew"=>1, "aedit"=>1, "adelete"=>1, "created_at"=> Carbon::now() ],
            ["profid" => 1,"modappid"=>2, "aview"=>1, "anew"=>1, "aedit"=>1, "adelete"=>1, "created_at"=> Carbon::now() ],
            ["profid" => 1,"modappid"=>3, "aview"=>1, "anew"=>1, "aedit"=>1, "adelete"=>1, "created_at"=> Carbon::now() ],
            ["profid" => 1,"modappid"=>4, "aview"=>1, "anew"=>1, "aedit"=>1, "adelete"=>1, "created_at"=> Carbon::now() ]

        ],true);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ac_profpermissions');
    }
}
