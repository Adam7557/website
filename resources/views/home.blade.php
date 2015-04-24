@extends('layouts.default')

@section('content')
    <div class="jumbotron jumbotron-home">
        <img id="slider-logo" src="images/logo.png" /> 
        <!--We'll turn this jumbotron into a slider later-->
        <p>The Charles T. King Student Loan fund provides interest-free loans to Millburn Township students.</p>
    </div>
    
    <div class="row">
        
        
        <a href="{{route('about')}}">
            <div class="col-md-4 section" id="about">
                <!--<img src="images/favicon.png">-->
                <h3><center>about</center></h3>
            </div>
        </a>
        
        <a href="{{ route('apply') }}">
            <div class="col-md-4 section" id="apply">
              <h3><center>apply</center></h3>     
            </div>
        </a>
        
        <a href="{{route('contact')}}">       
            <div class="col-md-4 section" id="contact">
                <h3><center>contact</center></h3>
            </div>
        </a>
        
        
    </div>
    
    <script src="/scripts/home.js"></script>
@stop
