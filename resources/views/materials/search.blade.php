<!-- Add a search form -->
<form action="{{ route('material.search') }}" method="GET">
    <input type="text" name="term" placeholder="Search $materials">
    <button type="submit">Search</button>
</form>

<!-- Display the list of $materials -->
<ul>
    @foreach ($materials as $material)
        <li>{{ $material->name }}</li>
    @endforeach
</ul>
