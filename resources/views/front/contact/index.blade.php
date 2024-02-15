@extends('front.layouts.template')

@section('title', 'laravel blog hheheh')
@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8 " data-aos="zoom-in">
                <!-- Featured blog post-->
                <div class="card mb-4 shadow">

                    <div class="text-center">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15937.895079732541!2d104.7323043763109!3d-2.965959051185539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b760f4161aa63%3A0xbe8515124060279a!2sMonoloog%20Hotel%20Palembang!5e0!3m2!1sid!2sid!4v1706857941332!5m2!1sid!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="card-body">
                        <div class="small text-muted"> {{ date('d/m/Y') }} </div>
                        <h2 class="card-title">contact Laravel Blog</h2>
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
                            <li> phone : 123456789 </li>
                            <li> email :yks@gmail.com </li>
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
