@extends('front.layouts.template')


@section('content')
    <div class="container">
        <div class="mb-3">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Enter search term..." />
                    <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                </div>
            </form>
        </div>

        <p>Showing category with keyword : {{ $category }} </p>

        <div class="row">
            @forelse ($articles as $item)
                <div class="col-lg-4">
                    <div class="card mb-4 " data-aos="flip-up">
                        <a href="{{ url('p/' . $item->slug) }}"><img class="card-img-top post-img"
                                src="{{ asset('storage/back/' . $item->img) }}" alt="..." /></a>
                        <div class="card-body card-height">
                            <div class="small text-muted">{{ $item->created_at->format('d-m-Y') }} | {{ $item->User->name }}
                                |
                                <a href="{{ url('category/' . $item->Category->slug) }}">
                                    {{ $item->Category->name }}</a>
                            </div>

                            <h2 class="card-title h4">{{ $item->title }}</h2>
                            <p class="card-text">{{ Str::limit(strip_tags($item->desc), 200, '...') }}</p>
                            <a class="btn btn-primary" href="{{ url('p/' . $item->slug) }}">Read more
                                →</a>
                        </div>
                    </div>
                </div>
            @empty
                <h3>Not Found</h3>
            @endforelse
        </div>
    </div>
@endsection
