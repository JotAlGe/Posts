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