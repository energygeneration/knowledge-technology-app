<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/formation.css">
  
  <title>formamation</title>
</head>

<body>

 <!-- header -->
 <div class="header">
  <!-- header-black -->
  <div class="header-black">
            <a href="mailto:knowledgetchnology@gmail.com" class="mail-link">
                <img src="./assets/images/nouvelle-enveloppe-de-courrier-electronique.png" class="enveloppe "
                    alt="enveloppe electronique">
            </a>

            <a href="https://wa.me/0022891622497?text=Welcome%20to%20Knowledge%20Technology%20!">
            <img src="./assets/images/whatsapp.png" class="enveloppe" alt="whatsapp">
            </a>

            <div class="">
                <p class="header-black-contact">Contactez nous</p>
            </div>

        </div>
  <!-- end header-black -->

  <!-- navbar -->

  <div class="header-nav">
      <div class="logo-background d-flex  ">
          <img src="./assets/images/logo.png" class="logo mt-1" alt="whatsapp">
          <span style="color: #00CCFF;" class="fs-5 mt-1">KNOWLEDGE</span> <span
              style="color: #7CF4E7; margin-left: 3%;" class="fs-5 mt-1">TECHNOLOGY</span>
      </div>

      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ">
                      <li class="nav-item">
                          <a class="nav-link active text-light mx-5" href="{{ route('acceuil') }}">Accueil</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active text-light mx-5" href="{{ route('formation') }}">Formation</a>
                      </li>
                    
                      <li class="nav-item ">
                                <a class="nav-link text-light mx-5" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                      
                        <li class="nav-item">
                            <a class="nav-link  active text-light mx-5" href="{{ route('contact') }}">Contact</a>
                        </li>
                  </ul>
              </div>
          </div>
      </nav>
    <!-- acceuil -->
   

    <!-- end-acceuil -->

</div>


<div>
  
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="./assets/images/photo_salles_informatique_1.jpeg" class="d-block w-100 " height="500" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./assets/images/image-etudiant.webp" class="d-block w-100 " height="500" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./assets/images/photo_salles_informatique_1.jpeg" class="d-block w-100 " height="500" alt="...">
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    
  </div>
</div>
<!-- end-header -->

<!-- knowledge technology-lien de telechargement du prospectus -->



<!-- end-knowledge technology-lien de telechargement du prospectus -->


  <!-- formation -->
  <div class="formation">

    <!-- formation-line-1 -->
    <div class="container ">
      <div class="formation-line1 d-flex">
        <div class="">
          <div class="card-formation card" style="width: 18rem;">
          <a href="http://www.formations-informatique-bureautique.com/formation-maintenance-informatique-reseaux.html" target="_blank">
            <img src="./assets/images/carte_mere.jpeg" class="card-img-top" alt="etudiant">
          </a>
            <div class="card-body">
              <h5 class="card-title text-center">Maintenance Informatique</h5>
              <p class="card-text pt-3">Durée : 2 ans</p>
              <p class="card-text pt-3">Montant : <span class="montant">300 000 Fcfa/an</span> </p>
            </div>
          </div>
        </div>

        <div class="">
          <div class="card-formation card" style="width: 18rem;">
            <a href="https://fr.wikipedia.org/wiki/Réseau_de_télécommunications" target="_blank">
              <img src="./assets/images/reseau.jpg" class="card-img-top" alt="etudiant">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center">Réseau et télecommunication</h5>
              <p class="card-text pt-3">Durée : 2 ans</p>
              <p class="card-text pt-3">Montant : <span class="montant">300 000 Fcfa/an</span> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end-formation-line-1 -->

    <!-- formation-line-2 -->
    <div class="container">
      <div class="formation-line2 d-flex">
        <div class="">
          <div class="card-formation card" style="width: 18rem;">
            <a href="https://www.digitalschool.paris/metiers/developpement-web" target="_blank"><img src="./assets/images/developpeur.jpg" class="card-img-top" alt="etudiant"></a>
            <div class="card-body">
              <h5 class="card-title text-center">Développement Web 
                et Mobile & Web 
                Design</h5>
              <p class="card-text pt-3">Durée : 2 ans</p>
              <p class="card-text pt-3">Montant : <span class="montant">300 000 Fcfa/an</span> </p>
            </div>
          </div>
        </div>

        <div class="">
          <div class="card-formation card" style="width: 18rem;">
            <a href="https://graphiste.com/blog/creer-infographie" target="_blank"><img src="./assets/images/designer.png" class="card-img-top" alt="etudiant"></a>
            <div class="card-body">
              <h5 class="card-title text-center">Infographie et zeb design</h5>
              <p class="card-text pt-3">Durée : 2 ans</p>
              <p class="card-text pt-3">Montant : <span class="montant">300 000 Fcfa/an</span> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end-formation-line-2 -->
  </div>
  <!-- end-formation -->

  <!-- debouchés -->
  <div class="debouche text-center ">
    <h1 class="text-light fs-4 p-3">LES DIFFERENTS DEBOUCHES DE NOS FILIAIRES DE FORMATION</h1>
  </div>

  <!-- tableau-debouchés -->


  <table>

    <tr>
      <td class="fisrt-column text-center fw-bold">FILAIRES </td>
      <td class="second-column text-center fw-bold">DEBOUCHES</td>
    </tr>

    <tr>
      <td class="fisrt-column text-center">
        Maintenance Informatique</td>
      <td>Où travaille un technicien de maintenance en informatique ?
        Résultat de recherche d'images pour "les débouchés de la maintenance informatique"
        Très technique, son activité le met au contact du matériel, des utilisateurs et des informaticiens. Dans le
        service informatique d'une entreprise ou dans une ESN (entreprise de services du numérique) il est chargé de la
        gestion et de la maintenance du matériel et des logiciels.</td>
    </tr>

    <tr>
      <td class="fisrt-column  text-center">Réseau et télecommunication</td>
      <td>Les technicien en Réseaux et télécommunication peuvent exercer les métiers d'administrateur systèmes et
        réseaux, de responsable d'exploitation, d'architecte réseau et systèmes de communication et d'information, de
        techniciens en télécommunications, de responsable de ...</td>
    </tr>

    <tr>
      <td class="fisrt-column  text-center">Développement Web et Mobile & Web Design</td>
      <td>Missions du webdesigner:
        Il peut être amené dans le cadre de son poste à :
        -Établir la charte graphique et l’identité visuelle d’un site web.
        - Réaliser la maquette d’un site (placement des éléments d’un site)
        -Concevoir des logos, des boutons et bannières pour animer le site ....
      </td>
    </tr>

    <tr>
      <td class="fisrt-column  text-center">Infographie et montage vidéo</td>
      <td>À l'aide d'un cahier des charges rédigé en amont, il crée des supports de communication composés de textes,
        d'images, d'animations ou de vidéos.</td>
    </tr>

  </table>

  

  <!-- end-tableau-debouchés -->
  <!-- end-debouchés -->

  <!-- image-etudiant-travaillant -->
  <div class="image-etudiant-travaillant">
      <p class=" text-etudiant-travaillant text-light text-center">gggggggggggggggggg</p>
    </div>
  </div>

  <!-- image-etudiant-travaillant -->

   <!-- google map google-map-newsletter container-fluid -->
   <div class=" row  mt-3">
    <div class="col-12 col-md-8 p-0">
        <iframe class="w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6216413501766!2d1.1684554157296931!3d6.181368228758596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1021593cf5703953%3A0xcf383ad4dc70f86c!2sBoulevard%20Du%2030%20Aout!5e0!3m2!1sfr!2stg!4v1661199356898!5m2!1sfr!2stg"
            style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-12 col-md-4 p-0">

        <div class="newslet w-100">
            <!-- <img src="./assets/images/newsletter.png" class="w-100" height="450" alt=""> -->
          <div class="newsletter-text p-3">
              <h4 class=" text-center pt-3 text-light"> <span>NEW</span><span
                  class="undreline">SLET</span>TER</h4>

              <p class="text-light">
              Pour vous ,entreprises professionnelles Inscrivez vous afin de recevoir les informations par rapport
              à nos offreset promos speciales</p>
              
            <form action="/newsletter" method="post">
                    {{ csrf_field() }}
                    <input type="email" class="inputmail-buttont" name="email" placeholder="Votre adresse e-mail"> <br class="go-in-line">
                    <input type="checkbox" class="checkbox " name="checkbox"> <span class="text-light"> J'accepte que knowledge tchnology m'envoie des mails</span> <br>
                    <button type="submit" class="inputmail-buttone text-light">VALIDER</button>
            </form>
              
          </div>
        </div>
    </div>
</div>
<!--end-google map -->

<!-- footer -->
<div class="container mt-5">
    <div class="black-line">
        <p class="black">black</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <p>Informations pratiques</p>
                <p>
                    contacter nous 24h/24 et 7j/7
                    Tel: 91 62 24 97 / 99 40 93 20
                </p>
            </div>

            <div class="col-3">
                    <p>Informations pratiques</p>
                    <p>
                        Ecrivez nous : <br>
                        knowledgetchnology@gmail.com <br>
                        où dans le formulaire de contact
                    </p>
                </div>

                <div class="col-3">
                    <p>Informations pratiques</p>
                    <p>
                        Où nous trouver  : <br>
                        Lomé-Togo;<br> Adidogomé; <br> Rue Mélonkou.
                    </p>
                </div>

                <div class="col-3">
                    <p>Informations pratiques</p>
                    <p>
                        contacter nous : <br>
                        24h/24 et 7j/7 <br>
                        Tel: 91 62 24 97 / 99 40 93 20
                    </p>
                </div>
        </div>
    </div>
</div>

<div class="copyrigth pt-3">
    <p class="text-light text-center" style="height: 65px;">copyrigth</p>
</div>
<!-- end-footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>