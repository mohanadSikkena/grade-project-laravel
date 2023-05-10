@extends('layout')
@section('title')
New Matrial
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('formStyle.css') }}">
@endsection

@section('content')

<div class="contain">
    <div class="all">
      <div class="header">Matrials </div>
        <form action={{Route('materials.save')}} method="post">
            <div class=" mb-3">
                <label for="floatingPassword">Name</label>
                <input type="text" class="form-control" name="name">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Quantity</label>
                <input type="text" class="form-control" name="quantity">
              </div>
                <div class="col">
                    <label for="">Spare Parts</label>
                    <select class="form-select" aria-label="Default select example" name="spare_part_id">
                        @foreach ($spareParts AS $sparePart)
                        <option value="{{$sparePart->id}}">{{$sparePart->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="">Crticality</label>
                    <select class="form-select" aria-label="Default select example" name="criticality_id">
                        @foreach ($criticals As $critical)
                        <option value="{{$critical->id}}">{{$critical->name}}</option>
                        @endforeach
                    </select>       
                </div>
                <div class="col">
                    <label for="">Location</label>
                    <select class="form-select" aria-label="Default select example" name="location_id">
                        @foreach ($locations AS $location)
                        <option value="{{$location->id}}">{{$location->location_description}}</option>
                        @endforeach
                    </select>
                   
                </div>
            <div class="row">
                <div class="col">
                    <label for="">Catigory</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        @foreach ($categories AS $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="button">
                  <button class="submit" type="submit">Submit</button>
                </div>

        </form>
    </div>
   </div>
  </div>
@endsection
