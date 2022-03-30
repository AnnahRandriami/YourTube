<?php include('header.php') ?>
<main>
    <section id="pageInscription">
        <form action="inscription" >
            <h3>Inscription</h3>
            <div class="form-floating mb-3">
                <input type="text" name =""class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Lastname</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="" placeholder="name@example.com">
                <label for="floatingInput">Pseudo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="flo" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button type="submit">S'insrire</button>
        </form>
    </section>
</main>
<?php include('footer.php') ?>