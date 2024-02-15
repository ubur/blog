@extends('Back.layouts.template')



// ini mengunakan crud biasa
@section('title', 'update Artilce')

@section('content')
    {{--  ini content  --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Update Article</h1>
        </div>
        <div class="mt-3">


            @if ($errors->any())
                <div class="my-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <form action="{{ url('article/' . $article->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <input type="hidden" name="oldImg" value="{{ $article->img }}">

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}"
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="categori">Categori</label>
                            <select name="category_id" id="category" class="form-control">
                                @foreach ($categories as $item)
                                    @if ($item->id == $article->category_id)
                                        <option value="{{ $item->id }}" selected> {{ $item->name }} </option>
                                    @else
                                        <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="desc">Description</label>
                    <textarea name="desc" id="myEditor" cols="30" rows="10" class="form-control">{{ old('desc', $article->desc) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="img">Upload Picture <small>(max 2mb)</small> </label>
                    <input type="file" name="img" id="img" class="form-control">
                    <div class="mt-1">
                        <small>old Image</small> <br>
                        <img src="{{ asset('storage/back/' . $article->img) }}" alt=""
                            class="img-thumbnail img-preview" width="100px">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">

                                <option value="1" {{ $article->status == 1 ? 'selected' : null }}>Publish</option>
                                <option value="0" {{ $article->status == 0 ? 'selected' : null }}>Private </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="publish_date">Publish Date</label>
                            <input type="date" id="publish_date" name="publish_date" class="form-control"
                                value="{{ old('publish_date', $article->publish_date) }}">

                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{ url('article') }}" class="btn btn-secondary text-dark">Back</a>
                </div>

            </form>


        </div>
        {{--  modal created  --}}

    </main>
@endsection


@push('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowserUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token',
            clipboard_handleImages: false
        }
    </script>

    <script>
        CKEDITOR.replace('myEditor', options);
    </script>
@endpush
