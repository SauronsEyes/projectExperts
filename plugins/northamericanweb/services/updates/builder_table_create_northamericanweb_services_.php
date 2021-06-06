<?php namespace Northamericanweb\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNorthamericanwebServices extends Migration
{
    public function up()
    {
        Schema::create('northamericanweb_services_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('northamericanweb_services_');
    }
}
