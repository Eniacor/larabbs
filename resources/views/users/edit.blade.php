@extends('layouts.app')
@section('content')
    <div class="panel panel-default col-md-10 col-md-offset-1">
        <div class="panel-heading">
            <h4>
                <i class="glyphicon glyphicon-edit"></i>个人编辑资料
            </h4>
        </div>
        @include('common.error')
        <div class="panel-body">
            <form action="{{route('users.update',$user->id)}}" method="POST" accept-charset="UTF-8">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <lable for="name-field">用户名</lable>
                    <input class="form-control" type="text" name="name" id="name-field" value="{{old('name',$user->name)}}" />
                </div>
                 <div class="form-group">
                    <lable for="email-field">邮箱</lable>
                    <input class="form-control" type="text" name="email" id="email-field" value="{{old('email',$user->email)}}" />
                </div>
                 <div class="form-group">
                    <lable for="introduction-field">个人简介</lable>
                    <textarea class="form-control" type="text" name="introduction" id="introduction-field" row="3">
                        {{old('introduction',$user->introduction)}}
                    </textarea>
                </div>
                 <div class="well well-sm">
                   <button class="btn btn-primary" type="submit">保存</button>
                </div>
            </form>
        </div>
    </div>
@endsection