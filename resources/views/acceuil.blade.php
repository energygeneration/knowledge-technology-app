<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>acceil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('./assets/css/main.css') }}">
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
                                <a class="nav-link active text-light  mx-5" href="{{ route('acceuil') }}">Accueil</a>
                            </li>
                          
                            <li class="nav-item">
                            <a class="nav-link  active text-light mx-5" href="{{ route('formation') }}">Formation</a>
                        </li>

                        <li class="nav-item ">
                                <a class="nav-link text-light mx-5" href="{{ route('login') }}">{{ __('Inscrivez-Vous') }}</a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link  active text-light mx-5" href="{{ route('contact') }}">Contact</a>
                        </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div> 
        </div>
        <!-- accueil -->
        <div class="accueil">
            <div class="text-accueil">
                <div class="text">
                    <p class="text-light text-center">CENTRE DE FORMATION QUI REPOND</p>
                    <p class="text-light text-center">AUX EXIGENCES DE L'HEURE ! </p>
                </div>
            </div>
        </div>
        <!-- end-accueil -->
        <!--end navbar -->

    </div>
    <!-- end-header -->

    <!-- Notre centre de formation -->

    <div class="centre-formation">
        <h1 class="text-center container mt-5">Notre centre de formation:</h1>

        <div class="container">
            <div class="knowledgetchnology mt-5">
                <div class="propos-de-nous">
                    <h3 class="p-3">QUELQUES MOTS SUR NOUS</h3>
                    <p class="p-2">
                        KNOWLEDGE TECHNOLOGY est centre de formation professionnelle, qui offre des formations dans les métiers prévoilleurs d'emplois.
                    </p>
                </div>

                <div class="nos-connaissances mt-3">
                    <h3>DE LARGES CONNAISSANCES</h3>
                    <div class="ligne-bleu">
                        <p style="display: none;">bleu</p>
                    </div>
                    <p>Afin de répondre à toutes vos demandes, notre équipe expérimentée, proposent de nombreux
                        services. Depuis plus de 20 ans nous avons pu développer de nouvelles compétences et avons
                        obtenu de solides connaissances en informatique.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end-Notre centre de formation -->

    <!-- NOS DISPOSITIFS POUR LA FORMATION -->

    <div class="dispositif">
        <h1 class="text-center my-5">NOS DISPOSITIFS POUR LA FORMATION</h1>
    </div>
    <div class=" my-5">
        <div class="text-center">
            <img src="./assets/images/computers.jpeg" class="computer rounded" alt="...">
        </div>
    </div>
    <!--end-NOS DISPOSITIFS POUR LA FORMATION -->

    <!-- materiel -->
    <div class="interview mt-5">
        <p class="text-center text-light fs-1" style="margin-top: 5%;">“Nous mettons à la disposition des apprenants du
            matériel adequat pour la reussite de la formation ........”</p>
    </div>

    <div id="carouselExampleControls" class="carousel slide"  data-bs-ride="carousel" style="padding:3% 20%;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/images/Group 23.png" class="img-corousel d-block "   height="200" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assets/images/Group 24.png" class="img-corousel d-block "  height="200" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assets/images/Group 25.png" class="img-corousel d-block "  height="200" alt="...">
          </div>
        </div>
        
      </div>

    

    <!-- end-materiel -->

    <!-- image-etudiant -->
    <div class="image-etudiant">
        <div class="card">
            <div class="card m-5">
                <div class="card-header">
                    <h2 class="text-center text-light">Témoignages</h2>
                </div>
                <div class="card-temoin">
                    <div class="temoin d-flex">
                        <div class="">
                            <h3 class="text-warning m-4">Témoignage1</h3>
                            <p class="text-light fs-4 px-4">
                                La formation « devenir administrateur réseaux et systèmes » d’une durée <span class="point">...</span> <span class="text-temoignage">de quinze mois m’a permis d’acquérir beaucoup de notions de base sur le réseau, les systèmes et sa sécurité ansi qu'une bonne maitrise du calcul binaire, découpage des sous-réseaux, Windows 8/server 2012,
                                La formation s’est bien déroulée et corronner le tout, j’ai obtenu deux certifications à savoir le CCNA et ITIL 2011.</span>
                            </p>
                        </div>
                        <div class="">
                            <h3 class="text-warning m-5">Témoignage2</h3>
                            <p class="text-light fs-4 px-4">
                                A knowledge technology a mis tous les dispositifs necessaire pour <span class="point">...</span><span class="text-temoignage">la formation ont été mis à notre disposition. Ce qui nous a permis d'être performant dans les structures que nous servont aujourd'hui. </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-image-etudiant -->

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
               <div class="newsletter-text p-3">
                    <h4 class=" text-center pt-3 text-light"> <span>NEW</span><span
                        class="undreline">SLET</span>TER</h4>

                    <p class="Acceptation text-light fs-6">
                    Pour vous ,entreprises professionnelles Inscrivez vous afin de recevoir les informations par rapport
                    à nos offreset promos speciales</p>
                    <form action="/newsletter" method="post">
                        {{ csrf_field() }}
                        <input type="email" class="inputmail-buttont" name="email" placeholder="Votre adresse e-mail" required> <br class="go-in-line">
                        <input type="checkbox" class="checkbox " name="checkbox"> <span class="Acceptation text-light" required> J'accepte que knowledge tchnology m'envoie des mails</span> <br>
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
        <p class="text-light text-center" style="height: 65px;">Copyright knowledgetchnology.com Août 2022</p>
    </div>
    <!-- end-footer -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>