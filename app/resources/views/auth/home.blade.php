@extends('layouts.app')

@section('title', 'ホーム')

@section('content')
<div class="posts-container">
    @forelse($posts as $post)
        <div class="post-item">
            <div class="user-info">
                <span class="user-icon">👤</span>
                <span class="user-name">{{ $post->user_name }}</span>
            </div>
            <div class="post-content">
                <img src="{{ $post->image_url }}" alt="投稿画像" class="post-image">
                <p class="post-caption">{{ $post->caption }}</p>
            </div>
            <div class="post-actions">
                <span class="reaction">❤️</span>
                <span class="bookmark">🔖</span>
            </div>
        </div>
    @empty
        <p class="no-posts">まだ投稿がありません。</p>
    @endforelse
</div>
@endsection
