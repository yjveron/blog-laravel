@extends('main')

@section('title', '| Contact Us')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Me</h1>
            <hr>
            <form>
                <div class="form-group">
                    <label name="email">Email: </label>
                    <input id="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label name="subject">Subject: </label>
                    <input id="subject" class="form-control" name="subject">
                </div>
                <div class="form-group">
                    <label name="message">Message: </label>
                    <textarea id="message" class="form-control" name="message">Type your message here...</textarea>
                </div>

                <input type="submit" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>

@endsection