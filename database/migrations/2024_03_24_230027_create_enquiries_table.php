<?php

use App\Models\User;
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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('code')->unique();
            $table->string('car_no');
            $table->string('chassis_no');
            $table->string('engine_no');
            $table->string('owner_name');
            $table->string('owner_address');
            $table->string('owner_national_id');
            $table->string('owner_phone_no');
            $table->string('owner_image');
            $table->string('driver_name');
            $table->string('driver_address');
            $table->string('driver_national_id');
            $table->string('driver_image');
            $table->string('car_type');
            $table->string('car_brand');
            $table->string('car_model');
            $table->string('line');
            $table->string('center')->default('وحدة مرور المنصورة');
            $table->date('license_date');
            $table->foreignIdFor(User::class)->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
