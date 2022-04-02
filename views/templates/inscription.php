<?php include('header.php') ?>
<main>
    <section id="pageInscription">
        <form action="inscription" method="POST">
            <h3>Inscription</h3>
            <div class="form-floating mb-3">
                <input type="text" name ="lastname" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Lastname</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name ="firstname" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Firstname</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name ="pseudo" class="form-control" id="" placeholder="name@example.com">
                <label for="floatingInput">Pseudo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" value="@gmail.com" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" name ="passwords"class="form-control" id="flo" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button type="submit">S'insrire</button>
        </form>
    </section>
</main>
<?php include('footer.php') ?>

select `contenu`.`idContenu` AS `idContenu`,`contenu`.`idCategory` AS `idCategory`,`contenu`.`idUsers` AS `idUsers`,`contenu`.`title` AS `title`,`users`.`pseudo` AS `pseudo`,`category`.`type` AS `type`,`category`.`category` AS `category`,`contenu`.`content` AS `content`,`contenu`.`author` AS `author`,`contenu`.`lien` AS `lien`,`contenu`.`dateCreated` AS `dateCreated`,`contenu`.`dateUptade` AS `dateUptade` from ((`contenu` join `users`) join `category`) where ((`contenu`.`idUsers` = `users`.`idUsers`) and (`contenu`.`idCategory` = `category`.`idCategory`))