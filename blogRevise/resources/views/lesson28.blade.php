<h1>List of Members</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
        <td>Address</td>
        <td>Operation</td>
    </tr>
    @foreach($members as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['age']}}</td>
        <td>{{$item['address']}}</td>
        <td>
            <a href="delete/{{$item['id']}}">Delete</a>
            <a href="edit/{{$item['id']}}">Edit</a>
        </td>
    </tr>   
    @endforeach
</table>