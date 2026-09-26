<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Authentication
            $table->string('email')->unique();
            $table->string('google_id')->nullable()->unique();
            $table->string('github_id')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();


            // Account
            $table->string('user_type', 20)->default('member');
            $table->string('status', 20)->default('active');
            $table->timestamp('last_login_at')->nullable();

            // Laravel Authentication
            $table->rememberToken();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
