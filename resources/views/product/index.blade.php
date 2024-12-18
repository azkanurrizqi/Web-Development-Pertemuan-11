@extends('layouts.app')

@section('content')
<div>
    <a
        href="{{ route('product.create') }}"
        class="btn btn-success">
        Tambah produk1
    </a>
</div>

<br><br>
<table class="table" border="1">
    <thead>
        <tr>
        <th>Id</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Harga</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($products as $row)
            <tr>
                <td>{{ $row->id}}</td>
                <td>{{ $row->judul}}</td>
                <td>{{ $row->deskripsi}}</td>
                <td>{{ $row->harga}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
