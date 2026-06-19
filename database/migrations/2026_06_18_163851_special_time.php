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
        Schema::table('reservas', function (Blueprint $table) {
             User::create([
            'name' => 'Reservas_General',
            'email' => 'reservas@campanayoc.com',
            'role' => 'admin',
            'password' => Hash::make('reservas-campanayoc-081'),
        ]);

         User::create([
            'name' => 'Comercial_General',
            'email' => 'comercial@campanayoc.com',
            'role' => 'admin',
            'password' => Hash::make('comercial-campanayoc-079'),
        ]);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservas', function (Blueprint $table) {
            //
        });
    }
};
