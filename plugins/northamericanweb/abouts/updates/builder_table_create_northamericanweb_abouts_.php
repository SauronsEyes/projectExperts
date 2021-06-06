<?php namespace Northamericanweb\Abouts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNorthamericanwebAbouts extends Migration
{
    public function up()
    {
        Schema::create('northamericanweb_abouts_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('northamericanweb_abouts_');
    }
}
