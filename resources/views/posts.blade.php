@extends('layouts.main')
@section('content')
    <div>
        this is post page
    </div>
    @foreach ($posts as $post)
<div>{{ $post->title }}</div>
<div>{{ $post->content }}</div>
<div>{{ $post->likes }}</div>
    @endforeach
@endsection