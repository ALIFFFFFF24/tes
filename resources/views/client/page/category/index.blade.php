@extends('client.client')
@section('main-content')
@php
    $no = 1;
@endphp
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Halaman Kategori</h4>
                    <p>Halaman ini untuk menampilkan semua kategori beserta postingan user berdasarkan kategori tersebut.</p>
                </div>
                <div class="container">
<div class="row">
    <div class="col">
        <a class="btn btn-success mb-3" href="/addCategory">Tambah Kategori</a>
        <table class="table">
            <thead>
                <th>No.</th>
                <th>Categories ID</th>
                <th>Categories Name</th>
            </thead>
            <tbody>
                @foreach ($categories as $c)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
                </div>
            </div>
        </div>
    </section>
@endsection
