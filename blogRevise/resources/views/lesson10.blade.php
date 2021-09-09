<h3>Users Page</h3>

{{--@if($user == 'Jonny')
<h2>{{ $user }}</h2>
@elseif($user == 'Peter')
<h2>{{ $user }}</h2>
@else
<h2>Unknown name</h2>
@endif

@for($i=0;$i<=10;$i++)
<h2>{{$i}}</h2>
@endfor --}}

@foreach($user as $item)
<h3>{{ $item }}</h3>
@endforeach