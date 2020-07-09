<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>user</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Ruang Bantu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">kontak</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login/logout'); ?>">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="<?= base_url('img'); ?>/4.jpg" class="d-block w-100" alt="..." width="600" height="800"  >
      <div class="carousel-caption d-none d-md-block">
        <h5>Welcome, <?= session()->get('Nama'); ?>!</h5>
        <p>Semoga puas dengan pelayanan kami, dan dapat membantu permasalahan anda.</p>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="<?= base_url('img'); ?>/5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
</br>
<p><h5> Member Of Ruang Bantu: </h5></p>
<div class="media">
  <img src="<?= base_url('img'); ?>/a.jpg" class="align-self-center mr-3" alt="..." width="150" height="150">
  <div class="media-body">
    <h5 class="mt-0">Gallang Bolski Slemani</h5>
    <p>Gallang salah satu pendiri aplikasi finding guru (figur), dia sosok progammer  handal di bidang aplikasi mobile, dan juga ahli pada bidang android developer , flutter,react dll.</p>
    <p class="mb-0">Dia menjabat sebagai pemimpin dari Himpunan Mahasiswa Sistem Informasi. Pedoman yang dipegang " coding is way of life".</p>
  </div>
</div>
<br></br>
<div class="media">
  <img src="<?= base_url('img'); ?>/b.jpg" class="align-self-center mr-3" alt="..." width="150" height="150">
  <div class="media-body">
    <h5 class="mt-0">Wahyu Nugroho Al Magelang</h5>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
</div>

  </body>
</html>
