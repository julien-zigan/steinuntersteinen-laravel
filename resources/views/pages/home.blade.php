<x-layouts.app>
    <x-slot:title> Start </x-slot:title>
    <x-slot:pageBackground>
       {{ asset('img/blue-bg.jpg') }}
    </x-slot:pageBackground>

    <div class="max-w-2xl mx-auto">
        <div class="card bg-transparent shadow border-0">
            <div class="card-body bg-transparent fw-bold  rounded">
                <div class="text-center">
                    <h1 class="text-3xl text-white font-bold">Simple Web-Apps, gebaut mit Laravel</h1>
                    <p class="mt-4">Einfache exemplarische Anwendungen, nach 3 Tagen Laravel</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <x-messages.go-to-message-board-card />
    </div>
</x-layouts.app>
