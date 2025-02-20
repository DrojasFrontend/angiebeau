<?php 
$placesCartagena = [
  [
      "img" => "cartagena-1.png",
      "name" => "Teatro Heredia",
      "copy" => "Magnificent eclectic-style building erected in 1902, designed by Luis Felipe Jaspe, the same architect who created the Cartagena Clock Tower.",
  ],
  [
      "img" => "cartagena-2.png",
      "name" => "Murallas de Cartagena",
      "copy" => "Forification that took more than a hundred years to complete, carried out in stages from 1586 to 1699, encompassing the perimeter of the center of the old city, San Diego and Getsemaní.",
  ],
  [
      "img" => "cartagena-3.png",
      "name" => "Torre del Reloj",
      "copy" => "Famous gateway to the walled city, characterized by its baroque stone doorway that precedes an imposing structure.",
  ],
  [
      "img" => "cartagena-7.png",
      "name" => "isla de barú",
      "copy" => "Coastal area located 45 minutes by boat, known for its paradisiacal almost virgin white sand beaches, transparent waters and coral reefs.",
  ],
  [
      "img" => "cartagena-8.png",
      "name" => "castillo san felipe",
      "copy" => "One of the most famous sites, corresponding to a castle built in the seventeenth century, considered the most outstanding work of Spanish military engineering in America.",
  ],
  [
      "img" => "cartagena-10.png",
      "name" => "cerro de la popa",
      "copy" => "Highest point in Cartagena, a strategic position that allows privileged views of both the old city and the Caribbean Sea, the island of Tierrabomba and La Boquilla.",
  ],
];

$places = [
  [
    "id" => "hoteles",
    "title-en" => "HOTELS",
    "title-es" => "HOTELES",
    "img" => IMG_BASE . 'icon-hotels.svg',
  ],
  [
    "id" => "restaurantes",
    "title-en" => "RESTAURANTS",
    "title-es" => "RESTAURANTES",
    "img" => IMG_BASE . 'icon-restaurants.svg',
  ],
  [
    "id" => "postres",
    "title-en" => "BRUNCH & DESSERTS",
    "title-es" => "BRUNCH Y POSTRES",
    "img" => IMG_BASE . 'icon-brunch.svg',
  ],
  [
    "id" => "bares",
    "title-en" => "BARS & PUBS",
    "title-es" => "BARES Y PUBS",
    "img" => IMG_BASE . 'icon-bars.svg',
  ],
  [
    "id" => "boutiques",
    "title-en" => "BOUTIQUES",
    "title-es" => "TIENDAS",
    "img" => IMG_BASE . 'icon-boutiques.svg',
  ],
  [
    "id" => "salones",
    "title-en" => "BEAUTY SALONS",
    "title-es" => "PELUQUERÍAS",
    "img" => IMG_BASE . 'icon-beauty.svg',
  ],
]
?>

<section class="section4 section4Cartagena" id="cartagena">
  <div class="section4__wrapper">
    <p class="heading--64 text--center color--A98417 stroke--2 spacing--64">LUGARES PARA VISITAR</p>
    <p class="font--claresta heading--64 text--center color--A98417 spacing--0">places to visit</p>
  </div>

  <span class="space space--20"></span>
  <span class="space space--10"></span>
  <span class="space space--20"></span>
  <div class="sectionPlaces">
    <div class="sectionPlaces__wrapper">
      <div class="slickPlaces">
        <?php foreach ($placesCartagena as $idx => $cartagena) { ?>
          <div class="sectionPlaces__padding">
            <div class="sectionPlaces__item">
              <img src="<?php echo IMG_BASE . $cartagena['img']; ?>" alt="">
              <div class="sectionPlaces__info">
                <h3 class="heading--22 color--154B54 uppercase text--left stroke--1 spacing--13"><?php echo $cartagena['name']; ?></h3>
                <div class="space space--20"></div>
                <div class="line line--small line--left"></div>
                <div class="space space--20"></div>
                <p class="heading--18 color--000 spacing--18 stroke--0" style="line-height: 24px;"><?php echo $cartagena['copy']; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>  
      </div>
    </div>
  </div>
</section>