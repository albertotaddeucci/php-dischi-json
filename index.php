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

    <!-- my style -->
    <link href="./style.css" rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e2fdc6941e.js" crossorigin="anonymous"></script>


</head>

<body class="my_bg">

    <div id="app">

        <nav class="my_bg_nav p-3">
            <div class="container">
                <h1 class="my_color_text">PHP - Dischi</h1>

            </div>

        </nav>
        <div class="container pt-5">


            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 gx-4 gy-4 position-relative ">

                <div @click="getInfo(index)" v-for="album,index in albumsList" class="my_card col cursor ">
                    <img :src=" album.poster" class="rounded-3">

                </div>

                <div v-show="showCard == true" class="rounded-4 overlay text-center position-absolute top-50 start-50 translate-middle">

                    <div class="row w-100 h-100 align-items-center px-5 row-cols-1 row-cols-lg-3 gap-3 position-relative">
                        <div class="col">
                            <img :src=" albumInfo.poster">


                        </div>
                        <div class="col flex-grow-1  ">

                            <h4 class="card-title pb-3 fs-1 ">{{albumInfo.title}}</h4>
                            <div><strong>Author:</strong> {{albumInfo.author}}</div>
                            <div><strong>Year:</strong> {{albumInfo.year}}</div>
                            <div><strong>Genre:</strong> {{albumInfo.genre}}</div>


                            <div @click="close" class="btn btn-outline-dark mt-3"><i class="fa-solid fa-xmark me-2"></i>Close</div>


                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>




    <script src="./js/script.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>