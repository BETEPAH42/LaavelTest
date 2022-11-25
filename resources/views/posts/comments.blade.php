{{--
@section('comments') --}}
    <!-- comments list -->
@if ($post->comments->count())
<div id="comments-wrap">
    <h3 class="heading">{{ $post->comments->count() }} COMMENTS</h3>
    {{-- {{$post->comments}} --}}
    <ol class="commentlist">
        @foreach ($comments as $comment)
        <li class="comment even thread-even depth-1" id="li-comment-1">
            <div id="comment-1" class="comment-body clearfix">
                <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />
                <div class="comment-author vcard">
                    @if ($comment['user_id'] == 0)
                        Guest
                    @else
                        User
                    @endif
                </div>
                <div class="comment-meta commentmetadata">
                    <span class="comment-date">
                        3 days ago
                    </span>
                    <span class="comment-reply-link-wrap">
                        <a class='comment-reply-link' onclick="document.getElementById('comment_parent').value = {{ $comment['id'] }} ">Reply</a>
                    </span>
                </div>
                <div class="comment-inner">
                    <p>{{ $comment['comment'] }}</p>
                </div>
             </div>
            <!-- child -->
             @if (isset($comment['respons']) and count($comment['respons']))
                <ul class='children'>
                    @foreach ($comment['respons'] as $respons)
                        <li class="comment even alt depth-2" id="li-comment-2-1">
                            <div id="comment-2" class="comment-body clearfix">
                                <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />
                                <div class="comment-author vcard">
                                @if ($respons['user_id'] == 0)
                                    Guest
                                @else
                                    User
                                @endif
                            </div>
                            <div class="comment-meta commentmetadata">
                                <span class="comment-date">1 hour ago  </span>
                            </div>
                            <div class="comment-inner">
                                <p>{{ $respons['comment'] }}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>
             @endif
            <!-- ENDS child -->
        </li>
        @endforeach
    </ol>
</div>
<!-- ENDS comments list -->

@endif

