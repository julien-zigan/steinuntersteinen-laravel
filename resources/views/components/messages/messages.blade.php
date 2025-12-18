@props(['messages'])

<div class="row mt-1">
    @forelse($messages as $message)
        <div class="col-md-6 mb-4"> {{-- Each item takes 6/12 slots (half width) --}}
            <div class="card shadow h-100"
            style="background-color: rgba(100, 100, 100, 0.8);">
                <div class="card-body text-white">
                    <small class="text-black">{{ $message->created_at->diffForHumans() }}</small>
                    <h3>
                        <span class="text-warning">
                            {{ $message->user ? $message->user->name : 'Anonym' }}
                        </span>
                        <span>wünscht sich</span>
                    </h3>
                    <p>{{ $message['message'] }}</p>

                    @if(!blank($message['link']))
                        <p class="mb-0">
                            Bei Amazon bestellen:
                            <a href="{{ $message['link'] }}" target="_blank" class="text-white text-break mx-3">{{ $message['link'] }}</a>
                        </p>
                    @endif
                    <div class="d-flex justify-content-between mt-2">
                        <a href="/message-board/{{ $message }}/edit" class="btn btn-secondary">Bearbeiten</a>

                        <form method="POST" action="/message-board/{{ $message->id }}">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="btn btn-outline-danger fw-bold"
                                onclick="return confirm('Wollen Sie diesen Wunsch dauerhaft löschen?')">
                                Löschen
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @empty
        <p class="text-white">Es gibt noch keine Wünsche. Sei der erste und trage Deinen Wunsch ein!</p>
    @endforelse
</div>

<div class="d-flex flex-column align-items-center mt-4">
    <div class="pagination-only">
        {{ $messages->links() }}
    </div>
</div>

<style> {{-- hides "showing page x to y" --}}
    .pagination-only .small.text-muted,
    .pagination-only p.text-muted {
        display: none !important;
    }
</style>
