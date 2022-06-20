<?php namespace Talha\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalhaContact2 extends Migration
{
    public function up()
    {
        Schema::table('talha_contact_', function($table)
        {
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('talha_contact_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
