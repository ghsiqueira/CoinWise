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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('value');
            $table->string('description');
            $table->date('schedule');
            $table->boolean('isExpense');
            $table->boolean('isRecurrent');
            $table->foreignId('category_id')->constrained(
                table: 'categories', indexName: 'transfer_category_id'
            );
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'transfer_user_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
