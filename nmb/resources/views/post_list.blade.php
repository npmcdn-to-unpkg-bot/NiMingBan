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
<div class="header">
    <h3>综合板块</h3>
    <h4>游乐场哦~</h4>
    <p>
        我来看看多行文字~
    <p/>
    <p>
        案发发呆~sadfafasdf
        打发的是范德萨发的发
        adfsdafafasdfasfdsa
    </p>
</div>
<div class="content">
    @include("components.post")
</div>
@endsection

@section("js")
<script src="{{ elixir('assets/js/post.js') }}"></script>
@endsection
