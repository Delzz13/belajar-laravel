<h1>hello world</h1>

<a href = "{{ route ('feature') }}">click saya untuk berpindah halaman di fitur</a>

<p>Data User </p>
<ul>
    @foreach($users as $user)
    <li> 
        <a href="{{ route ('users.show', $users->id)}}">
            {{$user->name}}
        </a>
    </li>
    @endforeach
</ul> 
