<x-slot:header>
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('User Management') }}
    </h2>
</x-slot:header>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <livewire:components.table 
                    :model="'App\\Models\\User'"
                    :headers="['name' => 'Name', 'email' => 'Email', 'role' => 'Role']"
                    :fields="[
                        [
                            'type' => 'text',
                            'label' => 'Name',
                            'id' => 'name',
                            'placeholder' => 'Type name',
                            'value' => '',
                            'class' => 'col-span-2',
                            'classNames' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5',
                            'required' => true
                        ],
                        [
                            'type' => 'email',
                            'label' => 'Email',
                            'id' => 'email',
                            'placeholder' => 'Type email',
                            'value' => '',
                            'class' => 'col-span-2',
                            'classNames' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5',
                            'required' => true
                        ],
                        [
                            'type' => 'password',
                            'label' => 'Password',
                            'id' => 'password',
                            'placeholder' => 'Type password',
                            'value' => '',
                            'class' => 'col-span-2',
                            'classNames' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5',
                            'required' => true
                        ],
                        [
                            'type' => 'password',
                            'label' => 'Password Confirmation',
                            'id' => 'password_confirmation',
                            'placeholder' => 'Confirm password',
                            'value' => '',
                            'class' => 'col-span-2',
                            'classNames' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5',
                            'required' => true
                        ],
                        [
                            'type' => 'select',
                            'label' => 'Role',
                            'id' => 'role',
                            'options' => [
                                ['value' => 'user', 'label' => 'User'],
                                ['value' => 'admin', 'label' => 'Admin'],
                            ],
                            'value' => '',
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
