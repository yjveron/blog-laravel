@extends('main')

@section('content')
    <div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to My Blog!</h1>
            <p class="lead">Thank you for visiting. This is my first website built with Laravel.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Latest post</a></p>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-8">
        <div class="post">
            <h3>Post Title</h3>
            <p>Consequat ea aute irure pariatur tempor ut commodo velit tempor duis quis consequat duis dolore.
            </p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Consequat ea aute irure pariatur tempor ut commodo velit tempor duis quis consequat duis dolore.
            </p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Consequat ea aute irure pariatur tempor ut commodo velit tempor duis quis consequat duis dolore.
            </p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
    </div>
@endsection