@if($loop->even)
  <p style='background-color:gray'>{{ $key }} - {{ $post['title'] }}</p>
@else
  <p>{{ $key }} - {{ $post['title'] }}</p>
@endif

<div>
  <button><a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-secondary">Edit</a></button>
  <form method="POST" class="d-inline" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
      @csrf
      @method('DELETE')

      <input type="submit" value="Delete!" class="btn btn-danger"/>
  </form>
</div>