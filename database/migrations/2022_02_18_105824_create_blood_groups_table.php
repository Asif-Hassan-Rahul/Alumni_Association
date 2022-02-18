<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_groups', function (Blueprint $table) {
            $table->id();
            $table->string('blood_group_name');
            $table->timestamps();
        });

        DB::table('blood_groups')->insert(
            array(
                [
                    'blood_group_name' => 'A+',
                ],
                [
                    'blood_group_name' => 'A-',
                ],
                [
                    'blood_group_name' => 'B+',
                ],
                [
                    'blood_group_name' => 'B-',
                ],
                [
                    'blood_group_name' => 'AB+',
                ],
                [
                    'blood_group_name' => 'AB-',
                ],
                [
                    'blood_group_name' => 'O+',
                ],
                [
                    'blood_group_name' => 'O-',
                ],
            )

        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_groups');
    }
}
