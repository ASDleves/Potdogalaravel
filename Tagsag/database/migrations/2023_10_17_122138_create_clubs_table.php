<?php

use App\Models\Club;
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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id('club_id');
            $table->date('establishment');
            $table->string('location');
            $table->integer('max_number');
            $table->timestamps();
        });

        Club::create([
            'establishment' => '2002-10-10',
            'location' => 'Magyarország',
            'max_number' => 20,
        ]);

        Club::create([
            'establishment' => '2002-10-11',
            'location' => 'Magyarország',
            'max_number' => 30,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
