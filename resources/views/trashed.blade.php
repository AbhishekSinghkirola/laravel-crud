@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4> Trashed Posts</h4>
                <div>
                    <a href="#" class="btn btn-secondary">Back</a>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="https://picsum.photos/200" alt="" width="80px">
                            </td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur facere quia molestias
                                asperiores vitae non iste quae illum,.</td>
                            <td>News</td>
                            <td>2-5-23</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Show</a>
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
