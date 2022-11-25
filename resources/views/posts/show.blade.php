@extends('layouts.layout')
 @section('content')
 <div id="posts-list" class="single-post">

    <h2 class="page-heading"><span>BLOG</span></h2>

    <article class="format-standard">
        <div class="entry-date"><div class="number">{{ $post->getPostDay() }}</div> <div class="year">{{ $post->getPostDate() }}</div></div>
        <div class="feature-image">
            <a href="{{ asset('uploads/'.$post->thumdnail) }}" data-rel="prettyPhoto"><img src="{{ asset('uploads/'.$post->thumdnail) }}" alt="Alt text" /></a>
        </div>
        <h2  class="post-heading">{{ $post->title }}</h2>
        <div class="post-content">{{ $post->content }}
        </div>
        <div class="meta">
            <div class="categories">In <a href="#">{{ $post->category->title }}</a></div>
            <div class="comments"><a href="#">{{$post->comments->count() }} comments </a></div>
            <div class="user"><a href="#">By admin</a></div>
        </div>

        @include('posts.comments')

        <!-- Respond -->
        <div id="respond">

            <div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></div>
            <form action="{{ route('comment.store',['post_id'=> $post->id]) }}" method="post" id="commentform">
                @csrf
                <h3 class="heading">LEAVE A REPLY</h3>
                <input type="text" name="user" id="author" value="" tabindex="1" />
                <label for="author">Name <small>*</small></label><br/>

                <textarea name="comment" id="comment"  tabindex="4"></textarea>

                <p><input name="submit" type="submit" id="submit" tabindex="5" value="Post" /></p>
                <input type='hidden' name='user_id' value='
                @if (Auth::check())
                    {{ Auth::user()->id }}
                @else
                    0
                @endif
                ' id='user_id' />
                <input type='hidden' name='post_id' value='{{ $post->id }}' id='post_id' />
                <input type='hidden' name='rescomment_id' id='comment_parent' value='0' />
            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
        <div class="clearfix"></div>
        <!-- ENDS Respond -->

        </article>

    </div>
    <!-- ENDS posts list -->

 @endsection
 @extends('posts.sidebar')
