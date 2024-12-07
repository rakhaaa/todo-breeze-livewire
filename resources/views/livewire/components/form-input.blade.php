<div class="{{ $class }}">
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $id }}" wire:model.defer="{{ $id }}" class="{{ $classNames }}" placeholder="{{ $placeholder }}" value="{{ $value }}" required="{{ $required }}">
</div>
