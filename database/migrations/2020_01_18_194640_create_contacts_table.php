<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('file_id')->unsigned();
            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');

            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('motivation')->nullable();
            $table->string('linkedin');
            $table->string('github');
            $table->string('level_english');
            $table->string('salary');
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
        Schema::drop('contacts');
    }
}
