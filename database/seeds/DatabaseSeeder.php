<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


//MARCAS

        $brands = ['Apple', 'Sony', 'Xiaomi', 'Google', 'Microsoft', 'Nikon', 'Nintendo', 'Bose', 'Samsung', 'Lenovo', 'Asus', 'Dji', 'Ultimate Ears'];

        foreach ($brands as $brand) {
          DB::table('brands')->insert(['name' => $brand]);
        }

// CATEGORIAS

        $categories = ['Fotografia', 'Computadoras', 'Audio', 'Mobile', 'TV', 'Accesorios'];

        foreach ($categories as $categorie) {
          DB::table('categories')->insert(['name' => $categorie]);
        }



// PRODUCTOS

        $storage = 'public/images/fotosDH/';


        DB::table('products')->insert([
          'name'=> 'Nikon D7500 DSLR (solo cuerpo)',
          'price'=> '74995',
          'image'=> $storage . 'nikon_d7500.jpg',
          'category_id'=>'1',
          'stock'=>'10',
          'brand_id'=>'6',
          'description'=>'Capacidad 64GB. Sensor CMOS DX de 20.9 Mpx. Procesador de imágenes EXPEED5. Pantalla táctil LCD de 3.2". 4K UHD Graba vídeo a 30 fps Multi-CAM 3500FX. Disparo hasta 100 fotogramas. Bluetooth, Wi-Fi Sensor RGB y AF.'

        ]);
        DB::table('products')->insert([
          'name'=> 'Nikon D850 DSLR (solo cuerpo)',
          'price'=> '245990',
          'image'=> $storage . 'nikon_d850.jpg',
          'category_id'=>'1',
          'stock'=>'10',
          'brand_id'=>'6',
          'description'=>'Capacidad 128GB. 45.7MP FX-Format BSI Sensor CMOS EXPEED5 Procesador de imágenes. Pantalla LCD táctil inclinable de 3.2 "2.36m-Dot. Grabación de video 4K UHD a 30 fps Sistema AF Multi-CAM 20K de 153 puntos SnapBridge Bluetooth y Wi-Fi.'

        ]);
        DB::table('products')->insert([
          'name'=> 'DJI mavic pro 2 + control',
          'price'=> '114230',
          'image'=> $storage . 'dji_mavic_2_pro.jpg',
          'category_id'=>'1',
          'stock'=>'10',
          'brand_id'=>'12',
          'description'=>'Sensor píxeles efectivos de 1 / 2.3 "CMOS : 12 millones. Lente FOV: aprox 83° (24 mm). Formato Equivalente: 24-48 mm. Apertura: f / 2.8 (24 mm) -f / 3.8 (48 mm) Rango de disparo: 0.5 ma 8 Rango ISO Video: 100-3200 Foto: 100-1600'

        ]);
        DB::table('products')->insert([
          'name'=> 'Sony Alpha a7R IV Mirrorless',
          'price'=> '209880',
          'image'=> $storage . 'sony_a7r_iv.jpg',
          'category_id'=>'1',
          'stock'=>'10',
          'brand_id'=>'2',
          'description'=>'Procesador de imágen: BIONZ X. Tipo de sensor de imagen: Sensor CMOS Exmor R de fotograma completo de 35 mm Tamaño del sensor: Full Frame (35,7 × 23,8 mm). Resolución del sensor: 61 megapíxeles. Montura: Aleación de magnesio.'

        ]);
        DB::table('products')->insert([
          'name'=> 'Sony Alpha a6400 Mirrorless',
          'price'=> '59880',
          'image'=> $storage . 'sony_alpha_a6400.jpg',
          'category_id'=>'1',
          'stock'=>'10',
          'brand_id'=>'2',
          'description'=>'Sensor: CMOS APS-C (23.5 x 15.6 mm). 24.2 megapixels ISO mínima: 100 ISO máxima: 102.400. Visor integrado electrónico OLED 2.4 megapixel. Pantalla LCD: 3 pulgadas. Se puede inclinar vertical 180º hacia arriba y 45º hacia abajo. Enfoque automático AF:'

        ]);
  //Computadoras
        DB::table('products')->insert([
          'name'=> 'Microsoft 28" Surface Studio 2 Multi-Touch All-in-One',
          'price'=> '223500',
          'image'=> $storage . 'microsoft.jpg',
          'category_id'=>'2',
          'stock'=>'10',
          'brand_id'=>'5',
          'description'=>'Memoria 16 GB o 32 GB (DDR4) Resolución: 4500 x 3000 (192 ppp) Configuración de colores: sRGB, DCI-P3 y pantalla de calibración de color individual Relación de aspecto: 3:2. Gestos táctiles. Compatibilidad con pantallas externas	hasta dos 4K UHD.'

        ]);
        DB::table('products')->insert([
          'name'=> 'Microsoft 13.5" Surface Book 2 Multi-Touch 2-in-1',
          'price'=> '125900',
          'image'=> $storage . 'microsoft-13.jpg',
          'category_id'=>'2',
          'stock'=>'10',
          'brand_id'=>'5',
          'description'=>'Surface Book 2 13,5": 8 GB o 16 GB de RAM 1866Mhz LPDDR3 GPU integrada Intel® HD Graphics 620 (en el modelo Intel® i5-7300U.) Procesador de cuatro núcleos Intel® Core™ i5-8350U de 8ª generación, 3,6 GHz Max Turbo'

        ]);
        DB::table('products')->insert([
          'name'=> 'Macbook Air',
          'price'=> '53940',
          'image'=> $storage . 'macbookAir.jpg',
          'category_id'=>'2',
          'stock'=>'10',
          'brand_id'=>'1',
          'description'=>'Pantalla: 13.3 pulgadas (Retina). Resolución: 2,560x1,600 pixeles. Procesador: Intel Core i5 de doble núcleo a 1.6GHz (Turbo Boost des hasta 3.6GHz) y 4 MB de caché de nivel 3) RAM: 8 GB o 16GB (2,133MHz). HD:128GB SSD PCIe. Peso: 1.25 kg'

        ]);
        DB::table('products')->insert([
          'name'=> 'Lenovo 15.6" IdeaPad 330s Laptop',
          'price'=> '20940',
          'image'=> $storage . 'lenovo.jpg',
          'category_id'=>'2',
          'stock'=>'10',
          'brand_id'=>'10',
          'description'=>'Pantalla de 14 o 15.6 pulgadas. Resolución HD (1366x768) o FHD (1920x1080). Intel Core i7 de séptima u octava generación. Windows 10 Home. Procesador gráfico de Intel + Nvidia GeForce GTX 1050. Memoria RAM de 4, 6, 8 o 12GB.'

        ]);
  //Audio
        DB::table('products')->insert([
          'name'=> 'Apple HomePod',
          'price'=> '17940',
          'image'=> $storage . 'applepod.jpg',
          'category_id'=>'3',
          'stock'=>'10',
          'brand_id'=>'1',
          'description'=>'Integra Siri. Puedes controlar a HomePod con tu voz. Tiene el procesador Apple A8. 6 micrófonos. 7 bocinas (tweeter) ubicadas alrededor de HomePod ofrecen un sonido de 360 grados. Woofer en la parte superior. Recubrimiento de tela enmallada.'

        ]);
        DB::table('products')->insert([
          'name'=> 'Ultimate ears Wonderboom',
          'price'=> '6800',
          'image'=> $storage . 'wonderboom.jpg',
          'category_id'=>'3',
          'stock'=>'10',
          'brand_id'=>'13',
          'description'=>'Sensibilidad de 86 dbs. 8.5 W de potencia. Rango de frecuencia: 80Hz- 20Khz. Sonido omnidireccional 360º. Resistente al agua. Certificación IPX7. Bluetooth (Hasta 30 metros). Posibilidad de conectar otro altavoz.Batería de hasta 10 hs de duración.'

        ]);
        DB::table('products')->insert([
          'name'=> 'Bose SoundLink Micro Bluetooth',
          'price'=> '4800',
          'image'=> $storage . 'bose_negro.jpg',
          'category_id'=>'3',
          'stock'=>'10',
          'brand_id'=>'8',
          'description'=>'Altavoz:9.83 cm de alto x 9.83 cm de alto x 3.48 cm de profundidad (290.3 g). Puerto USB Micro-B. Alcance inalámbrico de hasta 9 m (30 pies). Duración de la batería de hasta 6 horas. SoundLink Micro. Incluye Cable de carga USB.'

        ]);
        DB::table('products')->insert([
          'name'=> 'Bose SoundLink Revolve',
          'price'=> '17900',
          'image'=> $storage . 'bose-revolve.jpg',
          'category_id'=>'3',
          'stock'=>'10',
          'brand_id'=>'8',
          'description'=>'Altavoz: 9.83 cm de alto x 9.83 cm de alto x 3.48 cm de profundidad. Nunca nadie se va a tomar el tiempo de leer esta descripcion jamas. Puerto USB Micro-B. Alcance inalámbrico de hasta 9 m (30 pies). Duración de la batería de hasta 6 horas.'

        ]);
  //Mobile
        DB::table('products')->insert([
        	'name'=> 'Google Pixel 3a',
          'price'=> '24000',
          'image'=> $storage . 'google_pixel_3.jpg',
          'category_id'=>'4',
          'stock'=>'10',
          'brand_id'=>'4',
          'description'=>'Pantalla gOLED de 5,6 pulgadas FullHD+ (2.220 x 1.080 píxeles). Relación 18,5:9 PROCESADOR Snapdragon 670 Adreno 615 MEMORIA RAM 4 GB LPDDR4x. ALMACENAMIENTO INTERNO 64 GB. CÁMARA TRASERA Sensor Sony IMX363 de 12,2 megapíxeles con AF'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Samsung Galaxy S10',
          'price'=> '56000',
          'image'=> $storage . 'samsung10.jpg',
          'category_id'=>'4',
          'stock'=>'10',
          'brand_id'=>'9',
          'description'=>'Pantalla 6.4 pulgadas con certificación HDR+ (Dynamic OLED) Resolución 3,040x1,440 pixeles. Procesador: 2.84GHz Snapdragon 855 / 2.73GHz Exynos 9820. RAM: 8GB (o 12GB en versión de cerámica)'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Xiaomi Mi 9 Dual-SIM',
          'price'=> '26800',
          'image'=> $storage . 'xiaomi.jpg',
          'category_id'=>'4',
          'stock'=>'10',
          'brand_id'=>'3',
          'description'=>'Procesador. Qualcomm® Snapdragon™ 712. Procesador. CPU: hasta 2,3 GHz. 6 GB + 128 GB. Pantalla Samsung AMOLED full-screen de 5,97 pulgadas*. FHD+ de 2340×1080 , PPI 432. Altura: 147,5 mm.'

        ]);
  //TV & Entretenimiento
        DB::table('products')->insert([
        	'name'=> 'Sony X950G 55" Class HDR 4K UHD Smart LED TV',
          'price'=> '65880',
          'image'=> $storage . 'sonyTV.jpg',
          'category_id'=>'5',
          'stock'=>'10',
          'brand_id'=>'2',
          'description'=>'Línea Bravia XBR-55X805E Color Plata. Tipo de pantalla LED. Tamaño de la pantalla 55". Tipo de resolución 4K. País de origen México. LED 4K HDR Ultra HD Res máxima 3840x2160. HDMIx4. USBx3. Ancho 123.2 cm Profundidad 25.2 cm Altura 77.2 cm.'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Samsung RU7100 65" Class HDR 4K UHD Smart LED TV',
          'price'=> '41880',
          'image'=> $storage . 'samsungTV.jpg',
          'category_id'=>'5',
          'stock'=>'10',
          'brand_id'=>'9',
          'description'=>'Línea 7. Tipo de pantalla LED UHD.Tamaño 65" Resolución 4K. Origen Argentina. Resolución máxima 3840 px - 2160 px Ancho 145.7 cm Profundidad 31.2" Altura 91.7 cm Peso 25.5 kg Audio 20 W Modo de sonido Dolby digital plus.'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Nintendo Switch + controles en azul y rojo',
          'price'=> '17940',
          'image'=> $storage . 'nintendo_switch.jpg',
          'category_id'=>'5',
          'stock'=>'10',
          'brand_id'=>'7',
          'description'=>'COLOR BLUE/RED. Añade estilo a tu consola Nintendo Switch con los controles Joy-Con y las correas. La vibración HD le da más profundidad a los juegos. Es una sensación que va más allá de simples vibraciones.Reconoce figuras, movimiento y distancia.'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Google Chromecast Ultra (Black)',
          'price'=> '3600',
          'image'=> $storage . 'chromecast.jpg',
          'category_id'=>'5',
          'stock'=>'10',
          'brand_id'=>'4',
          'description'=>'Dimensiones y peso Largo: 5,8 cm (2,29 in) • Alto: 5,8 cm (2,29 in) Color. Negro. Resolución. Hasta 4K Ultra HD. Conexión inalámbrica. Wi‑Fi 1x2 MISO 802.11ac (2,4 GHz/5 GHz). Incluye fuente de alimentación. HDMI • Micro USB • Ethernet.'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Apple TV 4K (64GB)',
          'price'=> '11500',
          'image'=> $storage . 'appleTV.jpg',
          'category_id'=>'5',
          'stock'=>'10',
          'brand_id'=>'1',
          'description'=>'Tamaño y peso. 98 mm 98 mm 35 mm. Capacidad. 32 GB2. Apple TV Remote. Tecnología inalámbrica Bluetooth 4.0. Puertos e interfaces. Fuente de alimentación integrada HDMI Gigabit Ethernet. Procesador. Chip A10X Fusion con arquitectura de 64 bits.'

        ]);
  //Accesorios
        DB::table('products')->insert([
        	'name'=> 'Funda para Samsung Galaxy S10',
          'price'=> '1000',
          'image'=> $storage . 'caseSamsung.jpg',
          'category_id'=>'6',
          'stock'=>'10',
          'brand_id'=>'9',
          'description'=>'Funda para Celular Samsung Galaxy S10 - S10 Plus - 10e. Marca de la Funda: Ringke. Modelo: Fusion. Tipo de funda Polipropileno - Silicona. Diferentes colores.'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Soporte para el auto',
          'price'=> '750',
          'image'=> $storage . 'soporteAuto.jpg',
          'category_id'=>'6',
          'stock'=>'10',
          'brand_id'=>'3',
          'description'=>' Marca: Rock. Tipo: Soporte de Celular para coche. Color negro. Material: ABS + aleación de aluminio. Compatible con: 4.7-10.5 pulgadas de teléfono y tableta. Ancho del soporte: 13-28.5cm.'

        ]);
        DB::table('products')->insert([
          'name'=> 'Nintendo Joy (con controles)',
          'price'=> '4200',
          'image'=> $storage . 'controlesNintendo.jpg',
          'category_id'=>'6',
          'stock'=>'10',
          'brand_id'=>'7',
          'description'=>'Dimensiones alto: 102mm, ancho: 35.9 mm y profundidad: 28.4 mm. El peso aprox de 49.3g (Joy-Con L) y 52.2g (Joy-Con R). Batería de litio.'

        ]);


    }
}
