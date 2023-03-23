@extends("layouts.templates")
<head>
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
</head>
@section("content")
<!-- 
    <h1>{{ $post->title }}</h1>
    <p>
        {{ $post->content }}
    </p> -->
    <div class="content-wrapper">
    <section class="jumbotron">
        <h1>{{ $post->title }}</h1>
        <div class="container d-flex justify-content-center align-items-center">
            <p class="text-center">{{ $post->content }}</p>
        </div>
    </section>
</div>
@endsection

@push("custom_css")
<style>
    .centering {
        display: flex;
        justify-content: center;
    }
</style>
@endpush