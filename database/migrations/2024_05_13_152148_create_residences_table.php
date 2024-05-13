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
            $table->string('image')->nullable();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('address');
            $table->string('suffix');
            $table->string('job_status');
            $table->string('block');
            $table->string('street');
            $table->string('subd_purok');
            $table->string('birthplace');
            $table->date('birthday');
            $table->integer('age');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('citizenship');
            $table->string('email');
            $table->string('religion');
            $table->string('blood_type');
            $table->integer('voters_id');
            $table->integer('presinct_no');
            $table->integer('contact_number');
            $table->integer('household_id');
            $table->string('occupation');
            $table->string('disabilities');
            $table->integer('emergency_contacts');
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
