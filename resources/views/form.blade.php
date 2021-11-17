@extends('layout')

@section('form')
<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">

<form method="post" action="{{route('insertStudent')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Student Name</label>
      <input type="text" class="form-control" placeholder="Enter Student Name" name="studentname">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Father Name</label>
      <input type="text" class="form-control" placeholder="Enter Father Name" name="fathername">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mother Name</label>
        <input type="text" class="form-control" placeholder="Enter Mother Name" name="mothername">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Date of Birth</label>
        <input type="date" class="form-control" placeholder="Enter D.O.B." name="dob">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contact No.</label>
        <input type="number" class="form-control" placeholder="Enter Contact No." name="mobile">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Student Image</label>
        <input type="file" class="form-control" name="image">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
</div>
</div>
    
@endsection