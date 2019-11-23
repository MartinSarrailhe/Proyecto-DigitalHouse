<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Auriculares
        Product::create([
          'name' => 'MARVO AURICULAR HEADSET - HG9032 7.1 USB LED RED',
          'description' => '',
          'price' => '2615',
          'featured_img' => 'MARVO-AURICULAR-HEADSET-HG9032-7.1-USB-LED-RED.jpg',
        ]);
        Product::create([
          'name' => 'LOGITECH AURICULAR G332 GAMING HEADSET - PS4 - XBOX - PC',
          'description' => '',
          'price' => '3200',
          'featured_img' => 'LOGITECH-AURICULAR-G433-BLACK-7.1-HEADSET.jpg',
        ]);
        Product::create([
          'name' => 'LOGITECH AURICULAR G433 BLACK 7.1 HEADSET',
          'description' => '',
          'price' => '5400',
          'featured_img' => 'LOGITECH-AURICULAR-G433-BLACK-7.1-HEADSET.jpg',
        ]);

      //Gabinetes
      Product::create([
        'name' => 'LNZ GABINETE LZ10 RGB',
        'description' => '',
        'price' => '1800',
        'featured_img' => 'LNZ-GABINETE-LZ10-RGB.jpg',
      ]);
      Product::create([
        'name' => 'CORSAIR GABINETE CARBIDE SPEC-04 BLACK/YELLOW MID TOWER',
        'description' => '',
        'price' => '4500',
        'featured_img' => 'CORSAIR-GABINETE-CARBIDE-SPEC-04-BLACK-YELLOW-MID-TOWER.jpg',
      ]);
      Product::create([
        'name' => 'RIOTORO GABINETE CR1288 PRISM RGB',
        'description' => '',
        'price' => '11000',
        'featured_img' => 'RIOTORO-GABINETE-CR1288-PRISM-RGB.jpg',
      ]);

      //Memorias RAM
      Product::create([
        'name' => 'KINGSTON 8GB 2400MHZ HYPERX FURY - BLACK DDR4',
        'description' => '',
        'price' => '3200',
        'featured_img' => 'KINGSTON-8GB-2400MHZ-HYPERX FURY-BLACK DDR4.jpg',
      ]);
      Product::create([
        'name' => 'CRUCIAL 8GB 2666MHZ BALLISTIX TACTICAL LED RGB DDR4',
        'description' => '',
        'price' => '3200',
        'featured_img' => 'CRUCIAL-8GB-2666MHZ-BALLISTIX-TACTICAL-LED-RGB-DDR4.jpg',
      ]);
      Product::create([
        'name' => 'CORSAIR 16GB (2X8) 3200MHZ VENGEANCE PRO RGB WHITE',
        'description' => '',
        'price' => '3200',
        'featured_img' => 'CORSAIR-16GB-(2X8)-3200MHZ-VENGEANCE-PRO-RGB-WHITE.jpg',
      ]);

      //Motherboards
      Product::create([
        'name' => 'MSI MOTHER A320M PRO - M2 V2',
        'description' => '',
        'price' => '3200',
        'featured_img' => 'MSI-MOTHER-A320M-PRO-M2-V2.jpg',
      ]);
      Product::create([
        'name' => 'GIGABYTE MOTHER B360M AORUS GAMING 3',
        'description' => '',
        'price' => '6790',
        'featured_img' => 'GIGABYTE-MOTHER-B360M-AORUS-GAMING-3.jpg',
      ]);
      Product::create([
        'name' => 'MSI X570 MPG GAMING PRO CARBON WIFI',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'MSI-X570-MPG-GAMING-PRO-CARBON-WIFI.jpg',
      ]);

      //Mouses
      Product::create([
        'name' => 'SENTEY GRYD GAMING GS-3311',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'SENTEY-GRYD-GAMING-GS-3311.jpg',
      ]);
      Product::create([
        'name' => 'SENTEY ZONER GAMING GS-3313',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'SENTEY-ZONER-GAMING-GS-3313.jpg',
      ]);
      Product::create([
        'name' => 'LOGITECH G502 HERO MOUSE GAMING - RGB',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'LOGITECH-G502-HERO-MOUSE-GAMING-RGB.jpg',
      ]);

      //Placas de video
      Product::create([
        'name' => 'SENTEY RX 580 4GB DDR5 GAMING - TRIPLE FAN',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'SENTEY-RX-580-4GB-DDR5-GAMING-TRIPLE-FAN.jpg',
      ]);
      Product::create([
        'name' => 'ASUS RTX 2060 ROG STRIX 6GB DDR6',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'ASUS-RTX-2060-ROG-STRIX-6GB-DDR6.jpg',
      ]);
      Product::create([
        'name' => 'GIGABYTE RTX 2070 SUPER WINDFORCE OC 8GB GDDR6',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'GIGABYTE-RTX-2070-SUPER-WINDFORCE-OC-8GB-GDDR6.jpg',
      ]);

      //Procesadores
      Product::create([
        'name' => 'INTEL COFFEE LAKE CORE I3 8100',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'INTEL-COFFEE-LAKE-CORE-I3-8100.jpg',
      ]);
      Product::create([
        'name' => 'INTEL COFFEE LAKE CORE I5 8400',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'INTEL-COFFEE-LAKE-CORE-I5-8400.jpg',
      ]);
      Product::create([
        'name' => 'INTEL COFFEE LAKE CORE I9 9900K',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'INTEL-COFFEE-LAKE-CORE-I9-9900K.jpg',
      ]);

      //Teclados
      Product::create([
        'name' => 'SENTEY L-MEKANO GAMING - Mecanico BLACK SWITCH',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'SENTEY-L-MEKANO-GAMING.jpg',
      ]);
      Product::create([
        'name' => 'LOGITECH G413 CARBON - RED',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'LOGITECH-G413-CARBON-RED.jpg',
      ]);
      Product::create([
        'name' => 'CORSAIR K70 RGB MK.2 MECANICO — CHERRY® MX RED',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'CORSAIR-K70-RGB-MK.2-MECANICO.jpg',
      ]);
    }
}
