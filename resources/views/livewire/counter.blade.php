<div class="p-4">

    <button id="addRandomUser"
            wire:click="addRandomUser"
            class="px-3 py-2 border rounded bg-gray-300">
        + Add Random User
    </button>

    <br>
    <br>

    <input type="text"
           id="query"
           wire:model="query"
           wire:keydown.arrowDown="selectNext"
           wire:keydown.arrowUp="selectPrevious"
           class="border rounded w-full px-3 py-2"
           placeholder="Search Users"
    />

    <hr class="my-6">

    <ul id="results">
        @foreach($users as $user)
            @if ($selected == $loop->index)
                <li id="selected" class="shadow bg-blue-200 p-3 mb-4">{{ $user->name }} - Selected</li>
                <script>
                    document.getElementById("selected").scrollIntoView()
                </script>
            @else
                <li class="shadow bg-white p-3 mb-4">{{ $user->name }}</li>
            @endif
        @endforeach
    </ul>
</div>
