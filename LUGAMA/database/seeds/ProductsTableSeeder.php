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
          Product::create([
        "name" => "SAMSUNG AURICULAR VINCHA P.47",
        "description"=>"Bluetooth",
        "price"=>"950",
        "features_img"=>"colores.jpg"
      ]);

      Product::create([
        "name" =>"APPLE AURICULAR I7s ",
        "description"=>"Bluetooth",
        "price"=>"1000",
        "features_img"=>"i7.jpg"
      ]);
  Product::create([
        "name" =>"TRUE WIRLESS AURICULAR TWINS",
        "description"=>"Bluetooth",
        "price"=>"2000",
        "features_img"=>"twins.jpg"
      ]);
  Product::create([
        "name" =>"XIAOMI AURICULAR REDMI AIRDOTS",
        "description"=>"bluetooh",
        "price"=>"3000",
        "features_img"=>"xioami.jpg"
      ]);
  Product::create([
        "name" =>"NOGANET AURICULAR HYDRA",
        "description"=>"",
        "price"=>"1200",
        "features_img"=>"hydra.jpg"
      ]);
  Product::create([
        "name" => "KOTION AURICULAR G2600",
        "description"=>"",
        "price"=>"2000",
        "features_img"=>"camuflados.jpg"
      ]);
  Product::create([
        "name" =>"SONY AURICULAR ABLUE037",
        "description"=>"",
        "price"=>"3000",
        "features_img"=>"gadnic.jpg"
      ]);
  Product::create([
        "name" =>"LOGITECH AURICULAR G633 ",
        "description"=>"",
        "price"=>"",
        "features_img"=>"macros.jpg"
      ]);
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
      Product::create([
     "name" =>"MAGNUM TECH GABINETE MT-436B",
     "description"=>"",
     "price"=>"1800",
     "features_img"=>"magnum.jpg"
   ]);
Product::create([
     "name" =>"SENTEY GABINETE X20",
     "description"=>"",
     "price"=>"3000",
     "features_img"=>"reader.jpg"
   ]);
Product::create([
     "name" =>"THERMALTAKE GABINETE VERSA C22",
     "description"=>"",
     "price"=>"4000",
     "features_img"=>"versa.jpg"
   ]);
Product::create([
     "name" =>"SENTEY GABINETE GS-6008 II",
     "description"=>"",
     "price"=>"5300",
     "features_img"=>"sentey.jpg"
   ]);
Product::create([
     "name" =>"GIGABYTE GABINETE AORUS AC300W",
     "description"=>"",
     "price"=>"7500",
     "features_img"=>"ac.jpg"
   ]);
Product::create([
     "name" =>"EVGA GABINETE DG-86",
     "description"=>"",
     "price"=>"10000",
     "features_img"=>"evga.jpg"
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
      Product::create([
        "name" =>"KINGSTONE 4GB KVR16LS11",
        "description"=>"",
        "price"=>"1400",
        "features_img"=>"Kingstone4g1.jpg"
      ]);
      Product::create([
        "name" =>"COLORFUL 8GB CDPC08G3000D4S",
        "description"=>"",
        "price"=>"3200",
        "features_img"=>"colorful.jpg"
      ]);
      Product::create([
        "name" =>"KINGSTONE 12GB HYPERX PREDATOR",
        "description"=>"",
        "price"=>"80000",
        "features_img"=>"predator1.jpg"
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
      Product::create([
       "name" =>"MSI MOTHER A68HM-E33",
       "description"=>"",
       "price"=>"5000",
       "features_img"=>"Placamsi-dg3+.jpg"
     ]);
     Product::create([
        "name" =>"GIGABYTE MOTHER H310M H ",
        "description"=>"",
        "price"=>"7300",
        "features_img"=>"placagigabyteh3.jpg"
      ]);
      Product::create([
        "name" =>"ASUS MOTHER A320m Am4 C1",
        "description"=>"",
        "price"=>"8000",
        "features_img"=>"placaAsus.jpg"
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
      Product::create([
        "name" =>"AST MOUSE 224",
        "description"=>"",
        "price"=>"400",
        "features_img"=>"ASTin1.jpg"
      ]);
      Product::create([
        "name" =>"LOGITECH MOUSE M170",
        "description"=>"",
        "price"=>"600",
        "features_img"=>"logitechina1.jpg"
      ]);
      Product::create([
        "name" =>"RAZER MOUSE GAMER DEATHADDER ELITE",
        "description"=>"",
        "price"=>"4500",
        "features_img"=>"ryzer1.jpg"
      ]);
      Product::create([
        "name" =>"NETMAK MOUSE GAMER FURY",
        "description"=>"",
        "price"=>"800",
        "features_img"=>"netmak1.jpg"
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
      Product::create([
        "name" =>"NVIDIA GEFORCE GT 1030 2GB",
        "description"=>"",
        "price"=>"6000",
        "features_img"=>"afox.jpg"
      ]);
      Product::create([
        "name" =>"NVIDIA GEFORCE GTX 1050 4GB",
        "description"=>"",
        "price"=>"8000",
        "features_img"=>"1050.jpg"
      ]);
      Product::create([
        "name" =>"ASUS GEFORCE GTX 1660ti 6GB",
        "description"=>"",
        "price"=>"11000",
        "features_img"=>"dual.jpg"
      ]);
      Product::create([
        "name" =>"SAPPHIRE AMD RADEON RX 590 8GB",
        "description"=>"",
        "price"=>"15000",
        "features_img"=>"pulse.jpg"
      ]);
      Product::create([
        "name" =>"MSI AMD RADEON RX 570 8GB",
        "description"=>"",
        "price"=>"10000",
        "features_img"=>"armour.jpg"
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
      Product::create([
        "name" =>"INTEL BX80684I39100F I3",
        "description"=>"",
        "price"=>"8000",
        "features_img"=>"i3caja.jpg"
      ]);
      Product::create([
        "name" =>"INTEL BX80677I57400 I5",
        "description"=>"",
        "price"=>"13000",
        "features_img"=>"i5caja.jpg"
      ]);
      Product::create([
        "name" =>"INTEL 9700K I7",
        "description"=>"",
        "price"=>"23000",
        "features_img"=>"i7-9700k.jpg"
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
      Product::create([
        "name" =>"RAZER TECLADO MECANICO BLACKWIDOW",
        "description"=>"",
        "price"=>"8700",
        "features_img"=>"BlackWidow.jpg"
      ]);
      Product::create([
        "name" =>"REDRAGON TECLADO MECANICO YAMA",
        "description"=>"",
        "price"=>"5100",
        "features_img"=>"Yama.jpg"
      ]);
      Product::create([
        "name" =>"HYPERX TECLADO MECANICO ALLOY FPS PRO",
        "description"=>"",
        "price"=>"4500",
        "features_img"=>"Alloy.jpg"
      ]);
      Product::create([
        "name" =>"HEWLETT PACKARD TECLADO MECANICO GK200",
        "description"=>"",
        "price"=>"3500",
        "features_img"=>"GK200.jpg"
      ]);
      Product::create([
        "name" =>"SENTEY TECALDO MECANICO GS530",
        "description"=>"",
        "price"=>"2900",
        "features_img"=>"GS530.jpg"
      ]);
      Product::create([
        "name" =>"REDRAGON TECLADO RETROILUMINADO MITRA RGB",
        "description"=>"",
        "price"=>"3800",
        "features_img"=>"ReDragonluz.jpg"
      ]);
      Product::create([
        "name" =>"RAZER TECLADO RETROILUMINADO CYNOSA CHROMA",
        "description"=>"",
        "price"=>"3500",
        "features_img"=>"Ryzer cysa.jpg"
      ]);
      Product::create([
        "name" =>"GENIUS TECLADO RETROILUMINADO SCORPION K10",
        "description"=>"",
        "price"=>"1800",
        "features_img"=>"Genius Scorpion.jpg"
      ]);
      Product::create([
        "name" =>"NOGA TECLADO RETROILUMINADO NKB-560",
        "description"=>"",
        "price"=>"1000",
        "features_img"=>"Noga NKB-560.jpg"
      ]);
      Product::create([
        "name" =>"NOGA TECLADO RETROILUMINADO STORMER NKB-40",
        "description"=>"",
        "price"=>"700",
        "features_img"=>"Noga Stormerluz.jpg"
      ]);
      Product::create([
        "name" =>"GENIUS TECLADO INALAMBRICO SLIMSTAR 8000X",
        "description"=>"",
        "price"=>"1000",
        "features_img"=>"Genius teclado.jpg"
      ]);

      Product::create([
        "name" =>"LOGITECH TECLADO INALAMBRICA K120",
        "description"=>"",
        "price"=>"600",
        "features_img"=>"logitech teclado.jpg"
      ]);
      Product::create([
        "name" =>"STARGRWAVE TECLADO INALAMBRICO SW-CM309",
        "description"=>"",
        "price"=>"500",
        "features_img"=>"teclado inalambrico pc notebook.jpg"
      ]);
  
    }
}
