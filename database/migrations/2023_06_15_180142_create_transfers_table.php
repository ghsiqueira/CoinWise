<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class createChartDataTable extends Migration
    {
        public function up(): void
        {
            Schema::create('transfers', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->decimal('value', 8, 2);
                $table->string('description');
                $table->date('schedule');
                $table->boolean('isExpense');
                $table->boolean('isRecurrent');
                $table->timestamps();
            });
        }

        public function down(): void
        {
            Schema::dropIfExists('transfers');
        }
    }