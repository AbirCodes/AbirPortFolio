@extends('admin.layouts.dashboard')

@section('title', 'Recent Post Links')

@section('admin-content')
<div class="card">
    <h2>Recent Post Links</h2>
    <div class="body">
        @foreach ($recentPostLinks as $link)
            <div class="item">
                <form method="POST" action="{{ route('admin.content.recent-post-links.update', $link) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid">
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $link->title }}">
                        </div>
                        <div>
                            <label>URL</label>
                            <input type="text" name="url" value="{{ $link->url }}">
                        </div>
                    </div>
                    <div class="grid">
                        <div>
                            <label>Image Path (public path)</label>
                            <input type="text" name="image_path" value="{{ $link->image_path }}">
                        </div>
                        <div>
                            <label>Upload Image</label>
                            <input type="file" name="image_upload" accept="image/*">
                        </div>
                    </div>
                    <label>Sort Order</label>
                    <input type="number" name="sort_order" value="{{ $link->sort_order }}">
                    <div class="row-actions">
                        <button class="btn btn-primary" type="submit">Update</button>
                </form>
                <form method="POST" action="{{ route('admin.content.recent-post-links.delete', $link) }}" onsubmit="return confirm('Delete this link?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                    </div>
            </div>
        @endforeach

        <div class="item">
            <h3>Add New</h3>
            <form method="POST" action="{{ route('admin.content.recent-post-links.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title">
                    </div>
                    <div>
                        <label>URL</label>
                        <input type="text" name="url" value="#">
                    </div>
                </div>
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
                <label>Sort Order</label>
                <input type="number" name="sort_order" value="0">
                <button class="btn btn-primary" type="submit">Add Recent Post Link</button>
            </form>
        </div>
    </div>
</div>
@endsection
