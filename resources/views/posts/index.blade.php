@extends('layouts.layout')

@section('slider')
				<!-- slider holder -->
				<div id="slider-holder" class="clearfix">

					<!-- slider -->
			        <div class="flexslider home-slider">
					  <ul class="slides">
					    <li>
					      <img src="{{ asset('assets/front/img/slides/01.jpg') }}" alt="alt text" />
					    </li>
					    <li>
					      <img src="{{ asset('assets/front/img/slides/02.jpg') }}" alt="alt text" />
					      <p class="flex-caption">Pellentesque habitant morbi  feugiat vitae.</p>
					    </li>
					    <li>
					      <img src="{{ asset('assets/front/img/slides/03.jpg') }}" alt="alt text" />
					    </li>
					  </ul>
					</div>
		        	<!-- ENDS slider -->

		        	<div class="home-slider-clearfix "></div>

		        	<!-- Headline -->
		        	<div id="headline">
		        		<h1>ОТЗЫВЧИВЫЙ, СВОБОДНЫЙ И ГЛАДКИЙ</h1>
		        		<p>Zeni - это БЕСПЛАТНЫЙ адаптивный шаблон HTML5. Надеюсь, вам понравится использовать его так же, как мне понравилось его создавать. Я планирую выпустить версию WordPress довольно скоро. </p>
		        		<em id="corner"></em>
		        	</div>
		        	<!-- ENDS headline -->


				</div>
				<!-- ENDS slider holder -->
@endsection


@section('content')
				<!-- home-block -->
	        	<div class="home-block" >
	        		<h2 class="home-block-heading"><span>Статьи</span></h2>
	        		<div class="one-third-thumbs clearfix" >
	        			@foreach ($posts as $post)
                            <figure
                            @if ($loop->iteration == 3 or $loop->last)
                                class="last"
                            @endif
                            >
                                <figcaption>
                                    <strong>{{ $post->title }}</strong>
                                    <span>{{ $post->description }}</span>
                                    <em>{{ $post->getPostDateIndex() }}</em>
                                    <a href="single.html" class="opener"></a>
                                </figcaption>

                                <a href="{{ route('post.single',['slug'=> $post->slug]) }}"  class="thumb"><img src="{{ asset('uploads/'.$post->thumdnail) }}" alt="Alt text" /></a>
                            </figure>
                        @endforeach

	        		</div>
	        	</div>
@endsection
