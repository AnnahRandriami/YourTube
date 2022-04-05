<?php include('header.php') ?>

<body>


    <main>

        <div id="views">
            <section id="seeOne">

                <div class="card mb-3">
                <?php if ($data_contenu[0]['type'] === 'Images') : ?>
                        <img src="<?= hosts.SP."src".SP."images".SP.$value['lien'] ?>" alt="">
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
            <section id="lastUptade">
                <div class="card" style="width: 18rem;">
                    <?php if ($data_contenu[0]['type'] === 'Images') : ?>
                        <img src="<?= hosts.SP."src".SP."images".SP.$value['lien'] ?>" alt="">
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
                        <form action="see">
                            <button href="#" class="btn">Voir</button>
                        </form>
                        <form action="update">

                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="http://localhost/yourTube/src/images/music.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <form action="see">
                            <button href="#" class="btn">Voir</button>
                        </form>
                        <form action="update">

                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="http://localhost/yourTube/src/images/music.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <form action="see">
                            <button href="#" class="btn">Voir</button>
                        </form>
                        <form action="update">

                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="http://localhost/yourTube/src/images/music.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <form action="see">
                            <button href="#" class="btn">Voir</button>
                        </form>
                        <form action="update">

                    </div>
                </div>

        </div>
        </section>

        </div>



    </main>



    <?php include('footer.php') ?>