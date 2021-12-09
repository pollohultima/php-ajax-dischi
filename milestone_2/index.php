<?php

require __DIR__ . '/layouts/head.php';

?>

<!doctype html>
<html lang="en">

  <body>


    <?php require __DIR__ . '/layouts/header.php';?>

    <main>
        <div id="app">

            <div class="container-fluid gx-4 position-relative">
               <div class="row gx-5 gy-4 justify-content-center">

                       <div v-for="disc in discs" class="col-2" :key="disc.title">
                           <div class="card border-0 p-4">
                               <img :src="disc.poster" alt="" class="mb-4" />
                               <h5 class="text-center text-white">
                               {{disc.title}}
                               </h5>
                               <p class="text-center text-muted m-0">{{disc.author}}</p>
                               <p class="text-center text-muted m-0">{{disc.year}}</p>
                           </div>
                       </div>

               </div>
            </div>

        </div>
    </main>

    <?php require __DIR__ . '/layouts/footer.php';?>
  </body>
</html>
