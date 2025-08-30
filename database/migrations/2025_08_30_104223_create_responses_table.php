<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->tinyInteger('age');
            $table->enum('gender', ['male','female','other'])->default('other');
            $table->smallInteger('total_score')->default(0);
            $table->json('category_scores')->nullable(); 
            // contoh {"emotional":10,"stress":12,"social":14,"self_control":16}
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('responses');
    }
};
