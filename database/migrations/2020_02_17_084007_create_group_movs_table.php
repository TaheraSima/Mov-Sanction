<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupMovsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_movs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sanction_no')->nullable();
            $table->integer('reference_no')->nullable();
            $table->string('unit')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('extension')->nullable();
            $table->string('cantt')->nullable();
            $table->string('brigadier')->nullable();
            $table->string('division')->nullable();
            $table->string('place')->nullable();
            $table->string('purpose')->nullable();
            $table->string('reference')->nullable();
            $table->string('comment')->nullable();
            $table->date('date_mov')->nullable();
            $table->date('date_return')->nullable();
            $table->string('time_mov')->nullable();
            $table->string('return_time')->nullable();
            $table->string('made_journey')->nullable();
            $table->string('made_return_jurney')->nullable();
            $table->string('route_incl')->nullable();
            $table->string('route_return_incl')->nullable();
            $table->string('command')->nullable();
            $table->string('return_command')->nullable();
            $table->integer('command_no')->nullable();
            $table->integer('return_command_no')->nullable();
            $table->string('other_equipment')->nullable();
            $table->string('other_info')->nullable();
            $table->string('extarnal_act')->nullable();
            $table->string('extarnal_action')->nullable();
            $table->string('extl_info')->nullable();
            $table->string('extl_email')->nullable();
            $table->string('internal_act')->nullable();
            $table->string('internal_action')->nullable();
            $table->string('intl_info')->nullable();
            $table->string('intl_email')->nullable();
            $table->string('sender_id')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_movs');
    }
}
