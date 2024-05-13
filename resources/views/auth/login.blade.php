@include('product.navbar')
@extends('layout.app')  
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center fw-bold">LOGIN</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="fw-bold">Email</label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="password" class="fw-bold">Password</label>
                                <input id="password" class="form-control" type="password" name="password" value="{{ old('email') }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>