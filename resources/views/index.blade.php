@extends('layouts.layout')
@section('container')
<div class="container">      
    <div class="row space-100">
        <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
            <h2 class="head-title">Generate Github</h2>
            <p>Find a professional programmer's github account and we'll generate it on this site.</p>
            <div class="header-button">
                <a href="#business-plan" rel="nofollow" target="_blank" class="btn btn-border-filled page-scroll    ">About</a>
                <a href="/generate" rel="nofollow" target="_blank" class="btn btn-border page-scroll">Generate</a>
            </div>
            </div>
        </div>
        {{-- <div class="col-lg-6 col-md-12 col-xs-12 p-0">
            <div class="intro-img">
            <img src="img/laptop.png" alt="">
            </div>            
        </div> --}}
    </div> 
</div>             
</header>

<!-- Business Plan Section Start -->
<section id="about">
    <div class="container mt-5">
        <br><br><br> 
        <div class="row">
            <div class="col-lg-6 col-md-12 pl-0 pt-70 pr-5">
                <div class="business-item-img">
                <img src="img/business/business-img.png" class="img-fluid" alt="">
                </div>
            </div>
        <div class="col-lg-6 col-md-12 pl-4">
            <div class="business-item-info mt-5">
                <h3>Generate Github</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br> commodo consequat. Duis aute irure dolor in reprehenderit in voluptate <br> velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br> commodo consequat. Duis aute irure dolor in reprehenderit in voluptate <br> velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <br>
                <a class="btn btn-common" href="/generate">Generate</a>
            </div>
        </div>
    </div>
</section>
@endsection