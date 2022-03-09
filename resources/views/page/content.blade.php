@extends('index')

@section('konten')
<div id="main">
    <div class="cl">&nbsp;</div>
    <!-- Content -->
    @yield('page-content')
    <!-- End Content -->
    <!-- Sidebar -->
    <div id="sidebar">
      <!-- Search -->
      @include('page.content.search')
      <!-- Categories -->
      @include('page.content.categories')
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>   
@endsection
