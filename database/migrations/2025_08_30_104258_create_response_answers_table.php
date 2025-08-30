<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('response_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('response_id')
                  ->constrained('responses')
                  ->cascadeOnDelete();
            $table->tinyInteger('question_no'); // 1..16
            $table->enum('category', ['emotional','stress','social','self_control']);
            $table->tinyInteger('score'); // 1..5
            $table->timestamps();

            $table->unique(['response_id','question_no']); 
            // setiap respon hanya boleh isi 1 jawaban per nomor
        });
    }

    public function down(): void {
        Schema::dropIfExists('response_answers');
    }
};
