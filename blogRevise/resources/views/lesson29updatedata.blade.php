<h1>Update your data</h1>

<form action="/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}"/>
    <input type="text" name="name" value="{{$data['name']}}"/><br><br>
    <input type="text" name="age" value="{{$data['age']}}"/><br><br>
    <input type="text" name="address" value="{{$data['address']}}"/><br><br>
    <button type="submit">Update</button>
</form>