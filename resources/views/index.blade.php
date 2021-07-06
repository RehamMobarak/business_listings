<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            My Listings
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1> Hi {{Auth::user()->name}}</h1>

                    @if (count($listings))
                    <div class="rounded-t-xl overflow-hidden bg-gradient-to-r from-green-50 to-teal-100 p-10 ">
                        <table class="table-auto ">
                            <thead>
                                <tr class="text-black">
                                    <th class="px-4 py-2 ">Company</th>
                                    <th class="px-4 py-2 ">Address</th>
                                    <th class="px-4 py-2 ">Website</th>
                                    <th class="px-4 py-2 ">Email</th>
                                    <th class="px-4 py-2 ">Bio</th>
                                    <th class="px-4 py-2 ">Phone</th>
                                    <th class="px-4 py-2 ">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listings as $listing)
                                <tr>
                                    <td class="border border-green-500 px-4 py-2 text-green-600 font-medium">
                                        {{$listing->Name}}</td>
                                    <td class="border border-green-500 px-4 py-2 text-green-600 font-medium">
                                        {{$listing->Address}}</td>
                                    <td class="border border-green-500 px-4 py-2 text-green-600 font-medium">
                                        {{$listing->Website}}</td>
                                    <td class="border border-green-500 px-4 py-2 text-green-600 font-medium">
                                        {{$listing->Email}}</td>
                                    <td class="border border-green-500 px-4 py-2 text-green-600 font-medium">
                                        {{$listing->Bio}}</td>
                                    <td class="border border-green-500 px-4 py-2 text-green-600 font-medium">
                                        {{$listing->Phone}}</td>
                                    <td class="border border-green-500 px-4 py-2 text-green-600 font-medium">
                                        <form class="float-right" method="POST" action="/listings/{{$listing->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="delete-btn" type="submit"> Delete</button>
                                        </form>

                                        <a href="/listings/{{$listing->id}}/edit" class="edit-btn float-right mr-2"> Edit</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p> You don't have listings yet !</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>