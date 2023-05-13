@extends('layout')
@section('title')
Edit User
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('style3.css') }}">
@endsection

@section('content')
<div class="container">
  <div class="card">
    <h2>Users</h2>
    <form class="card-form" action="{{ route('users.update',$user->id) }}" method="post">
      @csrf
      <div class="input">
        <input type="text" value="{{$user->name}}" name="name" class="input-field"  required name="name" >
        <label class="input-label" for="floatingPassword">Name</label>
      </div>
      <div class="input">
        <input type="text" class="input-field" value="{{$user->email}}"name="email"  required name="email">
        <label class="input-label" for="floatingPassword">Email</label>
      </div>
      <div class="input">
        <input type="password" class="input-field" value="{{$user->password}}"name="password" required name="password">
        <label class="input-label" for="floatingPassword">Password</label>
      </div>
      <div class="row">
        <div class="col">
          <label class="label" for="">Role</label>
          <select class="form-select" aria-label="Default select example" name="role_id">
            @foreach ($roles AS $role)
              <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
          </select>
        </div> 
        <div class="col">
          <label class="label" for="">Department</label>
          <select class="form-select" aria-label="Default select example" name="department_id">
            @foreach ($departments AS $department)
            <option value="{{$department->id}}">{{$department->name}}</option>
            @endforeach
          </select>              
        </div>
        <div class="col">
          <label class="label" for="">Location</label>
          <select class="form-select" aria-label="Default select example" name="location_id">
            @foreach ($locations AS $location )
            <option value="{{$location->id}}">{{$location->location_description}}</option>
            @endforeach
          </select>
      </div>
      </div>
      <div class="input">
        <input type="text" value="{{$user->address}}" class="input-field"  required name="address">
        <label class="input-label" for="floatingPassword">Address</label>
      </div>
      <div class="input">
        <input type="text" value="{{$user->phone_no}}" class="input-field"  required name="phone_no">
        <label class="input-label" for="floatingPassword">Phone Number</label>
      </div>     
      <div class="input">
        <input type="text" value="{{$user->house_no}}" class="input-field"  required name="house_no">
        <label class="input-label" for="floatingPassword">House Number</label>
      </div>
      <div class="input">
        <input type="text" value="{{$user->hourly_salery}}" class="input-field"  required name="hourly_salery">
        <label class="input-label" for="floatingPassword">Hourly Salary</label>
      </div>
      <div class="row">   
        <button class="action-button">Edit</button>
    </div>
  </form>
  </div>
</div>
@endsection
