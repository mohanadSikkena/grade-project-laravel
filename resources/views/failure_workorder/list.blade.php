@extends('layout')
@section('title')
Failure Work Order
@endsection

@section('page_title')
Failure Work Order
@endsection
@section('add')
@section('add')
<div class="form-design">
  <a href="{{ route('failure_workorder.new') }}">
    <button class="button">Add</button> </a>
  <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="button" type="submit">Search</button>
  </form>
</div>
@endsection
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('tableStyle.css') }}">
@endsection

@section('content')
<div class="table">
<table>
  <thead>
    <tr>
      <th>actions</th>
      <th>id</th>
      <th>Assign To</th>
      <th>Machine</th>
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
        <form action="{{ route('failure_workorder.delete', $fworkOrder->id) }}" method="post" class="delete-btn">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger">Delete</button>
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
