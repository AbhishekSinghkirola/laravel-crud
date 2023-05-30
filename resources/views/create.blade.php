@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4> Create Posts</h4>
                <div>
                    <a href="#" class="btn btn-secondary">Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Category</label>
                        <select name="" id="" class="form-control">
                            <option value="">Test 1</option>
                            <option value="">Test 2</option>
                            <option value="">Test 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <textarea name="" id="" class="form-control" cols="30" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
