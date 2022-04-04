<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->text('position');
            $table->text('industry');
            $table->text('organization');
            $table->text('requirements');
            $table->text('education');
            $table->text('experience');
            $table->text('responsibilities');
            $table->text('skills');
            $table->text('salary');
            $table->text('additional_info');
            $table->text('contacts_full_name');
            $table->text('contacts_email');
            $table->text('contacts_phone');
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
        Schema::dropIfExists('vacancies');
    }
}
