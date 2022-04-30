<div>
    @forelse ($posts as $post)
    <!--Title-->
    <div class="font-sans pb-3">
        <div class="w-full">
            <div class="w-full flex justify-between">
                <a href="{{route('users.show', $post->user->id)}}" class="text-base md:text-sm text-green-500 font-bold no-underline hover:underline">{{ $post->user->name}}
                </a>

                {{-- button show menu --}}
                @if (auth()->user()->id == $post->user->id)
                    @livewire('menu-post', [
                        'id_post' => $post->id,
                        'photo' => $post->photo
                        ])
                @endif
                    
            </div>
            
            <p>
                {{ $post->content }}
            </p>
        </div>
                        
            @if($post->photo != null)
                <img class="mx-auto mt-3"
                    src="{{ asset($post->photo) }}"
                    style="max-width: 50%; max-height: 350px; object-fit: cover;"
                >
            @endif
            
        <div class="flex justify-between">
            
            {{-- like --}}
            <div>
                <button
                    wire:click="like({{ $post->id }}, {{ auth()->user()->id }})"
                >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" 
                    
                {{-- recorro los likes para cambiarle el color --}}
                    @foreach ($post->likes as $like)
                        @if ($like->fill == 1 && auth()->user()->id == $like->user_id)
                            fill="red"
                            stroke-width="0"
                        @endif
                    
                    @endforeach
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                            fill="none"
                            >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                
                {{ $post->likes->count() > 0 ? $post->likes->count() : '' }}
            </div>

            {{-- date --}}
            <p class="text-sm text-right font-normal text-gray-400">Published 
                {{ $post->created_at->diffForHumans() }}
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
