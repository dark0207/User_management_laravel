<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('username')->unique()->pattern('^\d{12,}$');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('personal_avatar');
            $table->string('business_avatar');
            $table->rememberToken();
            // $table->unsignedBigInteger('company_id')->nullable();
            // $table->foreign('company_id')->references('id')->on('users');
            $table->string('company_ids');

            $table->enum('role', ['user', 'company'])->default('user');
            $table->enum('state', ['guest', 'none-verified-user', 'verified-user'])->default('guest');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
