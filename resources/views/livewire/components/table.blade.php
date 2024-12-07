<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    @include('livewire.components.notification')

    <div class="flex justify-between p-4">
        <button wire:click="openCreateModal" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
            Add New
        </button>
    </div>
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                @foreach ($headers as $key => $header)
                    @if ($key !== 'user_id' || Auth::user()->role === 'admin')
                        <th scope="col" class="px-6 py-3">{{ $header }}</th>
                    @endif
                @endforeach
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr class="bg-white border-b hover:bg-gray-50">
                    @foreach ($headers as $key => $header)
                        @if ($key === 'user_id')
                            @if (Auth::user()->role === 'admin')
                                <td class="px-6 py-4">{{ $item->user->name }}</td>
                            @endif
                        @else
                            <td class="px-6 py-4">{{ $item->$key }}</td>
                        @endif
                    @endforeach

                    <td class="px-6 py-4 flex gap-x-2">
                        @can('view', $item)
                            <button wire:click="openReadModal('{{ $item->id }}')"
                                class="text-yellow-600 hover:underline">
                                View
                            </button>
                        @endcan
                        @can('update', $item)
                            <button wire:click="openEditModal('{{ $item->id }}')"
                                class="text-yellow-600 hover:underline">
                                Edit
                            </button>
                        @endcan
                        @can('delete', $item)
                            <button wire:click="openDeleteModal('{{ $item->id }}')"
                                class="text-red-600 hover:underline">
                                Delete
                            </button>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    <div class="mt-4">
        {{ $items->links() }}
    </div>

    @include('livewire.components.modal-create')
    @include('livewire.components.modal-edit')
    @include('livewire.components.modal-read')
    @include('livewire.components.modal-delete')


</div>
