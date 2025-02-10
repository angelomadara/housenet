{{-- create input label with input textbox --}}
<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
    <input type="text" name="{{ $name }}" id="{{ $name }}" class="form-input rounded-md shadow-sm mt-1 block w-full" />
</label>

