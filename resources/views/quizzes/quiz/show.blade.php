@extends('quizzes.layouts.app')

@section('content')
    <div class="flex flex-col items-start h-full justify-center mt-auto">
        <div class="flex items-center w-full justify-between mb-4">
            <p class="text-lg  text-blue-700 ">
                Question 5 or 6
            </p>

            <x-text.timer-text>15s</x-text.timer-text>
        </div>
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

    function startTimer(duration, display) {
        let timer = duration;
        let minutes, seconds;

        countdown = setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            display.textContent = minutes + 'm ' + seconds + 's';

            if (--timer < 0) {
                clearInterval(countdown);
                // Timer has reached zero, perform actions here
                // You can display a message, submit the form, etc.
                // For example:
                alert('Time is up!');
            }
        }, 1000);
    }

    window.onload = function () {
        const timerDisplay = document.getElementById('timer');
        const durationInSeconds = 15; // Set the duration in seconds

        startTimer(durationInSeconds, timerDisplay);
    };
</script>
