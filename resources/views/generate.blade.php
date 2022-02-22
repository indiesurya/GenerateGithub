@extends('layouts.layout')
@section('container')
<div class="container mt-5 display-relative"> 
    <div class="containergenerate">     
        <div class="col-md-6 offset-md-3">
            <h2 class="heads-title" style="color:#5533ff; text-align:center;">Generate Github</h2>
            <form action="/generate" method="GET" id="generateUsername">
            <div class="form-floating">
            <center><input type="text" style="text-align: center;" id="ip2" placeholder="Username Github" name="username"/></center>
            </div>
            <center><input class="btn btn-primary" type="submit" name="generateUsername" value="Generate" ></center>
            </form>
        </div>
    </div>
    <div class="row">
        @if($data['totalUser'] == 0)
        @elseif($data['totalUser'] == -1)
            <center><h6>tidak dapat ditemukan</h6></center>
        @else 
            <div class="container-data bg-light">
                <div class="row mx-4 mt-4">
                    <div class="col-md-4 col-sm-4 col-lg-4 text-center" style="background-color:#5533ff; ">
                        <div class="m-2">
                            <img src="{{  $data['dataUser']['data']['avatar_url'] }}" alt="" class="img-fluid"> 
                        </div>
                        <span style="font-size:25px;">{{  $data['dataUser']['data']['name'] }}</span>
                        <div class="row mt-3">
                            <div class="col-md-4 ml-2">
                                <span>Follower : {{  $data['dataUser']['data']['followers'] }}</span>    
                            </div>
                            <div class="col-md-5 offset-2">
                                <span>Following : {{  $data['dataUser']['data']['following'] }}</span>
                            </div>
                        </div>
                        <div class="underline my-3" style="background-color: white"></div>
                        <span style="font-size: 20px;">Created at</span><br>
                        <span>{{  $data['dataUser']['data']['created_at'] }}</span><br>
                        <div class="underline my-3" style="background-color: white"></div>

                        @if($data['dataUser']['data']['blog']!= '')
                        <span style="font-size: 20px;">Blog</span><br>
                        <span>{{  $data['dataUser']['data']['blog'] }}</span><br>
                        <div class="underline my-3" style="background-color: white"></div>
                        @endif

                        @if($data['dataUser']['data']['company']!= '')
                        <span style="font-size: 20px;">Company</span><br>
                        <span >{{  $data['dataUser']['data']['company'] }}</span><br>
                        <div class="underline my-3" style="background-color: white"></div>
                        @endif

                        @if($data['dataUser']['data']['email']!= '')
                        <span style="font-size: 20px;">Email</span><br>
                        <span>{{  $data['dataUser']['data']['email'] }}</span><br>
                        <div class="underline my-3" style="background-color: white"></div>
                        @endif

                        @if($data['dataUser']['data']['twitter_username']!= '')
                        <span style="font-size: 20px;">Twiter Username</span><br>
                        <span>{{  $data['dataUser']['data']['twitter_username'] }}</span><br>
                        <div class="underline my-3" style="background-color: white"></div>
                        @endif
                    </div>
                    <div class="col-md-8 bg-white">
                        <div class="text-center">
                            <span style="color:black;font-size:60px;" class="mt-3 mb-2" >{{  $data['dataUser']['data']['name'] }}</span><br>
                            <span style="color:black;font-size:20px;" class="my-1">Repositories : {{  count($data['dataUser']['datarepo']) }}</span> 
                        </div>
                        <div class="underline"></div>
                        
                        @foreach($data['dataUser']['datarepo'] as $item )
                        <div class="card shadow-sm my-2">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <div class="row">
                                <p class="card-text col-md-6 mb-2">{{ $item['description'] }}</p>
                                <p class="card-text col-md-6 mb-2">Created at :{{ $item['created_at'] }}</p>
                            </div>
                            <p class="card-subtitle">{{ $item['language'] }}</p>
                        </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>       
</header>
@endsection