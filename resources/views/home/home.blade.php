
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
        @can('view-all')
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
            <a href=""><form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @method('POST')
                @csrf
                <button type="submit" class="home-button"><div class="fs1"><span class="icon-exit"></span><br>
                </div>logout</button>
            </form></a>
            </div>
            @endcan
            @can('view-coordinator', [App\Models\WorkRequest::class])
            <div class="row">
                <a href={{ route ('workRequests.list') }}> <button class="home-button"><div class="fs1">
                    <span class="icon-paste"></span><br>
                </div> Work Requests</button></a>
                <a href=""><form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @method('POST')
                    @csrf
                    <button type="submit" class="home-button"><div class="fs1"><span class="icon-exit"></span><br>
                    </div>logout</button>
                </form></a>
                </div>
            @endcan
        @can('view-engineer', [App\Models\WorkRequest::class, App\Models\WorkOrder::class])
        <div class="row">
            <a href={{ route('home.WorkOrder') }}> <button class="home-button">
                <div class="fs1"><span class="icon-file-text2"></span><br>
              </div> Work Order</button></a>
            <a href={{ route ('workRequests.list') }}> <button class="home-button"><div class="fs1">
                <span class="icon-paste"></span><br>
            </div> Work Requests</button></a>
            <a href=""><form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @method('POST')
                @csrf
                <button type="submit" class="home-button"><div class="fs1"><span class="icon-exit"></span><br>
                </div>logout</button>
            </form></a>
            </div>
        @endcan
        @can('view-technician', App\Models\WorkOrder::class)
        <div class="row">
        <a href={{ route('home.WorkOrder') }}> <button class="home-button">
            <div class="fs1"><span class="icon-file-text2"></span><br>
          </div> Work Order</button></a>
        <a href=""><form id="logout-form" action="{{ route('logout') }}" method="POST" >
            @method('POST')
            @csrf
            <button type="submit" class="home-button"><div class="fs1"><span class="icon-exit"></span><br>
            </div>logout</button>
        </form></a>
        </div>
    @endcan
        {{-- <div class="row">
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
            <a href=""><form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @method('POST')
                @csrf
                <button type="submit" class="home-button"><div class="fs1"><span class="icon-exit"></span><br>
                </div>logout</button>
            </form></a>
            </div>
        </div> --}}
    </div>
</div>
@endsection
