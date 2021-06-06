<?php namespace Northamericanweb\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNorthamericanwebServices extends Migration
{
    public function up()
    {
        Schema::table('northamericanweb_services_', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('northamericanweb_services_', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
