<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title>New Work Request</title>
</head>
<body>


   <div class="contain">
    <div class="all">
      <div class="header">Work Request</div>
        <form action="" method="post">
                          <div class="col">
                            <label for="">Assets Id</label>
                            <select class="form-select" aria-label="Default select example">
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                            <div class="col">
                              <label for="">Work Type Id Id</label>
                              <select class="form-select" aria-label="Default select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                            <div class="col">
                              <label for="">Work Trade Id</label>
                              <select class="form-select" aria-label="Default select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                            <div class="col">
                              <label for="">Work Priority Id</label>
                              <select class="form-select" aria-label="Default select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                    <div class="col">
                      <label for="">Work State Id Id</label>
                      <select class="form-select" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                      <div class="col">
                        <label for="">Requester Id</label>
                        <select class="form-select" aria-label="Default select example">
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
              <div class="">
                <label for="floatingTextarea6">Description</label>
                <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>
              <div class="button">
                <button class="submit" type="submit">Submit</button>
              </div>
            </div>
        </form>
    </div>
   </div>
  </div>

</body>
</html>
