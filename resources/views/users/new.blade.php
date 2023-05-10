@extends('layout')
@section('title')
New User
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('formStyle.css') }}">
@endsection

@section('content')
<div class="contain">
  <div class="all">
    <div class="header">Users </div>
      <form action="{{route('users.save')}}" method="post">
          <div class=" mb-3">
              <label for="floatingPassword">Name</label>
              <input type="text" class="form-control" name="name" >
            </div>
            <div class=" mb-3">
              <label for="floatingPassword">Address</label>
              <input type="text" class="form-control" name="address">
            </div>
            <div class=" mb-3">
              <label for="floatingPassword">Phone Number</label>
              <input type="text" class="form-control" name="phone_no">
            </div>
            <div class=" mb-3">
              <label for="floatingPassword">House Number</label>
              <input type="text" class="form-control" name="house_no">
            </div>
            <div class=" mb-3">
              <label for="floatingPassword">Hourly Salary</label>
              <input type="text" class="form-control" name="hourly_salery">
            </div>
            <div class=" mb-3">
              <label for="floatingPassword">Email</label>
              <input type="text" class="form-control" name="email">
            </div>
            <div class=" mb-3">
              <label for="floatingPassword">Password</label>
              <input type="text" class="form-control" name="password">
            </div>
            <div class="row">
              <div class="col">
                <label for="">Role Id</label>
                <select class="form-select" aria-label="Default select example" name="role_id">
                  @foreach ($roles AS $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                  @endforeach
                </select> 
            </div>
             <div class="row">
              <div class="col">
                <label for="">Department Id</label>
                <select class="form-select" aria-label="Default select example" name="department_id">
                  @foreach ($departments AS $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                  @endforeach
                </select>
                
            </div>
            <div class="col">
                <label for="">Location Id</label>
                <select class="form-select" aria-label="Default select example" name="location_id">
                  @foreach ($locations AS $location )
                    <option value="{{$location->id}}">{{$location->location_description}}</option>
                  @endforeach
                </select>
              </div>
             </div>
              <div class="button">
                <button class="submit" type="submit">Submit</button>
              </div>
      </form>
  </div>
 </div>
</div>
@endsection
