@extends('layout')
@section('title')
Users
@endsection

@section('page_title')
Users
@endsection
@section('add')
      <a href="{{ route('users.new') }}"><button  class="add-button">Add</button></a>
      <form class="search-form" role="search" action="{{ route('users.search') }}" method="GET">
				<input type="text" id="search" aria-label="Search" placeholder="Search" name="term">
				<button type="submit">Search</button>
			  </form>
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('tableStyle.css') }}">
@endsection
@section('content')
<h1>Users</h1>
<div class="table">
  <table>
    <thead>
      <tr>
        <th>Action</th>
        <th>id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Role</th>
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
          <a class="btn btn-outline-primary" href="{{route('users.edit', $user->id)}}">Edit</a>
          <form class="delete" action="{{ route('users.delete', $user->id) }}" method="post" class="delete-btn">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-outline-danger">Delete</button>
          </form>
        </td>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->role->name}}</td>
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
