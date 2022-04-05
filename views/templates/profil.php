<?php include('header.php') ?>

<body>


    <main>
        <section id="profil">
            <form action="actionUptade" method="post">
                <h3>Your profil</h3>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lol" name="lastname" value="<?= $_SESSION['users'][0]['lastname'] ?>" placeholder="name@example.com">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="firstname" value="<?= $_SESSION['users'][0]['firstname'] ?>" id="" placeholder="name@example.com">
                    <label for="floatingInput">Lastname</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="pseudo" value="<?= $_SESSION['users'][0]['pseudo'] ?>" id="" placeholder="name@example.com">
                    <label for="floatingInput">Pseudo</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" value="<?= $_SESSION['users'][0]['email'] ?>" id="" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" name="passwords" value="<?= $_SESSION['users'][0]['passwords'] ?>" id="" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div id="hello">
                    <button type="submit" value="<?= $_SESSION['users'][0]['idUsers'] ?>" name="idUsers">Modifier</button>
            </form>
            <form action="deleteUser">
                <button type="submit" value="<?= $_SESSION['users'][0]['idUsers'] ?>" name="idUsers">Supprimer</button>
            </form>

            </div>
        </section>
    </main>
</body>
</html>
<?php include('footer.php') ?>