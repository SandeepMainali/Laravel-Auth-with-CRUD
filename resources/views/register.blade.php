@extends('layout.app')


@section('content')



<form action="{{route('register')}}" method="POST">
    @csrf

    
    <h1>Signup Here</h1>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="name" class="form-control @error('name') is-invalid @enderror" id=" " name="name" aria-describedby="nameHelp"><br>
      <span style="color: red;">@error('name') {{$message}} @enderror </span><br>
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror " id=" " name="email" aria-describedby="emailHelp"><br>
      <span style="color: red;">@error('name') {{$message}} @enderror </span><br>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id=" "><br>
      <span style="color: red;">@error('name') {{$message}} @enderror </span><br>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
    
@endsection
 
