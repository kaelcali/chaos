
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">

    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Chaos</span>
        <span class="d-none d-lg-block">
        <?php include("profilePicture.php")?>
      </span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#dateien">My CHAOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#geteilt">Our CHAOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#profil">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#papierkorb">Wastepaper</a>
            </li>
            <?php // if logged in ?>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#logout">Logout</a>
            </li>
        </ul>
    </div>

</nav>