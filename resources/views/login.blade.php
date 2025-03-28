@extends('layouts.app')

@section('content')

<form class="w-50 mx-auto" method="POST" action="{{ route('to_login') }}">
  @csrf
      @error('login')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    <div class="mb-3">
      <label for="login" class="form-label">login</label>
      <input name="login" type="text" class="form-control" id="login">
      
    </div>
        @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection