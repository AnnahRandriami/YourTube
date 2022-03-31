<?php include('header.php') ?>
<main>
    <section id="pageInscription">
        <form action="inscription" method="POST">
            <h3>Inscription</h3>
            <div class="form-floating mb-3">
                <input type="text" name ="firstname"  class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Firstname</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name ="lastname" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Lastname</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name ="pseudo"  class="form-control" id="" placeholder="name@example.com">
                <label for="floatingInput">Pseudo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email"name ="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" name ="password" class="form-control" id="flo" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button type="submit">S'insrire</button>
        </form>
    </section>
</main>
<?php include('footer.php') ?>