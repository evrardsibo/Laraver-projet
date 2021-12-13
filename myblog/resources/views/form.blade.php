@extends('incs.base')
@section('content')
<h1>Form</h1> 

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    
@endif --}}
<form method="POST" action="/articles">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="mail">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      
        @error('mail')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      
        @error('password')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
      
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
