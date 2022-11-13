@extends('client.client')
@section('main-content')
@php
$no = 1;
@endphp
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Halaman User</h4>
                    <p>Halaman ini untuk menampilkan semua user yang ada dan bisa melihat profile user lain serta follow unfollow user lain.</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>User ID</th>
                                    <th>Fullname</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                </thead>
                                <tbody>
                                    @foreach ($user as $u)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$u->id}}</td>
                                        <td>{{$u->fullname}}</td>
                                        <td>{{$u->username}}</td>
                                        <td>{{$u->email}}</td>
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
