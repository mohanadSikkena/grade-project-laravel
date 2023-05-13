@extends('layout')
@section('title')
New Machine
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('style3.css') }}">
@endsection

@section('content')
<div class="container">
  <div class="card">
      <h2>Machines</h2>
    <form class="card-form"action="{{ route('machines.save') }}" method="post">
    @csrf        
      <div class="input2">
        <div class="input">
          <input type="text" class="input-field"   name="name" required>
          <label class="input-label">Asset Name </label>
        </div>
        <div class="input">
          <input type="text" class="input-field"   name="machine_model" required>
          <label class="input-label">Asset Model </label>
        </div>
        <div class="input">
          <input type="text" class="input-field"   name="manfacturer" required >
          <label class="input-label">Manufacturer </label>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label class="label">User </label>
          <select class="form-select" aria-label="Default select example" name="user_id">
            @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="col">
          <label class="label">Department </label>
          <select class="form-select" aria-label="Default select example"name="department_id">
            @foreach ($departments as $department)
            <option value="{{$department->id}}">{{$department->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="col">
          <label class="label">Location </label>
          <select class="form-select" aria-label="Default select example"name="location_id">
            @foreach ($locations AS $location)
            <option value="{{$location->id}}">{{$location->location_description}}</option>
            @endforeach
          </select>
        </div>
      </div>
    <div class="input">
      <input type="text" class="input-field"   name="contractor" required>
      <label class="input-label" for="floatingInput">Contractor</label>
    </div>
    <div class="input">
      <input type="text" class="input-field"   name="supplier" required>
      <label class="input-label" for="floatingInput">Supplier</label>
    </div>
      <div class="row">
        <div class="col">
          <label class="label">Category </label>
          <select class="form-select" aria-label="Default select example"name="category_id">
            @foreach ($categories AS $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
             @endforeach
          </select>                      
        </div>
        <div class="col">
          <label class="label">Critcality </label>
          <select class="form-select" aria-label="Default select example"name="criticality_id"> 
            @foreach ($criticals As $crtical) 
            <option value="{{$crtical->id}}">{{$crtical->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="col">
          <label class="label">Assets Code</label>
          <select class="form-select" aria-label="Default select example"name="machine_code_id">
            @foreach ($machineCodes AS $machineCode)
            <option value="{{$machineCode->id}}">{{$machineCode->code}}</option>
            @endforeach
          </select>                     
        </div>
      </div>
      <div class="input">
        <input type="text" class="input-field"  name="serial_number" required>
        <label class="input-label">Serial Number</label>
      </div>
      <div class="input">
        <input type="date" class="input-field"  name="contract_expiry_data" required>
        <label class="label" for="floatingPassword">Contract Expiry Date</label>
      </div>
      <div class="input">
        <input name="note_to_technection" class="input-field"    id="floatingTextarea2"  required>
        <label class="input-label" for="floatingTextarea6">Note To Technection</label>
      </div>
      <div class="input">
        <input name="description" class="input-field"  id="floatingTextarea2" required>
        <label class="input-label" for="floatingTextarea6">Description</label>
      </div>
            <div class="row">   
              <button class="action-button">Add</button>
          </div>
        </div>
      </form>
  </div>
 </div>
</div>
    
@endsection
