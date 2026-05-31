<?php

use App\Enums\BodyType;
use App\Enums\CarStatus;
use App\Enums\OdometerUnit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_model_id')->constrained()->cascadeOnDelete();



            //General info
            $table->string('vin')->unique()->nullable();
            $table->year('year');
            $table->string('color');
            $table->enum('body_type', BodyType::cases());
            $table->enum('status', CarStatus::cases())->default(CarStatus::Available->value);

            //Plate
            $table->string('plate_code', 10);
            $table->string('plate_number');

            //Odometer
            $table->unsignedBigInteger('odometer')->default(0);
            $table->enum('odometer_unit', OdometerUnit::cases())->default(OdometerUnit::KM->value);

            $table->unique(['plate_code', 'plate_number']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
