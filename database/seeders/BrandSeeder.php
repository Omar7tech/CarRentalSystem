<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            'Alfa Romeo',
            'Aston Martin',
            'Audi',
            'Bentley',
            'BMW',
            'Buick',
            'BYD',
            'Cadillac',
            'Changan',
            'Chery',
            'Chevrolet',
            'Chrysler',
            'Citroen',
            'Dacia',
            'Dodge',
            'Fiat',
            'Ford',
            'Geely',
            'Genesis',
            'GMC',
            'Great Wall',
            'Haima',
            'Honda',
            'Hyundai',
            'Infiniti',
            'Isuzu',
            'Jaguar',
            'Jeep',
            'Kia',
            'Land Rover',
            'Lexus',
            'Lincoln',
            'Maserati',
            'Mazda',
            'Mercedes-Benz',
            'MG',
            'Mini',
            'Mitsubishi',
            'Nissan',
            'Opel',
            'Peugeot',
            'Porsche',
            'Ram',
            'Renault',
            'Rolls-Royce',
            'SEAT',
            'Skoda',
            'Subaru',
            'Suzuki',
            'Tesla',
            'Toyota',
            'Volkswagen',
            'Volvo',
        ];

        foreach ($brands as $brand) {
            Brand::firstOrCreate(['name' => $brand]);
        }
    }
}