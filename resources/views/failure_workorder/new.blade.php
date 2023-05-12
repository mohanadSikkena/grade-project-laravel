 @extends('layout')
@section('title')
New Failure Work Order
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('style3.css') }}">
@endsection

@section('content')

<div class="container">
  <div class="card">
    <h2>Failure Work Order</h2>
    <form class="card-form" action={{Route('failure_workorder.save')}} method="post">
    @csrf
      <div class="col">
        <label class="label">Assign To</label>
        <select class="form-select" aria-label="Default select example" name="assign_to">
          @foreach ($users AS $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="row">
        <div class="col">
          <label class="label">Machine</label>
          <select class="form-select" aria-label="Default select example" name="machine_id">
            @foreach ($machines AS $machine)
            <option value="{{$machine->id}}">{{$machine->name}}</option>
            @endforeach
          </select>     
        </div>   
        </div> 
        <div class="input">            
          <input name="problem_description" class="input-field" placeholder="" id="floatingTextarea2" required>
          <label class="input-label" for="floatingTextarea6">Description</label>
        </div>
        <div class="input"> 
          <input type="taxt" class="input-field" name="requirements" required>
          <label class="input-label" for="floatingPassword">Requirements</label>
        </div>
        <div class="row">   
          <button class="action-button">Add</button>
        </div>
      </form>
  </div>
 </div>

@endsection
