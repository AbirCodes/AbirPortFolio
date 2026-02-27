@extends('admin.layouts.dashboard')

@section('title', 'Blog Posts')

@section('admin-content')
<div class="card">
    <h2>Blog Posts</h2>
    <div class="body">
        @foreach ($blogPosts as $post)
            <div class="item">
                <form method="POST" action="{{ route('admin.content.blog-posts.update', $post) }}">
                    @csrf
                    @method('PUT')
                    <div class="grid">
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $post->title }}">
                        </div>
                        <div>
                            <label>Image Path (public path)</label>
                            <input type="text" name="image_path" value="{{ $post->image_path }}">
                        </div>
                    </div>

                    <label>Excerpt</label>
                    <textarea name="excerpt">{{ $post->excerpt }}</textarea>

                    <div class="grid">
                        <div>
                            <label>Author</label>
                            <input type="text" name="author" value="{{ $post->author }}">
                        </div>
                        <div>
                            <label>Published At</label>
                            <input type="text" name="published_at" value="{{ $post->published_at }}">
                        </div>
                    </div>

                    <div class="grid">
                        <div>
                            <label>Tags (comma separated)</label>
                            <input type="text" name="tags" value="{{ $post->tags }}">
                        </div>
                        <div>
                            <label>Comments Label</label>
                            <input type="text" name="comments_label" value="{{ $post->comments_label }}">
                        </div>
                    </div>

                    <div class="grid">
                        <div>
                            <label>Button Text</label>
                            <input type="text" name="button_text" value="{{ $post->button_text }}">
                        </div>
                        <div>
                            <label>Sort Order</label>
                            <input type="number" name="sort_order" value="{{ $post->sort_order }}">
                        </div>
                    </div>

                    <div class="row-actions">
                        <button class="btn btn-primary" type="submit">Update</button>
                </form>
                <form method="POST" action="{{ route('admin.content.blog-posts.delete', $post) }}" onsubmit="return confirm('Delete this post?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                    </div>
            </div>
        @endforeach

        <div class="item">
            <h3>Add New</h3>
            <form method="POST" action="{{ route('admin.content.blog-posts.store') }}">
                @csrf
                <div class="grid">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title">
                    </div>
                    <div>
                        <label>Image Path</label>
                        <input type="text" name="image_path" value="assets/images/sample_images/blog_post1.jpg">
                    </div>
                </div>
                <label>Excerpt</label>
                <textarea name="excerpt"></textarea>
                <div class="grid">
                    <div>
                        <label>Author</label>
                        <input type="text" name="author" value="John Doe">
                    </div>
                    <div>
                        <label>Published At</label>
                        <input type="text" name="published_at">
                    </div>
                </div>
                <div class="grid">
                    <div>
                        <label>Tags</label>
                        <input type="text" name="tags" value="Gallery, Photo, Art">
                    </div>
                    <div>
                        <label>Comments Label</label>
                        <input type="text" name="comments_label" value="0 Comments">
                    </div>
                </div>
                <div class="grid">
                    <div>
                        <label>Button Text</label>
                        <input type="text" name="button_text" value="Learn more">
                    </div>
                    <div>
                        <label>Sort Order</label>
                        <input type="number" name="sort_order" value="0">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Add Blog Post</button>
            </form>
        </div>
    </div>
</div>
@endsection
