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
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('profile', 100);
            $table->string('firstname', 50);
            $table->string('middlename', 50);
            $table->string('lastname', 50);
            $table->string('address', 50);
            $table->string('suffix', 20);
            $table->string('job_status', 50);
            $table->string('block', 20);
            $table->string('street', 99);
            $table->string('subd_purok', 50);
            $table->string('birthplace', 50);
            $table->date('birthday');
            $table->integer('age');
            $table->string('gender', 6);
            $table->string('civil_status', 20);
            $table->string('citizenship', 50);
            $table->string('email', 50);
            $table->string('religion', 50);
            $table->string('blood_type', 2);
            $table->integer('voters_id');
            $table->integer('presinct_no');
            $table->integer('contact_number');
            $table->integer('household_id');
            $table->string('occupation', 50);
            $table->string('disabilities', 50);
            $table->integer('emergency_contacts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
