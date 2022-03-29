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
   
</form>

    </main>



    <?php include('footer.php') ?>