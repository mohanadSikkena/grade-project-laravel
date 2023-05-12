<!-- Add a search form -->
<form action="{{ route('users.search') }}" method="GET">
    <input type="text" name="search" placeholder="Search users">
    <button type="submit">Search</button>
</form>

<!-- Display the list of users -->
<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>
