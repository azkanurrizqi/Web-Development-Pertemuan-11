@extends('layouts.app')

@section('content')
    <div> blabla
        <form action="{{ url('product/store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="col-sm-8 mt-2">
                <label for = "judul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" value="" required="">
            </div>

            <div class="col-sm-8 mt-2">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Masukkan deskripsi" required=""></textarea>
            </div>
            <div class="col-sm-8 mt-2">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" placeholder="Masukkan harga" value="" required="">
            </div>
            <div class="col-sm-8 mt -4">
            <a href="{f route('product.index') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>

    </div>
@endsection