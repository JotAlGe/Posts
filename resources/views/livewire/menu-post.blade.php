<div>
    <button wire:click="$toggle('showMenuPost')">
        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
            <path d="M64 360C94.93 360 120 385.1 120 416C120 446.9 94.93 472 64 472C33.07 472 8 446.9 8 416C8 385.1 33.07 360 64 360zM64 200C94.93 200 120 225.1 120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200zM64 152C33.07 152 8 126.9 8 96C8 65.07 33.07 40 64 40C94.93 40 120 65.07 120 96C120 126.9 94.93 152 64 152z"/>
        </svg>
    </button>
    <div class="absolute">
        @includeWhen($showMenuPost, 'partials.menu-post')
    </div>
</div>

