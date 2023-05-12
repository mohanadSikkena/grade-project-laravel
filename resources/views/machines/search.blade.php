<!-- Add a search form -->
<form action="{{ route('machine.search') }}" method="GET">
    <input type="text" name="term" placeholder="Search machine">
    <button type="submit">Search</button>
</form>

<!-- Display the list of machine -->
<ul>
    @foreach ($machines as $machine)
        <li>{{ $machine->description }}</li>
    @endforeach
</ul>
