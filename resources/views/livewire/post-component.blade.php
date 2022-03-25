<div>
    @forelse ($posts as $post)
        {{ $post->content }}
        <br>
    @empty
        <h2>No hay posts para ver...</h2>
    @endforelse
</div>
