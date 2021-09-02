<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->string('name', 50);
            $table->string('lastname', 80);
            $table->date('birth_date')->nullable();
            $table->string('whatsapp', 15);
            $table->string('photo')->nullable();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('user_id')
                ->references('id')
                ->on('user')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
