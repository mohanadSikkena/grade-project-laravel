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
      <form action="users.save" method="post">
          <div class=" mb-3">
              <label for="floatingPassword">Name</label>
              <input type="text" class="form-control" >
            </div>
            <div class=" mb-3">
              <label for="floatingPassword">Address</label>
              <input type="text" class="form-control">
            </div>
            <div class=" mb-3">
              <label for="floatingPassword">Phone Number</label>
              <input type="text" class="form-control">
            </div>
            <div class=" mb-3">
              <label for="floatingPassword">House Number</label>
              <input type="text" class="form-control">
            </div>
            <div class=" mb-3">
              <label for="floatingPassword">Hourly Salary</label>
              <input type="text" class="form-control">
            </div>
             <div class="row">
              <div class="col">
                <label for="">Department Id</label>
                @foreach ($departments AS $department)
                <select class="form-select" aria-label="Default select example">
                    <option value="{{$department->id}}">{{$department->name}}</option>
                </select>
                @foreach
            </div>
            <div class="col">
                <label for="">Location Id</label>
                @foreach ($locations AS $location )
                <select class="form-select" aria-label="Default select example">
                    <option value="{{$location->id}}">{{$location->name}}</option>
                </select>
                @endforeach
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
