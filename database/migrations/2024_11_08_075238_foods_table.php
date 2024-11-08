<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id'); // Ensuring type consistency
            $table->foreign('hotel_id')->references('id')->on('hotel')->onDelete('cascade');
            $table->string('name');
            $table->decimal('price', 8, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('food');
    }
};


?>
