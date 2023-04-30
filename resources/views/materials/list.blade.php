<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{Asset('tableStyle.css')}}">
    <title>Matarials</title>
</head>
<body>
    <section>
        <div class="form-design" >
            <a href={{Route('materials.new')}}>  <button  class="button">Add</button> </a> </td>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="button" type="submit">Search</button>
              </form>
          </div>
          <h1>matrials</h1>
        <div class="table">
            <table>
                <thead>
                  <tr>
                    <th>Action</th>
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
                      <a class="btn btn-outline-primary" href="">Edit</a>
                      <a class="btn btn-outline-danger" href="#">Delete</a>
                    </td>
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
    </section>

</body>
</html>
