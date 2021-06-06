<?php namespace Northamericanweb\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNorthamericanwebProjects3 extends Migration
{
    public function up()
    {
        Schema::table('northamericanweb_projects_', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('northamericanweb_projects_', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
