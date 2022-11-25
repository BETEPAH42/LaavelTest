@extends('layouts.layout')

@section('content')
    <div id="posts-list">

    <h2 class="page-heading"><span>{{ $category->title }}</span></h2>

@if ($posts->count())
        @foreach ($posts as $post)
       <article class="format-standard">
        <div class="entry-date"><div class="number">{{ $post->getPostDay() }}</div> <div class="year">{{ $post->getPostDate() }}</div></div>
        <div class="feature-image">
            <a href="uploads/{{$post->thumdnail}}" data-rel="prettyPhoto">
                <img src="{{ asset('uploads/'.$post->thumdnail) }}" alt="Alt text" /></a>
        </div>
        <h2  class="post-heading"><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{$post->title}}</a></h2>
        <div class="excerpt">{!! $post->description !!}
        </div>
        <a href="{{ route('post.single',['slug'=>$post->slug]) }}" class="read-more">continue &#8594;</a>
        <div class="meta">
            <div class="categories">In <a href="{{ route('category.single',['slug'=>$category->slug]) }}">{{$category->title}}</a></div>
            <div class="comments">{{ $post->comments->count() }} comments </div>
            <div class="user"><a href="#">By admin</a></div>
        </div>
    </article>
        <!-- page-navigation -->

    @endforeach
        <div class="page-navigation clearfix">
            {{ $posts->links('layouts.paginator') }}
        </div>
@else
    Статей нет
@endif



</div>
@endsection

@extends('posts.sidebar')
