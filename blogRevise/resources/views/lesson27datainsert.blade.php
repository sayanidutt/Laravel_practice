<h1>Please Fill the details</h1>

<form action="storedata" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name"/><br><br>
    <input type="text" name="age" placeholder="Age"/><br><br>
    <textarea name="address" placeholder="Address"></textarea><br><br>
    <button type="submit">Add Member</button>
</form>