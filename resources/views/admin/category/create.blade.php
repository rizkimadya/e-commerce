@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Category
                    <a href="{{ url('admin/category') }}" class="btn btn-primary float-end text-light fw-bold">Back</a>
                </h3>
            </div>

            <div class="card-body">
                <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Masukkan slug">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Masukkan description">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="Masukkan meta title">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="meta_keyword" class="form-label">Meta Keyword</label>
                            <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" placeholder="Masukkan meta keyword">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <input type="text" name="meta_description" id="meta_description" class="form-control" placeholder="Masukkan description">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label> <br>
                            <input type="checkbox" name="status" id="status">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end text-light fw-bold">Save</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
