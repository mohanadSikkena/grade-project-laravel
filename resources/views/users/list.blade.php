@extends('layout')
@section('title')
Users
@endsection

@section('page_title')
Users
@endsection
@section('add')
<div class="form-design">
  <a href="{{ route('users.new') }}">
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
        <th>Action</th>
        <th>id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>House Number</th>
        <th>Hourly Salary</th>
        <th>Department </th>
        <th>Location  </th>
      </tr>
    <thead>
    <tbody>
      @foreach ($users AS $user)
      <tr>
        <td>
          <a class="btn btn-outline-success" href="">Report</a>
          <a class="btn btn-outline-primary" href="">Edit</a>
          <a class="btn btn-outline-danger" href="#">Delete</a>
        </td>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->phone_no}}</td>
        <td>{{$user->house_no}}</td>
        <td>{{$user->hourly_salery}}</td>
        <td>{{$user->department->name}}</td>
        <td>{{$user->location->location_description}}</td>
  
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
