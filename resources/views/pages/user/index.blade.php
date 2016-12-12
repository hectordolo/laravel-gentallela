@extends('layouts.app')

@section('title')
    User Profile
@endsection

@section('header-scripts')
    <style type="text/css">
        #user-image {
            border-radius: 25px;
            width: 250px;
            height: 250px;
        }
    </style>
@endsection

@section('page-header')

@endsection

@section('page-content')

    @include('flash::message')

    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h3>User Profile</h3>
                </div>
                <div class="x_content">

                    <div class="row">
                        <div class="col-md-3 col-xs-12">

                            <img id='user-image' src="{{route('user.image')}}" alt="Profile Pic" data-toggle="modal" data-target="#imageModal">

                            <div id="imageModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h5 class="modal-title">Upload New Picture?</h5>
                                        </div>
                                        <div class="modal-body">
                                            {!! Form::open(['route' => 'user.upload', 'files'=>'true', 'class' => 'form-horizontal form-label-left', 'data-parsley-validate', 'role'=>'form']) !!}
                                            <input id="file" type="file" name="file">

                                            <br>

                                            <a href="{{route('user.delete_picture')}}" type="button" class="btn btn-default btn-sm" title="Delete File"><i class="fa fa-trash"></i></a>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                            <button id="submit" name="submit" type="submit" class="btn btn-success">Submit</button>
                                            {!! Form::close() !!}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <h3>{{$user->lname}}, {{$user->fname}}</h3>
                            <h4>{{$user->username}}</h4>
                            <h4>{{isset($user->email)?$user->email:''}}</h4>

                            <div class="clearfix"></div>

                            <h5>{{isset($user->position)?$user->position:''}}</h5>
                        </div>

                        <div class="col-md-9 col-xs-12">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
