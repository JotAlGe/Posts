<div>
    <div class="flex justify-center h-screen">
        <div x-data="{ dropdownOpen: true }" class="relative my-32">
            <div x-show="dropdownOpen" class="border absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                <button wire:click="delete()" class="block px-4 py-2 text-sm capitalize text-red-500 hover:bg-blue-500 hover:text-white font-extrabold">
                Eliminar post
                </button>
            </div>
            
        </div>
    </div>
</div>
