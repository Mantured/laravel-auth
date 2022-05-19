@extends('layouts.app')

@section('content')

<div class="my-height overflow-scroll">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 show-height">
                <div class="card h-100">
                    <img src="{{$post->image_url}}" class="card-img-top" alt="{{$post->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{$post->updated_at}}</small>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
