<?php

use Illuminate\Database\Seeder;

class SubcategorieSeeder extends Seeder
{
    /**
     * Comments table seeder
     *
     * @return void
     */
    public function run()
    {
        /* Vietnamees */
        // 1
        DB::table('subcategories')->insert([
            'naam'=>'Geschuurd Gezaagd',
            'subcat_linknaam'=>'geschuurdgezaagd',
            'beschrijving'=>'Deze tegel heeft recht gezaagde kanten met een verzoet oppervlak.',
            'categorie_id'=>1,
        ]);

        // 2
        DB::table('subcategories')->insert([
            'naam'=>'Getrommeld',
            'subcat_linknaam'=>'getrommeld',
            'beschrijving'=>'Deze blauwe steen is getrommeld waardoor hij een verouderd uitzicht krijgt.',
            'categorie_id'=>1,
        ]);

        // 3
        DB::table('subcategories')->insert([
            'naam'=>'Gezandstraald',
            'subcat_linknaam'=>'gezandstraald',
            'beschrijving'=>'Deze blauwe steen is recht gezaagd, het oppervlak werd gezandstraald waardoor er een anti-slip laag ontstaat.',
            'categorie_id'=>1,
        ]);

        // 4
        DB::table('subcategories')->insert([
            'naam'=>'Gothiek',
            'subcat_linknaam'=>'gothiek',
            'beschrijving'=>'De tegel wordt in een machine verouderd en verzoet waardoor hij een zeer klassevol uitzicht krijgt. Het pareltje onder de vietnamese natuursteen.',
            'categorie_id'=>1,
        ]);

        // 5
        DB::table('subcategories')->insert([
            'naam'=>'Gebouchardeerd',
            'subcat_linknaam'=>'gebouchardeerd',
            'beschrijving'=>'Deze tegel is gebouchardeerd waardoor hij een zeer ruw oppervlak heeft.',
            'categorie_id'=>1,
        ]);

        /* Chinees */
        // 6
         DB::table('subcategories')->insert([
            'naam'=>'Honed',
            'subcat_linknaam'=>'honed',
            'beschrijving'=>'Deze blauwe steen is recht gezaagd en verzoet.',
            'categorie_id'=>2,
        ]);

        // 7
         DB::table('subcategories')->insert([
            'naam'=>'Gevlamd en Geborsteld',
            'subcat_linknaam'=>'gevlamdgeborsteld',
            'beschrijving'=>'Deze blauwe steen is gevlamd en geborsteld waardoor hij een uniek uitzicht krijgt.',
            'categorie_id'=>2,
        ]);

        // 8
         DB::table('subcategories')->insert([
            'naam'=>'Twila Basalt',
            'subcat_linknaam'=>'twila',
            'beschrijving'=>'Een basalt tegel met een licht ruw oppervlak.',
            'categorie_id'=>2,
        ]);

        // 9
         DB::table('subcategories')->insert([
            'naam'=>'G654 Flamed',
            'subcat_linknaam'=>'gflamed',
            'beschrijving'=>'Dit is een granietsoort met recht gezaagde kanten en een anti slip oppervlak. Ideaal voor gebruik langs zwembad of jacuzzi.',
            'categorie_id'=>2,
        ]);

        ////// Carius Viet
        // 10
         DB::table('subcategories')->insert([
            'naam'=>'Carius Vietnamees',
            'subcat_linknaam'=>'cariusviet',
            'beschrijving'=>'Door zijn speciaal formaat 33/11 heeft de carius een strak uitzicht.',
            'categorie_id'=>1,
        ]);

        ////// Carius Chin
        // 11
        DB::table('subcategories')->insert([
            'naam'=>'Carius Chinees',
            'subcat_linknaam'=>'cariuschin',
            'beschrijving'=>'Formaat 33/11',
            'categorie_id'=>2,
        ]);


        ////// Indisch
        // 12
        DB::table('subcategories')->insert([
            'naam'=>'Chandra',
            'subcat_linknaam'=>'chandra',
            'beschrijving'=>'Deze tegel ondergaat meerdere machinale bewerkingen gedurende een lange periode en word in Indië geselecteerd op formaat en uitzicht waardoor een kwalitatief product kan aangeleverd worden.',
            'categorie_id'=>3,
        ]);

        //13
        DB::table('subcategories')->insert([
            'naam'=>'Aruna',
            'subcat_linknaam'=>'aruna',
            'beschrijving'=>'Deze tegel heeft recht gezaagde kanten en een verzoet oppervlak waardoor hij het uitzicht krijgt van een vietnamese blauwsteen.',
            'categorie_id'=>3,
        ]);

        // 14
        DB::table('subcategories')->insert([
            'naam'=>'Jalasa',
            'subcat_linknaam'=>'jalasa',
            'beschrijving'=>'Deze tegel heeft recht gezaagde kanten, het oppervlak is oneffen en verzoet.',
            'categorie_id'=>3,
        ]);

        // 15
        DB::table('subcategories')->insert([
            'naam'=>'Daya',
            'subcat_linknaam'=>'daya',
            'beschrijving'=>'Exclusief in België!!!! deze tegel heeft gekartelde kanten en een natuurruw oppervlak.',
            'categorie_id'=>3,
        ]);

        // 16
        DB::table('subcategories')->insert([
            'naam'=>'Darshana',
            'subcat_linknaam'=>'darshana',
            'beschrijving'=>'Deze tegel heeft recht gezaagde kanten een een gezandstraald oppervlak waardoor hij een zeer strak uitzicht krijgt. Prijs kwaliteit een aanrader.',
            'categorie_id'=>3,
        ]);

        // 17
        DB::table('subcategories')->insert([
            'naam'=>'Tandur',
            'subcat_linknaam'=>'tandur',
            'beschrijving'=>'Is een kalksteen te verkrijgen in verschillende kleuren met een natuurruw oppervlak.',
            'categorie_id'=>3,
        ]);

        // 18
        DB::table('subcategories')->insert([
            'naam'=>'Candela',
            'subcat_linknaam'=>'candela',
            'beschrijving'=>'Een platine waarvan de zijden gekarteld zijn en het oppervlak natuurruw is verkrijgbaar in meerdere kleuren en formaten. Ideaal voor opritten.',
            'categorie_id'=>3,
        ]);

        // 19
        DB::table('subcategories')->insert([
            'naam'=>'Isola',
            'subcat_linknaam'=>'isola',
            'beschrijving'=>'Is een marokkaanse natuursteen door zijn beige kleur heeft deze tegel een zuiderse look.',
            'categorie_id'=>3,
        ]);

        ////// Carius Indisch
        // 20
        DB::table('subcategories')->insert([
            'naam'=>'Carius Indisch',
            'subcat_linknaam'=>'cariusind',
            'beschrijving'=>'Zijn uniek formaat 33/11 en de verschillende beschikbare kleuren zorgen ervoor dat deze tegel overal kan toegepast worden.',
            'categorie_id'=>3,
        ]);

        //21
         DB::table('subcategories')->insert([
            'naam'=>'Machines',
            'subcat_linknaam'=>'machines',
            'beschrijving'=>'U kan onze machines huren. Contacteer ons voor meer info',
            'categorie_id'=>4,
        ]);

    }
}
