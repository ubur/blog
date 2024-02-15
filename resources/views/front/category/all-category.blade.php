@extends('front.layouts.template')


@section('content')
    <div class="container">
        <div class="row">
            @foreach ($category as $item)
                <div class="col-lg-3 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="text-center">
                                <span>
                                    <a href="{{ url('category/' . $item->slug) }}" class="text-decoration-none text-dark">

                                        <i class="fas fa-folder fa-5x"></i>
                                    </a>

                                </span>
                                <h5 class="card-title mt-2">
                                    <a href="{{ url('category/' . $item->slug) }}"
                                        class="text-decoration-none text-dark"></a>
                                    {{ $item->name }} ({{ $item->articles_count }})
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
