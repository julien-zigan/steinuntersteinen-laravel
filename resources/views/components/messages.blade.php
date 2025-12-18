<div class="row">
    @foreach($messages as $message)
        <div class="col-md-6 mb-4"> {{-- Each item takes 6/12 slots (half width) --}}
            <div class="card shadow h-100"
            style="background-color: rgba(255, 255, 255, 0.85);">
                <div class="card-body">
                    <small class="text-body-tertiary">{{ $message['status'] }} {{ $message['updated_at'] }}</small>
                    <h5><span class="text-danger"> {{ $message['author'] }}</span> wünscht sich</h5>
                    <p>{{ $message['message'] }}</p>

                    @if(!blank($message['link']))
                        <p class="mb-0">
                            Bei Amazon bestellen:<br>
                            <a href="{{ $message['link'] }}" target="_blank" class="text-break">{{ $message['link'] }}</a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-4">
    {{ $messages->links() }}
</div>
