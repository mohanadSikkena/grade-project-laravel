<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title>New Matrial</title>
</head>
<body>
 

   <div class="contain">
    <div class="all">
      <div class="header">Matrials </div>
        <form action="" method="post">
            <div class=" mb-3">
                <label for="floatingPassword">Name</label>
                <input type="text" class="form-control">              
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Quantity</label>
                <input type="text" class="form-control">              
              </div>
                <div class="col">
                    <label for="">Spare Parts Id</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Crticality Id</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Location Id</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            <div class="row">
                <div class="col">
                    <label for="">Catigory Id</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                
           
                
                <div class="button">
                  <button class="submit" type="submit">Submit</button>
                </div>
              
        </form>
    </div>
   </div>
  </div>
    
</body>
</html>