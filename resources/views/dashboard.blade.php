<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="rounded-t-xl overflow-hidden bg-gradient-to-r from-rose-50 to-rose-100 p-10">
        <div class="text-center">
            <button type="button" class="my-button bg-red-500 shadow-md hover:bg-red-700 focus:outline-none"
                tabindex="-1">
                Hover me blue
            </button>


            <button type="button"
                class="py-2 px-4 bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none"
                tabindex="-1">
                Hover me red
            </button>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="md:flex container border p-4">
                    <div class="md:flex-shrink-0">
                        <img class="rounded-lg md:w-56"
                            src="https://st4.depositphotos.com/1000507/24488/v/600/depositphotos_244889634-stock-illustration-user-profile-picture-isolate-background.jpg"
                            alt="random profile pic">
                    </div>
                    <div class="mt-4 md:mt-0 md:ml-6">
                        <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">Breeze</div>
                        <a href="#"
                            class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Scout
                            APM</a>
                        <p class="mt-2 text-gray-600">Use breeze and tailwind css for the first time.</p>
                        <div class="p-6 bg-white border-b border-gray-200">
                            You're logged in!
                            <button class="my-button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>