@extends('layout')
@section('title')
    Planned Work Order
@endsection

@section('add')
<form class="search-form" role="search" action="{{ route('planned_workorder.search') }}" method="GET">
  <input type="text" id="search" aria-label="Search" placeholder="Search" name="term">
  <button type="submit">Search</button>
  </form>
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('tableStyle.css') }}">
@endsection
@section('content')
<h1>Planned Work Order</h1>
<div class="table">
  <table>
  <thead>
    <tr>
      <th>Actions</th>
      <th>Assign To</th>
      <th>Asset</th>
      <th>Work Status</th>
      <th>Work Type</th>
      <th>Work Priority</th>
      <th>Requirements </th>
      <th>Received Date</th>
      <th>Fault</th>

    </tr>
  <thead>
  <tbody>
    @foreach ($pworkOrders AS $pworkOrder )
    <tr>
      <td>
        <a class="btn btn-outline-success" href="">Report</a>
        <a class="btn btn-outline-primary" href="{{route('planned_workorder.edit', $pworkOrder->id)}}">Edit</a>
          <form class="delete" action="{{ route('planned_workorder.delete', $pworkOrder->id) }}" method="post" class="delete-btn">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-outline-danger">Delete</button>
          </form>
      </td>
      <td>{{$pworkOrder->assigendTo->name}}</td>
      <td>{{$pworkOrder->machine->name}}</td>
      <td>{{$pworkOrder->workStatus->name}}</td>
      <td>{{$pworkOrder->workType->name}}</td>
      <td>{{$pworkOrder->workPriority->name}}</td>
      <td>{{$pworkOrder->requirements}}</td>
      <td>{{$pworkOrder->created_at}}</td>
      <td>{{$pworkOrder->fault}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
