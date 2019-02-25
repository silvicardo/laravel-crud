<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->date('date_of_birth')->after('age');
            $table->string('gender', 3)->nullable()->after('date_of_birth');
            $table->string('class', 20)->nullable()->after('gender');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
          $table->dropColumn('date_of_birth');
          $table->dropColumn('gender');
          $table->dropColumn('class');
        });
    }
}
