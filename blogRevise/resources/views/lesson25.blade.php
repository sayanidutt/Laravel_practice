<h1>Showing the member list</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
        <td>Address</td>
    </tr>

    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['age']}}</td>
        <td>{{$member['address']}}</td>
    </tr>
    @endforeach
</table>