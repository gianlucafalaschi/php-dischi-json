<!-- 
    Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente 
    nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a
 comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
 -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- vue.js -->
    <script src="https://unpkg.com/vue@3"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>PHP Dischi JSON</title>
</head>
<body>
    <div id="app">
        

        <div class="container">
            <div class="row">
                <div v-for="disc in discs" class="col py-3">
                    <div class="card" style="width: 18rem;">
                        <img :src="disc.poster" class="card-img-top" :alt="disc.title">
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">{{disc.title}}</li>
                            <li class="list-group-item">{{disc.author}}</li>
                            <li class="list-group-item">{{disc.year}}</li>
                            <li class="list-group-item">{{disc.genre}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>