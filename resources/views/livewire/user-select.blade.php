<div>
    <div class="w-full border p-4">
        <input class="border w-full px-2 py-1"
               wire:model="query"
               wire:keydown.arrowDown="selectNext"
               wire:keydown.arrowUp="selectPrevious"
               placeholder="Search Users"/>

        @if($users->isEmpty())
            <div class="text-center mt-2 text-sm">
                No Users found
            </div>
        @endif

        @if($users->isNotEmpty())
            <ul class="mt-2 h-56 overflow-auto">
                @foreach($users as $user)
                    @if ($selected == $loop->index)
                        <li id="selected-user-{{$id}}" class="p-2 bg-gray-200">
                            <div>
                                {{ $user->name }}
                            </div>
                            <div class="text-xs">
                                {{ $user->email }}
                            </div>
                        </li>
                        <script>
                            document.getElementById("selected-user-{{$id}}").scrollIntoView()
                        </script>
                    @else
                        <li class="p-2">
                            <div>
                                {{ $user->name }}
                            </div>
                            <div class="text-xs">
                                {{ $user->email }}
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        @endif
    </div>
</div>
