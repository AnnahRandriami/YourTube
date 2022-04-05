<?php include('header.php') ?>
<main>





  
<?php foreach ($_SESSION["contenu"] as $key => $value) : ?>
        <section id="maliste">
     
            <article id="mesTitres">
                <table>
                    <tr>
                        <td  id="title"><?= $value['title'] ?></td>
                        <td  id="type"><?= $value['type'] ?></td>
                        <td id="category"><?= $value['category'] ?></td>
                        <td  id="Auteur"><?= $value['author'] ?></td>
                        <td  id="DateUptade" style="font-size : 0.8rem"><?= $value['dateCreated'] ?></td>
                    </tr>
                </table>
            </article>
            <article id="mesButtons">
                <form action="myChoice" method="get">
                    <button name="idContenu" value="<?= $value['idContenu'] ?>" href="#" class="btn">Voir</button>
                </form>
                <form action="update">
                <button name="idContenu" value="<?= $value['idContenu'] ?>" href="#" class="btn">Uptade</button>
                </form>


                <form action="deleteContenu">
                      <button name="idContenu" value="<?= $value['idContenu'] ?>" href="#" class="btn">Delete</button>
                </form>

            </article>

        </section>
    <?php endforeach ?>

</main>

<?php include('footer.php') ?>