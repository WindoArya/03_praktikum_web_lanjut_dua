@extends('page.content')

@section('page-content')
    <div id="content">
        <br>
        <h1>Products</h1>
        <br>
        <table id="table-products">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artikel as $a)
                    <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->nama}}</td>
                        <td>{{$a->ketegori}}</td>
                        <td>{{$a->harga}}</td>
                        <td><img src="{{$a->image}}" alt="" width="100px" height="130px" /></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection