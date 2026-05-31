<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    public function run(): void
    {
        $brandModels = [
            'Alfa Romeo' => ['Giulia', 'Stelvio', 'Tonale', 'Giulietta', '159', '147', 'MiTo'],
            'Aston Martin' => ['DB11', 'DBX', 'Vantage', 'DBS', 'Rapide'],
            'Audi' => ['A1', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'Q2', 'Q3', 'Q4 e-tron', 'Q5', 'Q7', 'Q8', 'TT', 'e-tron', 'RS3', 'RS4', 'RS5', 'RS6', 'RS7', 'R8'],
            'Bentley' => ['Continental GT', 'Flying Spur', 'Bentayga', 'Mulsanne'],
            'BMW' => ['1 Series', '2 Series', '3 Series', '4 Series', '5 Series', '6 Series', '7 Series', '8 Series', 'X1', 'X2', 'X3', 'X4', 'X5', 'X6', 'X7', 'Z4', 'i4', 'iX', 'iX3', 'M2', 'M3', 'M4', 'M5', 'M8', 'X5 M', 'X6 M'],
            'Buick' => ['Encore', 'Envision', 'Enclave', 'Regal', 'LaCrosse'],
            'BYD' => ['Atto 3', 'Seal', 'Han', 'Tang', 'Song', 'Qin', 'Dolphin', 'Yuan'],
            'Cadillac' => ['CT4', 'CT5', 'XT4', 'XT5', 'XT6', 'Escalade', 'Lyriq'],
            'Changan' => ['CS35', 'CS55', 'CS75', 'CS85', 'Alsvin', 'Eado', 'UNI-K', 'UNI-T'],
            'Chery' => ['Tiggo 2', 'Tiggo 3', 'Tiggo 4', 'Tiggo 5', 'Tiggo 7', 'Tiggo 8', 'Arrizo 5', 'Arrizo 6'],
            'Chevrolet' => ['Spark', 'Aveo', 'Cruze', 'Malibu', 'Impala', 'Camaro', 'Corvette', 'Trax', 'Equinox', 'Blazer', 'Traverse', 'Tahoe', 'Suburban', 'Silverado', 'Colorado'],
            'Chrysler' => ['300', 'Pacifica', 'Voyager'],
            'Citroen' => ['C1', 'C3', 'C3 Aircross', 'C4', 'C4 Cactus', 'C5 Aircross', 'C5 X', 'Berlingo', 'SpaceTourer'],
            'Dacia' => ['Sandero', 'Logan', 'Duster', 'Spring', 'Jogger', 'Bigster'],
            'Dodge' => ['Charger', 'Challenger', 'Durango', 'Hornet'],
            'Fiat' => ['500', '500X', '500L', 'Panda', 'Tipo', 'Doblo', '500e'],
            'Ford' => ['Fiesta', 'Focus', 'Fusion', 'Mondeo', 'Mustang', 'EcoSport', 'Puma', 'Kuga', 'Edge', 'Explorer', 'Expedition', 'Bronco', 'Ranger', 'F-150', 'Transit', 'Mustang Mach-E', 'F-150 Lightning'],
            'Geely' => ['Coolray', 'Azkarra', 'Okavango', 'Emgrand', 'Tugella', 'Monjaro'],
            'Genesis' => ['G70', 'G80', 'G90', 'GV60', 'GV70', 'GV80'],
            'GMC' => ['Terrain', 'Acadia', 'Yukon', 'Sierra', 'Canyon', 'Hummer EV'],
            'Great Wall' => ['Haval H6', 'Haval Jolion', 'Haval H9', 'Poer', 'Wingle', 'Ora Good Cat'],
            'Haima' => ['S5', 'S7', '7X', '8S'],
            'Honda' => ['Fit', 'City', 'Civic', 'Accord', 'Insight', 'CR-V', 'HR-V', 'ZR-V', 'Pilot', 'Passport', 'Odyssey', 'Ridgeline', 'e:Ny1'],
            'Hyundai' => ['i10', 'i20', 'i30', 'Elantra', 'Sonata', 'Azera', 'Veloster', 'Kona', 'Tucson', 'Santa Fe', 'Palisade', 'Ioniq 5', 'Ioniq 6', 'Nexo'],
            'Infiniti' => ['Q50', 'Q60', 'QX50', 'QX55', 'QX60', 'QX80'],
            'Isuzu' => ['D-Max', 'MU-X'],
            'Jaguar' => ['XE', 'XF', 'XJ', 'F-Type', 'E-Pace', 'F-Pace', 'I-Pace'],
            'Jeep' => ['Renegade', 'Compass', 'Cherokee', 'Grand Cherokee', 'Wrangler', 'Gladiator', 'Wagoneer', 'Grand Wagoneer', 'Avenger'],
            'Kia' => ['Picanto', 'Rio', 'Cerato', 'Forte', 'K5', 'Stinger', 'Stonic', 'Seltos', 'Sportage', 'Sorento', 'Telluride', 'Carnival', 'EV6', 'EV9', 'Niro'],
            'Land Rover' => ['Defender', 'Discovery', 'Discovery Sport', 'Range Rover Evoque', 'Range Rover Velar', 'Range Rover Sport', 'Range Rover'],
            'Lexus' => ['CT', 'IS', 'ES', 'GS', 'LS', 'RC', 'LC', 'UX', 'NX', 'RX', 'GX', 'LX', 'RZ'],
            'Lincoln' => ['Corsair', 'Nautilus', 'Aviator', 'Navigator'],
            'Maserati' => ['Ghibli', 'Quattroporte', 'Levante', 'GranTurismo', 'GranCabrio', 'MC20', 'Grecale'],
            'Mazda' => ['Mazda2', 'Mazda3', 'Mazda6', 'CX-3', 'CX-30', 'CX-5', 'CX-50', 'CX-60', 'CX-90', 'MX-5', 'MX-30'],
            'Mercedes-Benz' => ['A-Class', 'B-Class', 'C-Class', 'CLA', 'CLS', 'E-Class', 'S-Class', 'GLA', 'GLB', 'GLC', 'GLE', 'GLS', 'G-Class', 'EQA', 'EQB', 'EQC', 'EQE', 'EQS', 'AMG GT', 'SL'],
            'MG' => ['MG3', 'MG5', 'MG6', 'ZS', 'HS', 'RX5', 'MG4', 'Marvel R'],
            'Mini' => ['Cooper', 'Clubman', 'Countryman', 'Convertible', 'Electric'],
            'Mitsubishi' => ['Mirage', 'Attrage', 'Lancer', 'Eclipse Cross', 'Outlander', 'Pajero', 'L200', 'Xpander'],
            'Nissan' => ['Micra', 'Sentra', 'Altima', 'Maxima', 'Kicks', 'Juke', 'Qashqai', 'X-Trail', 'Rogue', 'Murano', 'Pathfinder', 'Armada', 'Patrol', 'GT-R', 'Z', 'Leaf', 'Ariya', 'Navara', 'Titan'],
            'Opel' => ['Corsa', 'Astra', 'Insignia', 'Crossland', 'Grandland', 'Mokka', 'Combo'],
            'Peugeot' => ['108', '208', '308', '408', '508', '2008', '3008', '5008', 'Rifter', 'Traveller', 'e-208', 'e-2008'],
            'Porsche' => ['718 Boxster', '718 Cayman', '911', 'Panamera', 'Macan', 'Cayenne', 'Taycan'],
            'Ram' => ['1500', '2500', '3500', 'ProMaster'],
            'Renault' => ['Twingo', 'Clio', 'Megane', 'Talisman', 'Captur', 'Kadjar', 'Koleos', 'Austral', 'Arkana', 'Kangoo', 'Megane E-Tech', 'Zoe'],
            'Rolls-Royce' => ['Ghost', 'Wraith', 'Dawn', 'Phantom', 'Cullinan', 'Spectre'],
            'SEAT' => ['Ibiza', 'Leon', 'Ateca', 'Arona', 'Tarraco'],
            'Skoda' => ['Fabia', 'Scala', 'Octavia', 'Superb', 'Kamiq', 'Karoq', 'Kodiaq', 'Enyaq'],
            'Subaru' => ['Impreza', 'Legacy', 'WRX', 'BRZ', 'Crosstrek', 'Forester', 'Outback', 'Ascent', 'Solterra'],
            'Suzuki' => ['Alto', 'Celerio', 'Swift', 'Baleno', 'Dzire', 'Ciaz', 'Ignis', 'Vitara', 'S-Cross', 'Jimny', 'Ertiga', 'XL7'],
            'Tesla' => ['Model 3', 'Model S', 'Model X', 'Model Y', 'Cybertruck'],
            'Toyota' => ['Yaris', 'Corolla', 'Camry', 'Avalon', 'Prius', 'C-HR', 'RAV4', 'Highlander', 'Sequoia', 'Land Cruiser', '4Runner', 'Tacoma', 'Tundra', 'Hilux', 'Fortuner', 'Sienna', 'bZ4X', 'Supra', 'GR86'],
            'Volkswagen' => ['Polo', 'Golf', 'Jetta', 'Passat', 'Arteon', 'T-Cross', 'T-Roc', 'Tiguan', 'Touareg', 'Taos', 'Atlas', 'ID.3', 'ID.4', 'ID.5', 'ID. Buzz'],
            'Volvo' => ['S60', 'S90', 'V60', 'V90', 'XC40', 'XC60', 'XC90', 'C40 Recharge', 'EX30', 'EX90'],
        ];

        foreach ($brandModels as $brandName => $models) {
            $brand = Brand::where('name', $brandName)->first();

            if ($brand) {
                foreach ($models as $modelName) {
                    CarModel::firstOrCreate(
                        ['name' => $modelName, 'brand_id' => $brand->id]
                    );
                }
            }
        }
    }
}
