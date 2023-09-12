@extends('layouts.app')

@section('main_section')
<div class="row">
    <div class="col-md-6">
        <form method="post" action="{{ route('contact.store') }}">
            @csrf
            <div class="form-group">
                <label >First Name</label>
                <input type="text" name="fname" class="form-control"  placeholder="Enter Fname">
                
            </div>
            <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" class="form-control"  placeholder="Enter LName">
            
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="description">Description</label>                      
              <textarea class="form-control" name="description" id="description" rows="5" cols="20"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection