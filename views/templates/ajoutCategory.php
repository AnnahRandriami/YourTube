<?php include('header.php') ?>


<main>


    <section id="ajout">

        <h3>Ajout Category</h3>
       


        <form action="suiteAdd">

            <select name ="idType" class="form-select">
                <?php foreach ($type as $key => $value) : ?>
                    <option  name="idType" selected value="<?= $value['idType'] ?>"><?= $value['type'] ?></option>
                <?php endforeach ?>
            </select>

            <select name ="category"class="form-select" aria-label="Default select example">
                <?php foreach ($category as $key => $value) : ?>
                    <option selected name="category" value="<?= $value['category'] ?>"><?= $value['category'] ?></option>
                <?php endforeach ?>
            </select>
            </div>

            <button type="submit">Suite</button>
        </form>



    </section>


    </form>







</main>

<?php include('footer.php') ?>