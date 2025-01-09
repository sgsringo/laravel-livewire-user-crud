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
        Schema::create('target_users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('氏名');
            $table->string('email')->uniqe()->comment('メールアドレス');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('target_users', function (Blueprint $table) {
            //
        });
    }
};