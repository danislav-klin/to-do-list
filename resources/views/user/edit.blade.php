@extends('layouts.app')

@section('content')

<h1 class="text-center">Edit list</h1>


<form class="w-50 mx-auto" method="POST" action="{{ route('user.update', [auth()->user()->id, $list->id] ) }}">
    @method('PUT')
    @csrf
    @session('success')
    <div class="alert alert-success" role="alert">
        {{$value}}
    </div>
    @endsession
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input name="title" type="text" class="form-control" id="title" value="{{$list->title}}">
        
      </div>
    <input type="hidden" name="id" value="{{$list->id}}">
          @error('text')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="mb-3">
            <label for="text" class="form-label">text</label>
            <textarea name="text" class="form-control" id="text" rows="6" >{{$list->discription}}</textarea>
          </div>
      
      <button type="submit" class="btn btn-primary">update</button>
      <a  class="btn btn-danger">delete</a>
      <a href="{{route('user.room')}}" class="btn btn-secondary">exit</a>

  </form>

    
@endsection