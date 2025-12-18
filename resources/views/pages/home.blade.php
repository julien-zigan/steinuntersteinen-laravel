<x-layouts.app>
    <x-slot:title> Start </x-slot:title>
    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow-lg mt-8">
            <div class="card-body bg-dark text-white rounded">
                <div>
                    <h1 class="text-3xl text-primary font-bold">Willkommen bei meiner Laravel Web-App!</h1>
                    <p class="mt-4 text-base-content/60">Das ist eine simple Anwendung, die meinen Kenntnisstand
                    nach 3 Tagen mit Laravel zeigen soll.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <x-message-board-card />
    </div>
</x-layouts.app>
