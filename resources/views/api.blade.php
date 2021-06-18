<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('AJAX call using fetch API - Dog edition') }}
        </h2>
    </x-slot>
    <h1 class="title">Click here to --></h1><button onClick="window.location.reload();">Refresh</button>
    <div id="dogs"></div>
    <script src="./js/testingapi.js"></script>
</x-app-layout>

