{{-- temporary image --}}
    @if ($photo != null)
        <div
            style="max-width: 100%; height: 200px; background: url('{{ $photo->temporaryUrl() }}');
            background-size:cover; background-position: center; font-size: 5rem;"
            class="mx-auto">
            <p class="text-green-600 font-bold text-center">¿Publicar esta imagen?</p>
        </div>
    @endif