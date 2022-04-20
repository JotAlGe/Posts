<div>

    {{-- temporary image --}}
    @if ($photo != null)
        <div
            style="max-width: 100%; height: 200px; background: url('{{ $photo->temporaryUrl() }}');
            background-size:cover; background-position: center; font-size: 5rem;"
            class="mx-auto">
            <p class="text-green-600 font-bold text-center">¿Publicar esta imagen?</p>
        </div>
    @endif
     
    <!-- component -->
    <div class="w-full max-w-sm mx-auto mb-4 mt-4">
        <!-- Post field -->
        <div class="flex flex-wrap mb-4">
            <div class="relative w-full appearance-none label-floating">
                <textarea
                    wire:model.debounce.500ms="post"
                    class="autoexpand tracking-wide py-2 px-4 mb-1 leading-relaxed appearance-none block w-full bg-green-200 border border-green-200 rounded focus:outline-none focus:bg-white focus:border-green-500"
                    id="message"
                    type="text"
                    placeholder="Message...">
                </textarea>
                <label for="message" class="absolute tracking-wide py-2 px-4 opacity-0 leading-tight block top-0 left-0 cursor-text">Message...
                </label>
            </div>
        </div>

        {{-- button --}}
        <div class="flex justify-end">
            
            {{-- photo --}}
            <input
                wire:model="photo"
                class="block w-full text-sm text-gray-200 bg-gray-50 rounded-lg border border-gray-300
                    cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-200 dark:border-gray-200 dark:placeholder-gray-400" 
                aria-describedby="user_avatar_help"
                id="user_avatar"
                type="file"
            >


            <button
                wire:click="store"
                class="border-2 border-green-500 text-black px-4 py-2 rounded-md text-1xl font-medium hover:bg-green-500 transition duration-300">

                <svg
                wire:loading wire:target="store"
                role="status" class="inline mr-3 w-4 h-4 text-green-500 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                </svg>

                Publicar
            </button>

        </div>

        {{-- error message --}}
        @include('partials.error')

        {{-- ---------------------------------- --}}

        @includeWhen($photo, 'partials.error-image'){{-- image errors --}}
        {{-- ---------------------------------- --}}
    </div>
</div>
