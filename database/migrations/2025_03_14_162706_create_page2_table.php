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
        Schema::create('things', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('asset_id')->index(); // Foreign key to assets
            $table->string('thing_name');
            $table->decimal('price', 8);
            $table->integer('qty');
            $table->timestamps();

            // foreign key referencing assets table
            $table->foreign('asset_id')->references('id')->on('assets')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page2');
    }
};
