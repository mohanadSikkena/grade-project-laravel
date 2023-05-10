@extends('layout')
@section('title')
Edit Matrial
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('formStyle.css') }}">
@endsection

@section('content')
<div class="contain">
    <div class="all">
      <div class="header">Materials </div>
        <form action="{{route('materials.update',$material->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class=" mb-3">
                <label for="floatingPassword">Name</label>
                <input type="text" class="form-control" value="{{$material->name}}" name="name">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Quantity</label>
                <input type="text" class="form-control" value="{{$material->quantity}}" name="quantity">
              </div>
                <div class="col">
                    <label for="">Spare Parts Id</label>
                    
                    <select class="form-select" aria-label="Default select example" name="spare_part_id">
                        @foreach ($spareParts AS $sparePart)
                        <option {{$sparePart->id == $material->spare_part_id ? 'selected' : ''}} value="{{$sparePart->id}}">{{$sparePart->name}}</option>
                        @endforeach
                    </select>
                    
                </div>
                <div class="col">
                    <label for="">Criticals Id</label>
                    
                    <select class="form-select" aria-label="Default select example" name="criticality_id">
                        @foreach ($criticals As $critical)
                        <option {{ $critical->id == $material->critical_id ? 'selected' : '' }} value="{{$critical->id}}">{{$critical->name}}</option>
                        @endforeach
                    </select>
                   
                </div>
                <div class="col">
                    <label for="">Location Id</label>
                   
                    <select class="form-select" aria-label="Default select example" name="location_id">
                        @foreach ($locations AS $location)
                        <option  {{ $location->id == $material->location_id ? 'selected' : '' }} value="{{$location->id}}">{{$location->location_description}}</option>
                        @endforeach
                    </select>
                    
                </div>
            <div class="row">
                <div class="col">
                    <label for="">Catigory Id</label>
                    
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        @foreach ($categories AS $category)
                        <option {{ $category->id == $material->category_id ? 'selected' : '' }} value="{{$category->id}}">{{$category->name}}</option>
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
