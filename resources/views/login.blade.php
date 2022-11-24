    @extends('layout.app')


@section('content')
{{-- <div class="container"> --}}
  @if(Session::has('fail'))
  <div class="alert alert-danger" role="alert">
    {{Session::get('fail')}}
  </div>

  @endif



<form action="{{route('login')}}" method="POST">
    @csrf

  
    <h1>Login Page</h1>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control " id="exampleInputEmail1" name="email"aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control " name="password" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
    
@endsection
 
