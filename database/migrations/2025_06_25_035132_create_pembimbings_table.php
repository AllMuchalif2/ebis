<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembimbings', function (Blueprint $table) {
            $table->id();
            $table->char('KodeSkripsi', $length = 3);
            $table->char('nidn', $length = 10);
            $table->char('peran');
            $table->timestamps();

            $table->foreign('KodeSkripsi')->references('KodeSkripsi')->on('skripsis')->onDelete('cascade');
            $table->foreign('nidn')->references('nidn')->on('dosens')->onDelete('cascade');

            $table->unique(['KodeSkripsi', 'nidn','peran']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembimbings');
    }
};
