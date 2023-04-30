<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{Asset('tableStyle.css')}}">
    <title>Work Requset</title>
</head>
<body>
    <section>
        <div class="form-design" >
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="button" type="submit">Search</button>
              </form>
          </div>
          <h1>Work Requset</h1>
        <div class="table">
            <table>
                <thead>
                  <tr>
                    <th>Actions</th>
                    <th>Id</th>
                    <th>Assets</th>
                    <th>Requester</th>
                    <th>problem description</th>

                  </tr>
                <thead>
                <tbody>
                  @foreach ( $workRequests AS $workRequest)
                  <tr>
                    <td>
                      <a class="btn btn-outline-success" href="">Report</a>
                      <a class="btn btn-outline-primary" href="">Edit</a>
                      <a class="btn btn-outline-danger" href="#">Delete</a>
                    </td>
                    <td>{{$workRequest->id}}</td>
                    <td>{{$workRequest->machine->name}}</td>
                    <td>{{$workRequest->requster_id}}</td>
                    <td>{{$workRequest->problem_description}}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>

        </div>
    </section>

</body>
</html>
