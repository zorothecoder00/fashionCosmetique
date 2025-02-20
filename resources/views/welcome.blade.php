<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fashion et Cosmétique</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/style.css') }}" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    
    <body>  

        <header class="fade-in"> 

        <!-- Responsive navbar de la page principale-->
        <nav class=" navbar navbar-expand-lg sticky-top w-100" id="navBar" style="background-color: coral;">

            <div class="container-fluid">

                <!-- Logo -->
                <a class="navbar-brand" href="#!">
                   <img src=""alt="" class="img-fluid">
                </a> 

                <!-- Toggler pour mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                <!-- Menu -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" >
                    <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">

                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold fs-5" aria-current="page" href="#accueil">Accueil</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold fs-5" href="#modeles">Modèles</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold fs-5" href="#cosmetiques">Nos produits cosmétiques</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold fs-5" href="#apropos">À propos</a>
                        </li>  
        
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold fs-5" href="#contact">Contact</a>
                        </li>

                    </ul>
                </div>
            </div> 
        </nav> 
        </header>

        <!-- Section Accueil--> 
        <section class="justify-content-center align-items-center text-center w-100 " id="accueil">

            <div class="container-fluid w-100" id="background-image" style="background-image: url('{{ asset('images/fashion11.webp') }}');; background-position: center ;background-size: cover;  height: 90vh ;">
                <h1></h1> 
                <p></p>
            </div>

        </section>
        <section class="container-fluid" id="apropos">
            <div class="justify-content-center">
                <h1 class="text-center">Petit résumé sur les activités de notre entreprise</h1>
                <p class="text-center">Notre société est une société basée sur la haute couture des pagnes et aussi une expertise pour les produits cosmétiques de qualité.
                </p>
            </div>
        </section>


        <!--Section pour les modèles-->
        <section id="modeles" class=" text-white  " style="background-color: coral;">
            <div class="container-fluid w-100 ">
                <h1 class="text-center pt-3 mb-4 fs-1">Nos modèles</h1>

                <div  class="row justify-content-center align-items-center mx-2 mb-4">
                    <div class="col-lg-4 col-md-6 ">
                        <img src="{{ asset('images/fashion.jpg') }}" class="img-fluid rounded slide">
                        <a href="{{ route("commandeModele") }}" class="btn btn-dark mt-2">VOIR PLUS
                        </a>
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <img src="{{ asset('images/fashion.jpg') }}" class="img-fluid rounded slide">
                        <a href="{{ route("commandeModele") }}" class="btn btn-dark mt-2">VOIR PLUS
                        </a>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mx-2 pb-3">
                    <div class="col-lg-4 col-md-6 ">
                        <img src="{{ asset('images/fashion.jpg') }}" class="img-fluid rounded slide">
                        <a href="{{ route("commandeModele") }}" class="btn btn-dark mt-2">VOIR PLUS
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="{{ asset('images/fashion.jpg') }}" class="img-fluid rounded slide">
                        <a href="{{ route("commandeModele") }}" class="btn btn-dark mt-2">VOIR PLUS
                        </a>
                    </div>
                </div>

            </div> 
        </section>

        <section class="container-fluid py-4" id="cosmetiques" style="background-color: black;">
            <div class="row justify-content-center">
                <h2 class="text-center text-white mb-4">Nos produits cosmétiques</h2>
                <!-- Première ligne -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card text-center shadow-lg" id="card-top">
                        <img src="{{ asset('images/cosmetique0.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body" style="background-color: darkgoldenrod;">
                            <h5 class="card-title">Savon Douceur</h5>
                            <a href="{{ route('commandeSavon') }}" class="btn btn-primary">Commander</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card text-center shadow-lg" id="card-top">
                        <img src="{{ asset('images/cosmetique1.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body" style="background-color: darkgoldenrod;">
                            <h5 class="card-title">Savon Nature</h5>
                            <a href="{{ route('commandeSavon') }}" class="btn btn-primary">Commander</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card text-center shadow-lg" id="card-top">
                        <img src="{{ asset('images/cosmetique2.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body" style="background-color: darkgoldenrod;">
                            <h5 class="card-title">Savon Hydratant</h5>
                            <a href="{{ route('commandeSavon') }}" class="btn btn-primary">Commander</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card text-center shadow-lg" id="card-top">
                        <img src="{{ asset('images/cosmetique4.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body" style="background-color: darkgoldenrod;">
                            <h5 class="card-title">Savon Exfoliant</h5>
                            <a href="{{ route('commandeSavon') }}" class="btn btn-primary" style="padding: auto;">Commander</a>
                        </div>
                    </div>
                </div>

                <!-- Deuxième ligne -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card text-center shadow-lg">
                        <img src="{{ asset('images/cosmetique5.webp') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body" style="background-color: darkgoldenrod;">
                            <h5 class="card-title">Savon Bio</h5>
                            <a href="{{ route('commandeSavon') }}" class="btn btn-primary">Commander</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card text-center shadow-lg">
                        <img src="{{ asset('images/cosmetique6.png') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body" style="background-color: darkgoldenrod;">
                            <h5 class="card-title">Savon Éclaircissant</h5>
                            <a href="{{ route('commandeSavon') }}" class="btn btn-primary">Commander</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card text-center shadow-lg">
                        <img src="{{ asset('images/cosmetique7.webp') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body" style="background-color: darkgoldenrod;">
                            <h5 class="card-title">Savon Antibactérien</h5>
                            <a href="{{ route('commandeSavon') }}" class="btn btn-primary">Commander</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card text-center shadow-lg">
                        <img src="{{ asset('images/cosmetique8.avif') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body" style="background-color: darkgoldenrod;">
                            <h5 class="card-title">Savon Luxueux</h5>
                            <a href="{{ route('commandeSavon') }}" class="btn btn-primary">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Section Contact -->           
        <section id="contact" class=" py-5 text-white" style="background-image:url('{{ asset('images/fashion10.jpg') }}')!important; height: 500px!important;background-size: cover !important;   background-position: center !important; background-position: center 5px !important; padding-top: 5px;">

            <div class="container-fluid text-center">
                <h2 class="text-center mb-4">Contactez-nous</h2>
                <p class="text-center mb-4">Remplissez le formulaire ci-dessous pour nous envoyer un message.</p>

                <!-- Formulaire de contact -->
                <form class="contact-form" method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <!-- Prénom -->
                    <input type="text" class="contact-input" placeholder="Prénom" name="firstname" required>

                    <!-- Nom -->
                    <input type="text" class="contact-input" placeholder="Nom" name="name" required>

                    <!-- Téléphone -->
                    <input type="tel" class="contact-input" placeholder="Téléphone" name="phone" required>

                    <!-- Email -->
                    <input type="email" class="contact-input" placeholder="Email" name="mail" required>

                    <!-- Bouton d'envoi -->
                    <button type="submit" class="submit-btn">Envoyer</button>
                </form>

            </div>       
        </section>

        <!-- Footer-->
        <footer class="">

                <!-- Ligne 3 : Copyright -->
                <div class="container px-5" style="background-color: white;">
                    <p class="m-0 text-center text-dark"> &copy;2025 </p>
                </div>

        </footer>

        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->    
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!--AOS pour scroller-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init(); 
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
            const images = document.querySelectorAll(".slide"); 

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (entry.target.dataset.side === "left") {
                            entry.target.style.transform = "translateX(0)";
                        } else {
                            entry.target.style.transform = "translateX(0)";
                        }
                        entry.target.style.opacity = "1";
                        observer.unobserve(entry.target); // Arrêter l'observation après l'animation
                    }
                });
            }, { threshold: 0.5 });

            images.forEach((img, index) => {
                img.style.opacity = "0";
                img.style.transition = "transform 1s ease-out, opacity 1s ease-out";
                    if (index % 2 === 0) {
                        img.dataset.side = "left";
                        img.style.transform = "translateX(-100%)";
                    } else {
                        img.dataset.side = "right";
                        img.style.transform = "translateX(100%)";
                    }
                    observer.observe(img);
                });
            });

            document.addEventListener("DOMContentLoaded", function () {
                // Tableau des images de fond
                const imagesFond = [
                    "{{ asset('images/fashion11.webp') }}",     
                    "{{ asset('images/fashion12.webp') }}",
                    "{{ asset('images/fashion6.jpg') }}",
                ]; 
                let currentImageFondIndex = 0; 

                const backgroundElement = document.getElementById('background-image');
                // Fonction pour changer l'image de fond
                function changeBackgroundImageFond() {
                    currentImageFondIndex = (currentImageFondIndex + 1) % imagesFond.length; // Cycle à travers les images
                    backgroundElement.style.backgroundImage = "url(" + imagesFond[currentImageFondIndex] + ")";
                    backgroundElement.style.backgroundSize = "100%"; // Reset du zoom

                    // Lancer le zoom après 1 seconde pour éviter un effet vide
                    setTimeout(zoomIn, 1000);

                }

                // Fonction de zoom pour l'image de fond
                function zoomIn() {
                    backgroundElement.style.transition = "background-size 2s ease-in-out";
                    backgroundElement.style.backgroundSize = "110%";

                    setTimeout(zoomOut, 3000); // Retour au zoom normal après 3s
                }

                function zoomOut() {
                    backgroundElement.style.transition = "background-size 2s ease-in-out";
                    backgroundElement.style.backgroundSize = "100%";
                }


                // Changer l'image toutes les 5 secondes
                setInterval(changeBackgroundImageFond, 5000); 

                // Lancer le premier changement immédiatement
                changeBackgroundImageFond();
            });
        </script>

    </body>
</html>
