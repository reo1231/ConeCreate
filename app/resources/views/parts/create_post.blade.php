<div class="modal-content-container">
    <div class="modal-header">
        <h2 class="modal-title">新規投稿</h2>
        <span class="close-button">&times;</span>
    </div>
    <div class="modal-body">
        <form id="postForm" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file">画像または動画を選択</label>
                <input type="file" class="form-control-file" id="file" name="file" accept="image/*,video/*" required>
            </div>
            <div class="form-group">
                <label for="caption">キャプション</label>
                <textarea class="form-control" id="caption" name="caption" rows="3" placeholder="キャプションを入力" required></textarea>
            </div>
            <button type="submit" class="submit-button">投稿</button>
        </form>
    </div>
</div>
