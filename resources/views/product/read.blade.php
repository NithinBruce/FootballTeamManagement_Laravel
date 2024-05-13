@include('product.navbar')
@extends('layout.app') 
<h1 class="text-center fw-bold mt-4">Team Management Details</h1>
<div class="text-center mt-1 mb-1">
    <a href="{{ url('products/create')}}" class="btn btn-primary mb-3">Add Player</a>
</div>

<div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Player Name</th>
                <th>Position</th>
                <th>Price</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td><img src="{{ $player->image_url }}" alt="Player Image" style="max-width: 100px;"></td>
                <td>{{ $player->playername }}</td>
                <td>{{ $player->position }}</td>
                <td>${{ $player->price }}</td>
                <td>
                <a href="{{ url('products/'.$player->id.'/edit')}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                <a href="{{ url('products/'.$player->id.'/delete')}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
