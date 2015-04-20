@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <img id="icon" src="images/logo.png" />   <!--We'll turn this jumbotron into a slider w/ latest updates later-->
    </div>
    
    <div class="row">
        <a href="#apply">
            <div class="col-md-3 pizza" id="apply">
              <h3><center>apply</center></h3>     
            </div>
        </a>
        
        <a href="{{route('about')}}">
            <div class="col-md-3 pizza" id="about">
                <!--<img src="images/favicon.png">-->
                <h3><center>about</center></h3>
            </div>
        </a>
        
        <a href="{{route('contact')}}">       
            <div class="col-md-3 pizza" id="contact">
                <h3><center>contact</center></h3>
            </div>
        </a>
        
        <a href="#status">    
            <div class="col-md-3 pizza" id="status">
                <h3><center>loan status</center></h3>
            </div>
        </a>
    </div>
@stop
