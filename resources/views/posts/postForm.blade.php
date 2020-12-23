<div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug?? old('slug') }}">
</div>
<div class="mb-3">
    <label for="post_title" class="form-label">Заголовок статьи</label>
    <input type="text" class="form-control" id="post_title" name="post_title" value="{{ $post->post_title?? old('post_title') }}">
</div>
<div class="mb-3">
    <label for="short_descr" class="form-label">Краткое описание статьи</label>
    <input type="text" class="form-control" id="short_descr" name="short_descr" value="{{ $post->short_descr?? old('short_descr') }}">
</div>
<div class="mb-3">
    <label for="description" class="form-label">Полное описание статьи</label>
    <textarea id="description" name="description" class="form-control" rows="4" cols="50">{{ $post->description?? old('description') }}</textarea>
</div>
