<?php namespace Northamericanweb\Pages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNorthamericanwebPages extends Migration
{
    public function up()
    {
        Schema::create('northamericanweb_pages_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('northamericanweb_pages_');
    }
}
