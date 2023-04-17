<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="header">
          <h1>Report Title</h1>
        </div>
        <div class="description">
            <h2 class="h2">{{$workrequest->machine->name}}</h2>
            
          <h2>Description:{{ $workrequest->description}}</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel ultrices nulla, sed posuere mauris. Integer id lorem tristique, luctus metus eu, suscipit elit.</p>
        </div>
        <div class="footer">
          <div class="date-time">
            <h2>Submited By:{{$workrequest->user->name}}</h2>
           <h3>{{$machine->created_at}}</h3>
          </div>
          <div class="btn">
            <a href="{{'failure_workorder.new' ,$workrequest }}">  <button  class="button">Assign WO</button> </a> </td>
            <a href="{{'workrequest.list'}}">  <button  class="red">Cancel</button> </a> </td>

          </div>
        </div>
      </div>
      
      
</body>
</html>