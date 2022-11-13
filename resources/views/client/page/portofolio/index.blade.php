@extends('client.client')
@section('main-content')
@php
    $no=1;
@endphp
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Halaman Portofolio</h4>
                    <p>Halaman ini untuk menampilkan semua postingan user.</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-success mb-3" href="/addPortofolio">Tambah Portofolio</a>
                            <table class="table">
                                <thead>
                                    <th>No.</th>
                                    <th>Portofolio Id</th>
                                    <th>User Id</th>
                                    <th>Portofolio Title</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                </thead>
                                <tbody>
                                    @foreach ($portofolios as $p)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$p->id}}</td>
                                        <td>{{$p->users_id}}</td>
                                        <td>{{$p->categories_id}}</td>
                                        <td>{{$p->description}}</td>
                                        <td>{{$p->photo}}</td>
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
