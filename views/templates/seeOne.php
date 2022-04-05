<?php include('header.php') ?>

<body>


    <main>

        <div id="views">
            <section id="seeOne">

                <div class="card mb-3">
                <?php if ($data_contenu[0]['type'] === 'Images') : ?>
                        <img src="<?= hosts.SP."src".SP."images".SP.$data_contenu[0]['lien'] ?>" alt="">
                    <?php else : ?>
                        <video controls width="450">
                            <source src="<?= hosts.SP."src".SP."videos".SP."logos.mp4" ?>" type="video/webm">
                            <source src="<?= hosts.SP."src".SP."videos".SP."logos.mp4" ?>" type="video/mp4">
                            Sorry, your browser doesn't support embedded videos.
                        </video>
                    <?php endif ?>
                    <div class="card-body">
                        <h5 class="card-title"><?= $data_contenu[0]['title'] ?></h5>
                        <p class="card-text"><?= $data_contenu[0]['content'] ?></p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </section>
          

        </div>



    </main>



    <?php include('footer.php') ?>