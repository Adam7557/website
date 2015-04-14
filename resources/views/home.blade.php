@extends('layouts.default')

@section('content')
<h1></h1>
<div class="nav nav-pills">
    <li>
        <a href="about">
            <i class="fa fa-question-circle"></i>
        </a>
    </li>
    <li>
        <a href="contact.php">
            <i class="fa fa-envelope-o"></i>
        </a>
    </li>
    <li>
        <a href="apply.php">Apply for a Loan</a>
    </li>
</div>
<div class="container">
    <div class="jumbotron">
    	<img id="icon" src="images/logo.png" />
    	<p>The Charles T. King organization provides students interested in going to college with loans at 0% interest.</p>
    </div>
</div>
@stop
