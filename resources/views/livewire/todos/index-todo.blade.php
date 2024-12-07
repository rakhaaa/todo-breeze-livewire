<x-slot:header>
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Todo Management') }}
    </h2>
</x-slot:header>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <livewire:components.table 
                    :model="'App\\Models\\Todo'"
                    :headers="['title' => 'Title', 'description' => 'Description', 'status' => 'Status', 'user_id' => 'User']"
                    :fields="[
                        [
                            'type' => 'text',
                            'label' => 'Title',
                            'id' => 'title',
                            'placeholder' => 'Type title',
                            'value' => '',
                            'class' => 'col-span-2',
                            'classNames' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5',
                            'required' => true
                        ],
                        [
                            'type' => 'textarea',
                            'label' => 'Description',
                            'id' => 'description',
                            'placeholder' => 'Type description',
                            'value' => '',
                            'class' => 'col-span-2',
                            'classNames' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5',
                            'required' => true
                        ],
                        [
                            'type' => 'select',
                            'label' => 'Status',
                            'id' => 'status',
                            'options' => [
                                ['value' => 'pending', 'label' => 'Pending'],
                                ['value' => 'completed', 'label' => 'Completed'],
                            ],
                            'value' => '',
                            'class' => 'col-span-2 sm:col-span-1',
                            'classNames' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5',
                            'required' => true
                        ],
                        [
                            'type' => 'hidden',
                            'label' => 'User ID',
                            'id' => 'user_id',
                            'placeholder' => 'Enter user ID',
                            'value' => Auth::id(),  // Automatically populate with the logged-in user's ID
                            'class' => 'col-span-2 sm:col-span-1',
                            'classNames' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5',
                            'required' => true
                        ],
                    ]"
                />
            </div>
        </div>
    </div>
</div>
