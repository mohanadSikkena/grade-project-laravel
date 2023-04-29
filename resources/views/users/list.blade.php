<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.css.map')}}">

    <link rel="stylesheet" href="{{Asset('tableStyle.css')}}">
    <title>Users</title>
</head>
<body>
    <section>
        <div class="form-design" >
            <a href="../form/Users.html">  <button  class="button">Add</button> </a> </td>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="button" type="submit">Search</button>
              </form>
          </div>
          <h1>Users</h1>
        <div class="table">
            <table>
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>House Number</th>
                    <th>Hourly Salary</th>
                    <th>Department </th>
                    <th>Location  </th>
                  </tr>
                <thead>
                <tbody>
                  @foreach ($users AS $user)
                  <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->phone_no}}</td>
                    <td>{{$user->house_no}}</td>
                    <td>{{$user->hourly_salery}}</td>
                    <td>{{$user->department->name}}</td>
                    <td>{{$user->location->location_description}}</td>

                  </tr>
                  @endforeach
                </tbody>
            </table>

        </div>
    </section>

</body>
</html>
