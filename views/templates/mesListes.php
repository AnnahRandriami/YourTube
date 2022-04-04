<?php include('header.php') ?>
<main>

    <div id="playlist">
        <select class="form-select" aria-label="Default select example">
            <option value="1">Type</option>
        </select>
        <select class="form-select" aria-label="Default select example">
            <option value="1">Category</option>
        </select>
    </div>
    
    <table>
      <tr>
            <td name="" value="" id="title"><?= $value['title']?></td>
            <td name="" value="" id="type"><?= $value['type']?></td>
            <td name="" value="" id="category"><?= $value['category']?></td>
            <td name="" value="" id="Auteur"><?= $value['athor']?></td  >
            <td name="" value="" id="DateUptade" style="font-size : 0.8rem"><?= $value['dateCreated']?></td>
    </tr>
    </table>
    <?php foreach ($data_contenu as $key => $value):?>
    <section id="maliste">
  
        <article id="mesTitres">
            <table>
      <tr>
            <td name="" value="" id="title"><?= $value['title']?></td>
            <td name="" value="" id="type"><?= $value['type']?></td>
            <td name="" value="" id="category"><?= $value['category']?></td>
            <td name="" value="" id="Auteur"><?= $value['athor']?></td  >
            <td name="" value="" id="DateUptade" style="font-size : 0.8rem"><?= $value['dateCreated']?></td>
    </tr>
    </table>
        </article>
        <article id="mesButtons">
            <form action="see">
                <button href="#" class="btn">Voir</button>
            </form>
            <form action="update">
                <button href="#" class="btn">Modifier</button>
            </form>
            <form action="delete">
                <button href="#" class="btn">Supprimer</button>
            </form>

        </article>
      
    </section>
    <?php endforeach?>

</main>

<?php include('footer.php') ?>