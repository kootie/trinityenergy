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
        Schema::create('company_infomations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('favicon')->nullable();
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->string('gmail')->nullable();
            $table->string('landline')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('location')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->longText('mission')->nullable();
            $table->longText('vision')->nullable();
            $table->longText('about')->nullable();
            $table->longText('our_presence')->nullable();
            $table->longText('energy_solution')->nullable();
            $table->longText('commitment')->nullable();
            $table->longText('innovation')->nullable();
            $table->longText('expanding_our_services')->nullable();
            $table->longText('partner_with_us')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_infomations');
    }
};
