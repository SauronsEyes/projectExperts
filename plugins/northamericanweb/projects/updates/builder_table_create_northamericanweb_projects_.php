<?php namespace Northamericanweb\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNorthamericanwebProjects extends Migration
{
    public function up()
    {
        Schema::create('northamericanweb_projects_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('northamericanweb_projects_');
    }
}
