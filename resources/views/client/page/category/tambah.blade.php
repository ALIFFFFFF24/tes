@extends('client.client')
@section('main-content')
@php
    $no = 1;
@endphp
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Halaman Tambah Kategori</h4>
                    <p>Halaman ini untuk menambah kategori</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form action="/category/store" method="POST">
                                <br>
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Kategori</label>
                                    <input class="form-control w-25" type="text" name="name">
                                </div>                
                                <button class="btn btn-success" type="submit" name="submit" value="submit">Tambah</button>
                                <a href="/category" class="btn btn-danger">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
