<x-layouts.app>
    <x-slot:title>Wunschliste</x-slot:title>
    <x-slot:pageBackground>
       {{ asset('img/pile-black-wrapped-gifts-copy-space.jpg') }}
    </x-slot:pageBackground>


    <!-- Success Toast -->
    @if (session('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Ihre Nachricht wurde an den Weihnachtsmann gesendet.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="max-w-2xl mx-auto"  >
        <h1 class="text-center text-danger fw-bold mb-3">Wunschliste</h1>

        <x-messages.message-form />

        <x-messages.messages :messages="$messages" />

    </div>
</x-layouts.app>
