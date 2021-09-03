@extends('frontend.layout.master')

@section('main')

    <section class="tts-blog-details">
        <section class="tts-blog-details-item">
            <section class="tts-blog-details-box">
                <div class="container">
                    <div class="tts-blog-details-box-content">
                        <div class="tts-home-title text-center">
                        <h2 class="mb-0">{{ $post->name }}</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 425 85">
                            <image id="frame"
                                xlink:href="data:image/png;base64,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" />
                        </svg>
                        </div>
                        <div class="tts-blog-details-content">
                            {!! $post->content !!}
                            <img src="/storage/{{ $post->image }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>

@endsection
