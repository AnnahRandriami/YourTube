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


    <section id="maliste">
        <article id="mesTitres">
            <p name="" value="" id="title">Title</p>
            <p name="" value="" id="type">Type</p>
            <p name="" value="" id="category">Category</p>
            <p name="" value="" id="Auteur">Author</p>
            <p name="" value="" id="DateUptade">Date Update</p>

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


</main>

<?php include('footer.php') ?>