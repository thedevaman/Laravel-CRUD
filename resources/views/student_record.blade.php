@extends('layout')

@section('student-table')
    
<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Student Name</th>
        <th scope="col">Father Name</th>
        <th scope="col">Mother Name</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Images file</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($student as $item)
            
       
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->studentname}}</td>
        <td>{{$item->fathername}}</td>
        <td>{{$item->mothername}}</td>
        <td>{{$item->dob}}</td>
        <td>{{$item->mobile}}</td>
        <td><img src="{{asset('images/'.$item->image)}}" alt="" style="height:50px;width:50px;"></td>
        <td><a href="{{route('editStudent',$item->id)}}" class="btn btn-danger"><i class="fa fa-edit"></i></a>&nbsp
            <a href="{{route('deleteStudent',$item->id)}}" class="btn btn-success"><i class="fa fa-trash"></i></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  @endsection