<div>
    @forelse ($posts as $post)
        <!--Title-->
        <div class="font-sans pb-3">
            <div class="w-full">
                <a href="#" class="text-base md:text-sm text-green-500 font-bold no-underline hover:underline">{{ $post->user->name}}</a>

                <p>
                    {{ $post->content }}
                </p>
                @if($post->photo != null)
                    <img class="max-w-fit mx-auto max-w-xs mx-w-xl mt-3"
                         src="{{ $post->photo }}"
                         alt="">
                @endif
            </div>

            <div class="flex justify-between">

                {{-- like --}}
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </a>

                {{-- date --}}
                <p class="text-sm text-right font-normal text-gray-400">Published {{ $post->created_at->diffForHumans() }}
                </p>
            </div>
        </div>

        <hr>
        <br>
    @empty
        <h2>No hay posts para ver...</h2>
        @endforelse

        {{-- pagination --}}
        {{ $posts->links() }}
</div>

