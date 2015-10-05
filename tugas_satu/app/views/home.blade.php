@extends("layouts.application")

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://3.bp.blogspot.com/-H4N5Dsyf99Y/VV1N1oM7goI/AAAAAAAAAM8/4oJimK_tnvg/s1600/taman-film.jpg" alt="taman film" style="margin-left:auto;margin-right:auto;">
      <div class="carousel-caption">
        <h2>Taman Film Bandung</h2>
      </div>
    </div>
    <div class="item">
      <img src="http://infobandung.co.id/wp-content/uploads/2015/08/PPI-2-1000x500.jpg" alt="taman_futsal" style="margin-left:auto;margin-right:auto;" >
      <div class="carousel-caption">
        <h2>Taman Futsal</h2>
      </div>
    </div>
    <div class="item">
      <img src="http://www.lanyallamm.com/wp-content/uploads/cache/images/B12FhOdCMAA1pSz/444200978.jpg" style="margin-left:auto;margin-right:auto;" >
      <div class="carousel-caption">
        <h2>Persib</h2>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container clearix">
<div class="row row-offcanvas row-offcanvas-left">
 <!-- kanan content-->
  <div class="col-md-4 main pull-left">
	<p>Halo saya akira dan saat ini saya akan lulus dari kuliah, salam kenal ya.Berikut contoh dari hasil design grafik yang saya buat ;)</p>
  </div>
  
<!-- kiri content-->
  <div class="col-md-3 main pull-right">
	 <p>Facebook : akira@mail.com</p>

	 <p>Twitter : akira@mail.com</p>
	
	 <p>Telpon : 055-12345</p>
	
	 <p>Alamat : Jl. Alianyang Bangkur no.32, Bandung, Indonesia</p>
  </div>
</div>
</div>
