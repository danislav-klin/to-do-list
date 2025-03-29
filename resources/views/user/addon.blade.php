@extends('layouts.app')

@section('content')
<h1 class="text-center">add a new task</h1>

<form class="w-50 mx-auto" method="POST" action="{{ route('user.store', auth()->user()->id) }}">
    @csrf
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input name="title" type="text" class="form-control" id="title">
        
      </div>
    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
          @error('text')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="mb-3">
            <label for="text" class="form-label">text</label>
            <textarea name="text" class="form-control" id="text" rows="6"></textarea>
          </div>
      
      <button type="submit" class="btn btn-primary">save</button>
  </form>
    
@endsection