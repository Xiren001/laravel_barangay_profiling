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
        Schema::create('residences', function (Blueprint $table) {
            $table->id();
            $table->string('tracking')->nullable();
            $table->string('name');
            $table->string('address');
            $table->date('dateb');
            $table->string('number');
            $table->date('date');
            $table->string('upload_file');
            $table->string('upload_file_sig');
            $table->string('payment');
            $table->string('ref')->default('Cash-on-pick-up')->nullable();
            $table->text('bio');
            $table->string('status')->default('Processing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residences');
    }
};
