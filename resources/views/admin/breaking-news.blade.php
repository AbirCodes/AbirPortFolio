@extends('admin.layouts.dashboard')

@section('title', 'Breaking News')

@section('admin-content')
<div class="card">
    <h2>Breaking News</h2>
    <div class="body">
        @foreach ($breakingNews as $news)
            <div class="item">
                <form method="POST" action="{{ route('admin.content.breaking-news.update', $news) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid">
                        <div>
                            <label>Date</label>
                            <input type="text" name="news_date" value="{{ $news->news_date }}">
                        </div>
                        <div>
                            <label>Sort Order</label>
                            <input type="number" name="sort_order" value="{{ $news->sort_order }}">
                        </div>
                    </div>
                    <label>Title</label>
                    <input type="text" name="title" value="{{ $news->title }}">
                    <label>URL</label>
                    <input type="text" name="url" value="{{ $news->url }}">
                    <div class="grid">
                        <div>
                            <label>Image Path (public path)</label>
                            <input type="text" name="image_path" value="{{ $news->image_path }}">
                        </div>
                        <div>
                            <label>Upload Image</label>
                            <input type="file" name="image_upload" accept="image/*">
                        </div>
                    </div>
                    <div class="row-actions">
                        <button class="btn btn-primary" type="submit">Update</button>
                </form>
                <form method="POST" action="{{ route('admin.content.breaking-news.delete', $news) }}" onsubmit="return confirm('Delete this item?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                    </div>
            </div>
        @endforeach

        <div class="item">
            <h3>Add New</h3>
            <form method="POST" action="{{ route('admin.content.breaking-news.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid">
                    <div>
                        <label>Date</label>
                        <input type="text" name="news_date">
                    </div>
                    <div>
                        <label>Sort Order</label>
                        <input type="number" name="sort_order" value="0">
                    </div>
                </div>
                <label>Title</label>
                <input type="text" name="title">
                <label>URL</label>
                <input type="text" name="url" value="#">
                <div class="grid">
                    <div>
                        <label>Image Path (public path)</label>
                        <input type="text" name="image_path">
                    </div>
                    <div>
                        <label>Upload Image</label>
                        <input type="file" name="image_upload" accept="image/*">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Add Breaking News</button>
            </form>
        </div>
    </div>
</div>
@endsection
