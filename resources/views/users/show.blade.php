@extends('layouts.app')
@section('title',$user->name.'的个人中心')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600/" width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h4><strong>个人简介</strong></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus mollitia, nisi voluptatem rerum quas enim expedita at tenetur libero laboriosam tempore deserunt sapiente eaque dolore cum recusandae distinctio voluptates. Impedit!</p>
                            <hr>
                            <h4><strong>注册于</strong></h4>
                            <p>January 01 1901</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-log-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span>
                        <h1 class="panel-title pull-left" style="font-size:30px">{{$user->name}}</h1>
                    </span>
                </div>
            </div>
            <!-- 用户发布的内容 -->
            <div class="panel panel-default">
                <div class="panel-body">暂无数据</div>
            </div>
        </div>
    </div>
@stop