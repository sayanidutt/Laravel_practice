<h1>User Login</h1>

<form action="userauth" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Username"/><br>
    <input type="password" name="password" placeholder="Password"/><br>
    <button type="submit">Login</button>
</form>