@extends('client.client')
@section('main-content')
@php
    $no = 1;
@endphp
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Halaman Tambah Portofolio</h4>
                    <p>Halaman ini untuk menambah portofolio</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form action="/portofolio/store" method="POST">
                                <br>
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">User Id</label>
                                    <input class="form-control w-25" type="text" name="users_id">
                                </div>  
                                <div class="mb-3">
                                    <label for="name" class="form-label">Title</label>
                                    <input class="form-control w-25" type="text" name="title">
                                </div> 
                                <div class="mb-3">
                                    <label for="name" class="form-label">Categories Id</label>
                                    <input class="form-control w-25" type="text" name="categories_id">
                                </div> 
                                <div class="mb-3">
                                    <label for="name" class="form-label">Description</label>
                                    <input class="form-control w-25" type="text" name="description">
                                </div> 
                                <div class="mb-3">
                                    <label for="name" class="form-label">Photo</label>
                                    <input class="form-control w-25" type="text" name="photo">
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
