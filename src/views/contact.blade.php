@extends('layouts.app')


@section('content')
<div class="container">
    <form action="{{ route('contact') }}" method="POST">
        <div class="form-group">
            <label for="">First Name</label>
           <input type="text" class="form-control" name="name" id="" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" id="" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="">Message</label>
            <textarea name="message" id="" class="form-control" placeholder="Write something to us"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection