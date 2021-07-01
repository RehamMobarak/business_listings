<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1> Hi {{Auth::user()->name}}</h1>
                    @if (count($listings))
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                        </tr>

                        @foreach ($listings as $listing)
                        <tr>
                            <td>{{$listing->Name}}</td>
                        </tr>
                        @endforeach

                    </table>
                    @else
                        <p> You don't have listings yet !</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>