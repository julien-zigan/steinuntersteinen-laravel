<x-layouts.app>
    <x-slot:title>Wunschliste</x-slot:title>
    <x-slot:pageBackground>
        {{ asset('img/pile-black-wrapped-gifts-copy-space.jpg') }}
    </x-slot:pageBackground>
@props(['message'])

    <div class="card bg-transparent border-0 d-flex justify-content-center align-items-center">
        <img src="{{ asset('img/wish-card-bg.png') }}"
             alt="christmas presents"
             width="600vw"
        >
        <div class="card-img-overlay rounded d-flex justify-content-center align-items-center">
            <form method="POST" action="/message-board/{{ $message }}/edit">
                @csrf
                @method('PUT')

                <div class=" bg-transparent border-0 justify-items-center">
                        <textarea
                            name="message"
                            style="font-family: 'Bradley Hand', 'Apple Chancery', 'Segoe Print', 'Brush Script MT', cursive;"
                            placeholder="Trage hier Deinen Wunsch ein..."
                            class="form-control textarea fs-2 text-center border-0  bg-transparent"
                            rows="2"
                            maxlength="255"
                            required
                        >{{ old('message', $message->message) }}</textarea>
                    @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">
                        Änderung speichern!
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
