<?php include('header.php') ?>
<?php
session_start();
echo 'users --> ' . $_SESSION['users']['firstname'];
echo 'tabs --> ' . $_SESSION['tabs']['foo'];
//header("location:file2.php");
//exit();
?>
<body>

     
    <main>
        <section id="profil">
            <form action="profil" method="post" enctype="multipart/form-data">
                <img id="picture" src="http://localhost/yourTube/src/images/music.jpg" style="width :18rem" alt="">
                <label for="file">Fichier</label>
                <input type="file" name="file" >
                <button type="submit">Télechager</button>

            </form>

            <form action="profil" method="get">
                <h3>Your profil</h3>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lol" value="<?= $_SESSION['tabs'][0] ?>" placeholder="name@example.com">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" value="<?=  $_SESSION['users']['firstname'] ?>" id="" placeholder="name@example.com">
                    <label for="floatingInput">Lastname</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" value="<?=   $_SESSION['users']['pseudo'] ?>" id="" placeholder="name@example.com">
                    <label for="floatingInput">Pseudo</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" value="<?=  $_SESSION['users']['email'] ?>" id="" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" value="<?=   $_SESSION['users']['passwords'] ?>" id="" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button type="submit" value="<?=   $_SESSION['users']['idUsers'] ?>" name="idUsers">Modifier</button>
            </form>
        </section>
    </main>
</body>

</html>
<?php include('footer.php') ?>