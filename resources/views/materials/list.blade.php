@extends('layout')
@section('title')
Matarials
@endsection

@section('page_title')
Matarials
@endsection

@section('add')
<a href="{{ route('materials.new') }}"><button  class="add-button">Add</button></a>
<form class="search-form" role="search" action="{{ route('materials.search') }}" method="GET">
<input type="text" id="search" aria-label="Search" placeholder="Search" name="term">
<button type="submit">Search</button>
</form>

@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('tableStyle.css') }}">
@endsection

@section('add')

  <a href="{{ route('materials.new') }}"><button  class="add-button">Add</button></a>
        <form class="search-form">
				<input type="text" id="search" aria-label="Search" placeholder="Search" name="search">
				<button type="submit">Go</button>
			  </form>
@endsection

@section('content')

<h1>materials</h1>
<div class="table">
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
          <a class="btn btn-outline-success" href="{{ route('materials.show', $material->id) }}">Report</a>
          <a class="btn btn-outline-primary" href="{{route('materials.edit', $material->id)}}">Edit</a>
          <form class="delete" action="{{ route('materials.delete', $material->id) }}" method="post" class="delete-btn">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-outline-danger">Delete</button>
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
</div>
@endsection
