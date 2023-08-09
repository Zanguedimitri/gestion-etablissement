@extends('layout')

@section('content')

<form action="{{route('students.store')}}" method="post" enctype="multipart/form-date" >
    @csrf
    <div class="form-group" >
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name"/>
    </div>

    <div class="form-group" >
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email"/>
    </div>

    <div class="form-group" >
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" name="phone"/>
    </div>

    <div class="form-group" >
        <label for="section">Section:</label>
        <input type="text" class="form-control" name="section"/>
    </div>

    <div class="form-group" >
        <label for="image">Image:</label>
        <input type="file" class="form-control" name="image"/>
    </div>
        <p></p>  
        <button type="submit" class="btn btn-primary">Add Student</button> 
        <input />
</form>

@endsection()