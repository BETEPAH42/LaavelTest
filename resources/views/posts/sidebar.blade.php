@section('sidebar_post')
<aside id="sidebar">

    <ul>
        <li class="block">
            <h4>Категории</h4>
            <ul>
            @foreach ($categories as $category)
            <li class="cat-item"><a href="{{ route('category.single',['slug'=>$category->slug]) }}" title="View all posts">{{ $category->title }} ({{$category->posts_count}})</a></li>
            @endforeach
            </ul>
        </li>

        {{-- <li class="block">
            <h4>ARCHIVES</h4>
            <ul>
                <li class="cat-item"><a href="#" title="View all posts">January</a></li>
                <li class="cat-item"><a href="#" title="View all posts">February</a></li>
                <li class="cat-item"><a href="#" title="View all posts">March</a></li>
            </ul>
        </li> --}}

    </ul>

    <em id="corner"></em>
</aside>
@endsection
