<div class="form-group">
  <label>Title</label>
  <input type="text" name="title" class="form-control"
      value="{{ old('title', $post->title ?? null) }}"/>
</div>

<div class="form-group">
  <label>Content</label>
  <input type="text" name="content" class="form-control"
      value="{{ old('content', $post->content ?? null) }}"/>
</div>

@if($errors->any())
<div style="color:red">
  <ul>
    @foreach($errors->all() as $error)
      <div>{{ $error }}</div>
    @endforeach
  </ul>
</div>
@endif