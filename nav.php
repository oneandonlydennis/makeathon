<nav id="nav" class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          
          <?php 
            if ( isset($_SESSION["id"])){

              switch ($_SESSION["userrole"]) {
                case 'translator':
                  echo '<li class="nav-item">
                    <a class="nav-link" href="index.php?content=translator_home">translator home</a>
                  </li>';
                break;
                case 'influencer':
                  echo '<li class="nav-item">
                    <a class="nav-link" href="index.php?content=influencer_home">influencer home</a>
                  </li>';
                break;
                case 'admin':
                  echo '<li class="nav-item">
                    <a class="nav-link" href="index.php?content=admin_home">Home</a>
                  </li>';
                break;
                case 'root':
                  echo '<li class="nav-item">
                    <a class="nav-link" href="index.php?content=root_home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?content=influencer_home">influencer home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?content=gebruikersrollen">gebruikersrollen</a>
                  </li>';
                break;
                case 'moderator':
                  echo '<li class="nav-item">
                    <a class="nav-link" href="index.php?content=moderator_home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?content=influencer_home">influencer home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?content=translator_home">translator home</a>
                  </li>';
                break;
                case 'customer':
                  echo '<li class="nav-item">
                    <a class="nav-link" href="index.php?content=cusomer_home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?content=translator_home">translator home</a>
                  </li>';
                break;
                default:
                  header("Location: ./index.php?content=logout");
                break;
              }
              echo '<li class="nav-item">
                      <a class="nav-link" href="index.php?content=logout">Log Uit</a>
                    </li>';
            } else{
              echo '
                <li class="nav-item active">
                  <a class="nav-link" href="index.php?content=home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?content=register_form">Registreer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?content=login_form">Log In</a>
                </li>';
            }
          ?>
        </ul>
      </div>
    </div>
    <span><?php if (isset($_SESSION['email'])) {echo "welkom " . $_SESSION ["email"];}?></span>
  </nav>