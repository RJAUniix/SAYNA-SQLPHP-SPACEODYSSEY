<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stellar Tech</title>
    <!-- LES LIENS -->
    <style>
        
        .center-content {
            margin-top: 15%;
            text-align: center;
            color: white;
            background-color: rgba(0, 0, 0, 0.7);        
        }

        .fade-in {
            font-size : 100px;
            opacity: 0;
            animation: fadeIn 5s ease-in-out forwards;
        }

        #p-center{
            width : 50%;
            font-size : 20px;
            margin : 0 auto;
            text-align :  center;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>

<!-- Le header -->
<?php include('../app/Views/header.php'); ?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row ml-4">
            <div class="offset-2 col-lg-10" style='width: 100vw; height: 100vh;' id="main">
                <div class="center-content">
                    <h1 class="fade-in">Stellar Tech</h1>
                    <p id="p-center">Bienvenue sur la plateforme de gestion des missions intersterstélaires pour la découvertes de nouveaux horizons.</p>
                    <button class="btn btn-outline-primary mt-5 mb-5">Nouvelle mission</button>
                </div>  
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>


<!-- API DE LA NASA EN ACTION -->
<script>
    // URL de l'API APOD
    const apiKey = 'AW6lMK0EKHOOKSAhnlzNs3zyMA5dF8k0PkBoUwgS'; // Remplacez YOUR_API_KEY par votre propre clé API de la NASA
    const apiUrl = `https://api.nasa.gov/planetary/apod?api_key=${apiKey}`; 
    
    function changerBackground() {
        // Vérifiez si la date stockée en cookie est égale à la date actuelle
        const lastChangedDate = new Date(document.cookie.replace(/(?:(?:^|.*;\s*)backgroundChanged\s*\=\s*([^;]*).*$)|^.*$/, "$1"));

        // Obtenez la date actuelle
        const currentDate = new Date();

        // Vérifiez si l'image a déjà été changée aujourd'hui
        if (currentDate.getDate() !== lastChangedDate.getDate()) {
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    // Vérifiez si la réponse contient une image
                    if (data.media_type === 'image') {
                        const imageUrl = data.url;

                        // Sélectionnez la section par son ID
                        const main = document.querySelector('#main');

                        // Définissez l'URL de l'image comme arrière-plan pour votre site
                        main.style.backgroundImage = `url(${imageUrl})`;
                        main.style.backgroundRepeat = 'no-repeat';
                        main.style.backgroundSize = 'cover';

                        // Stockez la date actuelle en cookie pour indiquer que l'image a été changée aujourd'hui
                        document.cookie = `backgroundChanged=${currentDate.toUTCString()}; expires=${currentDate.toUTCString()}`;
                    } else {
                        console.error('Aucune image n\'a été trouvée dans la réponse de l\'API APOD.');
                    }
                })
                .catch(error => {
                    console.error('Une erreur s\'est produite lors de la récupération de l\'image APOD :', error);
                });
        }
    }

    // Appelez la fonction lorsque la page se charge
    window.addEventListener('load', changerBackground);
</script>


<?php include('../app/Views/footer.php'); ?>