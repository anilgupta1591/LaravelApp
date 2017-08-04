@extends('base.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" value="{{isset($user->name)?$user->name:''}}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ isset($user->email)?$user->email:'' }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" value="{{isset($user->username)?$user->username:''}}" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         @if(!isset($user)) 
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                         @endif 

                          <div class="form-group">
                            <label for="hobby" class="col-md-4 control-label">Hobby</label>
                            <?php
                                if(isset($user->hobby)){
                                    $hobby = explode(",", $user->hobby);
                                }
                               
                            ?>
                            <div class="col-md-6">
                                <input id="hobby1" type="checkbox" <?php if(isset($user->hobby) && in_array('play',$hobby)) echo 'checked=checked'; ?>  value="play" class="form-control" name="hobby[]" >
                                <input id="hobby2" type="checkbox" <?php if(isset($user->hobby) && in_array('music',$hobby)) echo 'checked=checked'; ?>  value="music" class="form-control" name="hobby[]" >
                                <input id="hobby3" type="checkbox" <?php if(isset($user->hobby) && in_array('read',$hobby)) echo 'checked=checked'; ?>  value="read" class="form-control" name="hobby[]" >
                            </div>
                        </div>

                          <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Gender</label>
                            
                            <div class="col-md-6">
                                <input id="gender" type="radio" value="male"  {{ isset($user->gender) && $user->gender=='male'?'checked="checked"':''}}  class="form-control" name="gender" >
                                <input id="gender" type="radio" value="female" {{ isset($user->gender) && $user->gender=='female'?'checked="checked"':''}} class="form-control" name="gender" >
                            </div>
                        </div>

                          <div class="form-group">
                            <label for="technology" class="col-md-4 control-label">Technology</label>
                                
                            <div class="col-md-6">
                                <select id="technology" class="form-control" name="technology" required>
                                <option value="">Select</option>
                                <option {{ isset($user->technology) && $user->technology=='php'?'selected="selected"':''}}  value="php">PHP</option>
                                <option value="python" {{ isset($user->technology) && $user->technology=='python'?'selected="selected"':''}}>Python</option>
                                <option value="java" {{ isset($user->technology) && $user->technology=='java'?'selected="selected"':''}}>Java</option>
                                </select>
                                @if ($errors->has('technology'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('technology') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          @if(!isset($user)) 
                          <div class="form-group">
                            <label for="image" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image" required>
                            </div>
                        </div>
                          @endif
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
