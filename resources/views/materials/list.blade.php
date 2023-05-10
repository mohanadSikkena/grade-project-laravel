@extends('layout')
@section('title')
Matarials
@endsection

@section('page_title')
Matarials
@endsection

@section('add')
<div class="form-design">
  <a href="{{ route('materials.new') }}">
    <button class="button">Add</button> </a>
  <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="button" type="submit">Search</button>
  </form>
</div>

@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('tableStyle.css') }}">
@endsection


@section('content')
<section>
  <table>
    <thead>
      <tr>
        <th>Action</th>
        <th>id</th>
        <th>name</th>
        <th>Quantity</th>
        <th>Spare Parts</th>
        <th>Crticality</th>
        <th>Location </th>
        <th>Catigory </th>
      </tr>
    <thead>
    <tbody>
      @foreach ($materials as $material)
      <tr>
        <td>
          <a class="btn btn-outline-success" href="">Report</a>
          <a class="btn btn-outline-primary" href="{{route('materials.edit', $material->id)}}">Edit</a>
          <form action="{{ route('materials.delete', $material->id) }}" method="post" class="delete-btn">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
        <td>{{$material->id}}</td>
        <td>{{$material->name}}</td>
        <td>{{$material->quantity}}</td>
        <td>{{$material->sparepart->name}}</td>
        <td>{{$material->criticality->name}}</td>
        <td>{{$material->location->location_description}}</td>
        <td>{{$material->category->name}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>  
</section>
@endsection
