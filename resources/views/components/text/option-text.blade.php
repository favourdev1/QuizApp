<div class="mt-3 flex text-md px-auto border border-gray-300 rounded-lg p-4 cursor-pointer text-gray-700 hover:bg-gray-200"

    onclick="selectOption(this)">
    <input type="radio" id="{{ $optionname }}" name="{{ $optionname }}" class="mr-2 custom-radio">
    <span>
        <p >{{ $slot }}</p>
    </span>
</div>

