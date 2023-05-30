@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4> All Posts</h4>
                <div>
                    <a href="{{ route('posts.create') }}" class="btn btn-success">Create</a>
                    <a href="#" class="btn btn-warning">Trashed</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered border-3 border-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width: 10%">Image</th>
                            <th scope="col" style="width: 20%">Title</th>
                            <th scope="col" style="width: 30%">Description</th>
                            <th scope="col" style="width: 10%">Category</th>
                            <th scope="col" style="width: 10%">Publish Date</th>
                            <th scope="col" style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <img src="{{ asset('storage/    ' . $post->image) }}" alt="" width="80px">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->category_id }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success">Show</a>
                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
