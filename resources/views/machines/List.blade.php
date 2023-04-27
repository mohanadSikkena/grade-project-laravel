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
            <a href="../form/Assets.html">  <button  class="button">Add</button> </a> </td>
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
                    <td>{{$machines->name}}</td>
                    <td>{{$machines->machine_model}}</td>
                    <td>{{$machines->manfacturer}}</td>
                    <td>{{$machines->user_id}}</td>
                    <td>{{$machines->department_id}}</td>
                    <td>{{$machines->category_id}}</td>
                    <td>{{$machines->location->location_description}}</td>
                    <td>{{$machines->contractor}}</td>
                    <td>{{$machines->supplier}}</td>
                    <td>{{$machines->critcality_id}}</td>
                    <td>{{$machines->machine_code_id}}</td>
                    <td>{{$machines->serial_number}}</td>
                    <td>{{$machines->contract_expiry_date}}</td>
                    <td>{{$machines->notes_to_technection}}</td>
                    <td>{{$machines->description}}</td>
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
