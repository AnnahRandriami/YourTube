<?php include('header.php') ?>
<main>


    <section id="connexion">
        <form action="getLogin" method="GET">
            <h3>Connexion</h3>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="passwords" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
    
            <button type="submit">Submit</button>

        </form>


    </section>
    <section id="new">
        <p>New on yourTube?</p>

 
          <li><a href="create">Create account here</a> </li>
    

</section>
</main>

<?php include('footer.php') ?>