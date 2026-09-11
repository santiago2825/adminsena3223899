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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('level');
            $table->string('mode');
            $table->date('start_date');
            $table->date('end_date');
            //llave foranea de centro
            $table->unsignedBigInteger('training_center_id');

            $table->foreign('training_center_id')
            ->references('id')
            ->on('training_centers')
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
        Schema::dropIfExists('programs');
    }
};
