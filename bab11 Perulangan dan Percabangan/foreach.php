<?php

//Array artikel
$artikel = array (
    (object) array (
        "gambar" => "img/sun.jpg",
        "judul" => "Gambar 1",
        "text" => " Sunt enim labore aliqua enim consectetur nisi velit excepteur aliquip mollit consequat incididunt. "
    ),
    (object) array (
        "gambar" => "img/img.jpg",
        "judul" => "Gambar 2",
        "text" => "Sunt enim labore aliqua enim consectetur nisi velit excepteur aliquip mollit consequat incididunt."
    ),
    (object) array (
        "gambar" => "img/bung.jpg",
        "judul" => "Gambar 3",
        "text" => "lorem ipsum dolor sit anet, consectetur adipisting elit."
    ),
    (object) array (
        "gambar" => "img/flow.jpg",
        "judul" => "Gambar 4",
        "text" => "lorem ipsum dolor sit anet, consectetur adipisting elit."
    )
);


$carousel = array(
      (object) array (
        'judul' => 'Sun Flower',
        'text' => ' representative placeholder content for the first slide.',
        'image' => 'img/sun.jpg.'
      ),
      (object) array (
        'judul' => 'Flower Blossom',
        'text' => ' representative placeholder content for the first slide.',
        'image' => 'img/cow.jpg.'
      ),
      (object) array (
        'judul' => 'M A T A H A R I',
        'text' => ' representative placeholder content for the first slide.',
        'image' => 'img/bib.jpg.'
      )
    );
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <!-- My CSS -->
    <style>
      section {
        min-height: 420px;
      }
      .carousel-inner .carousel-item img{
	    height: 600px;
	    /*max-height: 720px;*/
	    object-fit: cover;
}
      .explore {
        background-color: rgb(228, 228, 228);
        padding-bottom: 50px;
        
      }
    </style>

    <title>insaatuss page</title>
  </head>
  <body">


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">insaatuss</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">explore</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- NAVBAR -->


    <!-- Carousel Indicator -->
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<!-- Carousel Indicator -->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>


		<!-- Carousel Inner -->
		<div class="carousel-inner">
		<?php 
			$i = 0;
			foreach ($carousel as $slide) {
				if ($i == 0) {
					$i++; ?>
			<div class="carousel-item active">
				<?php }
				else { ?>
			<div class="carousel-item">
				<?php } ?>
				<img src="<?=$slide->image ?>" class="d-block w-100" alt="jalan bareng kawan">
				<div class="carousel-caption d-none d-md-block">
					<h5><?=$slide->judul ?></h5>
					<p><?=$slide->text ?></p>
				</div>
			</div> <!-- Penutup carousel-item -->
		<?php } ?>
		</div>
		<!-- Carousel Navigation -->
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>

		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>



    <!-- about -->
    <section id="aboout" class="about">
    <div class="container">
      <div class="row mb-5 mt-5">
        <div class="col text-center">
          <h2>about</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-5 text-center">
          <p>Bunga matahari (Helianthus annuus L.) adalah tumbuhan semusim dari suku kenikir-kenikiran (Asteraceae) yang populer, baik sebagai tanaman hias maupun tanaman penghasil minyak. Bunga tumbuhan ini sangat khas: besar, biasanya berwarna kuning terang, dengan kepala bunga yang besar (diameter bisa mencapai 30 cm).</p>
        </div>
        <div class="col-md-5 text-center">
          <p>Bunga daisy mewakili bulan ke empat, yaitu April. Walaupun bunga daisy yang paling umum dijumpai adalah daisy putih, namun sebenarnya masih ada beberapa varietas warna yang dimiliki bunga ini. Seperti daisy merah dan orange. Tiap-tiap warnanya juga mempunyai maknanya masing-masing lho. </p>
        </div>
      </div>
    </div>
  </section>
    <!-- about -->


    <!-- explore -->
    <section class="explore" id="explore " >
      <div class="container">
        <div class="row mt-5 mb-5">
          <div class="col text-center">
            <h1 class="mt-5">explore</h1>
          </div> 
        </div>

        <div class="row">

            <?php foreach ( $artikel as $data ) { ?>
                    <div class="col col-6">
                        <div class="card mb-3">
                            <img src="img/sun.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card.title"> <?=$data->judul?> </h5>
                                <p class="card-text"> <?=$data->text?> </p>
                            </div>
                        </div>

                    </div>
                <?php } ?>

          <div class="col-md">
            <div class="card">
              <img src="img/flow.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">bunga matahari yang sangat cantik.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
<footer class="bg-dark text-white">
  <div class="container">
    <div class="row pt-3">
      <div class="col text-center">
        <p>Copyright @2021 by insaatuss.</p>
      </div>
    </div>
  </div>
</footer>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
  </body>
</html>