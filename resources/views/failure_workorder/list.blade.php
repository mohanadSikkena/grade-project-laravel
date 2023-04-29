<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{Asset('tableStyle.css')}}">
    <title>Failure Work Order</title>
</head>
<body>
    <section>
        <div class="form-design" >
            <a href="../form/WorkOrderFailure.html">  <button  class="btn btn-primary">Add</button> </a> </td>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
          </div>
          <h1>Failure Work Order</h1>
        <div class="table">
            <table>
                <thead>
                  <tr>
                    <th>Assign To</th>
                    <th>Machine</th>
                    <th>Failure Cause</th>
                    <th>Requirements </th>
                  </tr>
                <thead>
                <tbody>
                  @foreach ($fworkOrders AS $fworkOrder)
                  <tr>
                    <td>{{$fworkOrder->assigendTo->name}}</td>
                    <td>{{$fworkOrder->machine->name}}</td>
                    <td>{{$fworkOrder->failure_cause}}</td>
                    <td>{{$fworkOrder->requirements}}</td>
                    
                  </tr>
                  @endforeach

                </tbody>
            </table>

        </div>
    </section>

</body>
</html>
