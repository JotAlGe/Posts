{{-- error message --}}
    @error('post')
        <div class="-m-2 text-center">
            <div class="p-2">
            <div
                style="border:1px solid #ec4899; display:flex;justify-content:center;"
                class="w-full inline-flex shadow items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                <span class="inline-flex bg-pink-600 text-white rounded-full h-6 px-3 justify-center items-center" style="background-color:#ec4899;">Ups!</span>
                <span class="inline-flex px-2" style="color:#ec4899;">{{ $message }}</span>
            </div>
        </div>
    @enderror
{{-- ----------------------------------------------------- --}}
