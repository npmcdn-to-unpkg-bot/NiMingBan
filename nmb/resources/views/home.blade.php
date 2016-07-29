@extends('layouts.base')

@section('title', '主页')

@section("config_js")
<script>
    config = {};
</script>
@endsection



@section("content")
<div class="uk-width-1-1 uk-text-center">
    <article class="uk-article">
        <h3 class="uk-article-title">
            Welcom to here
        </h3>
        <p class="uk-article-meta">
            欢迎来到Makoto的匿名板
        </p>
        <p>
            这个小项目断断续续的做了2个月
        </p>
        <p>整个项目使用的Laravel构建</p>
        <p>使用MySQL作为后端数据库存储</p>
        <p>前端使用了Vue和UiKit</p>
        <p>Vue是个很棒的MVVM框架</p>
        <p>无论简单和复杂的应用</p>
        <p>都很适合使用Vue来开发</p>
        <p>UiKit提供了相当多的组件</p>
        <p>同时自身也保持了一个相对轻量的体积，赞</p>
        <p>Laravel以及PHP语言，做了很多事情</p>
        <p>让Web开发变得如此的简介和遍历</p>
        <p>Laravel框架恐怕是我见过的用的最舒服的框架了</p>
        <p>无论前端后端，各种功能，都考虑到了</p>
        <p>棒！超级棒！Laravel万岁！</p>
        <p>
            <i class="uk-icon-justify uk-icon-github"></i>
            <a href="https://github.com/fuxinlei/NiMingBan" >Project Sources</a>
        </p>
    </article>
</div>
@endsection
