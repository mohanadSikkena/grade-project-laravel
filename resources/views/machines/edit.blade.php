@extends('layout')
@section('title')
Edit Machine
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('style3.css') }}">
@endsection

@section('content')
<div class="container">
  <div class="card">
      <h2>Edit Assets</h2>
    <form class="card-form" action="{{ route('machines.update',$machine->id) }}" method="post">
    @method('PUT')
    @csrf        
      <div class="input2">
        <div class="input">
          <input type="text" value="{{$machine->name}}" class="input-field"   name="name" required>
          <label class="input-label">Asset Name </label>
        </div>
        <div class="input">
          <input type="text" value="{{$machine->machine_model}}" class="input-field"   name="machine_model" required>
          <label class="input-label">Asset Model </label>
        </div>
        <div class="input">
          <input type="text" value="{{$machine->manfacturer}}" class="input-field"   name="manfacturer" required >
          <label class="input-label">Manufacturer </label>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label class="label">User </label>
          <select class="form-select" aria-label="Default select example" name="user_id">
            @foreach ($users as $user)
            <option {{ $user->id == $machine->user_id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="col">
          <label class="label">Department </label>
          <select class="form-select" aria-label="Default select example"name="department_id">
            @foreach ($departments as $department)
            <option {{ $department->id == $machine->department_id ? 'selected' : '' }}   value="{{$department->id}}">{{$department->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="col">
          <label class="label">Location </label>
          <select class="form-select" aria-label="Default select example"name="location_id">
            @foreach ($locations AS $location)
            <option {{ $location->id == $machine->location_id ? 'selected' : '' }}  value="{{$location->id}}">{{$location->location_description}}</option>
            @endforeach
          </select>
        </div>
      </div>
    <div class="input">
      <input type="text" value="{{$machine->contractor}}" class="input-field"   name="contractor" required>
      <label class="input-label" for="floatingInput">Contractor</label>
    </div>
    <div class="input">
      <input type="text" value="{{$machine->supplier}}" class="input-field"   name="supplier" required>
      <label class="input-label" for="floatingInput">Supplier</label>
    </div>
      <div class="row">
        <div class="col">
          <label class="label">Category </label>
          <select class="form-select" aria-label="Default select example"name="category_id">
            @foreach ($categories AS $category)
            <option {{ $category->id == $machine->category_id ? 'selected' : '' }} value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>                      
        </div>
        <div class="col">
          <label class="label">Critcality </label>
          <select class="form-select" aria-label="Default select example"name="criticality_id"> 
            @foreach ($criticals As $crtical) 
            <option {{ $crtical->id == $machine->criticality_id ? 'selected' : '' }} value="{{$crtical->id}}">{{$crtical->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="col">
          <label class="label">Assets Code</label>
          <select class="form-select" aria-label="Default select example"name="machine_code_id">
            @foreach ($machineCodes AS $machineCode)
            <option {{ $machineCode->id == $machine->machine_code_id ? 'selected' : '' }} value="{{$machineCode->id}}">{{$machineCode->code}}</option>
            @endforeach
          </select>                     
        </div>
        <div class="input2">
        <div class="col">
          <label class="label">Assets Status</label>
          <select class="form-select" aria-label="Default select example"name="status_id">
            @foreach ($machineStatus AS $machineStatu)
            <option {{ $machineStatu->id == $machine->status_id ? 'selected' : '' }} value="{{$machineStatu->id}}">{{$machineStatu->name}}</option>
            @endforeach
          </select>                     
        </div>
      </div>
      <div class="input">
        <input type="text" value="{{$machine->serial_number}}" class="input-field"  name="serial_number" required>
        <label class="input-label">Serial Number</label>
      </div>
    </div>
      <div class="input">
        <input type="date" value="{{$machine->contract_expiry_date}}" class="input-field"  name="contract_expiry_data" required>
        <label class="label" for="floatingPassword">Contract Expiry Date</label>
      </div>
      <div class="input">
        <input name="notes_to_technection" value="{{$machine->notes_to_technection}}" class="input-field"    id="floatingTextarea2"  required>
        <label class="input-label" for="floatingTextarea6">Note To Technection</label>
      </div>
      <div class="input">
        <input name="description" class="input-field" value="{{$machine->description}}"  id="floatingTextarea2" required>
        <label class="input-label" for="floatingTextarea6">Description</label>
      </div>
            <div class="row">   
              <button class="action-button">Eidt</button>
          </div>
        </div>
      </form>
  </div>
 </div>
</div>
    
@endsection

