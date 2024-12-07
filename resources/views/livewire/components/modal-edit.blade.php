@if ($showEditModal)
        <div id="edit-modal" tabindex="-1" aria-hidden="true"
            class="fixed inset-0 z-50 flex items-center justify-center w-full h-full bg-gray-800 bg-opacity-75">
            <div class="relative w-full max-w-md p-4">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            {{ $modalTitle }}
                        </h3>
                        <button type="button" wire:click="closeModal"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            @foreach ($fields as $field)
                                @if (in_array($field['type'], ['text', 'email', 'number', 'password']))
                                    <div class="{{ $field['class'] }}">
                                        <label for="{{ $field['id'] }}"
                                            class="block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
                                        <input type="{{ $field['type'] }}" id="{{ $field['id'] }}"
                                            placeholder="{{ $field['placeholder'] }}"
                                            wire:model="fields.{{ $loop->index }}.value"
                                            class="{{ $field['classNames'] }}">
                                    </div>
                                @elseif ($field['type'] === 'textarea')
                                    <div class="{{ $field['class'] }}">
                                        <label for="{{ $field['id'] }}"
                                            class="block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
                                        <textarea id="{{ $field['id'] }}" placeholder="{{ $field['placeholder'] }}"
                                            wire:model="fields.{{ $loop->index }}.value" class="{{ $field['classNames'] }}"></textarea>
                                    </div>
                                @elseif ($field['type'] === 'select')
                                    <div class="{{ $field['class'] }}">
                                        <label for="{{ $field['id'] }}"
                                            class="block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
                                        <select id="{{ $field['id'] }}"
                                            wire:model="fields.{{ $loop->index }}.value"
                                            class="{{ $field['classNames'] }}">
                                            @foreach ($field['options'] as $option)
                                                <option value="{{ $option['value'] }}">{{ $option['label'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <button wire:click="edit"
                            class="text-white bg-blue-500 hover:bg-blue-700 rounded-lg px-5 py-2.5">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif