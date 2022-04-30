<div>

    {{-- temporary image --}}
    @include('partials.temporary-image')
     
    <div class="w-full max-w-sm mx-auto mb-4 mt-4">
        <!-- Post field -->
        <div class="flex flex-wrap mb-4">

            {{-- textarea post --}}
            @include('partials.textarea-post')

        </div>

        {{-- button --}}
        <div class="flex justify-end">
            
            {{-- photo --}}
            @include('partials.input-photo')

            {{-- button post --}}
            @include('partials.button-post')

        </div>

        {{-- error message --}}
        @include('partials.error')

        {{-- ---------------------------------- --}}

        @includeWhen($photo, 'partials.error-image'){{-- image errors --}}
        {{-- ---------------------------------- --}}
    </div>
</div>
