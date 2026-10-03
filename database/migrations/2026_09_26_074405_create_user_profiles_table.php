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
        Schema::create('user_profiles', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | User Relationship
            |--------------------------------------------------------------------------
            */

            $table->foreignId('user_id')
                ->unique()
                ->constrained('users')
                ->cascadeOnDelete();


            /*
            |--------------------------------------------------------------------------
            | Personal Information
            |--------------------------------------------------------------------------
            */

            $table->string('first_name');

            $table->string('last_name')
                ->nullable();

            $table->string('display_name')
                ->nullable();

            $table->string('avatar')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Professional Information
            |--------------------------------------------------------------------------
            */

            $table->string('job_title')
                ->nullable();

            $table->string('department')
                ->nullable();

            $table->string('phone', 30)
                ->nullable();

            $table->text('bio')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Address
            |--------------------------------------------------------------------------
            */

            $table->string('address_line_1')
                ->nullable();

            $table->string('address_line_2')
                ->nullable();

            $table->string('city')
                ->nullable();

            $table->string('state')
                ->nullable();

            $table->string('postal_code', 20)
                ->nullable();

            $table->string('country', 100)
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Account Preferences
            |--------------------------------------------------------------------------
            */

            $table->string('timezone', 100)
                ->default('UTC');

            $table->string('locale', 10)
                ->default('en');

            $table->string('date_format', 30)
                ->default('MMM D, YYYY');

            $table->string('theme', 20)
                ->default('light');


            /*
            |--------------------------------------------------------------------------
            | Timestamps
            |--------------------------------------------------------------------------
            */

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
