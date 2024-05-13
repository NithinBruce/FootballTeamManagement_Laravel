@extends('layout.app')  
<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-3">
  <a class="navbar-brand" href="/">Team Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
     
      @guest 
      <li class="nav-item">
        <a class="nav-link" href="{{ url('signup') }}">Signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('login') }}">Login</a>
      </li>
      @else 
      <li class="nav-item">
        <a class="nav-link " href="{{ url('products') }}">Football Team</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('logout') }}">Logout</a> 
      </li>
      @endguest
    </ul>
  </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


