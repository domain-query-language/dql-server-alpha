<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlayerSnapshots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snapshots_player', function (Blueprint $table) {
            $table->string('id', 36)->unique();
            $table->dateTimeTz('occurred_at');
            $table->integer('version')->default(0);
            $table->string('name');
            $table->string('last_id', 36)->default('00000000-0000-0000-0000-000000000000');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('snapshots_player');
    }
}
