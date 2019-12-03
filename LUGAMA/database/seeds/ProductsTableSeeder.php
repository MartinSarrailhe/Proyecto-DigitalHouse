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


      //Motherboards
      Product::create([
        'name' => 'MSI MOTHER A320M PRO - M2 V2',
        'description' => 'Admite AMD® Ryzen de 1ra y 2da generación / Ryzen ™ con Radeon ™ Vega Graphics / Athlon ™ con Radeon ™ Vega Graphics y procesadores A-series / Athlon ™ X4 para Socket AM4. DDR4 Boost Tecnología avanzada para entregar señales de datos puros para el mejor rendimiento y estabilidad de juego. DDR4 Boost: diseño de PCB DDR4 totalmente aislado, protegido y optimizado para darle a su memoria DDR4 un aumento de rendimiento.',
        'price' => '3200',
        'category_id' => '1',
        'featured_img' => 'MSI-MOTHER-A320M-PRO-M2-V2.jpg',
      ]);
      Product::create([
        'name' => 'GIGABYTE MOTHER B360M AORUS GAMING 3',
        'description' => 'Support for 8th Generation Intel® Core™ i7 processors/Intel® Core™ i5 processors/ Intel® Core™ i3 processors/Intel® Pentium®processors/Intel® Celeron® processors in the LGA1151 package. 4 x DDR4 DIMM sockets supporting up to 64 GB of system memory. Dual channel memory architecture.',
        'price' => '6790',
        'category_id' => '1',
        'featured_img' => 'GIGABYTE-MOTHER-B360M-AORUS-GAMING-3.jpg',
      ]);
      Product::create([
        'name' => 'MSI X570 MPG GAMING PRO CARBON WIFI',
        'description' => 'Equipada con el chipset AMD X570, la placa base MSI MPG X570 GAMING PRO CARBON WIFI con su socket AM4 está diseñada para alojar procesadores AMD Ryzen de tercera generación y sigue siendo compatible con procesadores de segunda generación.',
        'price' => '22100',
        'category_id' => '1',
        'featured_img' => 'MSI-X570-MPG-GAMING-PRO-CARBON-WIFI.jpg',
      ]);
      Product::create([
        'name' => 'GIGABYTE MOTHER H310M H',
        'description' => '2 zócalos DIMM DDR4 que admiten hasta 32 GB de memoria del sistema. Arquitectura de memoria de doble canal. Soporte para módulos de memoria Extreme Memory Profile (XMP).',
        'price' => '7300',
        'category_id' => '1',
        'featured_img' => 'placagigabyteh3.jpg'
      ]);
      Product::create([
        'name' => 'ASUS MOTHER A320m Am4 C1',
        'description' => '2 x conectores DIMM DDR4 que admiten hasta 32 GB de memoria del sistema. Arquitectura de memoria de doble canal. Soporte para módulos de memoria DDR4. Soporte para módulos de memoria Extreme Memory Profile (XMP).',
        'price' => '8000',
        'category_id' => '1',
        'featured_img' => 'placaAsus.jpg'
      ]);

      //Procesadores
      Product::create([
        'name' => 'INTEL COFFEE LAKE CORE I3 8100',
        'description' => 'Con una memoria RAM DDR4 y una capacidad máxima de hasta 64 GB, aprovecharás todos los beneficios de tu computadora. Su potencia de 3.6 GHz optimizará todos los procesos que implementes de manera simultánea. Por otro lado, la memoria caché de 6 MB elevará el rendimiento de las aplicaciones instaladas y acelerará la memoria RAM y el disco duro. Con 4 núcleos disponibles, ejecutarás tareas con gran velocidad y fluidez.',
        'price' => '22100',
        'category_id' => '2',
        'featured_img' => 'INTEL-COFFEE-LAKE-CORE-I3-8100.jpg',
      ]);
      Product::create([
        'name' => 'INTEL COFFEE LAKE CORE I5 8400',
        'description' => 'Experimente un rendimiento potente y una computación sin dificultades para realizar sus tareas diarias. Esto incluye productividad mejorada, transmisión fluida y entretenimiento fenomenal en HD con una visualización envolvente en 4K y 360 grados en pantalla completa.',
        'price' => '22100',
        'category_id' => '2',
        'featured_img' => 'INTEL-COFFEE-LAKE-CORE-I5-8400.jpg',
      ]);
      Product::create([
        'name' => 'INTEL COFFEE LAKE CORE I9 9900K',
        'description' => 'Frecuencia mínima de reloj: 3.6 GHz. Tipos de memoria RAM soportadas: DDR4',
        'price' => '22100',
        'category_id' => '2',
        'featured_img' => 'INTEL-COFFEE-LAKE-CORE-I9-9900K.jpg',
      ]);
      Product::create([
        'name' => 'INTEL BX80684I39100F I3',
        'description' => 'PROCESADOR CPU INTEL CORE I3 9100F 3.6 GHZ BX80684I39100F',
        'price' => '8000',
        'category_id' => '2',
        'featured_img' => 'i3caja.jpg'
      ]);
      Product::create([
        'name' => 'INTEL BX80677I57400 I5',
        'description' => 'Cantidad de núcleos 4. Frecuencia básica del procesador 3.0 GHz',
        'price' => '13000',
        'category_id' => '2',
        'featured_img' => 'i5caja.jpg'
      ]);
      Product::create([
        'name' => 'INTEL 9700K I7',
        'description' => 'Capacidad máxima soportada de la memoria RAM: 64 GB',
        'price' => '23000',
        'category_id' => '2',
        'featured_img' => 'i7-9700k.jpg'
      ]);

      //Memorias RAM
      Product::create([
        'name' => 'KINGSTON 8GB 2400MHZ HYPERX FURY - BLACK DDR4',
        'description' => 'Potenciá tu PC. Con su tecnología DDR4 podrás mejorar el desempeño de tu equipo, ya que aumentará la fluidez y la velocidad en la transferencia de datos. ¡Optimizá al máximo el rendimiento de tu computadora y reducí el consumo energético!',
        'price' => '3200',
        'category_id' => '3',
        'featured_img' => 'KINGSTON-8GB-2400MHZ-HYPERX FURY-BLACK DDR4.jpg',
      ]);
      Product::create([
        'name' => 'CRUCIAL 8GB 2666MHZ BALLISTIX TACTICAL LED RGB DDR4',
        'description' => 'Potenciá tu PC. Con su tecnología DDR4 podrás mejorar el desempeño de tu equipo, ya que aumentará la fluidez y la velocidad en la transferencia de datos. ¡Optimizá al máximo el rendimiento de tu computadora y reducí el consumo energético!',
        'price' => '3200',
        'category_id' => '3',
        'featured_img' => 'CRUCIAL-8GB-2666MHZ-BALLISTIX-TACTICAL-LED-RGB-DDR4.jpg',
      ]);
      Product::create([
        'name' => 'CORSAIR 16GB (2X8) 3200MHZ VENGEANCE PRO RGB WHITE',
        'description' => 'Potenciá tu PC. Con su tecnología DDR4 podrás mejorar el desempeño de tu equipo, ya que aumentará la fluidez y la velocidad en la transferencia de datos. ¡Optimizá al máximo el rendimiento de tu computadora y reducí el consumo energético!',
        'price' => '3200',
        'category_id' => '3',
        'featured_img' => 'CORSAIR-16GB-(2X8)-3200MHZ-VENGEANCE-PRO-RGB-WHITE.jpg',
      ]);
      Product::create([
        'name' => 'KINGSTONE 4GB KVR16LS11',
        'description' => 'Potenciá tu PC. Con su tecnología DDR4 podrás mejorar el desempeño de tu equipo, ya que aumentará la fluidez y la velocidad en la transferencia de datos. ¡Optimizá al máximo el rendimiento de tu computadora y reducí el consumo energético!',
        'price' => '1400',
        'category_id' => '3',
        'featured_img' => 'Kingstone4g1.jpg'
      ]);
      Product::create([
        'name' => 'COLORFUL 8GB CDPC08G3000D4S',
        'description' => 'Potenciá tu PC. Con su tecnología DDR4 podrás mejorar el desempeño de tu equipo, ya que aumentará la fluidez y la velocidad en la transferencia de datos. ¡Optimizá al máximo el rendimiento de tu computadora y reducí el consumo energético!',
        'price' => '3200',
        'category_id' => '3',
        'featured_img' => 'colorful.jpg'
      ]);
      Product::create([
        'name' => 'KINGSTONE 12GB HYPERX PREDATOR',
        'description' => 'Potenciá tu PC. Con su tecnología DDR4 podrás mejorar el desempeño de tu equipo, ya que aumentará la fluidez y la velocidad en la transferencia de datos. ¡Optimizá al máximo el rendimiento de tu computadora y reducí el consumo energético!',
        'price' => '80000',
        'category_id' => '3',
        'featured_img' => 'predator1.jpg'
      ]);

      //Gabinetes
      Product::create([
        'name' => 'LNZ GABINETE LZ10 RGB',
        'description' => 'Factor Mother: ITX, ATX, M-ATX.Con ventana: Sí. Tipo de ventana: Acrílico. Colores: Negro. USB 2.0 Frontal: 1. USB 3.0 Frontal: 1. Audio HD frontal: Sí. Ancho: 190 mm. Alto: 340 mm. Profundidad: 417 mm. Largo máximo VGA: 325 mm. Altura Máxima del Cooler CPU: 155 mm. Unidades 2.5 soportadas: 2. Unidades 3.5 soportadas: 1.',
        'price' => '1800',
        'category_id' => '4',
        'featured_img' => 'LNZ-GABINETE-LZ10-RGB.jpg',
      ]);
      Product::create([
        'name' => 'CORSAIR GABINETE CARBIDE SPEC-04 BLACK/YELLOW MID TOWER',
        'description' => 'Maximum GPU Length 370mm. Maximum PSU Length 225mm. Maximum CPU Cooler Height 150mm. Case Expansion Slots 7. Case Drive Bays (x3) 3.5in (x2) 2.5in. Case Form Factor Mid-Tower. Case Windowed Acrylic. iCUE enabled No',
        'price' => '4500',
        'category_id' => '4',
        'featured_img' => 'CORSAIR-GABINETE-CARBIDE-SPEC-04-BLACK-YELLOW-MID-TOWER.jpg',
      ]);
      Product::create([
        'name' => 'RIOTORO GABINETE CR1288 PRISM RGB',
        'description' => 'Fan Speed Control. RGB Control. Internal Expansion Bays: 3.5" x4 / 2.5" x4. Expansion Slots. USB Ports 2 x USB 3.0',
        'price' => '11000',
        'category_id' => '4',
        'featured_img' => 'RIOTORO-GABINETE-CR1288-PRISM-RGB.jpg',
      ]);
      Product::create([
        'name' => 'MAGNUM TECH GABINETE MT-436B',
        'description' => 'Tamaño del Gabinete: Largo: 414mm x Ancho: 200mm x Alto: 416mm. Peso Neto: 3.0 Kg. Tipos de Placa Base compatibles: ATX – MicroATX. Incluye ventiladores: 1 con luz red.',
        'price'=> '1800',
        'category_id' => '4',
        'featured_img'=>'magnum.jpg'
      ]);
      Product::create([
       'name' =>'SENTEY GABINETE X20',
       'description'=> 'Motherboard Compatibles ATX, M-ATX. Tamaño máximo VGA 360mm. Tamaño máximo CPU cooler 150mm. Motherboard Tray: No. Soporte Watercooling: Yes. Sistema cables ocultos: Si.',
       'price' => '3000',
       'category_id' => '4',
       'featured_img' => 'reader.jpg'
      ]);
      Product::create([
       'name' => 'THERMALTAKE GABINETE VERSA C22',
       'description' => 'Soporte motherboards: MINI-ITX, M-ATX, ATX. Puertos: USB 3.0 x 2, USB 2.0 x 2, HD Audio x 1, LED Control. Soporte Ventiladores: Frente 2 x 120mm o 1 x 140mm / Arriba 2 x 120mm / Atras 1 x 120mm. Soporte radiador: Frente 1 x 240mm o 1 x 140mm / Arriba 1 x 240.',
       'price' => '4000',
       'category_id' => '4',
       'featured_img' => 'versa.jpg'
      ]);
      Product::create([
        'name' => 'SENTEY GABINETE GS-6008 II',
        'description' => 'Motherboard Compatibles: ATX, M-ATX. Tamaño máximo VGA: 340mm. Tamaño máximo CPU cooler: 150mm. Soporte Watercooling: Si. Motherboard Tray: No. Sistema cables ocultos: Si.',
        'price' => '5300',
        'category_id' => '4',
        'featured_img' => 'sentey.jpg'
      ]);
      Product::create([
        'name' => 'GIGABYTE GABINETE AORUS AC300W',
        'description' => 'Dimensiones H469 * W211 * D458 mm. Panel de E / S HDMI x1. USB 3.0 x 2. Tipo de fuente de alimentación ATX estándar (no incluido). Máxima compatibilidad Altura de la CPU: 170 mm.',
        'price' => '7500',
        'category_id' => '4',
        'featured_img' => 'ac.jpg'
      ]);
      Product::create([
        'name' => 'EVGA GABINETE DG-86',
        'description' => 'Ruta de flujo de aire optimizada. Ruta de enfriamiento dedicada para tarjetas gráficas, que brinda el mejor rendimiento de enfriamiento y mayores velocidades de reloj. Soporte robusto de enfriamiento de agua. Los puntos de corte dedicados para la administración de cables le permiten mantener limpio el diseño de su sistema, mejorando la apariencia y el flujo de aire.',
        'price' => '10000',
        'category_id' => '4',
        'featured_img' => 'evga.jpg'
      ]);

      //Placas de video
      Product::create([
        'name' => 'SENTEY RX 580 4GB DDR5 GAMING - TRIPLE FAN',
        'description' => 'Fuente: AEROCOOL 600W KCAS 80 PLUS BRONZE',
        'price' => '22100',
        'category_id' => '5',
        'featured_img' => 'SENTEY-RX-580-4GB-DDR5-GAMING-TRIPLE-FAN.jpg',
      ]);
      Product::create([
        'name' => 'ASUS RTX 2060 ROG STRIX 6GB DDR6',
        'description' => 'Frecuencia GPU: Boost Clock : 1830 MHz - Base Clock : 1365 MHz. Memoria de video: GDDR6 6GB - 192 bits - 14000Mhz',
        'price' => '22100',
        'category_id' => '5',
        'featured_img' => 'ASUS-RTX-2060-ROG-STRIX-6GB-DDR6.jpg',
      ]);
      Product::create([
        'name' => 'GIGABYTE RTX 2070 SUPER WINDFORCE OC 8GB GDDR6',
        'description' => 'Reloj de la memoria: 14000 MHz. Tamaño de la memoria: 8 GB. Tipo de memoria: GDDR6.',
        'price' => '22100',
        'category_id' => '5',
        'featured_img' => 'GIGABYTE-RTX-2070-SUPER-WINDFORCE-OC-8GB-GDDR6.jpg',
      ]);
      Product::create([
        'name' => 'NVIDIA GEFORCE GT 1030 2GB',
        'description' => 'Capacidad : 2 Gb. Memoria : DDR4.',
        'price' => '6000',
        'category_id' => '5',
        'featured_img' => 'afox.jpg'
      ]);
      Product::create([
        'name' => 'NVIDIA GEFORCE GTX 1050 4GB',
        'description' => 'Frecuencia de reloj normal (MHz) 1290. Frecuencia acelerada (MHz) 1392. Especif. de la memoria: Frecuencia de la 7 Gb/s. Config. de memoria estándar 4 GB GDDR5. Ancho de la interfaz de memoria 128 bits. Ancho de banda de memoria (GB/s) 112',
        'price' => '8000',
        'category_id' => '5',
        'featured_img' => '1050.jpg'
      ]);
      Product::create([
        'name' => 'ASUS GEFORCE GTX 1660 ti 6GB',
        'description' => 'Motorizado por NVIDIA Turing, el ASUS Dual fan GTX 1660Ti ofrece un excelente rendimiento de overclocking con 6GB de memoria GDDR6 y ventiladores patentados de pala en una cubierta diseñada a coincida con las ASUS base de ASUS . GPU Tweak II con XSplit Gamecaster brinda lo último en monitoreo y control transmisión, mientras Súper Aleación Energía II garantiza una entrega de potencia precisa. ESPECIFICACIONES DEL PRODUCTO: Marca : ASUS | MPN: 90YV0CT2-M0AA00 | Peso : 2lb | Altura : 8.220in | Largo: 8.220in | Ancho : 8.220in',
        'price' => '11000',
        'category_id' => '5',
        'featured_img' => 'dual.jpg'
      ]);
      Product::create([
        'name' => 'SAPPHIRE AMD RADEON RX 590 8GB',
        'description' => 'Tamaño de la memoria / Bus: 8GB GDDR5 / 256-bit. Resolución: DisplayPort: 5120 × 2880 a 60Hz, HDMI: 4096 × 2160 a 60Hz, DVI: 2560x1600 a 60Hz.',
        'price' => '15000',
        'category_id' => '5',
        'featured_img' => 'pulse.jpg'
      ]);
      Product::create([
        'name' => 'MSI AMD RADEON RX 570 8GB',
        'description' => 'Capacidad : 4 Gb. Memoria : DDR5. Bits : 256.',
        'price' => '10000',
        'category_id' => '5',
        'featured_img' => 'armour.jpg'
      ]);


      //Monitores
      Product::create([
        'name' => 'SENTEY MONITOR 27" 144 HZ CURVO MS-2700 2K',
        'description' => 'Angulo de Visión R/L 170 y U/D 160 (Typ.). Relación de Aspecto 16:9. Frecuencia Actualización 165hz. Resolucion Maxima 1920*1080px (Full HD).',
        'price' => '49000',
        'category_id' => '6',
        'featured_img' => 'SENTEY-MONITOR-27-144-HZ-CURVO-MS-2700-2K.jpg',
      ]);
      Product::create([
        'name' => 'ASUS MONITOR 27 " ROG STRIX XG27VQ - CURVO 144Hz 1ms',
        'description' => 'Sus 27" te resultarán de gran comodidad para estudiar, trabajar o ver una película en tus tiempos de ocio. Asimismo, su resolución de 1920 x 1080 píxeles te permitirá disfrutar de momentos únicos gracias a una imagen de calidad. Por último, su tiempo de respuesta de un milisegundo lo hace ideal para gamers y cinéfilos porque será capaz de mostrar imágenes en movimiento sin halos o bordes borrosos.',
        'price' => '65200',
        'category_id' => '6',
        'featured_img' => 'ASUS-MONITOR-27-ROG-STRIX-XG27VQ-CURVO-144Hz-1ms.jpg',
      ]);
      Product::create([
        'name' => 'SENTEY MONITOR 22" MS-2150 FULL HD 75HZ 1MS AUDIO HDMI FreeSync',
        'description' => 'Relación de Aspecto: 16:9. Resolucion Maxima: 1920*1080px (Full HD)',
        'price' => '12725',
        'category_id' => '6',
        'featured_img' => 'SENTEY-MONITOR-22-MS-2150-FULL-HD-75HZ-1MS-AUDIO-HDMI-FreeSync.jpg',
      ]);
      Product::create([
        'name' => 'DELL MONITOR ALIENWARE 34" CURVO - 2K - Gsync - 100HZ - AW3418DW',
        'description' => 'Native Resolution: WQHD 3440 x 1440 at 120 Hz. Curved Screen: Yes (1900R). ',
        'price' => '174000',
        'category_id' => '6',
        'featured_img' => '1547_D7M0ZQVUXO.jpg',
      ]);

      //Mouses
      Product::create([
        'name' => 'SENTEY GRYD GAMING GS-3311',
        'description' => 'El diseño de retroiluminación en colores, mejora la experiencia como usuario, enalteciendo el entorno para crear una atmosfera ideal. Un diseño único, que cuenta con iluminación RGB de LED y efectos de luz para elegir por software.',
        'price' => '22100',
        'category_id' => '7',
        'featured_img' => 'SENTEY-GRYD-GAMING-GS-3311.jpg',
      ]);
      Product::create([
        'name' => 'SENTEY ZONER GAMING GS-3313',
        'description' => 'El diseño de retroiluminación en colores, mejora la experiencia como usuario, enalteciendo el entorno para crear una atmosfera ideal. Un diseño único, que cuenta con iluminación RGB de LED y efectos de luz para elegir por software.',
        'price' => '22100',
        'category_id' => '7',
        'featured_img' => 'SENTEY-ZONER-GAMING-GS-3313.jpg',
      ]);
      Product::create([
        'name' => 'LOGITECH G502 HERO MOUSE GAMING - RGB',
        'description' => 'Sensor: HERO™. Resolución: 100 – 16.000 dpi. Sin suavizado/aceleración/filtros.',
        'price' => '22100',
        'category_id' => '7',
        'featured_img' => 'LOGITECH-G502-HERO-MOUSE-GAMING-RGB.jpg',
      ]);
      Product::create([
        'name' => 'AST MOUSE 224',
        'description'=> 'Rango de operacion: Hasta 10m. Resolucion de trackeo: 1200 dpi. Necesita 2 pilas AAA (no incluidas).',
        'price' => '400',
        'category_id' => '7',
        'featured_img' => 'ASTin1.jpg'
      ]);
      Product::create([
        'name' => 'LOGITECH MOUSE M170',
        'description' => 'Sólida conexión inalámbrica estable a distancias de hasta 10 metros. Sin apenas retrasos ni interferencias, el juego y el trabajo serán más previsibles.',
        'price' => '600',
        'category_id' => '7',
        'featured_img' => 'logitechina1.jpg'
      ]);
      Product::create([
        'name' => 'RAZER MOUSE GAMER DEATHADDER ELITE',
        'description' => 'Equipado con el nuevo sensor óptico para Esports que ofrece 16.000 ppp reales y una capacidad de rastreo de 450 pulgadas por segundo (IPS), el Razer DeathAdder Elite te da la ventaja definitiva al disponer del sensor más rápido del mercado. Diseñado para redefinir los estándares de velocidad y precisión, este increíble sensor de ratón deja muy atrás a la competencia con una exactitud de resolución del 99,4%. De esta manera, podrás disparar y acabar con los enemigos con una puntería fantástica.',
        'price' => '4500',
        'category_id' => '7',
        'featured_img' => 'ryzer1.jpg'
      ]);
      Product::create([
        'name' => 'NETMAK MOUSE GAMER FURY',
        'description' => 'Boton DPI Altamente sensible en 4 niveles hasta 2400 dpi. Teclas de Acceso rápido configurable (Incluye drivers).',
        'price' => '800',
        'category_id' => '7',
        'featured_img' => 'netmak1.jpg'
      ]);



      //Teclados
      Product::create([
        'name' => 'SENTEY L-MEKANO GAMING - Mecanico BLACK SWITCH',
        'description' => 'Tipo de Cable Extra grueso trensado de alta resistencia. Dimensión (mm) 453 * 137 * 44 mm.',
        'price' => '22100',
        'category_id' => '8',
        'featured_img' => 'SENTEY-L-MEKANO-GAMING.jpg',
      ]);
      Product::create([
        'name' => 'LOGITECH G413 CARBON - RED',
        'description' => 'Teclado mecánico con retroiluminación para gaming. El G413 se ha concebido, diseñado y creado para ofrecer rendimiento avanzado con las funciones justas. La ligera cubierta superior de aleación de aluminio 5052 alberga una carcasa extremadamente compacta.',
        'price' => '22100',
        'featured_img' => 'LOGITECH-G413-CARBON-RED.jpg',
        'category_id' => '8',
      ]);
      Product::create([
        'name' => 'CORSAIR K70 RGB MK.2 MECANICO — CHERRY® MX RED',
        'description' => 'Mecánico.',
        'price' => '22100',
        'category_id' => '8',
        'featured_img' => 'CORSAIR-K70-RGB-MK.2-MECANICO.jpg',
      ]);
      Product::create([
        'name' => 'RAZER TECLADO MECANICO BLACKWIDOW',
        'description' => 'Mecánico.',
        'price' => '8700',
        'category_id' => '8',
        'featured_img' => 'BlackWidow.jpg'
      ]);
      Product::create([
        'name' => 'REDRAGON TECLADO MECANICO YAMA',
        'description' => 'Este teclado en español tiene todo lo necesario: Marco sólido de aluminio para proveer durabilidad y estabilidad, rueda para controlar el volumen de aluminio y multimedia dedicadas, puerto adicional USB 2.1 Pass Through ubicado en la parte posterior del teclado, reposamuñecas desmontable y 12 teclas G completamente configurables.',
        'price' => '5100',
        'category_id' => '8',
        'featured_img' => 'Yama.jpg'
      ]);
      Product::create([
        'name' => 'HYPERX TECLADO MECANICO ALLOY FPS PRO',
        'description' => 'Este teclado HyperX de alto rendimiento hará que disfrutes de horas ilimitadas de juego. Está diseñado especialmente para que puedas expresar tanto tus habilidades como tu estilo. Mejorá muchísimo tu experiencia de gaming, ya seas un aficionado o todo un experto, y hacé que tus jugadas alcancen otro nivel.',
        'price' => '4500',
        'category_id' => '8',
        'featured_img' => 'Alloy.jpg'
      ]);
      Product::create([
        'name' => 'HEWLETT PACKARD TECLADO MECANICO GK200',
        'description' => 'El Sentey GS510 es un teclado mecánico retroiluminado diseñado con la más alta calidad de componentes. Los switches que utiliza son los Outemu Red diseñado para juegos. Posee 87 teclas de doble inyección y posee la tecnología anti-ghosting. Posee 11 modos de iluminación que se pueden seleccionar con una simple combinación de teclas dentro del teclado. Además posee la posibilidad de crear un modo de iluminación personalizado según lo que queramos. Por último, este teclado cuenta con la letra Ñ.',
        'price' => '3500',
        'category_id' => '8',
        'featured_img' => 'GK200.jpg'
      ]);
      Product::create([
        'name' => 'SENTEY TECALDO MECANICO GS530',
        'description' => '104 teclas (doble inyección). Retroiluminación LED.',
        'price' =>' 2900',
        'category_id' => '8',
        'featured_img' => 'GS530.jpg'
      ]);
      Product::create([
        'name' => 'REDRAGON TECLADO RETROILUMINADO MITRA RGB',
        'description' => 'El corazón de los teclados Redragon está equipado con tecnología Outemu, en este caso, los switches Outemu Blue, de click audible y con activación al ejercer solo 50 gramos de fuerza sobre la tecla, hacen del Mitra un teclado que acompaña cualquier escritura o juego.',
        'price' => '3800',
        'category_id' => '8',
        'featured_img' => 'ReDragonluz.jpg'
      ]);
      Product::create([
        'name' => 'RAZER TECLADO RETROILUMINADO CYNOSA CHROMA',
        'description' => 'Incluye teclas retroiluminadas programables de manera individual y 16,8 millones de opciones de color. Elige entre los efectos de iluminación predeterminados o crea tu propia combinación de colores para disfrutar de una experiencia de juego totalmente a medida, fácil de configurar a través de Razer Synapse 3',
        'price' => '3500',
        'category_id' => '8',
        'featured_img' => 'Ryzer cysa.jpg'
      ]);
      Product::create([
        'name' => 'GENIUS TECLADO RETROILUMINADO SCORPION K10',
        'description' => 'Semi-Mecánico',
        'price' => '1800',
        'category_id' => '8',
        'featured_img' => 'Genius Scorpion.jpg'
      ]);
      Product::create([
        'name' => 'NOGA TECLADO RETROILUMINADO NKB-560',
        'description' => 'Construído con Sistema de Doble Inyección y Ultra-Silencioso. Teclas elevadas y reforzadas para Gamers. 12 Funciones Multimedia presionando FN.',
        'price' => '1000',
        'category_id' => '8',
        'featured_img' => 'Noga NKB-560.jpg'
      ]);
      Product::create([
        'name' => 'NOGA TECLADO RETROILUMINADO STORMER NKB-40',
        'description' => 'Teclado Gamer ideal para jugadores de multiplayer on-line, rpg, first person shooter y cualquier juego con interface basada en teclado + mouse disponible en el mercado.',
        'price' => '700',
        'category_id' => '8',
        'featured_img' => 'Noga Stormerluz.jpg'
      ]);
      Product::create([
        'name' => 'GENIUS TECLADO INALAMBRICO SLIMSTAR 8000X',
        'description' => 'L NUEVO SLIMSTAR 8006 ES UN NUEVO COMBO INALAMBRICO DE GENIUS QUE APORTA SIMPLICIDAD, MODA Y ELEGANCIA A SU ESTILO DE VIDA.',
        'price' => '1000',
        'category_id' => '8',
        'featured_img' => 'Genius teclado.jpg'
      ]);

      Product::create([
        'name' => 'LOGITECH TECLADO INALAMBRICA K120',
        'description' => 'Es resistente, cómodo, elegante y sencillo a la vez. Un teclado USB que te permite escribir cómodamente durante mucho tiempo.',
        'price' => '600',
        'category_id' => '8',
        'featured_img' => 'logitech teclado.jpg'
      ]);

      Product::create([
        'name' => 'STARGRWAVE TECLADO INALAMBRICO SW-CM309',
        'description' => 'Compatible con PS4 / WIN 2000 / XP / Vista / 7 / 8 / 10. 2.4G wireless.',
        'price' => '500',
        'category_id' => '8',
        'featured_img' => 'teclado inalambrico pc notebook.jpg'
      ]);

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
          'category_id' => '9',
          'featured_img' => 'MARVO-AURICULAR-HEADSET-HG9032-7.1-USB-LED-RED.jpg',
        ]);
        Product::create([
          'name' => 'LOGITECH AURICULAR G332 GAMING HEADSET - PS4 - XBOX - PC',
          'description' => 'Respuesta de frecuencia: 20 Hz – 20 kHz.
                            Sensibilidad: 107 dB SPL/mW.
                            Patrón de captación de micrófono: Cardioide (unidireccional).
                            Requisitos: Windows® 10, Windows 8.1, Windows 7, Mac®, Nintendo Switch™, PS4, Xbox One, tablet o dispositivo móvil.',
          'price' => '3200',
          'category_id' => '9',
          'featured_img' => 'LOGITECH-AURICULAR-G433-BLACK-7.1-HEADSET.jpg',
        ]);
        Product::create([
          'name' => 'LOGITECH AURICULAR G433 BLACK 7.1 HEADSET',
          'description' => 'Respuesta de frecuencia: 20 Hz – 20 kHz
                            Impedancia: 32 ohmios
                            Sensibilidad: 107 dB a 1 KHz SPL 30 mW/1 cm',
          'price' => '5400',
          'category_id' => '9',
          'featured_img' => 'LOGITECH-AURICULAR-G433-BLACK-7.1-HEADSET.jpg',
        ]);
        Product::create([
          'name' => 'SAMSUNG AURICULAR VINCHA P.47',
          'description' => 'Producto de excelente calidadAuriculares P47 - Bluetooth + manos libres + Radio + SD. Este auricular es compatible con iOS, Android y Windows. Cuenta con micrófono incorporado, Bluetooth, micro-SD.',
          'price' => '950',
          'category_id' => '9',
          'featured_img' => 'colores.jpg'
        ]);
        Product::create([
          'name' => 'APPLE AURICULAR I7s',
          'description'=> 'Tecnología inalámbrica:Bluetooth. Peso: AirPods (cada uno): 4 g, Estuche de carga: 38 g. Conexiones:AirPods: Bluetooth, Estuche de carga: conector Lightning',
          'price' => '1000',
          'category_id' => '9',
          'featured_img' => 'i7.jpg'
        ]);
        Product::create([
          'name' =>'TRUE WIRLESS AURICULAR TWINS',
          'description'=>'Tecnología Bluetooth. Alcance: Uno hasta 15mts, el par hasta 10mts. Estuche de carga: 400 mAh. Batería: 65 mAh en cada auricular. Tiempo de carga: 2 horas.',
          'price'=>'2000',
          'category_id' => '9',
          'featured_img'=>'twins.jpg'
        ]);
        Product::create([
          'name' => 'XIAOMI AURICULAR REDMI AIRDOTS',
          'description' => 'El auricular tiene un chip Bluetooth 5.0 incorporado que se llamará una nueva generación de auriculares. Reducción de ruido de la unidad de transmisión de bobina móvil de 7.2 mm y DSP Intelligent Environment Reducción de ruido. 4 horas de duración de la batería con caja de carga. Usando el tiempo se extiende a 12 horas. La caja de almacenamiento es también una caja de carga.',
          'price' => '3000',
          'category_id' => '9',
          'featured_img' => 'xioami.jpg'
        ]);
        Product::create([
          'name' => 'NOGANET AURICULAR HYDRA',
          'description' => 'Tipo de conexión: Con cable. Tipo de auriculares: On-ear. Micrófono: Si. Tipo de micrófono: Incorporado lado izquierdo. Sonido: High Quality. Speakers dinámicos: 50mm. Distorsión del ruido: No. Material: Acolchado. Botones: Si. Luces Leds: Si (Hasta 7 cambios de color). Reducción pasiva de ruidos: Si. Control de volumen: Si. Conector: 1 x USB 2.0 , 2 x Jack 3.5mm.',
          'price' => '1200',
          'category_id' => '9',
          'featured_img' => 'hydra.jpg'
        ]);
        Product::create([
          'name' => 'KOTION AURICULAR G2600',
          'description' => 'TAMAÑO DEL AURICULAR: 40MM. IMPEDANCIA: 22 OHM. SENSIBILIDAD 105dB. RANGO DE FRECUENCIA 15Hz-20KHz. SENSIBILIDAD DEL MICROFONO -38dB. IMPEDANCIA DEL MICROFONO 2.2K OHM. OMNIDIRECCIONAL. LARGO DEL CABLE 2.1 METROS',
          'price' => '2000',
          'category_id' => '9',
          'featured_img' => 'camuflados.jpg'
        ]);
        Product::create([
          'name' => 'SONY AURICULAR ABLUE 037',
          'description' => 'Escucha enemigos ocultos y explosiones épicas en un impresionante sonido 7.1 envolvente. Chatea con tus amigos y da instrucciones a tus compañeros de equipo con total nitidez a través del micrófono. Sintoniza con la mejor experiencia de sonido y elige entre distintos modos de audio. Tiene hasta 8 horas de autonomía.',
          'price' => '3000',
          'category_id' => '9',
          'featured_img' => 'gadnic.jpg'
        ]);
        Product::create([
          'name' => 'LOGITECH AURICULAR G633',
          'description' => 'Transductor: 50 mm. Respuesta de frecuencia: 20 Hz-20 kHz. Impedancia: 39 ohmios (pasiva), 5 kilohmios (activa). Sensibilidad: 93 dB SPL/mW.',
          'price' => '2600',
          'category_id' => '9',
          'featured_img' => 'macros.jpg'
        ]);

    }
}
