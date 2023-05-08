
@extends('layout')
@section('title')
Home
@endsection

@section('style')

<link rel="stylesheet" href="{{Asset('homeStyle.css')}}">
@endsection
@section('content')
<div class="logo">
    <!-- <img  class="h3" src="./1.jpg" alt=""> -->
    <h3> Let’s help you meet up your tasks</h3>
    <div class="container">

        <div class="row">
            <a href={{ route('home.WorkOrder') }}> <button class="home-button">
                <div class="fs1"><span class="icon-file-text2"></span><br>
              </div> Work Order</button></a>
            <a href={{ route('machines.list') }}> <button class="home-button">
                <div class="fs1"><span class="icon-cog"></span><br>
                </div> Assets</button></a>
            <a href={{ route('users.list') }}> <button class="home-button"> <div class="fs1">
                <span class="icon-users"></span><br>
            </div> Users</button></a>
            <a href={{ route('materials.list') }}> <button class="home-button"><div class="fs1">
                <span class="icon-database"></span><br>
            </div> Materials</button></a>
            <a href={{ route ('workRequests.list') }}> <button class="home-button"><div class="fs1">
                <span class="icon-paste"></span><br>
            </div> Work Requests</button></a>
            <a href={{ route('logout') }}> <button class="home-button"><div class="fs1"><span class="icon-exit"></span><br>
            </div>logout</button></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
