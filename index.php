<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Dischi</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

    <div id="app">

        <div class="container">
            <h1>Dischi</h1>

            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">

                <div @click="getInfo(index)" v-for="album,index in albumsList" class="card col">
                    <img :src=" album.poster" class="card-img-top p-3" alt="...">
                    <div class="card-body text-center ">
                        <h4 class="card-title pb-3">{{album.title}}</h4>


                    </div>
                </div>

                <div v-show="showCard == true">

                    <div>Author: {{albumInfo.author}}</div>
                    <div>Year: {{albumInfo.year}}</div>
                    <div>Genre: {{albumInfo.genre}}</div>

                </div>

            </div>

        </div>

    </div>




    <script src="./js/script.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>