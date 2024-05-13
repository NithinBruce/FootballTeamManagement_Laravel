@extends('layout.app') 
@include('product.navbar')
<h2 class="text-center mb-3 mt-5"><b>Add Player Details</b></h2><hr>
<div class="container">
<form action="{{ url('products/create')}}" method="post">
    @csrf
    <div class="mb-3">
        <label class="fw-bold">Player Name</label>
        <input type="text" name="playername" class="form-control" value="{{ old('playername')}}">
    </div>
    <div class="mb-3">
        <label class="fw-bold">Player Position</label>
        <input type="text" name="position" class="form-control" value="{{ old('position')}}">
    </div>
    <div class="mb-3">
        <label class="fw-bold">Price</label>
        <input type="text" name="price" class="form-control" value="{{ old('price')}}">
    </div>
    <div class="mb-3">
        <label class="fw-bold">Image_url</label>
        <input type="text" name="image_url" class="form-control" value="{{ old('image_url')}}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-block btn-primary">Add</button>
    </div>
</form> 
</div>