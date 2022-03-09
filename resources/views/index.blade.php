<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{{$title}}</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="{{asset('/css/style.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('css/ie6.css') }}" type="text/css" media="all" />
<script src="{{asset('/js/jquery-1.4.1.min.js') }}" type="text/javascript"></script>
<script src="{{asset('/js/jquery.jcarousel.pack.js') }}" type="text/javascript"></script>
<script src="{{asset('/js/jquery-func.js') }}" type="text/javascript"></script>
</head>
<body>
<!-- Shell -->
<div class="shell">
  @include('page.header')
  <!-- Main -->
  <div id="main-page">
    @yield('konten')
  </div>
  <!-- Side Full -->
  <div class="side-full">
    <!-- More Products -->
    <div class="more-products">
      <div class="more-products-holder">
        <ul>
          <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
          <li class="last"><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div class="more-nav"> <a href="#" class="prev">previous</a> <a href="#" class="next">next</a> </div>
    </div>
    <!-- End More Products -->
    <!-- Text Cols -->
    <div class="cols">
      <div class="cl">&nbsp;</div>
      <div class="col">
        <h3 class="ico ico1">Pengiriman</h3>
        <p>Pengiriman</p>
        <p class="more"><a href="#" class="bul">Pengiriman</a></p>
      </div>
      <div class="col">
        <h3 class="ico ico2">Contact Person</h3>
        <p>Contact Person</p>
        <p class="more"><a href="#" class="bul">Contact Person</a></p>
      </div>
      <div class="col">
        <h3 class="ico ico3">Gift</h3>
        <p>Gift</p>
        <p class="more"><a href="#" class="bul">Gift</a></p>
      </div>
      <div class="col col-last">
        <h3 class="ico ico4">Keranjang</h3>
        <p>Keranjang</p>
        <p class="more"><a href="#" class="bul">Keranjang</a></p>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
    <!-- End Text Cols -->
  </div>
  <!-- End Side Full -->
  <!-- Footer -->
  @include('page.footer')
</div>
<!-- End Shell -->
</body>
</html>
