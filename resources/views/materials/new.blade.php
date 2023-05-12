@extends('layout')
@section('title')
New Matrial
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('style3.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <h2>Matrials</h2>
            <form class="card-form" action={{Route('materials.save')}} method="post">
            @csrf
                <div class="input">
                    <input type="text" name="name" class="input-field"  required/>
                    <label class="input-label">Name</label>
                </div>
                <div class=" input">
                    <input type="text" class="input-field" name="quantity" required>
                    <label class="input-label"  for="floatingPassword">Quantity</label>
                  </div>
                    <div class="col">
                        <label class="label" required>Spare Parts</label>
                        <select class="form-select" aria-label="Default select example" name="spare_part_id">
                            @foreach ($spareParts AS $sparePart)
                            <option value="{{$sparePart->id}}">{{$sparePart->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label class="label" required>Crticality</label>
                        <select class="form-select" aria-label="Default select example" name="criticality_id">
                            @foreach ($criticals As $critical)
                            <option value="{{$critical->id}}">{{$critical->name}}</option>
                            @endforeach
                        </select>       
                    </div>
                    <div class="col">
                        <label class="label" required>Location</label>
                        <select class="form-select" aria-label="Default select example" name="criticality_id">
                            @foreach ($locations AS $location)
                            <option value="{{$location->id}}">{{$location->location_description}}</option>
                            @endforeach
                        </select>       
                    </div>
                    <div class="col">
                        <label class="label" required>Catigory</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            @foreach ($categories AS $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div> 
                    <div class="row">   
                    <button class="action-button">Add</button>
                </div>
            </form>
    </div>
</div>
    
@endsection
