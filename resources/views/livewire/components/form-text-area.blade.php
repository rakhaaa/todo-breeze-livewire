<div class="{{ $class }}">
    <label for="{{ $id }}"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <textarea id="{{ $id }}" wire:model.defer="{{ $id }}" rows="4" class="{{ $classNames }}"
        placeholder="{{ $placeholder }}">{{ $value }}</textarea>
</div>
