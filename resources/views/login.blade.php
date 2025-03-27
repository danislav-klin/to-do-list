@extends('layouts.app')

@section('content')

<form class="w-50 mx-auto">
    <div class="mb-3">
      <label for="email" class="form-label">login</label>
      <input name="email" type="email" class="form-control" id="email">
      
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection