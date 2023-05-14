@extends('layout')
@section('title')
Work Requset
@endsection
@section('add')
<form class="search-form" role="search" action="{{ route('workRequest.search') }}" method="GET">
  <input type="text" id="search" aria-label="Search" placeholder="Search" name="term">
  <button type="submit">Search</button>
  </form>

@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('tableStyle.css') }}">
@endsection
@section('content')
@can('view-all')
<h1>Work Requset</h1>
<div class="table">
  <table>
    <thead>
      <tr>
        <th>Actions</th>
        <th>Id</th>
        <th>Assets</th>
        <th>Requester</th>
        <th>problem description</th>

      </tr>
    <thead>
    <tbody>
      @foreach ( $workRequests AS $workRequest)
      <tr>
        <td>
          <a class="btn btn-outline-success" href="{{ route('workRequests.show', $workRequest->id) }}">Report</a>
          <form class="delete" action="{{ route('workRequests.delete', $workRequest->id) }}" method="post" class="delete-btn">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-outline-danger">Delete</button>
          </form>
        </td>
        <td>{{$workRequest->id}}</td>
        <td>{{$workRequest->machine->name}}</td>
        <td>{{$workRequest->user->name}}</td>
        <td>{{$workRequest->problem_description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endcan
@can('view-coordinator', [App\Models\WorkRequest::class])
<h1>Work Requset</h1>
<div class="table">
  <table>
    <thead>
      <tr>
        <th>Actions</th>
        <th>Id</th>
        <th>Assets</th>
        <th>Requester</th>
        <th>problem description</th>

      </tr>
    <thead>
    <tbody>
      @foreach ( $workRequests AS $workRequest)
      <tr>
        <td>
          <a class="btn btn-outline-success" href="{{ route('workRequests.show', $workRequest->id) }}">Report</a>
        </td>
        <td>{{$workRequest->id}}</td>
        <td>{{$workRequest->machine->name}}</td>
        <td>{{$workRequest->user->name}}</td>
        <td>{{$workRequest->problem_description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endcan
        @can('view-engineer', [App\Models\WorkRequest::class, App\Models\WorkOrder::class])
        <h1>Work Requset</h1>
<div class="table">
  <table>
    <thead>
      <tr>
        <th>Actions</th>
        <th>Id</th>
        <th>Assets</th>
        <th>Requester</th>
        <th>problem description</th>

      </tr>
    <thead>
    <tbody>
      @foreach ( $workRequests AS $workRequest)
      <tr>
        <td>
          <a class="btn btn-outline-success" href="{{ route('workRequests.show', $workRequest->id) }}">Report</a>
        </td>
        <td>{{$workRequest->id}}</td>
        <td>{{$workRequest->machine->name}}</td>
        <td>{{$workRequest->user->name}}</td>
        <td>{{$workRequest->problem_description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
        @endcan
@endsection
