@if (!$messages)
    No messages to show
@else
    @if (isset($messages))
        @foreach ($messages as $message)
            <div class="single-message @if ($message->sent !== auth()->id()) received
            @else sent @endif">
                <p class="font-weight-bolder my-0">{{ $message->user->name }}</p>
                <p class="my-0">{{ $message->text }}</p>
                {{-- @if (isPhoto($message->file))
                <div class="w-100 my-2">
                    <img class="img-fluid rounded" loading="lazy"
                        style="height: 250px" src="{{ $message->file }}">
                </div>
            @elseif (isVideo($message->file))
                <div class="w-100 my-2">
                    <video style="height: 250px" class="img-fluid rounded" controls>
                        <source src="{{ $message->file }}">
                    </video>
                </div>
            @elseif ($message->file)
                <div class="w-100 my-2">
                    <a href="{{ $message->file }}"
                        class="bg-light p-2 rounded-pill" target="_blank"><i
                            class="fa fa-download"></i>
                        {{ $message->file_name }}
                    </a>
                </div>
            @endif --}}
                <small class="text-muted w-100">Sent
                    <em>{{ $message->created_at }}</em></small>
            </div>
        @endforeach
    @else
        No messages to show
    @endif
    {{-- @if (!isset($clicked_user) and auth()->user()->is_admin == true)
    Click on a user to see the messages
@endif --}}
@endif
