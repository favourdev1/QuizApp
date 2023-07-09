@extends('quizzes.layouts.app')

@section('content')
    <div class="flex flex-col items-start h-full justify-center mt-auto">
        <p class="text-lg  text-gray-700 mb-4">
            Question 5 or 6
        </p>
        <div class="font-medium  rounded text  container ">
            <x-text.question-text class="text-gray-700">
                What is my name?
            </x-text.question-text>

            <p class="text-sm text-gray-500 mt-2">
                Please enter the correct answer
            </p>
        </div>

        <div class="mt-6  bg-red-50k mb-5 container">
            <form action="#" method="post">
                <x-text.option-text optionname="option3">John</x-text.option-text>
                <x-text.option-text optionname="option4">Michael</x-text.option-text>
                <x-text.option-text optionname="option1">David</x-text.option-text>
                <x-text.option-text optionname="option2">Sarah</x-text.option-text>
            </form>



        </div>

        <div class="container flex items-center justify-end">
            <button class=" text-blue-900  px-4 py-3 flex justify-center">
                <x-icons.backicon class=" font-bold " /> Prev
            </button>

            <button class=" ml-3   text-blue-900  px-4 py-3 flex justify-center">
                Next
                <x-icons.forward-icon class=" font-bold " />
            </button>
        </div>
    </div>
@endsection


<script>
    let selectedOption = null;

    function selectOption(element) {
        if (selectedOption !== null) {
            selectedOption.classList.remove('bg-blue-600');
            selectedOption.classList.replace('text-white', 'text-gray-700');
            selectedOption.classList.add('hover:bg-gray-200');


        }

        selectedOption = element;
        selectedOption.classList.add('bg-blue-600');
        selectedOption.classList.replace('text-gray-700', 'text-white');
        selectedOption.classList.remove('hover:bg-gray-200');

    }
</script>
