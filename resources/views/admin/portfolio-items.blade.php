@extends('admin.layouts.dashboard')

@section('title', 'Portfolio Items')

@section('admin-content')
<div class="card">
    <h2>Portfolio Items</h2>
    <div class="body">
        <p class="small">Manage top section projects.</p>

        @foreach ($portfolioItems as $item)
            <div class="item">
                <form method="POST" action="{{ route('admin.content.portfolio-items.update', $item) }}">
                    @csrf
                    @method('PUT')
                    <div class="grid">
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $item->title }}">
                        </div>
                        <div>
                            <label>URL</label>
                            <input type="text" name="url" value="{{ $item->url }}">
                        </div>
                    </div>
                    <label>Sort Order</label>
                    <input type="number" name="sort_order" value="{{ $item->sort_order }}">
                    <div class="row-actions">
                        <button class="btn btn-primary" type="submit">Update</button>
                </form>
                <form method="POST" action="{{ route('admin.content.portfolio-items.delete', $item) }}" onsubmit="return confirm('Delete this item?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                    </div>
            </div>
        @endforeach

        <div class="item">
            <h3>Add New</h3>
            <form method="POST" action="{{ route('admin.content.portfolio-items.store') }}">
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
                <label>Sort Order</label>
                <input type="number" name="sort_order" value="0">
                <button class="btn btn-primary" type="submit">Add Portfolio Item</button>
            </form>
        </div>
    </div>
</div>
@endsection
