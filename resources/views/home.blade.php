@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <img id="icon" src="images/logo.png" />   <!--We'll turn this jumbotron into a slider later-->
    </div>
    
    <div class="row">
        <a href="#apply">
            <div class="col-md-3 panel" id="apply">
              <h3><center>apply</center></h3>     
            </div>
        </a>
        
        <a href="{{route('about')}}">
            <div class="col-md-3 panel" id="about">
                <!--<img src="images/favicon.png">-->
                <h3><center>about</center></h3>
            </div>
        </a>
        
        <a href="{{route('contact')}}">       
            <div class="col-md-3 panel" id="contact">
                <h3><center>contact</center></h3>
            </div>
        </a>
        
        <a href="#status">    
            <div class="col-md-3 panel" id="status">
                <h3><center>loan status</center></h3>
            </div>
        </a>
    </div>
@stop
