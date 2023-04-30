<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{Asset('tableStyle.css')}}">
    <title>Plaaned Work Order</title>
</head>
<body>
    <section>
        <div class="form-design" >
            <a href={{ route('planned_workorder.new') }}>  <button  class="button">Add</button> </a> </td>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="button" type="submit">Search</button>
              </form>
          </div>
          <h1>Planned Work Order</h1>
        <div class="table">
            <table>
                <thead>
                  <tr>
                    <th>Actions</th>
                    <th>Assign To</th>
                    <th>Asset</th>
                    <th>Work Status</th>
                    <th>Work Type</th>
                    <th>Work Priority</th>
                    <th>Requirements </th>
                    <th>Received Date</th>

                  </tr>
                <thead>
                <tbody>
                  @foreach ($pworkOrders AS $pworkOrder )
                  <tr>
                    <td>
                      <a class="btn btn-outline-success" href="">Report</a>
                      <a class="btn btn-outline-primary" href="">Edit</a>
                      <a class="btn btn-outline-danger" href="#">Delete</a>
                    </td>
                    <td>{{$pworkOrder->assigendTo->name}}</td>
                    <td>{{$pworkOrder->machine->name}}</td>
                    <td>{{$pworkOrder->workStatus->name}}</td>
                    <td>{{$pworkOrder->workType->name}}</td>
                    <td>{{$pworkOrder->workPriority->name}}</td>
                    <td>{{$pworkOrder->requirements}}</td>
                    <td>{{$pworkOrder->created_at}}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>

        </div>
    </section>

</body>
</html>
