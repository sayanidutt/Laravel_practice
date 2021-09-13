<h1>Login Form</h1>

<form action="savedata" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username"/><br>
    <span style="color: red;">@error('username'){{$message}}@enderror</span><br>
    <br>
    <input type="password" name="password" placeholder="Password" /><br>
    <span style="color: red;">@error('password'){{$message}}@enderror</span><br>
    <button type="submit">Login</button>
</form>