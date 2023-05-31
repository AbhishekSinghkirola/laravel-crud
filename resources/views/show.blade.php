@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4> show Post</h4>
                <div>
                    <a href="{{ route('posts.create') }}" class="btn btn-success">Create</a>
                    <a href="#" class="btn btn-warning">Trashed</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered border-3 border-dark">
                    <tbody>
                        {{-- <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>
                                <img src="{{ asset($post->image) }}" alt="" width="80px">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->category_id }}</td>
                            <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Show</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr> --}}

                        <tr>
                            <td>Id</td>
                            <td>{{ $post->id }}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td> <img src="{{ asset($post->image) }}" alt="" width="300px"></td>
                        </tr>
                        <tr>
                            <td>title</td>
                            <td>{{ $post->title }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $post->description }}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{ $post->category_id }}</td>
                        </tr>
                        <tr>
                            <td>Publish Date</td>
                            <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
