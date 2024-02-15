@extends('Back.layouts.template')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endpush

// ini mengunakan crud biasa
@section('title', 'Admin Detail-article')

@section('content')
    {{--  ini content  --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Detail Article</h1>
        </div>
        <div class="mt-3">


            <table class="table table-striped table-bordered">
                <tr>
                    <th width="250px">Tittle</th>
                    <td>{{ $article->title }} </td>
                </tr>
                <tr>
                    <th>Categori</th>
                    <td>{{ $article->Category->name }} </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{!! $article->desc !!} </td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        <a href="{{ asset('storage/back/' . $article->img) }}" target="_blank" rel="noopener noreferrer"
                            class="gambar">
                            <img src="{{ asset('storage/back/' . $article->img) }}" alt="" class="thumbnail">
                        </a>

                    </td>
                </tr>
                <tr>
                    <th>Views</th>
                    <td>{{ $article->views }}x </td>
                </tr>

                <tr>
                    <th>Status</th>
                    @if ($article->status == 1)
                        <td>
                            <span class="badge bg-success">Published</span>
                        </td>
                    @else
                        <td>
                            <span class="badge bg-danger">Private</span>
                        </td>
                    @endif
                </tr>

                <tr>
                    <th>Publish Date</th>
                    <td>{{ $article->publish_date }} </td>
                </tr>

                <tr>
                    <th>Writer</th>
                    <td>{{ $article->user->name }} </td>
                </tr>



            </table>
            <div class="float-right">
                <a href="{{ url('article') }}" class="btn btn-secondary text-dark">Back</a>
            </div>
        </div>
        {{--  modal created  --}}

    </main>
@endsection
