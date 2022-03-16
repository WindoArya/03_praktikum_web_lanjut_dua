@extends('page.content')

@section('page-content')
<div id="content">
    <!-- Content Slider -->
    <div id="slider" class="box">
      <div id="slider-holder">
        <ul>
          <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>
    </div>
    <!-- End Content Slider -->
    <!-- Products -->
    <div class="products">
      <div class="cl">&nbsp;</div>
      <ul>
        <li> <a href="#"><img src="css/images/big1.jpg" alt="" /></a>
          <div class="product-info">
            <h3>Pakaian 1</h3>
            <div class="product-desc">
              <h4>Pria</h4>
              <p>Pakaian</p>
              <strong class="price">Rp 50.000</strong> </div>
          </div>
        </li>
        <li> <a href="#"><img src="css/images/big2.jpg" alt="" /></a>
          <div class="product-info">
            <h3>Pakaian 2</h3>
            <div class="product-desc">
              <h4>Pria</h4>
              <p>Pakaian</p>
              <strong class="price">Rp 100.000</strong> </div>
          </div>
        </li>
        <li class="last"> <a href="#"><img src="css/images/big3.jpg" alt="" /></a>
          <div class="product-info">
            <h3>Pakaian 3</h3>
            <div class="product-desc">
              <h4>Pria</h4>
              <p>Pakaian</p>
              <strong class="price">Rp 75.000</strong> </div>
          </div>
        </li>
      </ul>
      <div class="cl">&nbsp;</div>
    </div>
  </div>
@endsection
