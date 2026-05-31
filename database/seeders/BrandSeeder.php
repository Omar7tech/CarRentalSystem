<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\CarModel;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brandModels = [
            'Alfa Romeo' => ['Giulia', 'Stelvio', 'Tonale', 'Giulietta', '159', '156', '147', 'MiTo', 'Brera', 'Spider', '4C'],
            'Aston Martin' => ['DB11', 'DBX', 'Vantage', 'DBS', 'DBS Superleggera', 'Rapide', 'Vanquish', 'DB9', 'V8 Vantage', 'V12 Vantage'],
            'Audi' => ['A1', 'A1 30 TFSI', 'A1 35 TFSI', 'A1 40 TFSI', 'S1', 'A3', 'A3 30 TFSI', 'A3 35 TFSI', 'A3 40 TFSI', 'A3 45 TFSI', 'S3', 'RS3', 'A4', 'A4 35 TFSI', 'A4 40 TFSI', 'A4 45 TFSI', 'A4 2.0T', 'A4 3.0T', 'A4 Allroad', 'S4', 'RS4', 'A5', 'A5 40 TFSI', 'A5 45 TFSI', 'S5', 'RS5', 'A6', 'A6 40 TFSI', 'A6 45 TFSI', 'A6 50 TFSI', 'A6 55 TFSI', 'A6 2.0T', 'A6 3.0T', 'A6 Allroad', 'S6', 'RS6', 'A7', 'A7 45 TFSI', 'A7 50 TFSI', 'A7 55 TFSI', 'S7', 'RS7', 'A8', 'A8 L', 'A8 50 TDI', 'A8 55 TFSI', 'A8 60 TFSI', 'S8', 'Q2', 'Q2 30 TFSI', 'Q2 35 TFSI', 'Q2 40 TFSI', 'SQ2', 'Q3', 'Q3 35 TFSI', 'Q3 40 TFSI', 'Q3 45 TFSI', 'SQ3', 'RS Q3', 'Q4 e-tron', 'Q4 40 e-tron', 'Q4 50 e-tron', 'Q5', 'Q5 40 TFSI', 'Q5 45 TFSI', 'Q5 50 TFSI', 'Q5 55 TFSI', 'SQ5', 'Q7', 'Q7 45 TFSI', 'Q7 50 TDI', 'Q7 55 TFSI', 'SQ7', 'Q8', 'Q8 50 TDI', 'Q8 55 TFSI', 'SQ8', 'RS Q8', 'Q8 e-tron', 'Q8 50 e-tron', 'Q8 55 e-tron', 'TT', 'TT Coupe', 'TT Roadster', 'TTS', 'TT RS', 'e-tron', 'e-tron GT', 'RS e-tron GT', 'R8', 'R8 V10', 'R8 V10 Plus'],
            'Bentley' => ['Continental GT', 'Continental GTC', 'Flying Spur', 'Bentayga', 'Bentayga EWB', 'Mulsanne'],
            'BMW' => ['1 Series', '118i', '120i', '125i', '128i', 'M135i', 'M140i', '2 Series', '218i', '220i', '225i', '228i', '230i', 'M235i', 'M240i', '2 Series Gran Coupe', '2 Series Active Tourer', '3 Series', '316i', '318i', '320i', '323i', '325i', '328i', '330i', '335i', '340i', 'M340i', '4 Series', '420i', '428i', '430i', '435i', '440i', 'M440i', '5 Series', '518i', '520i', '523i', '525i', '528i', '530i', '535i', '540i', '550i', 'M550i', '6 Series', '630i', '640i', '650i', 'M6', '6 Series GT', '7 Series', '730i', '730Li', '735i', '740i', '740Li', '745i', '750i', '750Li', '760i', '760Li', 'M760i', '8 Series', '840i', '850i', 'M850i', 'X1', 'X1 sDrive18i', 'X1 xDrive20i', 'X1 xDrive25i', 'X1 xDrive28i', 'X2', 'X2 sDrive18i', 'X2 xDrive20i', 'X2 xDrive28i', 'X2 M35i', 'X3', 'X3 sDrive18i', 'X3 xDrive20i', 'X3 xDrive28i', 'X3 xDrive30i', 'X3 xDrive35i', 'X3 M40i', 'X4', 'X4 xDrive20i', 'X4 xDrive28i', 'X4 xDrive30i', 'X4 xDrive35i', 'X4 M40i', 'X5', 'X5 sDrive35i', 'X5 xDrive30i', 'X5 xDrive35i', 'X5 xDrive40i', 'X5 xDrive45e', 'X5 xDrive50i', 'X5 M50i', 'X6', 'X6 sDrive35i', 'X6 xDrive35i', 'X6 xDrive40i', 'X6 xDrive50i', 'X6 M50i', 'X7', 'X7 xDrive40i', 'X7 xDrive50i', 'X7 M60i', 'Z4', 'Z4 sDrive20i', 'Z4 sDrive30i', 'Z4 M40i', 'i3', 'i4', 'i4 eDrive40', 'i4 M50', 'i5', 'i7', 'i8', 'iX', 'iX xDrive40', 'iX xDrive50', 'iX M60', 'iX1', 'iX3', 'M2', 'M2 Competition', 'M3', 'M3 Competition', 'M4', 'M4 Competition', 'M5', 'M5 Competition', 'M8', 'M8 Competition', 'X3 M', 'X3 M Competition', 'X4 M', 'X4 M Competition', 'X5 M', 'X5 M Competition', 'X6 M', 'X6 M Competition', 'XM'],
            'Buick' => ['Encore', 'Encore GX', 'Envision', 'Enclave', 'Regal', 'LaCrosse', 'Verano'],
            'BYD' => ['Atto 3', 'Seal', 'Seal U', 'Han', 'Tang', 'Song', 'Song Plus', 'Qin', 'Qin Plus', 'Dolphin', 'Yuan', 'Yuan Plus', 'F3', 'G6', 'S6'],
            'Cadillac' => ['CT4', 'CT5', 'CT6', 'XT4', 'XT5', 'XT6', 'Escalade', 'Escalade ESV', 'Lyriq', 'Celestiq', 'ATS', 'CTS', 'SRX'],
            'Changan' => ['CS35', 'CS35 Plus', 'CS55', 'CS55 Plus', 'CS75', 'CS75 Plus', 'CS85', 'CS95', 'Alsvin', 'Eado', 'Eado Plus', 'UNI-K', 'UNI-T', 'UNI-V', 'Hunter', 'Deepal S7'],
            'Chery' => ['Tiggo 2', 'Tiggo 3', 'Tiggo 4', 'Tiggo 5', 'Tiggo 7', 'Tiggo 8', 'Tiggo 8 Pro', 'Tiggo 9', 'Arrizo 5', 'Arrizo 6', 'Arrizo 8', 'Omoda 5', 'Omoda C5', 'Exeed LX', 'Exeed TXL', 'Exeed VX'],
            'Chevrolet' => ['Spark', 'Aveo', 'Sonic', 'Cruze', 'Malibu', 'Impala', 'Camaro', 'Corvette', 'Trax', 'Trailblazer', 'Equinox', 'Blazer', 'Traverse', 'Tahoe', 'Suburban', 'Silverado 1500', 'Silverado 2500HD', 'Silverado 3500HD', 'Colorado', 'Bolt EV', 'Bolt EUV'],
            'Chrysler' => ['300', '300C', 'Pacifica', 'Voyager', 'Aspen', 'Town & Country'],
            'Citroen' => ['C1', 'C3', 'C3 Aircross', 'C4', 'C4 Cactus', 'C4 X', 'C5 Aircross', 'C5 X', 'Berlingo', 'SpaceTourer', 'C-Elysee', 'C-Crosser', 'e-C4', 'e-Berlingo'],
            'Dacia' => ['Sandero', 'Sandero Stepway', 'Logan', 'Duster', 'Spring', 'Jogger', 'Bigster', 'Dokker', 'Lodgy'],
            'Dodge' => ['Charger', 'Challenger', 'Durango', 'Hornet', 'Journey', 'Grand Caravan', 'Dart', 'Nitro', 'Caliber'],
            'Fiat' => ['500', '500C', '500X', '500L', 'Panda', 'Tipo', 'Tipo Cross', 'Doblo', '500e', 'Punto', 'Bravo', 'Linea', 'Freemont', 'Uno', 'Mobi', 'Argo', 'Cronos', 'Fastback', 'Pulse', 'Toro'],
            'Ford' => ['Fiesta', 'Focus', 'Fusion', 'Mondeo', 'Mustang', 'EcoSport', 'Puma', 'Kuga', 'Edge', 'Explorer', 'Expedition', 'Bronco', 'Bronco Sport', 'Ranger', 'Ranger Raptor', 'F-150', 'F-150 Raptor', 'Super Duty', 'Transit', 'Transit Custom', 'Transit Connect', 'Mustang Mach-E', 'F-150 Lightning', 'Tourneo', 'Tourneo Custom', 'Escape', 'Territory', 'Everest'],
            'Geely' => ['Coolray', 'Azkarra', 'Okavango', 'Emgrand', 'Emgrand X7', 'Tugella', 'Monjaro', 'Atlas', 'Boyue', 'Vision X3', 'Icon', 'Preface', 'Xingyue'],
            'Genesis' => ['G70', 'G80', 'G90', 'GV60', 'GV70', 'GV80', 'Electrified G80', 'Electrified GV70'],
            'GMC' => ['Terrain', 'Acadia', 'Yukon', 'Yukon XL', 'Sierra 1500', 'Sierra 2500HD', 'Sierra 3500HD', 'Canyon', 'Hummer EV', 'Hummer EV SUV', 'Envoy'],
            'Great Wall' => ['Haval H6', 'Haval H6 GT', 'Haval Jolion', 'Haval H9', 'Haval M6', 'Haval Dargo', 'Haval F7', 'Poer', 'Wingle', 'Ora Good Cat', 'Ora Funky Cat', 'Tank 300', 'Tank 500'],
            'Haima' => ['S5', 'S7', '7X', '8S', 'M3', 'M6', 'Familia'],
            'Honda' => ['Fit', 'Jazz', 'City', 'Civic', 'Accord', 'Insight', 'CR-V', 'HR-V', 'ZR-V', 'CR-Z', 'Pilot', 'Passport', 'Odyssey', 'Ridgeline', 'e:Ny1', 'e:Np1', 'BR-V', 'WR-V', 'Brio', 'Amaze', 'City Hatchback', 'Integra', 'Prelude'],
            'Hyundai' => ['i10', 'Grand i10', 'Grand i10 Nios', 'i20', 'i20 N', 'i30', 'i30 N', 'i40', 'Elantra', 'Elantra N', 'Sonata', 'Azera', 'Grandeur', 'Veloster', 'Veloster N', 'Accent', 'Verna', 'Bayon', 'Kona', 'Kona N', 'Tucson', 'Santa Fe', 'Palisade', 'Venue', 'Creta', 'Ioniq', 'Ioniq 5', 'Ioniq 5 N', 'Ioniq 6', 'Ioniq 7', 'Nexo', 'Staria', 'H1', 'Starex', 'H100', 'Porter', 'Eon', 'Santro', 'Getz', 'Matrix', 'Lantra', 'Genesis Coupe', 'Equus'],
            'Infiniti' => ['Q30', 'Q50', 'Q60', 'Q70', 'QX30', 'QX50', 'QX55', 'QX60', 'QX70', 'QX80', 'FX35', 'FX37', 'G37'],
            'Isuzu' => ['D-Max', 'MU-X', 'Trooper', 'Rodeo'],
            'Jaguar' => ['XE', 'XF', 'XJ', 'F-Type', 'E-Pace', 'F-Pace', 'I-Pace', 'X-Type', 'S-Type'],
            'Jeep' => ['Renegade', 'Compass', 'Cherokee', 'Grand Cherokee', 'Grand Cherokee L', 'Wrangler', 'Wrangler Unlimited', 'Wrangler 4xe', 'Gladiator', 'Wagoneer', 'Grand Wagoneer', 'Avenger', 'Commander', 'Patriot', 'Liberty'],
            'Kia' => ['Picanto', 'Rio', 'Cerato', 'Forte', 'K3', 'K5', 'K8', 'Optima', 'Cadenza', 'Stinger', 'Stonic', 'Seltos', 'Sportage', 'Sorento', 'Mohave', 'Telluride', 'Carnival', 'Sedona', 'Soul', 'EV6', 'EV6 GT', 'EV9', 'Niro', 'Niro EV', 'e-Niro', 'Ceed', 'ProCeed', 'XCeed'],
            'Land Rover' => ['Defender 90', 'Defender 110', 'Defender 130', 'Discovery', 'Discovery Sport', 'Range Rover Evoque', 'Range Rover Velar', 'Range Rover Sport', 'Range Rover', 'Freelander', 'LR2', 'LR3', 'LR4'],
            'Lexus' => ['CT 200h', 'IS', 'IS 300', 'IS 350', 'ES', 'ES 300h', 'GS', 'GS F', 'LS', 'LS 500h', 'RC', 'RC F', 'LC', 'LC 500h', 'UX', 'UX 300e', 'NX', 'NX 450h+', 'RX', 'RX 500h', 'GX', 'LX', 'RZ', 'HS 250h'],
            'Lincoln' => ['Corsair', 'Nautilus', 'Aviator', 'Navigator', 'Navigator L', 'MKZ', 'MKX', 'MKC', 'MKT', 'Continental'],
            'Maserati' => ['Ghibli', 'Quattroporte', 'Levante', 'GranTurismo', 'GranCabrio', 'MC20', 'MC20 Cielo', 'Grecale'],
            'Mazda' => ['Mazda2', 'Mazda3', 'Mazda6', 'CX-3', 'CX-30', 'CX-5', 'CX-50', 'CX-60', 'CX-70', 'CX-8', 'CX-9', 'CX-90', 'MX-5', 'MX-5 RF', 'MX-30', 'BT-50', 'RX-8'],
            'Mercedes-Benz' => ['A-Class', 'A 180', 'A 200', 'A 220', 'A 250', 'A 35 AMG', 'A 45 AMG', 'B-Class', 'B 180', 'B 200', 'C-Class', 'C 180', 'C 200', 'C 220', 'C 250', 'C 300', 'C 350', 'C 43 AMG', 'C 63 AMG', 'CLA', 'CLA 180', 'CLA 200', 'CLA 220', 'CLA 250', 'CLA 35 AMG', 'CLA 45 AMG', 'CLS', 'CLS 350', 'CLS 400', 'CLS 450', 'CLS 500', 'CLS 53 AMG', 'CLS 63 AMG', 'E-Class', 'E 200', 'E 220', 'E 250', 'E 300', 'E 350', 'E 400', 'E 450', 'E 500', 'E 53 AMG', 'E 63 AMG', 'S-Class', 'S 350', 'S 400', 'S 450', 'S 500', 'S 560', 'S 580', 'S 600', 'S 63 AMG', 'S 65 AMG', 'GLA', 'GLA 200', 'GLA 220', 'GLA 250', 'GLA 35 AMG', 'GLA 45 AMG', 'GLB', 'GLB 200', 'GLB 220', 'GLB 250', 'GLB 35 AMG', 'GLC', 'GLC 200', 'GLC 220', 'GLC 250', 'GLC 300', 'GLC 43 AMG', 'GLC 63 AMG', 'GLE', 'GLE 300', 'GLE 350', 'GLE 400', 'GLE 450', 'GLE 500', 'GLE 53 AMG', 'GLE 63 AMG', 'GLS', 'GLS 350', 'GLS 400', 'GLS 450', 'GLS 500', 'GLS 580', 'GLS 600', 'GLS 63 AMG', 'G-Class', 'G 350', 'G 400', 'G 500', 'G 550', 'G 63 AMG', 'EQA', 'EQB', 'EQC', 'EQE', 'EQE SUV', 'EQS', 'EQS SUV', 'AMG GT', 'AMG GT 43', 'AMG GT 53', 'AMG GT 63', 'AMG GT R', 'SL', 'SL 400', 'SL 450', 'SL 500', 'SL 550', 'SL 63 AMG', 'SL 65 AMG', 'SLC', 'SLK', 'V-Class', 'Vito', 'Sprinter', 'Citan', 'X-Class', 'GLK', 'GLK 250', 'GLK 300', 'GLK 350', 'CL', 'CLK', 'ML-Class', 'ML 250', 'ML 300', 'ML 350', 'ML 400', 'ML 500', 'ML 63 AMG'],
            'MG' => ['MG3', 'MG5', 'MG5 EV', 'MG6', 'ZS', 'ZS EV', 'HS', 'HS Plug-in', 'RX5', 'RX8', 'MG4', 'MG4 XPower', 'Marvel R', 'Cyberster', 'Hector', 'Gloster', 'Astor', 'Comet EV'],
            'Mini' => ['Cooper', 'Cooper S', 'Cooper SE', 'Clubman', 'Countryman', 'Convertible', 'John Cooper Works', 'Electric', 'Paceman', 'Roadster'],
            'Mitsubishi' => ['Mirage', 'Mirage G4', 'Attrage', 'Lancer', 'Lancer Evolution', 'Galant', 'Eclipse Cross', 'Outlander', 'Outlander PHEV', 'Outlander Sport', 'ASX', 'Pajero', 'Pajero Sport', 'Montero', 'L200', 'Triton', 'Xpander', 'Xpander Cross', 'Eclipse', 'Endeavor'],
            'Nissan' => ['Micra', 'Note', 'Versa', 'Sentra', 'Sunny', 'Tiida', 'Almera', 'Sylphy', 'Altima', 'Maxima', 'Teana', '370Z', 'Kicks', 'Juke', 'Qashqai', 'X-Trail', 'Rogue', 'Rogue Sport', 'Murano', 'Pathfinder', 'Armada', 'Patrol', 'GT-R', 'Z', 'Leaf', 'Ariya', 'Navara', 'Frontier', 'Titan', 'NV200', 'Cube', 'Xterra', 'Terra', 'Livina', 'Urvan', 'Quest'],
            'Opel' => ['Corsa', 'Corsa-e', 'Astra', 'Insignia', 'Crossland', 'Grandland', 'Mokka', 'Mokka-e', 'Combo', 'Combo-e', 'Zafira', 'Meriva', 'Adam', 'Cascada', 'Ampera-e', 'Vivaro'],
            'Peugeot' => ['108', '208', 'e-208', '308', '408', '508', '508 SW', '2008', 'e-2008', '3008', '5008', 'Rifter', 'Traveller', 'Partner', 'Expert', '206', '207', '307', '407', '607', '4007', '4008', 'RCZ'],
            'Porsche' => ['718 Boxster', '718 Cayman', '718 Spyder', '911', '911 Turbo', '911 GT3', 'Panamera', 'Panamera Sport Turismo', 'Macan', 'Cayenne', 'Cayenne Coupe', 'Taycan', 'Taycan Cross Turismo', 'Taycan Sport Turismo', 'Boxster', 'Cayman', 'Carrera GT'],
            'Ram' => ['1500', '1500 Classic', '2500', '3500', 'ProMaster', 'ProMaster City', '700', '1200'],
            'Renault' => ['Twingo', 'Clio', 'Megane', 'Megane RS', 'Talisman', 'Captur', 'Kadjar', 'Koleos', 'Austral', 'Arkana', 'Kangoo', 'Scenic', 'Grand Scenic', 'Espace', 'Megane E-Tech', 'Zoe', 'Fluence', 'Latitude', 'Laguna', 'Duster', 'Symbol', 'Safrane', 'Trafic', 'Master'],
            'Rolls-Royce' => ['Ghost', 'Ghost Extended', 'Wraith', 'Dawn', 'Phantom', 'Phantom Extended', 'Cullinan', 'Spectre'],
            'SEAT' => ['Ibiza', 'Leon', 'Leon Cupra', 'Ateca', 'Arona', 'Tarraco', 'Mii', 'Toledo', 'Alhambra', 'Exeo'],
            'Skoda' => ['Citigo', 'Fabia', 'Scala', 'Octavia', 'Superb', 'Kamiq', 'Karoq', 'Kodiaq', 'Enyaq', 'Enyaq Coupe', 'Rapid', 'Yeti'],
            'Subaru' => ['Impreza', 'Legacy', 'WRX', 'WRX STI', 'BRZ', 'Crosstrek', 'Forester', 'Outback', 'Ascent', 'Solterra', 'XV', 'Levorg', 'Tribeca', 'Baja'],
            'Suzuki' => ['Alto', 'Celerio', 'Swift', 'Swift Sport', 'Baleno', 'Dzire', 'Ciaz', 'Ignis', 'Vitara', 'S-Cross', 'Grand Vitara', 'Jimny', 'Ertiga', 'XL7', 'APV', 'Carry', 'SX4', 'Kizashi', 'Wagon R', 'Fronx', 'Brezza'],
            'Tesla' => ['Model 3', 'Model S', 'Model X', 'Model Y', 'Cybertruck', 'Roadster'],
            'Toyota' => ['Yaris', 'Yaris Cross', 'Corolla', 'Corolla Cross', 'Camry', 'Avalon', 'Prius', 'Prius Prime', 'Mirai', 'C-HR', 'RAV4', 'RAV4 Prime', 'Highlander', 'Sequoia', 'Land Cruiser', 'Land Cruiser Prado', '4Runner', 'Tacoma', 'Tundra', 'Hilux', 'Fortuner', 'Sienna', 'bZ4X', 'Supra', 'GR86', 'GR Corolla', 'GR Yaris', 'Crown', 'Venza', 'FJ Cruiser', 'Matrix', 'Celica', 'MR2', 'GT86', 'Aygo', 'Auris', 'Verso', 'Avensis', 'Rush', 'Innova', 'Alphard', 'Vellfire', 'Proace', 'Hiace'],
            'Volkswagen' => ['Polo', 'Golf', 'Golf GTI', 'Golf R', 'Jetta', 'Jetta GLI', 'Passat', 'Arteon', 'T-Cross', 'T-Roc', 'Tiguan', 'Tiguan Allspace', 'Touareg', 'Taos', 'Atlas', 'Atlas Cross Sport', 'ID.3', 'ID.4', 'ID.5', 'ID.7', 'ID. Buzz', 'Beetle', 'Scirocco', 'CC', 'Eos', 'Touran', 'Sharan', 'Caddy', 'Transporter', 'Caravelle', 'Amarok', 'up!', 'Phaeton'],
            'Volvo' => ['S60', 'S90', 'V60', 'V60 Cross Country', 'V90', 'V90 Cross Country', 'XC40', 'XC60', 'XC90', 'C40 Recharge', 'EX30', 'EX90', 'EM90', 'S40', 'V40', 'V50', 'XC70', 'C30', 'C70'],
        ];

        foreach ($brandModels as $brandName => $models) {
            $brand = Brand::firstOrCreate(['name' => $brandName]);

            foreach ($models as $modelName) {
                CarModel::firstOrCreate(
                    ['name' => $modelName, 'brand_id' => $brand->id]
                );
            }
        }
    }
}