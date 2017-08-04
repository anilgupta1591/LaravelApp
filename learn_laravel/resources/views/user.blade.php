@extends('base.layout')

@section('menu') 
<nav class="navbar navbar-default navbar-fixed">
   <div class="container-fluid">
           <div class="collapse navbar-collapse">
                   <ul class="nav navbar-nav navbar-right">
                     <li>
                            <a href="{{url('/logout')}}">
                                <p>Log out</p>
                            </a>
                        </li>
		 </ul>
                </div>
            </div> 
</nav>
@endsection
@section('content')
<?php //dd($users); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width" ng-app="myApp" ng-controller="myController">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>UserName</th>
                                        <th>Hobby</th>
                                        <th>Gender</th>
                                        <th>Technology</th>
                                        <th>Image</th>
                                        <th colspan="2" align="center">Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr >
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->hobby}}</td>
                                            <td>{{$user->gender}}</td>
                                            <td>{{$user->technology}}</td>
                                            <td><img src="{{asset('public/photo/'.$user->image)}}" height="25" /></td>
                                            <td ><a href="#" class="user-delete" id="{{$user->id}}" data="{{url('user/delete')}}" ng-click="deleteRecord($event)" id="{{$user->id}}">Delete</a></td>
                                            <td><a href="{{url('/user/edit/'.$user->id)}}" class="user-edit" id="{{$user->id}}">Edit</a></td>
                                        </tr>
                                    @endforeach    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    @endsection
    
    