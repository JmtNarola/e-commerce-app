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
        Schema::table('brand_categories', function (Blueprint $table) {
            $table->timestamp('created_at')->useCurrent()->nullable()->change();
            $table->timestamp('updated_at')->useCurrent()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('brand_categories', function (Blueprint $table) {
            $table->timestamps();            
        });
    }
};
