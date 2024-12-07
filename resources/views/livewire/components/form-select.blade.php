<div class="{{ $class }}">
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <select id="{{ $id }}" wire:model.defer="{{ $id }}" class="{{ $classNames }}" required="{{ $required }}">
        @foreach ($options as $option)
            <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
        @endforeach
    </select>
</div>
