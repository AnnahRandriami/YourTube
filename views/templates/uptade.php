<?php include('header.php') ?>


<main>
 

        <section id="ajout">
            <h3>Modifier contenu</h3>

            <div class="form-floating">
                <form action="profil" method="post" enctype="multipart/form-data">
                    <input type="text" class="form-control" id="" value="<?= $data_contenu[0]['lien'] ?>"placeholder="lien">
                    <label for="floatingInput">Lien</label>
                    <input type="file" name="file">
                    <button type="submit">Télechager</button>
                </form>
            </div>
            <form action="uploadUptade">

                <select class="form-select" name="" value="<?= $data_contenu[0]['type'] ?>" aria-label="Default select example">
                    <option value="1">Type</option>
                </select>
                <select class="form-select" name="" value="<?= $data_contenu[0]['category'] ?>" aria-label="Default select example">
                    <option value="1">Category</option>
                </select>
                <div class="form-floating">
                    <input type="text" name="" value="<?= $data_contenu[0]['title'] ?>" class="form-control" id="" placeholder="name@example.com">
                    <label for="floatingInput">Title</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="" value="<?= $data_contenu[0]['author'] ?>" class="form-control" id="" placeholder="name@example.com">
                    <label for="floatingInput">Author</label>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" name=""  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?= $data_contenu[0]['content'] ?></textarea>
                    <label for="floatingTextarea2">Descirption</label>
                </div>

                <button type="submit" name="idContenu" value="<?= $data_contenu[0]['idContenu'] ?>">Modifier</button>
        </section>


    </form>







</main>

<?php include('footer.php') ?>