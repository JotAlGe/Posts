<div>
    <!-- component -->
    <div class="w-full max-w-sm mx-auto mb-4">
        <!-- Message field -->
        <div class="flex flex-wrap mb-4">
            <div class="relative w-full appearance-none label-floating">
                <textarea
                    wire:model="post"
                    class="autoexpand tracking-wide py-2 px-4 mb-1 leading-relaxed appearance-none block w-full bg-green-200 border border-green-200 rounded focus:outline-none focus:bg-white focus:border-green-500"
                    id="message"
                    type="text"
                    placeholder="Message..."></textarea>
                    <label for="message" class="absolute tracking-wide py-2 px-4 opacity-0 leading-tight block top-0 left-0 cursor-text">Message...
                </label>

            </div>
        </div>
        <div class="flex justify-end">
        <button class="border-2 border-green-500 text-black px-4 py-2 rounded-md text-1xl font-medium hover:bg-green-500 transition duration-300">Publicar</button>
        </div>

        {{-- error message --}}
        @include('partials.error')
        {{-- ----------------------------------------------------- --}}
    </div>
</div>
