<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{Asset('tableStyle.css')}}">
    <title>Machines</title>
</head>
<body>
    <section>
        <div class="form-design" >
            <a href="{{ route('machines.new') }}">  <button  class="button">Add</button> </a> </td>
            <form class="d-flex" role="search" method="POST">
                @csrf
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="button" type="submit">Search</button>
              </form>
          </div>
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
                      <form action="{{ route('workRequests.delete', $machine->id) }}" method="post" class="delete-btn">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
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
                    <td>{{$machine->machine_status}}</td>
                    <td>{{$machine->supplier}}</td>
                    <td>{{$machine->Criticality->name}}</td>
                    <td>{{$machine->machine_code_id}}</td>
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
    </section>

</body>
</html>
