<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToHotelsTable extends Migration
{
    public function up()
    {
        Schema::table('hotel', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('hotel', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
}
