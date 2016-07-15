@extends('layouts.base')

@section('title', '主页')


@section("css")
<link rel="stylesheet" href="{{ elixir('assets/css/post.css') }}">
@endsection
@section("config_js")
<script>
    config = {};
    config.current_board = "{{ $board_id }}";
    config.current_page = "{{ $page }}";
    config.current_post_id = "{{ $post_id }}";
</script>
@endsection

@section("content")
<div class="header uk-width-1-3 uk-container-center uk-text-center">
    <!-- <h1>综合板块</h1> -->
    
</div>
<div class="content">
    @include("components.post")
</div>
@endsection

@section("js")
<script src="{{ elixir('assets/js/post.js') }}"></script>
@endsection
