<?php include('header.php') ?>

<body>


    <main>
    <div id="recherche">
            <select class="form-select" aria-label="Default select example">
                <option value="1">Type</option>
            </select>
            <select class="form-select" aria-label="Default select example">
                <option value="1">Category</option>
            </select>
        </div>
        
<form action="displayAccueil">

    <section id="liste">
    <?php   foreach (  $data_contenu as $key => $value) :?> 
    
        <div class="card" style="width: 30rem;">
   

<?php if($value['type'] === 'Images'): ?>
    <img src="http://localhost/yourTube/src/images/<?=$value['lien'] ?>" alt="">
<?php else: ?>
    <video controls width="450">
    <source src="http://localhost/yourTube/src/videos/logos.mp4"
            type="video/webm">

    <source src="http://localhost/yourTube/src/videos/logos.mp4"
            type="video/mp4">

    Sorry, your browser doesn't support embedded videos.
</video>
 <?php endif ?>         
            <div class="card-body">
            <div id="apropos">
    <p class="card-title">Publié par : &nbsp </p>
    <p class="card-title"><?= $value['pseudo']?></p>
    <p class="card-title"> &nbsp Le <?= $value['dateCreated']?></p>
    </div>
            <h5 class="card-title"><?= $value['author']?></h5>
            <h5 class="card-title"><?= $value['title']?></h5>
   <p class="card-text"><?= $value['content']?></p>
            <form action="see">
                <button href="#" class="btn">Voir</button>
            </form>
            <form action="update">
        </div>
    </div>
    <?php  endforeach?>
</form>

    </main>



    <?php include('footer.php') ?>