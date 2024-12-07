@if ($showReadModal)
    <div id="read-modal" tabindex="-1" aria-hidden="true"
        class="fixed inset-0 z-50 flex items-center justify-center w-full h-full bg-gray-800 bg-opacity-75">
        <div class="relative w-full max-w-4xl p-4">
            <div class="relative bg-white rounded-lg shadow-lg dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        {{ $modalTitle }}
                    </h3>
                    <button type="button" wire:click="closeModal"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-6 md:p-8">
                    <div class="bg-white rounded-lg shadow p-4 dark:bg-gray-800 dark:text-gray-300">
                        <table class="w-full text-sm">
                            <tbody>
                                @foreach ($fields as $field)
                                    @if ($field['id'] !== 'user_id' || Auth::user()->role === 'admin')
                                        <tr class="border-b dark:border-gray-600">
                                            <th scope="row"
                                                class="px-4 py-2 font-medium text-gray-900 dark:text-gray-100 whitespace-nowrap text-left">
                                                {{ $field['label'] }}
                                            </th>
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">
                                                @if (in_array($field['type'], ['text', 'email', 'number', 'password', 'textarea']))
                                                    {{ $field['value'] }}
                                                @elseif ($field['type'] === 'select')
                                                    @foreach ($field['options'] as $option)
                                                        @if ($option['value'] == $field['value'])
                                                            {{ $option['label'] }}
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                <!-- Add human-readable created and updated timestamps -->
                                <tr class="border-b dark:border-gray-600">
                                    <th scope="row"
                                        class="px-4 py-2 font-medium text-gray-900 dark:text-gray-100 whitespace-nowrap text-left">
                                        Created At
                                    </th>
                                    <td class="px-4 py-2 text-gray-700 dark:text-gray-300">
                                        {{ $item->created_at->diffForHumans() }}
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-600">
                                    <th scope="row"
                                        class="px-4 py-2 font-medium text-gray-900 dark:text-gray-100 whitespace-nowrap text-left">
                                        Updated At
                                    </th>
                                    <td class="px-4 py-2 text-gray-700 dark:text-gray-300">
                                        {{ $item->updated_at->diffForHumans() }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button wire:click="closeModal"
                        class="text-white bg-blue-500 hover:bg-blue-700 rounded-lg px-5 py-2.5 mt-4">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
