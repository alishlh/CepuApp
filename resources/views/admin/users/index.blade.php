@extends('layouts.base-app')

@section('title', 'Users Dashboard')
@section('content')

<div class="container mt-5">


    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header  bg-primary text-white">
                        <h4 class="card-title">Form Tambah Users</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ route('admin.users.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama Lengkap</label>
                                            <input type="text" id="" name="name" class="form-control" placeholder="Nama Lengkap" name="fname-column" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="country-floating">Email</label>
                                            <input type="email" id="" name="email" class="form-control" name="country-floating" placeholder="Email..." required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="last-name-column">Nomor Telepon</label>
                                            <input type="number" id="" name="telp" class="form-control" placeholder="Nomor Telepon" name="lname-column" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="city-column">Password</label>
                                            <input type="password" id="" name="password" class="form-control" placeholder="Alamat Email" name="city-column" >
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
                <div class="card shadow-sm">
                    <div class="card-header  bg-primary text-white">
                        <h4 class="card-title">List Users</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table table-strip" id="myTable">
                                    <thead>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>telp</th>
                                        <th>Pilihan</th>

                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)     
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->telp}}</td>
                                            <td>
                                                <form action="{{ route('admin.users.destroy',$user->id) }}" method="POST">
                                                    @csrf
                                                    <a href="#" class="btn btn-success">Detail</a>
                                                    <a href="{{route('admin.users.edit', $user->id )}}" class="btn btn-warning">Edit</a>
                                                    
                                                    @if (Auth::user()->id == $user->id)
                                                    <button disabled href="" class="btn btn-danger">Delete</button>
                                                        
                                                    @else     
                                                    <button  type="submit" href="" class="btn btn-danger" onclick="return confirn('Apakah anda yakin akan menghapus data')">Delete</button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection