@extends('layout')
@section('title')
Failure Work Order
@endsection

@section('page_title')
Failure Work Order
@endsection
@section('add')
@section('add')
<a href="{{ route('failure_workorder.new') }}"><button  class="add-button">Add</button></a>
<form class="search-form" role="search" action="{{ route('users.search') }}" method="GET">
  <input type="text" id="search" aria-label="Search" placeholder="Search" name="term">
  <button type="submit">Search</button>
  </form>
@endsection
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('tableStyle.css') }}">
@endsection

@section('content')
<h1>Failure Work Order</h1>
<div class="table">
<table>
  <thead>
    <tr>
      <th>actions</th>
      <th>id</th>
      <th>Assign To</th>
      <th>Asset</th>
      <th>Failure Cause</th>
      <th>resived date</th>
      <th>Requirements </th>
      <th>Fault</th>
    </tr>
  <thead>
  <tbody>
    @foreach ($fworkOrders AS $fworkOrder)
    <tr>
      <td>
        <a class="btn btn-outline-success" href="">Report</a>
        <a class="btn btn-outline-primary" href="{{route('failure_workorder.edit',$fworkOrder->id)}}">Edit</a>
        <form class="delete" action="{{ route('failure_workorder.delete', $fworkOrder->id) }}" method="post" class="delete-btn">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
      </td>
      <td>{{$fworkOrder->id}}</td>
      <td>{{$fworkOrder->assigendTo->name}}</td>
      <td>{{$fworkOrder->machine->name}}</td>
      <td>{{$fworkOrder->problem_description}}</td>
      <td>{{$fworkOrder->created_at}}</td>
      <td>{{$fworkOrder->requirements}}</td>
      <td>{{$fworkOrder->fault}}</td>
      
    </tr>
    @endforeach

  </tbody>
</table>  
</div>  
@endsection
