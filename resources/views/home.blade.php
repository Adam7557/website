@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <img id="slider-logo" src="images/logo.png" />   <!--We'll turn this jumbotron into a slider later-->
    </div>
    
    <div class="row">
        <a href="#apply">
            <div class="col-md-3 section" id="apply">
              <h3><center>apply</center></h3>     
            </div>
        </a>
        
        <a href="{{route('about')}}">
            <div class="col-md-3 section" id="about">
                <!--<img src="images/favicon.png">-->
                <h3><center>about</center></h3>
            </div>
        </a>
        
        <a href="{{route('contact')}}">       
            <div class="col-md-3 section" id="contact">
                <h3><center>contact</center></h3>
            </div>
        </a>
        
        <a href="#status">    
            <div class="col-md-3 section" id="status">
                <h3><center>loan status</center></h3>
            </div>
        </a>
    </div>
@stop
