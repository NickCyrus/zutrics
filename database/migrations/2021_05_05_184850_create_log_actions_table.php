<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_log_actions', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->integer('userid');
            $table->ipAddress('ipaccess')->nullable();
            $table->text('comment')->nullable();
            $table->text('action')->nullable();
            $table->text('fbefore')->nullable();
            $table->text('fafter')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ac_log_actions');
    }
}
