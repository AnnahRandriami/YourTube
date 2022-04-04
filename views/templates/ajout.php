<?php include('header.php') ?>


<main>
 

        <section id="ajout">
            <h3>Ajout contenu</h3>

            <div class="form-floating">
                <form action="profil" method="post" enctype="multipart/form-data">
                    <input type="text" class="form-control" id="" placeholder="Password">
                    <label for="floatingInput">Lien</label>
                    <input type="file" name="file">
                    <button type="submit">Télechager</button>
                </form>
            </div>
            <form action="Ajout">

                <select class="form-select" aria-label="Default select example">
                    <option value="1">Type</option>
                </select>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">Category</option>
                </select>
                <div class="form-floating">
                    <input type="text" class="form-control" id="" placeholder="name@example.com">
                    <label for="floatingInput">Title</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="" placeholder="name@example.com">
                    <label for="floatingInput">Author</label>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Descirption</label>
                </div>

                <button>Ajouter</button>
        </section>


    </form>







</main>

<?php include('footer.php') ?>