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
        <form action="{{workrequests.update}}" method="post">
                          <div class="col">
                            <label for="">Asset</label>
                            @foreach ($assets AS $asset)
                            <select class="form-select" aria-label="Default select example">
                              <option {{$asset->id == $workRequest->asset_id ? 'selected' : ''}} value="{{$asset->id}}">{{$asset->name}}</option>
                            </select>
                            @endforeach
                          </div>
                            <div class="col">
                              <label for="">Work Type </label>
                              @foreach ($workTypes AS $workType)
                              <select class="form-select" aria-label="Default select example">
                                <option {{$workType->id == $materials->worktype_id ? 'selected' : ''}} value="{{$workType->id}}">{{$workType->name}}</option>
                              </select>
                              @endforeach
                            </div>
                            <div class="col">
                              <label for="">Work Trade </label>
                              @foreach ($workTrades AS $workTrade)
                              <select class="form-select" aria-label="Default select example">
                                <option {{$workTrade->id == $materials->worktrade_id ? 'selected' : ''}} value="{{$workTrade->id}}">{{$workTrade->name}}</option>
                              </select>
                              @endforeach
                            </div>
                            <div class="col">
                              <label for="">Work Priority </label>
                              @foreach ($workPriorities AS $workPriority)
                              <select class="form-select" aria-label="Default select example">
                                <option {{$workPriority->id == $materials->workpriority_id ? 'selected' : ''}} value="{{$workPriority->id}}">{{$workPriority->name}}</option>
                              </select>
                              @endforeach
                            </div>
                    <div class="col">
                      <label for="">Work Statue </label>
                      @foreach ($workStatues AS $workStatue)
                      <select class="form-select" aria-label="Default select example">
                        <option {{$workStatue->id == $materials->workstatue_id ? 'selected' : ''}} value="{{$workStatue->id}}">{{$workStatue->name}}</option>
                      </select>
                      @endforeach
                    </div>
                      <div class="col">
                        <label for="">Requester </label>
                        @foreach ($users AS $user)
                              <select class="form-select" aria-label="Default select example">
                                <option {{$user->id == $materials->user_id ? 'selected' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                              </select>
                              @endforeach
                      </div>
              <div class="">
                <label for="floatingTextarea6">Description</label>
                <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px">{{}}</textarea>
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
