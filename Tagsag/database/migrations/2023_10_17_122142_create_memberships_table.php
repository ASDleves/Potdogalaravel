<?php

use App\Models\Membership;
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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id('member_id');
            $table->foreignId('club_id')->references('club_id')->on('clubs');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Membership::create([
            'club_id' => 1,
            'user_id' => 1,
        ]);

        Membership::create([
            'club_id' => 2,
            'user_id' => 2,
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
