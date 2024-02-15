@extends('front.layouts.template')

@section('title', $article->title)

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8" data-aos="fade-up">
                <!-- Featured blog post-->
                <div class="card mb-4 ">
                    <a href="{{ url('p/' . $article->slug) }} "><img class="card-img-top featured-img"
                            src="{{ asset('storage/back/' . $article->img) }}" alt="{{ $article->title }}" /> </a>
                    <div class="card-body">
                        <div class="small text-muted">
                            <span class="ml-2">{{ $article->created_at->format('d-m-Y') }}</span>
                            <span class="ml-2"> {{ $article->User->name }} <a href="{{ $article->Category->name }}"></a>
                            </span>
                            <span class="ml-2">{{ $article->views }}</span>
                        </div>
                        <h2 class="card-title"> {{ $article->title }} </h2>
                        <p class="card-text"> {!! $article->desc !!} </p>

                        <div class="mt-5">
                            <p style="font-size: 15px">Share This</p>
                            <a class="btn btn-primary" href="https://www.facebook.com/sharer.php?u={{ url()->current() }}"
                                target="_blank"> <i class="fab fa-facebook"></i> Facebook</a>
                            <a href="https://api.whatsapp.com/send?text={{ url()->current() }}" class="btn btn-success"
                                target="_blank"> <i class="fab fa-whatsapp"></i> WhatsApp</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Side widgets-->
            @include('front.layouts.sidewidget')
        </div>
    </div>
@endsection
