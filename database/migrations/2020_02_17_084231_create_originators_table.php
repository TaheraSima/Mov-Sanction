<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOriginatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('originators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference_no');
            $table->string('ba_no');
            $table->string('email');
            $table->string('approval_type');
            $table->string('address');
            $table->string('telephone');
            $table->string('extension');
            $table->string('name');
            $table->string('signature');
            $table->string('rank');
            $table->string('on_behalf');
            $table->string('display_name');
            $table->string('user_type');
            $table->integer('status');
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
        Schema::dropIfExists('originators');
    }
}
