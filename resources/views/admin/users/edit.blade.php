@extends('layouts.base-app')

@section('title', 'Users Dashboard')
@section('content')

<div class="container mt-5">


    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header  bg-primary text-white">
                        <h4 class="card-title">Form Edit Data Users</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ route('admin.users.update',$user->id) }}"  method="POST">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama Lengkap</label>
                                            <input type="text" value="{{$user->name}}" id="" name="name" class="form-control" placeholder="Nama Lengkap" name="fname-column" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="country-floating">Email</label>
                                            <input type="email" value="{{$user->email}}" id="" name="email" class="form-control" name="country-floating" placeholder="Email..." required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="last-name-column">Nomor Telepon</label>
                                            <input type="number" value="{{$user->telp}}" id="" name="telp" class="form-control" placeholder="Nomor Telepon" name="lname-column" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="city-column">Password</label>
                                            <input type="password" id="" name="password" class="form-control" placeholder="Alamat Email" name="city-column" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
