<?php namespace Talha\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalhaContact5 extends Migration
{
    public function up()
    {
        Schema::table('talha_contact_', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('talha_contact_', function($table)
        {
            $table->integer('sort_order')->nullable()->default(0);
        });
    }
}
