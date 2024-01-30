<div>

    @if (count($users) > 0)
    <ul class="flex flex-col gap-3">
        @foreach($users as $user)
            <li class="py-2 px-1.5 flex items-center gap-3 rounded-lg border border-gray-300 relative" wire:key="{{ $user->id }}">
                <img class="h-12 w-12 rounded-full"  src="https://picsum.photos/seed/{{$user->name}}/200" alt="user pic">
                <span class="flex flex-col">
                    <span class="font-medium text-xl">
                        {{ $user->name }}
                    </span>
                    <span class="font-light text-gray-600">
                        {{ $user->phone}}
                    </span>
                </span>

            </li>
        @endforeach
    </ul>
    @endif

    @if (count($users) == 0)
        <p>No results for "{{ $query }}"</p>
    @endif


</div>

@script
<script>
    console.log($wire.users[0])
</script>
@endscript


