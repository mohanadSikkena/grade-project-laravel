<!-- Add a search form -->
<form action="{{ route('workRequest.search') }}" method="GET">
    <input type="text" name="term" placeholder="Search workRequests">
    <button type="submit">Search</button>
</form>

<!-- Display the list of workRequests -->
<ul>
    @foreach ($workRequests as $workRequest)
        <li>{{ $workRequest->problem_description }}</li>
    @endforeach
</ul>
