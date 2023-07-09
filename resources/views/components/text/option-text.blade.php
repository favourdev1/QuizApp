<div {{ $attributes->merge(['class' => 'hover:bg-gray-100 mt-3 text-md px-auto border border-gray-300 rounded-lg p-4']) }}>
    <input type="radio" id="{{ $optionname }}" name="{{ $optionname }}" class="mr-2">
    <label for="{{ $optionname }}">{{ $slot }}</label>
</div>

