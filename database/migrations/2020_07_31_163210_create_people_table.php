<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('preferred_name')->nullable();
            $table->string('title', 32)
                ->nullable()
                ->comment('This is used to store courtesy title e.g. Mr. Mrs. ...');
            $table->string('suffix', 32)
                ->nullable()
                ->comment('Generational designation e.g. jr, senior, III ...');
            $table->string('professional_title', 32)
                ->nullable()
                ->comment('Title e.g. MD, Esq PhD ...');
            $table->string('preferred_language')->nullable();
            $table->dateTimeTz('date_of_birth')->nullable();
            $table->foreignId('person_type_id');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestampsTz();
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
