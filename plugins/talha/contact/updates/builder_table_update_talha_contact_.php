<?php namespace Talha\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalhaContact extends Migration
{
    public function up()
    {
        Schema::table('talha_contact_', function($table)
        {
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::table('talha_contact_', function($table)
        {
            $table->dropColumn('content');
        });
    }
}
