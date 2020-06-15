@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-12 col-lg-3">
                <h3 class="text-center">Most Viewed</h3>
                <div class="row mb-3">
                    <div class="col-lg-12">
                      <a href="scrollspy.html">
                        <img src="images/img_flower.jpg" alt="" height="180px;">
                      </a>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                      <a href="scrollspy.html">
                        <img src="images/img_chania 2.jpg" alt="" height="180px;">
                      </a>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                      <a href="scrollspy.html">
                        <img src="images/img_flower2.jpg" alt="" height="180px;">
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-7">
                <h3 class="text-center">Trending news on Today</h3>
                <div class="row">
                    <div class="col-lg-12 m-1">
                      <div class="jumbotron border border-info">
                        <h2 class="text-center p-4">Communicate Easily</h2>
                      </div>
                    </div>
                </div>
                <div class="row ml-2">
                    <div class="col-xs-12 col-sm-6 col-md-3 border border-info m-1 p-2 text-center">
                        <p>test 1</p>
                    </div>
                    <div class="col-lg-8 bg-info m-1 p-2 text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>
                </div>
                <div class="row ml-2">
                    <div class="col-xs-12 col-sm-6 col-lg-3 border border-info m-1 p-2 text-center">
                        <p>test 1</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-8 bg-info m-1 p-2 text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>
                </div>
                <div class="row ml-2">
                    <div class="col-xs-12 col-sm-6 col-lg-3 border border-info m-1 p-2 text-center">
                      <p>test 1</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-8 bg-info m-1 p-2 text-center">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>
                </div>
                <div class="row ml-2">
                    <div class="col-xs-12 col-sm-6 col-lg-3 border border-info m-1 p-2 text-center">
                        <p>test 1</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-8 bg-info m-1 p-2 text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>
                </div>
                <div class="row ml-2">
                    <div class="col-xs-12 col-sm-6 col-lg-3 border border-info m-1 p-2 text-center">
                        <p>test 1</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-8 bg-info m-1 p-2 text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-2">
                <h3 class="text-center">Your Contacts</h3>
                <div class="row mb-2">
                    @foreach($users as $user)
                        <div class="col-lg-12 col-sm-12">
                            <a href="{{'/chats/id='.$user->id}}">
                                <h5 class="text-danger"><img src="images/icon.png" alt="" height="50px;">{{$user->name}}</h5><br>
                            </a>
                        </div>
                    @endforeach         
                </div>
            </div>
        </div>
    </div>
@endsection
