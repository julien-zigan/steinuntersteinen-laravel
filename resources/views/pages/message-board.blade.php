<x-layouts.app>
    <x-slot:title>Wunschliste</x-slot:title>
    <x-slot:pageBackground>
        style="background-image: url({{ asset('img/pile-black-wrapped-gifts-copy-space.jpg')  }})"
    </x-slot:pageBackground>

    <div class="max-w-2xl mx-auto"  >
        <div class="d-flex   align-items-center mb-4">
            <h1 class="d-inline-block text-3xl text-danger font-bold">Wunschliste</h1>
            <a href="" class="btn btn-success mx-5">Füge Deinen Wunsch hinzu!</a>
        </div>

        <x-messages :messages="$messages" />

    </div>
</x-layouts.app>
