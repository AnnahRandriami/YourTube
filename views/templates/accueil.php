<?php include('header.php') ?>

<body>
    <main>
        <div id="recherche">


            <?php $types = [] ?>
            <?php foreach ($data_contenu as $value) : ?>
                <?php array_push($types, $value['type']); ?>
            <?php endforeach ?>

            <?php $category = [] ?>
            <?php foreach ($data_contenu as $value) : ?>
                <?php array_push($category, $value['category']); ?>
            <?php endforeach ?>

            <form action="home" method="get">
                <select class="form-select" aria-label="Default select example" id='type'>
                    <?php foreach (array_unique($types) as $type) : ?>
                        <option <?php if($type == $value['type']); echo 'selected;' ?>> <?php echo $type; ?> </option>
                    <?php endforeach ?>
                </select>
                <button name="type" value="<?= $type ?>"  class="btn">Voir</button>
            </form>


            <select class="form-select" aria-label="Default select example">
                <?php foreach (array_unique($category) as $category) : ?>
                    <option value="<?php echo $category; ?>"><?php echo $category; ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <section id="liste">
            <?php foreach ($data_contenu as $key => $value) : ?>
                <div class="card" style="width: 30rem;">
                    <?php if ($value['type'] === 'Images') : ?>
                        <img src="http://localhost/yourTube/src/images/<?= $value['lien'] ?>" alt="">
                    <?php else : ?>
                        <video controls width="450">
                            <source src="http://localhost/yourTube/src/videos/logos.mp4" type="video/webm">
                            <source src="http://localhost/yourTube/src/videos/logos.mp4" type="video/mp4">
                            Sorry, your browser doesn't support embedded videos.
                        </video>
                    <?php endif ?>
                    <div class="card-body">
                        <div id="apropos">
                            <p class="card-title">Publié par : &nbsp </p>
                            <p class="card-title"><?= $value['pseudo'] ?></p>
                            <p class="card-title"> &nbsp Le <?= $value['dateCreated'] ?></p>
                        </div>
                        <h5 class="card-title"><?= $value['author'] ?></h5>
                        <h5 class="card-title"><?= $value['title'] ?></h5>
                        <p class="card-text"><?= $value['content'] ?></p>
                        <form action="myChoice" method="get">
                            <button name="idContenu" value="<?= $value['idContenu'] ?>" href="#" class="btn">Voir</button>
                        </form>

                    </div>
                </div>
            <?php endforeach ?>

    </main>
    <?php include('footer.php') ?>