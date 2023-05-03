@extends('layout')
@section('title')
    Planned Work Order
@endsection
@section('page_title')
    Planned Work Order
@endsection
@section('add')
<div class="form-design">
  <a href="{{ route('planned_workorder.new') }}">
    <button class="button">Add</button> </a>
  <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="button" type="submit">Search</button>
  </form>
</div>
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('tableStyle.css') }}">
@endsection
@section('content')
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

    </tr>
  <thead>
  <tbody>
    @foreach ($pworkOrders AS $pworkOrder )
    <tr>
      <td>
        <a class="btn btn-outline-success" href="">Report</a>
        <a class="btn btn-outline-primary" href="">Edit</a>
        <a class="btn btn-outline-danger" href="#">Delete</a>
      </td>
      <td>{{$pworkOrder->assigendTo->name}}</td>
      <td>{{$pworkOrder->machine->name}}</td>
      <td>{{$pworkOrder->workStatus->name}}</td>
      <td>{{$pworkOrder->workType->name}}</td>
      <td>{{$pworkOrder->workPriority->name}}</td>
      <td>{{$pworkOrder->requirements}}</td>
      <td>{{$pworkOrder->created_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table> 
</div>    
@endsection
