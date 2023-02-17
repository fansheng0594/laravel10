<div class="flex flex-col space-y-2 mx-8">
    <label for="{{ $name }}">{{ ucfirst($name) }}:</label>
    <x-forms.error :$name />
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" class="form-input rounded-md border-gray-300" value="{{ old($name) }}">
</div>