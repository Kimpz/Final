<!DOCTYPE html>
<html lang="en">

<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <title>School Gallery</title>
  <link rel="stylesheet" href="lightboxgallery-min.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>
<div class="header"></div>

<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="adminlogin.php">UECS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" href="Register.php">Register Students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="record1.php">View Records</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="gallery.php">School Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="admin.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>


<h1 style="text-align: center;color: black;font-size: 40px;">SCHOOL GALLERY</h1>

  <div class="containers">
      <div class="lightboxgallery-gallery clearfix">
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e4.jpg" data-title="Event" data-alt="Event" data-desc="A lightweight jQuery lightbox gallery plugin.">
          <div>
            <img src="images/e4.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e2.jpg" data-title="Event" data-alt="Event" data-desc="A lightweight jQuery lightbox gallery plugin.">
          <div>
            <img src="images/e2.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/g3.jpg" data-title="Event" data-alt="Event" data-desc="A lightweight jQuery lightbox gallery plugin.">
          <div>
            <img src="images/g3.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e10.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e10.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e24.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e24.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e22.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e22.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e21.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e21.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e23.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e23.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e13.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e13.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e15.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e15.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e16.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e16.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e17.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e17.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e3.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e3.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e5.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e5.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e6.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e6.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/e8.jpg" data-title="Event" data-alt="Event" data-desc="">
          <div>
            <img src="images/e8.jpg" title="Event" alt="Event">
            <div class="lightboxgallery-gallery-item-content">
              <span class="Universal Evangelical Christian School">Event</span>
            </div>
          </div>
        </a>
    </div>
  </div>

  <form class="LogMod" method="post" action="index.php">
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true" >
        <div class="modal-dialog text-dark rounded" role="document">
          <div class="modal-content">
            <div class="modal-header text-dark text-center">
              <h1 clas="modal-title w-80 font-weight-bold">Log in</h1>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-2">
              <div class="md-form mb-5">
                <i class="fas fa-user"></i>
                <input type="text" name="username" class="form-control validate">
                <label data-error="wrong" data-success="right" for="defaultForm-username">Your username</label>
          </div>
              <div class="md-form mb-2">
                <i class="fas fa-lock prefix grey-text"></i>
                <input type="password" name="password" class="form-control validate">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <input type="submit" name="login" value="Log in" class="btn">
            </div>
          </div>
      </div>
    </div>
  </form>

<div class="footers">
  <div class="container>
  &copy; <a target="_blank" href="https://www.facebook.com/kimpoy.mansos">Kimpoy Mansos</a> |<a target="_blank" href="https://www.facebook.com/FreeDaemon.M/">Artemio Montes</a>
    </div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="lightboxgallery-min.js"></script>
  <script type="text/javascript">
  jQuery(function($) {
    $(document).on('click', '.lightboxgallery-gallery-item', function(event) {
      event.preventDefault();
      $(this).lightboxgallery({
        showCounter: true,
        showTitle: true,
        showDescription: true
      });
    });
  });
  </script>
</body>
</html>