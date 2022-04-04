<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateсompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->text('position');
            $table->text('industry');
            $table->boolean('status');
            $table->text('organization');
            $table->text('group');
            $table->text('requirements');
            $table->text('education');
            $table->text('experience');
            $table->text('responsibilities');
            $table->text('skills');
            $table->text('methods');
            $table->text('additional_info');
            $table->text('reception_time');
            $table->text('documents_deadline');
            $table->text('competition_date');
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
        Schema::dropIfExists('competitions');
    }
}
