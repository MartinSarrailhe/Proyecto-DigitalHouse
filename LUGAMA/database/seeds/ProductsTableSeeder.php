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
          'description' => 'Iluminación: LED ROJO
                            Respuesta de frecuencia: 20 Hz - 20 KHz
                            Tamaño del altavoz: 50 mm
                            Sensibilidad del altavoz: 116 dB ± 3 dB
                            Impedancia del altavoz: 32 O
                            Tipo de micrófono: omnidireccional
                            Tamaño del micrófono: 6x5 mm',
          'price' => '2615',
          'category_id' => '1',
          'featured_img' => 'MARVO-AURICULAR-HEADSET-HG9032-7.1-USB-LED-RED.jpg',
        ]);
        Product::create([
          'name' => 'LOGITECH AURICULAR G332 GAMING HEADSET - PS4 - XBOX - PC',
          'description' => 'Respuesta de frecuencia: 20 Hz – 20 kHz
                            Sensibilidad: 107 dB SPL/mW
                            Patrón de captación de micrófono: Cardioide (unidireccional)
                            Requisitos: Windows® 10, Windows 8.1, Windows 7, Mac®, Nintendo Switch™, PS4, Xbox One, tablet o dispositivo móvil',
          'price' => '3200',
          'category_id' => '1',
          'featured_img' => 'LOGITECH-AURICULAR-G433-BLACK-7.1-HEADSET.jpg',
        ]);
        Product::create([
          'name' => 'LOGITECH AURICULAR G433 BLACK 7.1 HEADSET',
          'description' => '',
          'price' => '5400',
          'category_id' => '1',
          'featured_img' => 'LOGITECH-AURICULAR-G433-BLACK-7.1-HEADSET.jpg',
        ]);
        Product::create([
          'name' => 'SAMSUNG AURICULAR VINCHA P.47',
          'description' => 'Bluetooth',
          'price' => '950',
          'category_id' => '1',
          'featured_img' => 'colores.jpg'
        ]);
        Product::create([
          'name' => 'APPLE AURICULAR I7s',
          'description'=> 'Bluetooth',
          'price' => '1000',
          'category_id' => '1',
          'featured_img' => 'i7.jpg'
        ]);
        Product::create([
          'name' =>'TRUE WIRLESS AURICULAR TWINS',
          'description'=>'Bluetooth',
          'price'=>'2000',
          'category_id' => '1',
          'featured_img'=>'twins.jpg'
        ]);
        Product::create([
          'name' => 'XIAOMI AURICULAR REDMI AIRDOTS',
          'description' => 'bluetooh',
          'price' => '3000',
          'category_id' => '1',
          'featured_img' => 'xioami.jpg'
        ]);
        Product::create([
          'name' => 'NOGANET AURICULAR HYDRA',
          'description' => '',
          'price' => '1200',
          'category_id' => '1',
          'featured_img' => 'hydra.jpg'
        ]);
        Product::create([
          'name' => 'KOTION AURICULAR G2600',
          'description' => '',
          'price' => '2000',
          'category_id' => '1',
          'featured_img' => 'camuflados.jpg'
        ]);
        Product::create([
          'name' => 'SONY AURICULAR ABLUE037',
          'description' => '',
          'price' => '3000',
          'category_id' => '1',
          'featured_img' => 'gadnic.jpg'
        ]);
        Product::create([
          'name' => 'LOGITECH AURICULAR G633',
          'description' => '',
          'price' => '2600',
          'category_id' => '1',
          'featured_img' => 'macros.jpg'
        ]);
      //Gabinetes
      Product::create([
        'name' => 'LNZ GABINETE LZ10 RGB',
        'description' => '',
        'price' => '1800',
        'category_id' => '2',
        'featured_img' => 'LNZ-GABINETE-LZ10-RGB.jpg',
      ]);
      Product::create([
        'name' => 'CORSAIR GABINETE CARBIDE SPEC-04 BLACK/YELLOW MID TOWER',
        'description' => '',
        'price' => '4500',
        'category_id' => '2',
        'featured_img' => 'CORSAIR-GABINETE-CARBIDE-SPEC-04-BLACK-YELLOW-MID-TOWER.jpg',
      ]);
      Product::create([
        'name' => 'RIOTORO GABINETE CR1288 PRISM RGB',
        'description' => '',
        'price' => '11000',
        'category_id' => '2',
        'featured_img' => 'RIOTORO-GABINETE-CR1288-PRISM-RGB.jpg',
      ]);
      Product::create([
        'name' => 'MAGNUM TECH GABINETE MT-436B',
        'description' => '',
        'price'=> '1800',
        'category_id' => '2',
        'featured_img'=>'magnum.jpg'
      ]);
      Product::create([
       'name' =>'SENTEY GABINETE X20',
       'description'=> '',
       'price' => '3000',
       'category_id' => '2',
       'featured_img' => 'reader.jpg'
      ]);
      Product::create([
       'name' => 'THERMALTAKE GABINETE VERSA C22',
       'description' => '',
       'price' => '4000',
       'category_id' => '2',
       'featured_img' => 'versa.jpg'
      ]);
      Product::create([
        'name' => 'SENTEY GABINETE GS-6008 II',
        'description' => '',
        'price' => '5300',
        'category_id' => '2',
        'featured_img' => 'sentey.jpg'
      ]);
      Product::create([
        'name' => 'GIGABYTE GABINETE AORUS AC300W',
        'description' => '',
        'price' => '7500',
        'category_id' => '2',
        'featured_img' => 'ac.jpg'
      ]);
      Product::create([
        'name' => 'EVGA GABINETE DG-86',
        'description' => '',
        'price' => '10000',
        'category_id' => '2',
        'featured_img' => 'evga.jpg'
      ]);

      //Memorias RAM
      Product::create([
        'name' => 'KINGSTON 8GB 2400MHZ HYPERX FURY - BLACK DDR4',
        'description' => '',
        'price' => '3200',
        'category_id' => '3',
        'featured_img' => 'KINGSTON-8GB-2400MHZ-HYPERX FURY-BLACK DDR4.jpg',
      ]);
      Product::create([
        'name' => 'CRUCIAL 8GB 2666MHZ BALLISTIX TACTICAL LED RGB DDR4',
        'description' => '',
        'price' => '3200',
        'category_id' => '3',
        'featured_img' => 'CRUCIAL-8GB-2666MHZ-BALLISTIX-TACTICAL-LED-RGB-DDR4.jpg',
      ]);
      Product::create([
        'name' => 'CORSAIR 16GB (2X8) 3200MHZ VENGEANCE PRO RGB WHITE',
        'description' => '',
        'price' => '3200',
        'category_id' => '3',
        'featured_img' => 'CORSAIR-16GB-(2X8)-3200MHZ-VENGEANCE-PRO-RGB-WHITE.jpg',
      ]);
      Product::create([
        'name' => 'KINGSTONE 4GB KVR16LS11',
        'description' => '',
        'price' => '1400',
        'category_id' => '3',
        'featured_img' => 'Kingstone4g1.jpg'
      ]);
      Product::create([
        'name' => 'COLORFUL 8GB CDPC08G3000D4S',
        'description' => '',
        'price' => '3200',
        'category_id' => '3',
        'featured_img' => 'colorful.jpg'
      ]);
      Product::create([
        'name' => 'KINGSTONE 12GB HYPERX PREDATOR',
        'description' => '',
        'price' => '80000',
        'category_id' => '3',
        'featured_img' => 'predator1.jpg'
      ]);


      //Motherboards
      Product::create([
        'name' => 'MSI MOTHER A320M PRO - M2 V2',
        'description' => '',
        'price' => '3200',
        'category_id' => '5',
        'featured_img' => 'MSI-MOTHER-A320M-PRO-M2-V2.jpg',
      ]);
      Product::create([
        'name' => 'GIGABYTE MOTHER B360M AORUS GAMING 3',
        'description' => '',
        'price' => '6790',
        'category_id' => '5',
        'featured_img' => 'GIGABYTE-MOTHER-B360M-AORUS-GAMING-3.jpg',
      ]);
      Product::create([
        'name' => 'MSI X570 MPG GAMING PRO CARBON WIFI',
        'description' => '',
        'price' => '22100',
        'category_id' => '5',
        'featured_img' => 'MSI-X570-MPG-GAMING-PRO-CARBON-WIFI.jpg',
      ]);
      Product::create([
        'name' => 'GIGABYTE MOTHER H310M H',
        'description' => '',
        'price' => '7300',
        'category_id' => '5',
        'featured_img' => 'placagigabyteh3.jpg'
      ]);
      Product::create([
        'name' => 'ASUS MOTHER A320m Am4 C1',
        'description' => '',
        'price' => '8000',
        'category_id' => '5',
        'featured_img' => 'placaAsus.jpg'
      ]);

      //Monitores
      Product::create([
        'name' => 'SENTEY MONITOR 27" 144 HZ CURVO MS-2700 2K',
        'description' => '',
        'price' => '49000',
        'category_id' => '4',
        'featured_img' => 'SENTEY-MONITOR-27-144-HZ-CURVO-MS-2700-2K.jpg',
      ]);
      Product::create([
        'name' => 'ASUS MONITOR 27 " ROG STRIX XG27VQ - CURVO 144Hz 1ms',
        'description' => '',
        'price' => '65200',
        'category_id' => '4',
        'featured_img' => 'ASUS-MONITOR-27-ROG-STRIX-XG27VQ-CURVO-144Hz-1ms.jpg',
      ]);
      Product::create([
        'name' => 'SENTEY MONITOR 22" MS-2150 FULL HD 75HZ 1MS AUDIO HDMI FreeSync',
        'description' => '',
        'price' => '12725',
        'category_id' => '4',
        'featured_img' => 'SENTEY-MONITOR-22-MS-2150-FULL-HD-75HZ-1MS-AUDIO-HDMI-FreeSync.jpg',
      ]);
      Product::create([
        'name' => 'DELL MONITOR ALIENWARE 34" CURVO - 2K - Gsync - 100HZ - AW3418DW',
        'description' => '',
        'price' => '174000',
        'category_id' => '4',
        'featured_img' => '1547_D7M0ZQVUXO.jpg',
      ]);

      //Mouses
      Product::create([
        'name' => 'SENTEY GRYD GAMING GS-3311',
        'description' => '',
        'price' => '22100',
        'category_id' => '6',
        'featured_img' => 'SENTEY-GRYD-GAMING-GS-3311.jpg',
      ]);
      Product::create([
        'name' => 'SENTEY ZONER GAMING GS-3313',
        'description' => '',
        'price' => '22100',
        'category_id' => '6',
        'featured_img' => 'SENTEY-ZONER-GAMING-GS-3313.jpg',
      ]);
      Product::create([
        'name' => 'LOGITECH G502 HERO MOUSE GAMING - RGB',
        'description' => '',
        'price' => '22100',
        'category_id' => '6',
        'featured_img' => 'LOGITECH-G502-HERO-MOUSE-GAMING-RGB.jpg',
      ]);
      Product::create([
        'name' => 'AST MOUSE 224',
        'description'=> '',
        'price' => '400',
        'category_id' => '6',
        'featured_img' => 'ASTin1.jpg'
      ]);
      Product::create([
        'name' => 'LOGITECH MOUSE M170',
        'description' => '',
        'price' => '600',
        'category_id' => '6',
        'featured_img' => 'logitechina1.jpg'
      ]);
      Product::create([
        'name' => 'RAZER MOUSE GAMER DEATHADDER ELITE',
        'description' => '',
        'price' => '4500',
        'category_id' => '6',
        'featured_img' => 'ryzer1.jpg'
      ]);
      Product::create([
        'name' => 'NETMAK MOUSE GAMER FURY',
        'description' => '',
        'price' => '800',
        'category_id' => '6',
        'featured_img' => 'netmak1.jpg'
      ]);

      //Placas de video
      Product::create([
        'name' => 'SENTEY RX 580 4GB DDR5 GAMING - TRIPLE FAN',
        'description' => '',
        'price' => '22100',
        'category_id' => '7',
        'featured_img' => 'SENTEY-RX-580-4GB-DDR5-GAMING-TRIPLE-FAN.jpg',
      ]);
      Product::create([
        'name' => 'ASUS RTX 2060 ROG STRIX 6GB DDR6',
        'description' => '',
        'price' => '22100',
        'category_id' => '7',
        'featured_img' => 'ASUS-RTX-2060-ROG-STRIX-6GB-DDR6.jpg',
      ]);
      Product::create([
        'name' => 'GIGABYTE RTX 2070 SUPER WINDFORCE OC 8GB GDDR6',
        'description' => '',
        'price' => '22100',
        'category_id' => '7',
        'featured_img' => 'GIGABYTE-RTX-2070-SUPER-WINDFORCE-OC-8GB-GDDR6.jpg',
      ]);
      Product::create([
        'name' => 'NVIDIA GEFORCE GT 1030 2GB',
        'description' => '',
        'price' => '6000',
        'category_id' => '7',
        'featured_img' => 'afox.jpg'
      ]);
      Product::create([
        'name' => 'NVIDIA GEFORCE GTX 1050 4GB',
        'description' => '',
        'price' => '8000',
        'category_id' => '7',
        'featured_img' => '1050.jpg'
      ]);
      Product::create([
        'name' => 'ASUS GEFORCE GTX 1660ti 6GB',
        'description' => '',
        'price' => '11000',
        'category_id' => '7',
        'featured_img' => 'dual.jpg'
      ]);
      Product::create([
        'name' => 'SAPPHIRE AMD RADEON RX 590 8GB',
        'description' => '',
        'price' => '15000',
        'category_id' => '7',
        'featured_img' => 'pulse.jpg'
      ]);
      Product::create([
        'name' => 'MSI AMD RADEON RX 570 8GB',
        'description' => '',
        'price' => '10000',
        'category_id' => '7',
        'featured_img' => 'armour.jpg'
      ]);

      //Procesadores
      Product::create([
        'name' => 'INTEL COFFEE LAKE CORE I3 8100',
        'description' => '',
        'price' => '22100',
        'category_id' => '8',
        'featured_img' => 'INTEL-COFFEE-LAKE-CORE-I3-8100.jpg',
      ]);
      Product::create([
        'name' => 'INTEL COFFEE LAKE CORE I5 8400',
        'description' => '',
        'price' => '22100',
        'category_id' => '8',
        'featured_img' => 'INTEL-COFFEE-LAKE-CORE-I5-8400.jpg',
      ]);
      Product::create([
        'name' => 'INTEL COFFEE LAKE CORE I9 9900K',
        'description' => '',
        'price' => '22100',
        'category_id' => '8',
        'featured_img' => 'INTEL-COFFEE-LAKE-CORE-I9-9900K.jpg',
      ]);
      Product::create([
        'name' => 'INTEL BX80684I39100F I3',
        'description' => '',
        'price' => '8000',
        'category_id' => '8',
        'featured_img' => 'i3caja.jpg'
      ]);
      Product::create([
        'name' => 'INTEL BX80677I57400 I5',
        'description' => '',
        'price' => '13000',
        'category_id' => '8',
        'featured_img' => 'i5caja.jpg'
      ]);
      Product::create([
        'name' => 'INTEL 9700K I7',
        'description' => '',
        'price' => '23000',
        'category_id' => '8',
        'featured_img' => 'i7-9700k.jpg'
      ]);
      //Teclados
      Product::create([
        'name' => 'SENTEY L-MEKANO GAMING - Mecanico BLACK SWITCH',
        'description' => '',
        'price' => '22100',
        'category_id' => '9',
        'featured_img' => 'SENTEY-L-MEKANO-GAMING.jpg',
      ]);
      Product::create([
        'name' => 'LOGITECH G413 CARBON - RED',
        'description' => '',
        'price' => '22100',
        'featured_img' => 'LOGITECH-G413-CARBON-RED.jpg',
        'category_id' => '9',
      ]);
      Product::create([
        'name' => 'CORSAIR K70 RGB MK.2 MECANICO — CHERRY® MX RED',
        'description' => '',
        'price' => '22100',
        'category_id' => '9',
        'featured_img' => 'CORSAIR-K70-RGB-MK.2-MECANICO.jpg',
      ]);
      Product::create([
        'name' => 'RAZER TECLADO MECANICO BLACKWIDOW',
        'description' => '',
        'price' => '8700',
        'category_id' => '9',
        'featured_img' => 'BlackWidow.jpg'
      ]);
      Product::create([
        'name' => 'REDRAGON TECLADO MECANICO YAMA',
        'description' => '',
        'price' => '5100',
        'category_id' => '9',
        'featured_img' => 'Yama.jpg'
      ]);
      Product::create([
        'name' => 'HYPERX TECLADO MECANICO ALLOY FPS PRO',
        'description' => '',
        'price' => '4500',
        'category_id' => '9',
        'featured_img' => 'Alloy.jpg'
      ]);
      Product::create([
        'name' => 'HEWLETT PACKARD TECLADO MECANICO GK200',
        'description' => '',
        'price' => '3500',
        'category_id' => '9',
        'featured_img' => 'GK200.jpg'
      ]);
      Product::create([
        'name' => 'SENTEY TECALDO MECANICO GS530',
        'description' => '',
        'price' =>' 2900',
        'category_id' => '9',
        'featured_img' => 'GS530.jpg'
      ]);
      Product::create([
        'name' => 'REDRAGON TECLADO RETROILUMINADO MITRA RGB',
        'description' => '',
        'price' => '3800',
        'category_id' => '9',
        'featured_img' => 'ReDragonluz.jpg'
      ]);
      Product::create([
        'name' => 'RAZER TECLADO RETROILUMINADO CYNOSA CHROMA',
        'description' => '',
        'price' => '3500',
        'category_id' => '9',
        'featured_img' => 'Ryzer cysa.jpg'
      ]);
      Product::create([
        'name' => 'GENIUS TECLADO RETROILUMINADO SCORPION K10',
        'description' => '',
        'price' => '1800',
        'category_id' => '9',
        'featured_img' => 'Genius Scorpion.jpg'
      ]);
      Product::create([
        'name' => 'NOGA TECLADO RETROILUMINADO NKB-560',
        'description' => '',
        'price' => '1000',
        'category_id' => '9',
        'featured_img' => 'Noga NKB-560.jpg'
      ]);
      Product::create([
        'name' => 'NOGA TECLADO RETROILUMINADO STORMER NKB-40',
        'description' => '',
        'price' => '700',
        'category_id' => '9',
        'featured_img' => 'Noga Stormerluz.jpg'
      ]);
      Product::create([
        'name' => 'GENIUS TECLADO INALAMBRICO SLIMSTAR 8000X',
        'description' => '',
        'price' => '1000',
        'category_id' => '9',
        'featured_img' => 'Genius teclado.jpg'
      ]);

      Product::create([
        'name' => 'LOGITECH TECLADO INALAMBRICA K120',
        'description' => '',
        'price' => '600',
        'category_id' => '9',
        'featured_img' => 'logitech teclado.jpg'
      ]);

      Product::create([
        'name' => 'STARGRWAVE TECLADO INALAMBRICO SW-CM309',
        'description' => '',
        'price' => '500',
        'category_id' => '9',
        'featured_img' => 'teclado inalambrico pc notebook.jpg'
      ]);

    }
}
