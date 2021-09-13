<h1>User Login</h1>

@if(session('user'))
    <h3 style="color: green;">{{session('user')}} has been added</h3>
@endif

<form action="add" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Username"/><br>
    <input type="password" name="password" placeholder="Password"/><br>
    <input type="email" name="email" placeholder="Email"/><br>
    <button type="submit">Login</button>
</form>