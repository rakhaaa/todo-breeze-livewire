@if ($showDeleteModal)
        <div id="delete-modal" tabindex="-1" aria-hidden="true"
            class="fixed inset-0 z-50 flex items-center justify-center w-full h-full bg-gray-800 bg-opacity-75">
            <div class="relative w-full max-w-md p-4">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            {{ $modalTitle }}
                        </h3>
                        <button type="button" wire:click="closeModal"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <p>Are you sure you want to delete this item?</p>
                        <div class="mt-4 flex justify-end space-x-4">
                            <button wire:click="delete"
                                class="bg-red-600 text-white rounded-lg px-5 py-2.5 hover:bg-red-700">
                                Delete
                            </button>
                            <button wire:click="closeModal"
                                class="bg-gray-500 text-white rounded-lg px-5 py-2.5 hover:bg-gray-600">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif