@extends('layout')
@section('title')
Work Order
@endsection

@section('style')
<link rel="stylesheet" href="{{Asset('icons/style.css')}}">
<link rel="stylesheet" href="{{Asset('homeStyle.css')}}">
@endsection
@section('content')
<div class="container">
        <!-- <img  class="h3" src="./1.jpg" alt=""> -->
    <h3> Work Order</h3>
    <div class="row">
        <a href={{ route('planned_workorder.list') }}> <button class="home-button"> 
            <div class="fs1"><span class="icon-file-text2"></span><br>
          </div>Planned Work Order</button></a>
        <a href={{ route('failure_workorder.list') }}> <button class="home-button"> 
            <div class="fs1"><span class="icon-cog"></span><br>
            </div> Failure Work Order</button></a>
        
    </div>
</div>
@endsection
