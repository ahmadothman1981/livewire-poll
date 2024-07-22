<div>
   @forelse ($polls as $poll)
    <div class="mb-4">
        <h2 class="mb-4 text-l">
            {{ $poll->title }}
        </h2>

        @foreach ($poll->options as $option)
            <div class="mb-2">
                <button class="btn" wire:click="vote({{ $option->id }})">Vote</button>
                {{ $option->name }} - {{ $option->votes->count() }}
            </div>
        @endforeach
    </div>
   @empty
    <div class="text-gray-500">
        No Polls Available
    </div>
   @endforelse
</div>
