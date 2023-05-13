@extends('layout')
@section('title')
Machines
@endsection
@section('add')
      <a href="{{ route('machines.new') }}"><button  class="add-button">Add</button></a>
      <form class="search-form" role="search" action="{{ route('machines.search') }}" method="GET">
				<input type="text" id="search" aria-label="Search" placeholder="Search" name="term">
				<button type="submit">Search</button>
			  </form>
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('tableStyle.css') }}">
@endsection
@section('content')
<h1>Machines</h1>
        <div class="table">
            <table>
                <thead>
                  <tr>
                    <th>actions</th>
                    <th>Machine ID</th>
                    <th>Machine Name</th>
                    <th>Machine Model</th>
                    <th>Manfcatturer</th>
                    <th>User</th>
                    <th>Department</th>
                    <th>Category</th>
                    <th>Location </th>
                    <th>Contractor</th>
                    <th>Machine Status</th>
                    <th>Supplier</th>
                    <th>Critcality</th>
                    <th>Machines Code </th>
                    <th>Serial Number</th>
                    <th>Contract Expiry Date </th>
                    <th>Note To Technection</th>
                    <th>Description</th>
                  </tr>
                <thead>
                <tbody>
                  @foreach ($machines as $machine)
                  <tr>
                    <td>
                      <a class="btn btn-outline-success" href="">Report</a>
                      <a class="btn btn-outline-primary" href="{{route('machines.edit',$machine->id)}}">Edit</a>
                      <form class="delete" action="{{ route('machines.delete', $machine->id) }}" method="post" class="delete-btn">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                      </form>
                    </td>
                    <td>{{$machine->id}}</td>
                    <td>{{$machine->name}}</td>
                    <td>{{$machine->machine_model}}</td>
                    <td>{{$machine->manfacturer}}</td>
                    <td>{{$machine->user->name}}</td>
                    <td>{{$machine->department->name}}</td>
                    <td>{{$machine->category->name}}</td>
                    <td>{{$machine->location->location_description}}</td>
                    <td>{{$machine->contractor}}</td>
                    <td>{{$machine->machine_status_id}}</td>
                    <td>{{$machine->supplier}}</td>
                    <td>{{$machine->Criticality->name}}</td>
                    <td>{{$machine->machineCode->code}}</td>
                    <td>{{$machine->serial_number}}</td>
                    <td>{{$machine->contract_expiry_date}}</td>
                    <td>{{$machine->notes_to_technection}}</td>
                    <td>{{$machine->description}}</td>
                    <td>

                    </td>
                  </tr>
                  @endforeach

                </tbody>
            </table>

        </div>
@endsection

