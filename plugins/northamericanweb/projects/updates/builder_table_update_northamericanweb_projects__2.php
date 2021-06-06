<?php namespace Northamericanweb\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNorthamericanwebProjects2 extends Migration
{
    public function up()
    {
        Schema::table('northamericanweb_projects_', function($table)
        {
            $table->string('title')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('northamericanweb_projects_', function($table)
        {
            $table->smallInteger('title')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
