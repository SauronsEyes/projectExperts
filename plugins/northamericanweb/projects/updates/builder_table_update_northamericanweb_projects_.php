<?php namespace Northamericanweb\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNorthamericanwebProjects extends Migration
{
    public function up()
    {
        Schema::table('northamericanweb_projects_', function($table)
        {
            $table->smallInteger('title');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('northamericanweb_projects_', function($table)
        {
            $table->dropColumn('title');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
