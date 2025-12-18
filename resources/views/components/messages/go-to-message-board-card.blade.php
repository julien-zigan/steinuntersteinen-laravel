<div class="card border-danger border-8 bg-danger-subtle shadow-lg mt-1">
    <img src="{{ asset('img/pile-black-wrapped-gifts-copy-space.jpg') }}"
         alt="christmas presents"
         width="600vw"
    >
    <div class="card-img-overlay rounded">
        <div class="d-flex flex-column">
            <h1 class="text-3xl text-danger font-bold">Wunschliste</h1>
            <p class="mt-4 text-white">Was wünschst Du Dir zu Weihnachten? <br>
                Lass es Deine Freunde wissen!</p>
            <div class="mt-5">
                <a href="{{ route('message-board') }}" class="btn btn-danger">Zur Wunschliste</a>
            </div>
        </div>
    </div>
</div>
