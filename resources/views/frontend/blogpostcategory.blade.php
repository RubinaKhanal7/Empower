@extends('frontend.layouts.master')
@section('content')
<section class="sample_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 order-1 order-md-1">
                    <img class="sample_page_image"
                        src="{{ asset('uploads/blogpostcategory/' . $blogpostcategory->image) }}" alt="Country Image">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 order-2 order-md-3 sample_page_content">
                    <span class="md-text greenhighlight">{{ $blogpostcategory->title }}</span>
                    {!! app()->getLocale() === 'ne' ? $blogpostcategory->content_ne : $blogpostcategory->content !!}
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 order-3 order-md-2 sample_page_list mt-2 mb-2 p-4">
                    <h3 class="">Our Blogs</h3>
                    <ul>
                        @foreach ($listblogs as $blog)
                        <li class="sm-text-bd">
                                <a href="{{ route('SingleBlogpostcategory', ['slug' => $blog->slug]) }}">
                                    {{ app()->getLocale() === 'ne' ? $blog->title_ne : $blog->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection