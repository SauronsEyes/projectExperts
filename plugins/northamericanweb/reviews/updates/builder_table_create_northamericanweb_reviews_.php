<?php namespace Northamericanweb\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNorthamericanwebReviews extends Migration
{
    public function up()
    {
        Schema::create('northamericanweb_reviews_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('review');
            $table->integer('stars');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('northamericanweb_reviews_');
    }
}
