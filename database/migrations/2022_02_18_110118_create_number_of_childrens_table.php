<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumberOfChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('number_of_childrens', function (Blueprint $table) {
            $table->id();
            $table->string('number_of_children');
            $table->timestamps();
        });

        DB::table('number_of_childrens')->insert(
            array(
                [
                    'number_of_children' => 'No Child',
                ],
                [
                    'number_of_children' => '1 Child',
                ],
                [
                    'number_of_children' => '2 Child',
                ],
                [
                    'number_of_children' => '3 Child',
                ],
                [
                    'number_of_children' => '4 Child',
                ],
                [
                    'number_of_children' => 'More Than 4 Child',
                ]
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
        Schema::dropIfExists('number_of_childrens');
    }
}
