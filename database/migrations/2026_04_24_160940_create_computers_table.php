<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('brand');
            //llave foranea de ambiente
            
            $table->unsignedBigInteger('environment_id');
            $table->foreign('environment_id')
            ->references('id')
            ->on('environments')
            ->onDelete('cascade')
            ->onUpdate('cascade')
            ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
