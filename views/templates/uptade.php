<?php include('header.php') ?>


<main>
 

        <section id="ajout">
            <h3>Modifier contenu</h3>

            <form action="actionUptadeContenu">
            <div class="form-floating">
                    <input type="text" name="type" value="<?= $data_contenu[0]['type'] ?>" class="form-control" disabled>
                    <label for="floatingInput">Type</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="category" value="<?= $data_contenu[0]['category'] ?>" class="form-control" disabled>
                    <label for="floatingInput">Category</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="title" value="<?= $data_contenu[0]['title'] ?>" class="form-control" id="" placeholder="name@example.com">
                    <label for="floatingInput">Title</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="author" value="<?= $data_contenu[0]['author'] ?>" class="form-control" id="" placeholder="name@example.com">
                    <label for="floatingInput">Author</label>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" name="content"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?= $data_contenu[0]['content'] ?></textarea>
                    <label for="floatingTextarea2">Descirption</label>
                </div>

                <button type="submit" name="idContenu" value="<?= $data_contenu[0]['idContenu'] ?>">Modifier</button>
        </section>


    </form>







</main>

<?php include('footer.php') ?>