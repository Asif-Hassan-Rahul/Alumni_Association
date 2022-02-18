<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('buet_id')->unique();
            $table->string('name');
            $table->string('gender')->nullable();
            $table->string('phone1')->unique()->nullable();
            $table->string('phone2')->nullable();
            $table->string('email')->unique();
            $table->dateTime('dob')->nullable();
            $table->string('country')->nullable(); // In which company does the alumni live
            $table->string('city')->nullable(); // In which company does the alumni live
            $table->longText('area')->nullable();
            $table->longText('permanent_address')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('linkedin_id')->nullable();
            $table->string('profession_type')->nullable(); // job/business/both
            $table->string('designation')->nullable(); // doctor/engineer
            $table->string('working_company_name')->nullable(); // In which company does the alumni work
            $table->string('professional_address')->nullable();
            $table->string('batch')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('spouse_name')->nullable();
            $table->longText('spouse_professional_address')->nullable();
            $table->string('number_of_child')->nullable();
            $table->longText('photo')->nullable();
            $table->string('member_status')->default('PENDING');
            $table->boolean('is_active')->default(0);
            $table->text('batch_mate_reference')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnis');
    }
}
