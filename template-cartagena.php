<?php
/* 
* Template Name: Cartagena
*/

get_header(); 

$places = [
  "hotels" => [
    "id" => "hotels",
    "title" => "Hotels",
    "title_es" => "Hotels",
    "img" => THEME_IMG . 'icons/icon-hotel.svg',
    "info" => "We welcome you to stay at any of the beautiful hotels or colonial homes in Cartagena has to offer. The bride and groom will be staying at the Charleston Santa Teresa for the guests who would like to join them.",
    "places" => [
        [
            "name" => "Hotel Charleston Santa Teresa",
            "address" => "Cra. 3 # 31 - 23",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6649494",
            "link" => "https://www.hotelcharlestonsantateresa.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-6.webp',
        ],
        [
            "name" => "Hyatt Regency Hotel <br> <span style='text-transform: none'>Hotel recomendado</span>",
            "address" => "Cra. 1 # 12 - 118",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6941234",
            "link" => "https://go.hyatt.com/link/v2/eae__GKM5JBXpUGUPAuOwJCzfpC-lL3kAXMEy",
            "image" => THEME_IMG . 'places-cartagena/hoteles-14.webp',
        ],
        [
            "name" => "HOTEL INTERCONTINENTAL",
            "address" => "Cra. 1 # 5 - 01",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6424250",
            "link" => "https://www.intercartagena.com/",
            "image" => THEME_IMG . 'places-cartagena/hoteles-0.webp',
        ],
        [
            "name" => "Sofitel Legend Santa Clara",
            "address" => "Calle Del Torno # 39 - 29",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6504700",
            "link" => "https://www.sofitellegendsantaclara.com/",
            "image" => THEME_IMG . 'places-cartagena/hoteles-1.webp',
        ],
        [
            "name" => "Casa Lola",
            "address" => "Calle del Guerrero # 29 - 108",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6641538",
            "link" => "https://casalola.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-2.webp',
        ],
        [
            "name" => "Casa del Arzobispado",
            "address" => "Cra. 5 # 34 - 52",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 5098738",
            "link" => "https://www.hotelcasadelarzobispado.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-3.webp',
        ],
        [
            "name" => "Movich Hotel",
            "address" => "Calle de Vélez Danies # 4 – 39",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (601) 4824466",
            "link" => "https://www.movichhotels.com/es/hotel-movichcartagena-en-cartagena/",
            "image" => THEME_IMG . 'places-cartagena/hoteles-4.webp',
        ],
        [
            "name" => "Bastion Luxury Hotel",
            "address" => "Calle del Sargento # 6 - 87",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6424100",
            "link" => "https://www.bastionluxuryhotel.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-5.webp',
        ],
       
        [
            "name" => "Hotel San Agustín",
            "address" => "Calle de la Universidad # 36 - 44",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6810000",
            "link" => "https://www.hotelcasasanagustin.com/es/home.html",
            "image" => THEME_IMG . 'places-cartagena/hoteles-7.webp',
        ],
        [
            "name" => "Casa Pestagua",
            "address" => "Cra. 3 # 33 - 63",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6649510",
            "link" => "https://casapestagua.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-8.webp',
        ],
        [
            "name" => "Casa La Merced",
            "address" => "Calle de Don Sancho # 36 - 165",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6686622",
            "link" => "https://mustique.co/bienvenidos/casas/la-merced/",
            "image" => THEME_IMG . 'places-cartagena/hoteles-9.webp',
        ],
        [
            "name" => "Bovedas de Santa Clara",
            "address" => "Cra. 8 # 39 - 114",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6504465",
            "link" => "https://www.bovedasdesantaclara.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-10.webp',
        ],
        [
            "name" => "Nacar By Hilton",
            "address" => "Calle Del Curato # 38 - 99",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6517050",
            "link" => "https://www.hilton.com/es/hotels/ctgmaqq-nacar-hotel-cartagena/",
            "image" => THEME_IMG . 'places-cartagena/hoteles-11.webp',
        ],
        [
            "name" => "Hotel Casa Don Luis",
            "address" => "Calle del Cuartel # 36 – 16",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 314 6669101",
            "link" => "https://www.farandahotels.com/hotel/hotel-casa-don-luis-cartagena-by-faranda-boutique",
            "image" => THEME_IMG . 'places-cartagena/hoteles-12.webp',
        ],
        [
            "name" => "Voila By Huespedia",
            "address" => "Calle de las Carretas # 34 - 85",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 300 9121453",
            "link" => "https://www.bevoila.com/home-es",
            "image" => THEME_IMG . 'places-cartagena/hoteles-13.webp',
        ],
        [
            "name" => "Hotel Estelar",
            "address" => "Cra. 1 # 11 - 116",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6517303",
            "link" => "https://www.hotelesestelar.com/es/destinos/colombia/cartagena-de-indias",
            "image" => THEME_IMG . 'places-cartagena/hoteles-15.webp',
        ],
    ],
  ],
  "restaurants" => [
    "id" => "restaurants",
    "title" => "Restaurants",
    "title_es" => "Restaurants",
    "img" => THEME_IMG . 'icons/icon-restaurants.svg',
    "places" => [
        [
            "name" => "D'Res",
            "address" => "Cra. 17 # 24 - 90",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6685513",
            "link" => "https://www.instagram.com/restaurantedres/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-1.webp',
        ],
        [
            "name" => "Rabo de Pez",
            "address" => "Calle 32 # 5 - 09 Local 3",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 4333372",
            "link" => "https://www.instagram.com/rabodepez/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-2.webp',
        ],
        [
            "name" => "Uma Cantina Peruana",
            "address" => "Calle del Curato # 38 - 99",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 302 4622665",
            "link" => "https://www.umacantinaperuanactg.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-3.webp',
        ],
        [
            "name" => "Candé",
            "address" => "Calle de la Serrezuela # 39 - 10",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6685291",
            "link" => "https://restaurantecande.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-4.webp',
        ],
        [
            "name" => "Alma",
            "address" => "Calle San Agustín # 36",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6810050",
            "link" => "https://www.almacolombia.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-5.webp',
        ],
        [
            "name" => "La Casa de Socorro",
            "address" => "Frente al C.C. Getsemaní",
            "city" => "Getsemaní, Cartagena",
            "phone" => "+57 315 7186666",
            "link" => "https://www.instagram.com/restaurantelacasadesocorro/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-6.webp',
        ],
        [
            "name" => "Carmen",
            "address" => "Calle 38 # 8 - 19",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 310 3949344",
            "link" => "https://www.instagram.com/carmenrestaurante/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-7.webp',
        ],
        [
            "name" => "Harry's Sasson",
            "address" => "Cra. 3 # 31 - 19",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6501015",
            "link" => "https://www.hotelcharlestonsantateresa.com/es/Restaurantes-Bar/harry-s-cartagena",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-8.webp',
        ],
        [
            "name" => "La Cocina de Pepina",
            "address" => "Calle 25 # 9A - 06 L. 2",
            "city" => "Getsemaní, Cartagena",
            "phone" => "+57 300 8565189",
            "link" => "https://www.instagram.com/lacocinadepepina/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-9.webp',
        ],
        [
            "name" => "Agua de León",
            "address" => "Calle de Ayos # 4 - 46",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 2780517",
            "link" => "https://www.instagram.com/aguadeleonrestaurante/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-10.webp',
        ],
        [
            "name" => "Mar y Zielo",
            "address" => "Cra. 5 # 34 - 63",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 6911393",
            "link" => "https://www.maryzielo.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-11.webp',
        ],
        [
            "name" => "Celele",
            "address" => "Cra. 10C # 29 - 200",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 301 7420389",
            "link" => "https://celelerestaurante.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-12.webp',
        ],
        [
            "name" => "La Vitrola",
            "address" => "Cra. 2 # 33 - 66",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6648243",
            "link" => "https://www.instagram.com/lavitrolacartagena/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-13.webp',
        ],
        [
            "name" => "Mardeleva",
            "address" => "Nuestra Sra. del Carmen # 33 - 41",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 6680456",
            "link" => "https://hotelelmarques.co/restaurante/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-14.webp',
        ],
    ]
  ],
  "bars_pubs" => [
    "id" => "bars",
    "title" => "Bars & Pubs",
    "title_es" => "BARS & PUBS",
    "img" => THEME_IMG . 'icons/icon-bars.svg',
    "places" => [
        [
            "name" => "El Barón",
            "address" => "Cra. 4 # 31 - 7",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 6463018",
            "link" => "https://www.instagram.com/elbaroncafe/",
            "image" => THEME_IMG . 'places-cartagena/bares-1.webp',
        ],
        [
            "name" => "Mirador Gastro Bar",
            "address" => "Cra. 7 # 32 - 77",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 322 5109747",
            "link" => "https://www.miradorgastrobar.com",
            "image" => THEME_IMG . 'places-cartagena/bares-2.webp',
        ],
        [
            "name" => "Alquímico",
            "address" => "Calle Colegio # 34 - 24",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 316 5331932",
            "link" => "https://alquimico.com",
            "image" => THEME_IMG . 'places-cartagena/bares-3.webp',
        ],
        [
            "name" => "La Jugada",
            "address" => "Cra. 6 # 34 - 25",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 316 3194481",
            "link" => "https://la-jugada.cluvi.co",
            "image" => THEME_IMG . 'places-cartagena/bares-4.webp',
        ],
        [
            "name" => "Buena Vida",
            "address" => "Calle del Porvenir, Esquina",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 322 3061025",
            "link" => "https://www.instagram.com/buenavidamarisqueria_/",
            "image" => THEME_IMG . 'places-cartagena/bares-5.webp',
        ],
        [
            "name" => "El Coro",
            "address" => "Cra. 8 # 39 - 36",
            "city" => "Hotel Santa Clara",
            "phone" => "+57 (605) 6504700",
            "link" => "https://www.sofitellegendsantaclara.com/",
            "image" => THEME_IMG . 'places-cartagena/bares-6.webp',
        ],
    ]
  ],
  "brunch_desserts" => [
    "id" => "brunch",
    "title" => "Brunch & Desserts",
    "title_es" => "Brunch & Desserts",
    "img" => THEME_IMG . 'icons/icon-brunch.svg',
    "places" => [
        [
            "name" => "Ely Café",
            "address" => "Calle 7 # 2 - 50",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 316 8752466",
            "link" => "https://elyreposteria.com/elycafe/",
            "image" => THEME_IMG . 'places-cartagena/postres-1.webp',
        ],
        [
            "name" => "Pascal",
            "address" => "Calle 30 # 8B - 108",
            "city" => "Getsemaní, Cartagena",
            "phone" => "+57 319 2481245",
            "link" => "https://www.instagram.com/quienespascal/",
            "image" => THEME_IMG . 'places-cartagena/postres-2.webp',
        ],
        [
            "name" => "Época Espresso",
            "address" => "Cra. 5 # 34 - 52",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 8008072",
            "link" => "https://www.instagram.com/weare.epoca/",
            "image" => THEME_IMG . 'places-cartagena/postres-3.webp',
        ],
        [
            "name" => "Juan Valdéz Café",
            "address" => "Cra. 2 # 7 - 17",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6651156",
            "link" => "https://juanvaldez.com",
            "image" => THEME_IMG . 'places-cartagena/postres-4.webp',
        ],
        [
            "name" => "La Paletteria",
            "address" => "Calle 35 # 03 - 86 local 2",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 56661579",
            "link" => "https://www.instagram.com/lapaletteria/",
            "image" => THEME_IMG . 'places-cartagena/postres-5.webp',
        ],
        [
            "name" => "Café Quindío",
            "address" => "C.C. La Serrezuela",
            "city" => "C.C. La Serrezuela - Cartagena",
            "phone" => "+57 320 6936900",
            "link" => "https://www.instagram.com/cafequindio.co/",
            "image" => THEME_IMG . 'places-cartagena/postres-6.webp',
        ],
        [
            "name" => "Café San Alberto",
            "address" => "Cra. 3 # 35 - 18",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 318 7964457",
            "link" => "https://cafesanalberto.com.co/",
            "image" => THEME_IMG . 'places-cartagena/postres-7.webp',
        ],
        [
            "name" => "El Café Ábaco",
            "address" => "Calle 36 # 3 - 86",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6786143",
            "link" => "https://www.abacolibros.com",
            "image" => THEME_IMG . 'places-cartagena/postres-8.webp',
        ],
    ]
  ],
  "boutiques" => [
    "id" => "boutiques",
    "title" => "Boutiques",
    "title_es" => "Boutiques",
    "img" => THEME_IMG . 'icons/icon-boutiques.svg',
    "places" => [
        [
            "name" => "C.C. La Serrezuela",
            "address" => "Cra. 11 # 39 - 21",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6421795",
            "link" => "https://www.instagram.com/laserrezuela/?hl=es",
            "image" => THEME_IMG . 'places-cartagena/boutiques-1.webp',
        ],
        [
            "name" => "Malva",
            "address" => "Cra. 11 # 39 - 21",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 300 3278066",
            "link" => "https://www.instagram.com/malva.col/",
            "image" => THEME_IMG . 'places-cartagena/boutiques-2.webp',
        ],
        [
            "name" => "St. Dom",
            "address" => "Cra. 3 # 33 - 70",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6354380",
            "link" => "https://www.instagram.com/stdomofficial/",
            "image" => THEME_IMG . 'places-cartagena/boutiques-3.webp',
        ],
        [
            "name" => "Silvia Tcherassi",
            "address" => "Calle 31 # 31 - 11",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6790051",
            "link" => "https://co.silviatcherassi.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-4.webp',
        ],
        [
            "name" => "Francesca Miranda",
            "address" => "Calle 31 # 3 - 25",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6648821",
            "link" => "https://francescamiranda.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-5.webp',
        ],
        [
            "name" => "Beatriz Camacho",
            "address" => "Calle 33 # 3 - 04",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 320 5651113",
            "link" => "https://beatrizcamacho.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-6.webp',
        ],
        [
            "name" => "Goretty Medina",
            "address" => "Calle La Mantilla # 3 - 44",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 4368144",
            "link" => "https://co.gorettymedinac.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-7.webp',
        ],
        [
            "name" => "Ketty Tinoco",
            "address" => "Calle Balocco # 33 - 01",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 301 6287824",
            "link" => "https://kettytinoco.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-8.webp',
        ],
        [
            "name" => "Azulu",
            "address" => "Cra. 3 # 31 - 11",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6642724",
            "link" => "https://azulu.co",
            "image" => THEME_IMG . 'places-cartagena/boutiques-9.webp',
        ],
        [
            "name" => "Boutique Gabriel",
            "address" => "Cra. 2 # 9 – 148 L. 5",
            "city" => "Bocagrande, Cartagena",
            "phone" => "+57 (605) 6658020",
            "link" => "http://www.boutiquegabriel.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-10.webp',
        ],
        [
            "name" => "D'Clase",
            "address" => "Av. San Martin 5 – 84T L.201",
            "city" => "Bocagrande, Cartagena",
            "phone" => "+57 300 7889362",
            "link" => "https://www.instagram.com/dclase.co/",
            "image" => THEME_IMG . 'places-cartagena/boutiques-11.webp',
        ],
    ]
  ],
  "salones_de_belleza" => [
    "id" => "beauty",
    "title" => "Beauty Salons",
    "title_es" => "Beauty Salons",
    "img" => THEME_IMG . 'icons/icon-beauty-salons.svg',
    "places" => [
        [
            "name" => "The Salon Peluquería",
            "address" => "Cra 3 # 4 - 23 Local 1",
            "city" => "Bocagrande, Cartagena",
            "phone" => "+57 (605) 6783950",
            "link" => "https://www.instagram.com/thesaloncartagena/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-1.webp',
        ],
        [
            "name" => "Franklin Ramos",
            "address" => "Cra. 11 # 39 - 21 L. S23",
            "city" => "C.C. La Serrezuela - Cartagena",
            "phone" => "+57 316 5294386",
            "link" => "https://www.instagram.com/franklinramossalon.ctg/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-2.webp',
        ],
        [
            "name" => "Portada Peluqueria",
            "address" => "Cra. 3 # 4 - 21",
            "city" => "Boca Grande, Cartagena",
            "phone" => "+57 (605) 6524223",
            "link" => "https://www.instagram.com/portadapeluqueria/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-3.webp',
        ],
        [
            "name" => "Carlos Torres",
            "address" => "Av. San Martín # 5 - 84 L. 201",
            "city" => "Boca Grande, Cartagena",
            "phone" => "+57 316 6091227",
            "link" => "https://www.instagram.com/carlostorres.studio10/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-4.webp',
        ],
        [
            "name" => "Diego Moya",
            "address" => "Calle de la Serrezuela # 39 - 02",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6685291",
            "link" => "https://www.instagram.com/diegomoyasalon/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-5.webp',
        ],
        [
            "name" => "Gloss Peluqueria",
            "address" => "Cra. 3 # 31 - 19",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6501015",
            "link" => "https://www.instagram.com/gloss_peluqueria/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-6.webp',
        ],
        [
            "name" => "Andrea Rodríguez",
            "address" => "Calle 10A # 2 - 38",
            "city" => "Boca Grande, Cartagena",
            "phone" => "+57 301 7929773",
            "link" => "https://www.instagram.com/andrearodriguezbeauty/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-7.webp',
        ],
        [
            "name" => "Karla B. López",
            "address" => "Calle de Ayos # 4 - 46",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 2780517",
            "link" => "https://www.instagram.com/karlabrigittemakeup/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-8.webp',
        ],
    ]
  ]
]
?>

<main class="customMainCartagena">
    <section class="customSectionCartagenaHero position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <img class="w-100 d-none d-xl-block" src="<?php echo THEME_IMG . 'flower-two.webp'; ?>" alt="cameron-fondo-verde-edit">
                        <img class="flowerTowLeft d-block d-xl-none position-absolute" src="<?php echo THEME_IMG . 'flower-two-mobile-left.webp'; ?>" alt="cameron-fondo-verde-edit">
                        <img class="flowerTowRight d-block d-xl-none position-absolute" src="<?php echo THEME_IMG . 'flower-two-mobile-right.webp'; ?>" alt="cameron-fondo-verde-edit">
                        <img class="textCartagena" src="<?php echo THEME_IMG . 'text-cartagena.svg'; ?>" alt="cameron-fondo-verde-edit">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="customSectionCartagenaPlaces pb-5" id="travel-info">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-11 mx-auto">
                        <div class="d-flex align-items-center py-3 gap-3">
                            <div class="icon">
                                <img src="<?php echo THEME_IMG . 'icons/icon-travel-info.svg'; ?>" alt="">
                            </div>
                            <h2 class="fs-xl-2 text-primary letter-spacing-44 uppercase">TRAVEL INFO</h2>
                        </div>
                        <div class="line line--full mb-4"></div>
                        <div class="bg-yellow-100 p-3 mb-5 shadow-1">
                            <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">Passports</h2>
                            <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-4">Don't forget your passports! Please double check the expiration date.</p>
                            <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">CheckMig</h2>
                            <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-4">Please complete the immigration registration form 48 hours before your trip, as the airline requires proof of completion to check-in. Complete the same step to return to the US. Click Here</p>
                            <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">RAFAEL NUÑEZ - INTERNATIONAL AIRPORT</h2>
                            <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-4">Flight to Cartagena on the Caribbean coast.  Latam, Delta, American Airlines, United, Copa Airlines  and Avianca operate direct flights to the Rafael Nuñez Airport. The airport is a short 10-minutes taxi journey to the old town. There are authorized taxi services 24 hours. The rate to Getsemaní costs about $14.000 cop. To the hotel zone of the Historic Center (Ciudad Amurallada) about $14.000 cop and to the Bocagrande zone it costs $20.000 cop. Normally $1 USD is equivalent to $4.500 cop. </p>
                            <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">SECURITY IN CARTAGENA</h2>
                            <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-4">Cartagena is a beautiful and safe destination for our celebration. The city is known for its welcoming atmosphere, and we want you to feel at ease as you join us for this special occasion. With a strong focus on tourism and hospitality, Cartagena offers a secure environment for all visitors. From the historic streets to the scenic beaches, we’re excited to share this incredible city with you, and we’re confident you'll feel right at home!</p>
                            <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">GARTAGENANNY</h2>
                            <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-5">For guests who may require it, here’s a trusted local nanny service to help with childcare. Please feel free to reach out to arrange childcare during the celebration. Lili Rueda: +57 318 6294974.</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <?php foreach ($places as $key => $category) { ?>
                <div class="customSectionCartagenaPlaces <?php echo $key === 4 ? 'mb-5' : ''; ?> position-relative" id="<?php echo $category['id']; ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-11 mx-auto">
                                <div class="d-flex align-items-center py-3 gap-3">
                                    <div class="icon">
                                        <img src="<?php echo $category['img']; ?>" alt="">
                                    </div>
                                    <h2 class="fs-xl-2 text-primary letter-spacing-44 uppercase"><?php echo $category['title']; ?></h2>
                                </div>
                                <div class="line line--full mb-4"></div>
                                <?php if (!empty($category['info'])) : ?>
                                    <div class="row">
                                        <div class="col-12 col-lg-7 pe-lg-3 mb-lg-5 mb-3">
                                            <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-4"><?php echo $category['info']; ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="swiper placesSwiper" id="swiper-<?php echo $category['id']; ?>">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($category['places'] as $place) { ?>
                                            <div class="swiper-slide">
                                                <div class="bg-yellow-100 p-3">
                                                    <?php if ($place['image']) : ?>
                                                        <img class="w-100 customSectionCartagenaPlaces__img mb-3" src="<?php echo $place['image']; ?>" alt="">
                                                    <?php endif?>
                                                    <div class="px-3">
                                                        <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">
                                                            <?php echo $place['name']; ?>
                                                        </h2>
                                    
                                                        <?php if ($place['address']) : ?>
                                                        <p class="fs-xl-7 text-gray-200 letter-spacing-1"><?php echo $place['address']; ?></p>
                                                        <?php endif?>
                                    
                                                        <?php if ($place['city']) : ?>
                                                        <p class="fs-xl-7 text-gray-200 letter-spacing-1 mb-2"><?php echo $place['city']; ?></p>
                                                        <?php endif?>
                                    
                                                        <div class=""></div>
                                    
                                                        <?php if ($place['phone']) : ?>
                                                        <p class="fs-xl-4 text-gray-200 letter-spacing-24 mb-3" style="-webkit-text-stroke-width: 0.5px;"><?php echo $place['phone']; ?></p>
                                                        <?php endif?>
                                
                                                        <div class=""></div>
                                    
                                                        <?php if ($place['link']) : ?>
                                                            <a class="btn btn-small" href="<?php echo $place['link']; ?>" target="_blank">
                                                                View
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 h-100 position-absolute top-0">
                        <div class="container h-100 position-relative">
                            <div class="swiper-button-prev start-0" id="prev-<?php echo $category['id']; ?>"></div>
                            <div class="swiper-button-next end-0" id="next-<?php echo $category['id']; ?>"></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>