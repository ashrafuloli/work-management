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
        Schema::create('email_two_factor_codes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            /**
             * Hashed six-digit email OTP.
             */
            $table->string('code_hash');

            /**
             * OTP expiration timestamp.
             */
            $table->timestamp('expires_at');

            /**
             * Null means unused.
             * Timestamp means already used.
             */
            $table->timestamp('used_at')->nullable();

            /**
             * Number of failed verification attempts.
             */
            $table->unsignedTinyInteger('attempts')
                ->default(0);

            $table->timestamps();

            $table->index([
                'user_id',
                'expires_at',
            ]);

            $table->index([
                'user_id',
                'used_at',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(
            'email_two_factor_codes'
        );
    }
};
