@extends('layouts.app')

@section('content')

<h1 class="text-center">My lists</h1>

<div class="d-flex">
@foreach ($lists as $list)

    @if ($list->user_id == auth()->user()->id)
        <div class="card mx-3 " style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">{{$list->title}}</h5>
                <p class="card-text">{{$list->discription}}</p>
                <a href="{{ route('user.show', [auth()->user()->id, $list->id]) }}" class="btn btn-primary">edit</a>
                <form class="mt-2" action="{{route('user.delete', [auth()->user()->id, $list->id])}}"  method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="{{$list->id}}">
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>
                

            </div>
        </div>
    @endif
    
    
    
@endforeach
</div>

    
@endsection