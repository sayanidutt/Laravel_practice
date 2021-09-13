<h1>Login Form</h1>

<form action="methods" method="POST">
    {{method_field('DELETE')}}
    @csrf
    <input type="text" name="username" placeholder="Username" /><br>
    <input type="password" name="password" placeholder="Password" /><br>
    <button type="submit">Login</button>
</form>