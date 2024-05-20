<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBasePriceToRoomTypesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('room_types', function (Blueprint $table) {
            $table->decimal('base_price', 10, 2)->after('name')->nullable();
        });
    }



    public function down(): void
    {
        Schema::table('room_types', function (Blueprint $table) {
            $table->dropColumn('base_price');
        });
    }
};
