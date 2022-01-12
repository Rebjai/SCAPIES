<?php

namespace Database\Seeders;

use App\Models\Universidad\Universidad;
use Illuminate\Database\Seeder;

class UniversitiesSeeder extends Seeder
{
    /**
     * Run the universities database seeds.
     *
     * @return void
     */
    public function run()
    {
        Universidad::create([
            'id' => 1,
            'siglas' => 'ACINJO',
            'nombre' => 'ACADEMIA DE INTEGRACIÓN JURÍDICA DE OAXACA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 2,
            'siglas' => 'BUO',
            'nombre' => 'BENEMÉRITA UNIVERSIDAD DE OAXACA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 3,
            'siglas' => 'CECAD',
            'nombre' => 'CENTRO DE EDUCACIÓN CONTINUA ABIERTA Y A DISTANCIA (UABJO)',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 4,
            'siglas' => 'CESBHM',
            'nombre' => 'CENTRO DE ESTUDIOS SUPERIORES BENEMÉRITO Y HEROICO DE MÉXICO',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 5,
            'siglas' => 'CESGM',
            'nombre' => 'CENTRO DE ESTUDIOS SUPERIORES DEL GOLFO DE MÉXICO',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 6,
            'siglas' => 'CESEAN-UNIDEAL',
            'nombre' => 'CENTRO DE ESTUDIOS SUPERIORES EMPRENDEDORES ALFRED NOBEL',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 7,
            'siglas' => 'CEC-IPN',
            'nombre' => 'CENTRO DE VINCULACIÓN Y DESARROLLO REGIONAL UNIDAD OAXACA DEL INSTITUTO POLITÉCNICO NACIONAL',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 8,
            'siglas' => 'CUNI',
            'nombre' => 'CENTRO UNÍ DE ESTUDIOS "TUXTEPEC"',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 9,
            'siglas' => 'CUC',
            'nombre' => 'CENTRO UNIVERSITARIO CASANDOO',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 10,
            'siglas' => 'CUIM-CEDVA',
            'nombre' => 'CENTRO UNIVERSITARIO INTERNACIONAL DE MÉXICO  -CAMPUS OAXACA',
            'regimen_id' => 2
        ]);

        Universidad::create([
            'id' => 11,
            'siglas' => 'LACY',
            'nombre' => 'CENTRO UNIVERSITARIO LACY',
            'regimen_id' => 2
        ]);


        Universidad::create([
            'id' => 12,
            'siglas' => 'CULDCM',
            'nombre' => 'CENTRO UNIVERSITARIO LUIS DONALDO COLOSIO MURRIETA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 13,
            'siglas' => '',
            'nombre' => 'CENTRO UNIVERSITARIO NUEVO SOL',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 14,
            'siglas' => 'CUO-HUA',
            'nombre' => 'CENTRO UNIVERSITARIO OAXACA -CAMPUS HUAJUAPAN',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 15,
            'siglas' => 'CUO-OAX',
            'nombre' => 'CENTRO UNIVERSITARIO OAXACA-CAMPUS OAXACA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 16,
            'siglas' => 'CBAO',
            'nombre' => 'COLEGIO DE BELLAS ARTES DE OAXACA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 17,
            'siglas' => 'CESEEO',
            'nombre' => 'COLEGIO DE ESTUDIOS SUPERIORES Y DE ESPECIALIDADES DEL ESTADO DE OAXACA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 18,
            'siglas' => 'CIDAE',
            'nombre' => 'COLEGIO INTERNACIONAL DE ABOGADOS ESPECIALIZADOS',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 19,
            'siglas' => 'CLEU',
            'nombre' => 'COLEGIO LIBRE DE ESTUDIOS UNIVERSITARIOS DE OAXACA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 20,
            'siglas' => 'KAIROS',
            'nombre' => 'COLEGIO UNIVERSITARIO KAIRÓS',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 21,
            'siglas' => 'ELAD',
            'nombre' => 'ESCUELA LIBRE DE ARTE Y DISEÑO',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 22,
            'siglas' => 'ESNS',
            'nombre' => 'ESCUELA SUPERIOR NIDO DE SÓCRATES',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 23,
            'siglas' => 'CAISSI',
            'nombre' => 'GRUPO EDUCATIVO CAISSI S.C',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 24,
            'siglas' => 'GEM',
            'nombre' => 'GRUPO EDUCATIVO DE MÉXICO ',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 25,
            'siglas' => 'IACA',
            'nombre' => 'INSTITUTO ANTONIO CASO ANDRADE',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 26,
            'siglas' => 'IBDC-HUA',
            'nombre' => 'INSTITUTO BERNAL DÍAZ DEL CASTILLO-CAMPUS HUAJUAPAN',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 27,
            'siglas' => 'IBDC-OAX',
            'nombre' => 'INSTITUTO BERNAL DÍAZ DEL CASTILLO-CAMPUS OAXACA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 28,
            'siglas' => 'IBES',
            'nombre' => 'INSTITUTO BILINGÜE DE ESTUIDIOS SUPERIORES',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 29,
            'siglas' => 'IBU',
            'nombre' => 'INSTITUTO BILINGÜE UNIVERSITARIO',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 30,
            'siglas' => 'ICJO',
            'nombre' => 'INSTITUTO DE CIENCIAS JURÍDICAS DE OAXACA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 31,
            'siglas' => 'IEPC',
            'nombre' => 'INSTITUTO DE ESTUDIOS PROFESIONALES CONTRAPUNTO',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 32,
            'siglas' => 'IESAN-UNIDEAL',
            'nombre' => 'INSTITUTO DE ESTUDIOS SUPERIORES  ALFRED NOBEL',
            'regimen_id' => 2
        ]);




        Universidad::create([
            'id' => 33,
            'siglas' => 'IESA',
            'nombre' => 'INSTITUTO DE ESTUDIOS SUPERIORES AMÉRICA - SEDE TEHUANTEPEC',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 34,
            'siglas' => 'IESCO-REUS',
            'nombre' => 'INSTITUTO DE ESTUDIOS SUPERIORES DE LA COSTA - REU',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 35,
            'siglas' => 'IESPINA-REUS',
            'nombre' => 'INSTITUTO DE ESTUDIOS SUPERIORES DE PINOTEPA NACIONAL - REU',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 36,
            'siglas' => 'IESPE-REUS',
            'nombre' => 'INSTITUTO DE ESTUDIOS SUPERIORES DE PUERTO ESCONDIDO - REU',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 37,
            'siglas' => 'IESTLAX-REUS',
            'nombre' => 'INSTITUTO DE ESTUDIOS SUPERIORES DE TLAXIACO -REU',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 38,
            'siglas' => 'IESIT',
            'nombre' => 'INSTITUTO DE ESTUDIOS SUPERIORES DEL ISTMO DE TEHUANTEPEC',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 39,
            'siglas' => 'IESPA-REUS',
            'nombre' => 'INSTITUTO DE ESTUDIOS SUPERIORES DEL PAPALOAPAN - REU',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 40,
            'siglas' => 'IESEAN-unideal',
            'nombre' => 'INSTITUTO DE ESTUDIOS SUPERIORES EMPRENDEDORES ALFRED NOBEL (UNIDEAL UNIVERSIDAD)',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 41,
            'siglas' => 'IESAEO',
            'nombre' => 'INSTITUTO DE ESTUDIOS SUPERIORES EN ARTES ESCÉNICAS DE OAXACA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 42,
            'siglas' => 'IES-REUS',
            'nombre' => 'INSTITUTO DE ESTUDIOS SUPERIORES REU',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 43,
            'siglas' => 'IICH-REUS',
            'nombre' => 'INSTITUTO DE INVESTIGACIONES DE CIENCIAS Y HUMANIDADES -REUS',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 44,
            'siglas' => 'IISH',
            'nombre' => 'INSTITUTO DE INVESTIGACIONES SOCIALES Y HUMANAS',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 45,
            'siglas' => 'IODI',
            'nombre' => 'INSTITUTO OAXAQUEÑO DE DESARROLLO INTEGRAL ',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 46,
            'siglas' => 'INPECO',
            'nombre' => 'INSTITUTO PEDAGÓGICO COMPUTARIZADO',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 47,
            'siglas' => 'ISH-REUS',
            'nombre' => 'INSTITUTO SUPERIOR HUATULCO -REUS',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 48,
            'siglas' => 'ISIA',
            'nombre' => 'INSTITUTO SUPERIOR INTERCULTURAL AYUUK',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 49,
            'siglas' => 'ITCOMITANCILLO',
            'nombre' => 'INSTITUTO TECNOLÓGICO DE COMITANCILLO',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 50,
            'siglas' => 'ITC',
            'nombre' => 'INSTITUTO TECNOLÓGICO DE LA CONSTRUCCIÓN',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 51,
            'siglas' => 'ITCP',
            'nombre' => 'INSTITUTO TECNOLÓGICO DE LA CUENCA DEL PAPALOAPAN',
            'regimen_id' => 1
        ]);

        ///// breaking secuence

        Universidad::create([
            'id' => 53,
            'siglas' => 'ITO',
            'nombre' => 'TECNOLÓGICO NACIONAL DE MÉXICO / INSTITUTO TECNOLÓGICO DE OAXACA',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 54,
            'siglas' => 'ITPINOTEPA',
            'nombre' => 'INSTITUTO TECNOLÓGICO DE PINOTEPA ',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 55,
            'siglas' => 'ITPOCH',
            'nombre' => 'INSTITUTO TECNOLÓGICO DE POCHUTLA',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 56,
            'siglas' => 'ITSAL',
            'nombre' => 'INSTITUTO TECNOLÓGICO DE SALINA CRUZ',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 57,
            'siglas' => 'ITTLAX',
            'nombre' => 'INSTITUTO TECNOLÓGICO DE TLAXIACO ',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 58,
            'siglas' => 'ITTUX',
            'nombre' => 'INSTITUTO TECNOLÓGICO DE TUXTEPEC',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 59,
            'siglas' => 'IT-ISTMO',
            'nombre' => 'INSTITUTO TECNOLÓGICO DEL ISTMO',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 60,
            'siglas' => 'ITVE',
            'nombre' => 'INSTITUTO TECNOLÓGICO DEL VALLE DE ETLA',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 61,
            'siglas' => 'ITVO',
            'nombre' => 'INSTITUTO TECNOLÓGICO DEL VALLE DE OAXACA ',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 62,
            'siglas' => 'ITSMIGRA',
            'nombre' => 'INSTITUTO TECNOLÓGICO SUPERIOR DE SAN MIGUEL EL GRANDE',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 63,
            'siglas' => 'ITS-TEPOS',
            'nombre' => 'INSTITUTO TECNOLÓGICO SUPERIOR DE TEPOSCOLULA',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 64,
            'siglas' => 'IUC-COSTA',
            'nombre' => 'INSTITUTO UNIVERSITARIO DE LA COSTA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 65,
            'siglas' => 'IUO',
            'nombre' => 'INSTITUTO UNIVERSITARIO DE OAXACA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 66,
            'siglas' => 'UNIIMA',
            'nombre' => 'INSTITUTO UNIVERSITARIO UNIIMA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 67,
            'siglas' => 'UNIVITA',
            'nombre' => 'INSTITUTO UNIVITA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 68,
            'siglas' => 'MMSF',
            'nombre' => 'MULTIVERSIDAD MUNDO SIN FRONTERAS',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 69,
            'siglas' => 'NOVA-JUX',
            'nombre' => 'NOVAUNIVERSITAS -CAMPUS SANTIAGO JUXTLAHUACA',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 70,
            'siglas' => 'NOVA-JAC',
            'nombre' => 'NOVAUNIVERSITAS-CAMPUS SAN JACINTO',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 71,
            'siglas' => 'UGMEX',
            'nombre' => 'UGMEX CAMPUS OAXACA',
            'regimen_id' => 2
        ]);




        // breaking secuence
        Universidad::create([
            'id' => 73,
            'siglas' => 'UESA',
            'nombre' => 'UNIDAD DE ESTUDIOS SUPERIORES DE ALOTEPEC',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 74,
            'siglas' => 'UAO',
            'nombre' => 'UNIVERSIDAD ANÁHUAC DE OAXACA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 75,
            'siglas' => 'UABJO',
            'nombre' => 'UNIVERSIDAD AUTÓNOMA BENITO JUÁREZ DE OAXACA',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 76,
            'siglas' => 'UNICHA',
            'nombre' => 'UNIVERSIDAD DE CHALCATONGO',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 77,
            'siglas' => 'UNCA',
            'nombre' => 'UNIVERSIDAD DE LA CAÑADA',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 78,
            'siglas' => 'UNCOS',
            'nombre' => 'UNIVERSIDAD DE LA COSTA',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 79,
            'siglas' => 'UNSIJ',
            'nombre' => 'UNIVERSIDAD DE LA SIERRA JUÁREZ',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 80,
            'siglas' => 'UNSIS',
            'nombre' => 'UNIVERSIDAD DE LA SIERRA SUR ',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 81,
            'siglas' => 'UNISTMO-IXT',
            'nombre' => 'UNIVERSIDAD DEL ISTMO-CAMPUS IXTEPEC',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 82,
            'siglas' => 'UNISTMO-JUCH',
            'nombre' => 'UNIVERSIDAD DEL ISTMO-CAMPUS JUCHITÁN',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 83,
            'siglas' => 'UNISTMO-TEH',
            'nombre' => 'UNIVERSIDAD DEL ISTMO-CAMPUS TEHUANTEPEC',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 84,
            'siglas' => 'UMAR-HUA',
            'nombre' => 'UNIVERSIDAD DEL MAR-CAMPUS HUATULCO',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 85,
            'siglas' => 'UMAR-PA',
            'nombre' => 'UNIVERSIDAD DEL MAR-CAMPUS PUERTO ÁNGEL',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 86,
            'siglas' => 'UMAR-PE',
            'nombre' => 'UNIVERSIDAD DEL MAR-CAMPUS PUERTO ESCONDIDO',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 87,
            'siglas' => 'UNPA-LB',
            'nombre' => 'UNIVERSIDAD DEL PAPALOAPAN-CAMPUS LOMA BONITA',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 88,
            'siglas' => 'UNPA-TUX',
            'nombre' => 'UNIVERSIDAD DEL PAPALOAPAN-CAMPUS TUXTEPEC',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 89,
            'siglas' => 'UHISPANO',
            'nombre' => 'UNIVERSIDAD HISPANO',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 90,
            'siglas' => 'UNID',
            'nombre' => 'UNIVERSIDAD INTERAMERICANA PARA EL DESARROLLO-CAMPUS TUXTEPEC',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 91,
            'siglas' => 'UNIP',
            'nombre' => 'UNIVERSIDAD INTERNACIONAL DEL PACÍFICO',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 92,
            'siglas' => 'UNIVAS',
            'nombre' => 'UNIVERSIDAD JOSÉ VASCONCELOS DE OAXACA ',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 93,
            'siglas' => 'ULSA',
            'nombre' => 'UNIVERSIDAD LA SALLE DE OAXACA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 94,
            'siglas' => 'UMAD',
            'nombre' => 'UNIVERSIDAD MADERO-CAMPUS PAPALOAPAN',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 95,
            'siglas' => 'UNIMESO',
            'nombre' => 'UNIVERSIDAD MESOAMERICANA ',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 96,
            'siglas' => 'UMMA',
            'nombre' => 'UNIVERSIDAD MUNDO MAYA',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 97,
            'siglas' => 'UNM',
            'nombre' => 'UNIVERSIDAD NACIONALISTA MÉXICO',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 98,
            'siglas' => 'UPN-201',
            'nombre' => 'UNIVERSIDAD PEDAGÓGICA NACIONAL-UNIDAD 201-OAXACA',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 99,
            'siglas' => 'UPN-202',
            'nombre' => 'UNIVERSIDAD PEDAGÓGICA NACIONAL-UNIDAD 202-TUXTEPEC',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 100,
            'siglas' => 'UPNOCH',
            'nombre' => 'UNIVERSIDAD POLITECNICA DE NOCHIXTLAN "ABRAHAM CASTELLANOS"',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 101,
            'siglas' => 'URSE',
            'nombre' => 'UNIVERSIDAD REGIONAL DEL SURESTE',
            'regimen_id' => 2
        ]);



        Universidad::create([
            'id' => 102,
            'siglas' => 'UTM',
            'nombre' => 'UNIVERSIDAD TECNOLÓGICA DE LA MIXTECA ',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 103,
            'siglas' => 'UTSSO',
            'nombre' => 'UNIVERSIDAD TECNOLÓGICA DE LA SIERRA SUR DE OAXACA',
            'regimen_id' => 1
        ]);



        Universidad::create([
            'id' => 104,
            'siglas' => 'UTVCO',
            'nombre' => 'UNIVERSIDAD TECNOLÓGICA DE LOS VALLES CENTRALES DE OAXACA',
            'regimen_id' => 1
        ]);
    }
}
