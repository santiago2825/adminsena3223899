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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('course_number');
            $table->date('day');
            // llave foranea de programa
            $table->unsignedBigInteger('program_id');

            $table->foreign('program_id')
            ->references('id')
            ->on('programs')
            ->onDelete('cascade')
            ->onUpdate('cascade')
            ;
            //llave foranea de ambientes
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
        Schema::dropIfExists('courses');
    }
};
