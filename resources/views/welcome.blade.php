@include('product.navbar')
<div class="container mt-3">
    @guest
    <div class="text-center">
        <h1 class="mt-5 mb-4">Welcome to Football Team Management </h1>
        <hr>
        <br>
        <h3> Create An Account</h3>
    <a href="{{ url('signup') }}" class="btn btn-success">Signup</a>
    
        <br><br><br><br><br><br>
        <h3> Log In To Your Account</h3>
        <a href="{{ url('login') }}" class="btn btn-primary">Login</a>
    </div>
    @endguest
</div>