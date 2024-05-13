@include('product.navbar')
@extends('layout.app') 
<div class="container">
<form action="{{ url('products/'.$product->id.'/edit')}}" method="post">
    @csrf
    <h1 class="text-center mb-3 mt-5"><b>Update Player Details</b></h1>
    <div class="mb-3">
        <label class="fw-bold">Player Name</label>
        <input type="text" name="playername" class="form-control" value="{{ $product->playername}}">
    </div>
    <div class="mb-3">
        <label class="fw-bold">Player Position</label>
        <input name="position" class="form-control" value="{{ $product->position}}">
    </div>
    <div class="mb-3">
        <label class="fw-bold">Price</label>
        <input type="text" name="price" class="form-control" value="{{ $product->price}}">
    </div>
    <div class="mb-3">
        <label class="fw-bold">Image_url</label>
        <input type="text" name="image_url" class="form-control" value="{{ $product->image_url}}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn  btn-block btn-primary">Update</button>
    </div>
</form>
</div>