

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f00c55aea5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/yourTube/src/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
</head>
<header>




<nav>
  
  <a href="home">Home</a>
 
  <?php if (!$_SESSION['users']): ?>
  <a href="login">Login</a>
  <?php else : ?>
    <a href="profil">Profil</a>
  <a href="add">Add</a>
  <a href="playlist">Playlist</a>
  <a href="logout">Logout</a>
  <?php endif  ?>
  <?php $dataRole =  $_SESSION['users'][0]['roles'] ;
        if($dataRole === "admin"):?> 
  <a href="admin">Admin</a>
         <?php endif  ?>
  <div class="animation start-home"></div>
  
</nav>

</header>




























</main>