<div class="box search">
    <h2>Search by <span></span></h2>
    <div class="box-content">
      <form action="{{url('/products')}}" method="post"> <!--{/{action{'NavigationController'}}}-->
        @csrf
        <label>Keyword</label>
        <input name="keyword" type="text" class="field" />
        <label>Category</label>
        <select name="kategori" class="field">
          <option value="">-- Select Category --</option>
          <option value="Pria">Pria</option>
          <option value="Wanita">Wanita</option>
        </select>
        <div class="inline-field">
          <label>Price</label>
          <select class="field small-field">
            <option value="">50000</option>
          </select>
          <label>to:</label>
          <select class="field small-field">
            <option value="">100000</option>
          </select>
        </div>
        <input type="submit" class="search-submit" value="Search" />
        <p> <a href="#" class="bul">Advanced search</a><br />
          <a href="#" class="bul">Contact Customer Support</a> </p>
      </form>
    </div>
  </div>