<?php

declare(strict_types=1);

use App\Enums\HistoricalPointType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricalPointsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historical_points', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('place');
            $table->string('years');
            $table->text('info');
            $table->enum('type', HistoricalPointType::casesAsArray());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historical_points');
    }
}
