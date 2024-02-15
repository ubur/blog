@extends('Back.layouts.template')

@section('title', 'admin Dashboard')

@section('content')
    {{--  ini content  --}}

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
                    <div class="card-header">Total Article</div>
                    <div class="card-body">
                        <h3 class="card-title"> {{ $total_article }} </h3>
                        <hr>
                        <p class="card-text">
                            <a href="{{ url('article') }}" class="text-white">Views</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card text-white bg-secondary mb-3" style="max-width: 100%;">
                    <div class="card-header">Total Category</div>
                    <div class="card-body">
                        <h3 class="card-title"> {{ $total_categories }} </h3>
                        <hr>
                        <p class="card-text">
                            <a href="{{ url('categories') }}" class="text-white">Views</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h4>Latest Article</h4>
                <table class="table table-bordered table-striped ">
                    <thead>
                        <tr class="text-center">
                            <th>Nomer</th>
                            <th>Tittle</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Function</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($latest_article as $item)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $item->title }} </td>
                                <td> {{ $item->Category->name }} </td>
                                <td> {{ $item->created_at }} </td>
                                <td>
                                    <a href="{{ url('article/' . $item->id) }}" class="btn btn-sm btn-secondary">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <h4>Popular Article</h4>
                <table class="table table-bordered table-striped ">
                    <thead>
                        <tr class="text-center">
                            <th>Nomer</th>
                            <th>Tittle</th>
                            <th>Category</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($popular_article as $item)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $item->title }} </td>
                                <td> {{ $item->Category->name }} </td>
                                <td> {{ $item->views }}x </td>
                                <td>
                                    <a href="{{ url('article/' . $item->id) }}" class="btn btn-sm btn-secondary">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
