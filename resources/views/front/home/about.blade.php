@extends('front.layouts.template')

@section('title', 'laravel contact hheheh')
@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8 ">
                <!-- Featured blog post-->
                <div class="card mb-4 shadow">
                    <a href="{{ asset('front/image/gunug.jpg') }}"><img class="card-img-top featured-img"
                            src="{{ asset('front/image/gunug.jpg') }}" alt="About Laravel Blog" /></a>
                    <div class="card-body">
                        <div class="small text-muted"> {{ date('d/m/Y') }} </div>
                        <h2 class="card-title"> about Laravel Blog</h2>
                        <p class="card-text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta eveniet ratione quis officiis
                            quae perferendis enim tenetur suscipit natus quod voluptate, excepturi dolor dicta voluptas
                            rerum dolore dolorem aut nesciunt.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, rem nulla. Cum facere officiis
                            nulla alias doloremque ea quos dignissimos facilis adipisci deleniti eos reiciendis explicabo,
                            accusantium, similique ratione fugiat.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sint sequi officiis quia
                            laboriosam. Dolorem, perferendis modi porro asperiores voluptate illum autem harum recusandae
                            quisquam cupiditate. Architecto blanditiis libero sit.
                        </p>
                        <ol>
                            <li> <a href="http://youtube.com">Youtube</a> </li>
                            <li> <a href="http://facebook.com">Facebook</a> </li>
                            <li> <a href="http://instagram.com">Instagram</a> </li>
                        </ol>
                        </p>
                    </div>
                </div>

            </div>
            <!-- Side widgets-->
            @include('front.layouts.sidewidget')
        </div>
    </div>
@endsection
