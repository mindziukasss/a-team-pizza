<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToRecourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pz_ingredients', function(Blueprint $table)
        {
            $table->foreign('recourse_id', 'fk_pz_ingredient_pz_recourse1')->references('id')->on('pz_recourses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pz_ingredients', function(Blueprint $table)
        {
            $table->dropForeign('fk_pz_ingredient_pz_recourse1');
        });
    }
}
