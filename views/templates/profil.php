<?php include('header.php') ?>
<body>
    

<main>
<section id="profil">
        <form action="uptadeProfil">
            <h3>Your profil</h3>
            <img id="picture" src="http://localhost/yourTube/src/images/music.jpg" style="width :18rem"alt="">
            <button type="submit">Télechager</button>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="lol" placeholder="name@example.com">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="" placeholder="name@example.com">
                <label for="floatingInput">Lastname</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="" placeholder="name@example.com">
                <label for="floatingInput">Pseudo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button type="submit">Modifier</button>
        </form>
    </section>
</main>
</body>
</html>
<?php include('footer.php') ?>