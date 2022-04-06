<?php include('header.php') ?>


<main>


    <section id="ajout">
        <h3>Ajout contenu</h3>
      
        <div class="form-floating">
              <form action="loadimg" method="post" enctype="multipart/form-data">
                <label for="floatingInput">Lien</label>
                <input type="file" name="file">
                <button type="submit">Télechager</button>
            </form>

        <form action="addContenu" method="get">

            <div class="form-floating">

                <input type="text" name="type" value="<?= $lastCategory['type'] ?>" class="form-control" required>

                <label for="floatingInput">Type</label>

            </div>
            <div class="form-floating">
                <input type="text" name="category" value="<?= $lastCategory['category'] ?>" class="form-control" required>
                <label for="floatingInput">Category</label>
            </div>


            <div class="form-floating">
                <input type="text" name="title"class="form-control" required>
                <label for="floatingInput">Title</label>
            </div>
            <div class="form-floating">
                <input type="text" name="author" class="form-control" required>
                <label for="floatingInput">Author</label>
            </div>
            <div class="form-floating">
                <input type="text" name="lien" value="<?=$_FILES['file']['name'];?>" class="form-control" required>
                <label for="floatingInput">Lien</label>
            </div>

       

            <div class="form-floating">
                <textarea class="form-control" name="content" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                <label for="floatingTextarea2">Descirption</label>
            </div>

            <div id="btn2">
                <button name="idCategory" value="<?= $lastCategory['idCategory']?>">Ajouter</button>
                </div>
        </form>

        
      
       
        <form action="annuler">
            <button>Annuler</button>
        </form>

        </div>
    </section>










</main>

<?php include('footer.php') ?>