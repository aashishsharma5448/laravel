<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="text-success">Show User</h2>
    </x-slot>

    
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            @foreach($data as $dat)
                <table class="min-w-full divide-y divide-gray-200 w-full">
                    <tr class="border-b">
                        <th scope="col" class="px-6 py-3 bg-gray-50">ID</th>
                        <td class="px-6 py-4 bg-white">{{$dat->id}}</td>
                    </tr>
                    <tr class="border-b">
                        <th scope="col" class="px-6 py-3 bg-gray-50">Name</th>
                        <td class="px-6 py-4 bg-white">{{$dat->name}}</td>
                    </tr>
                    <tr class="border-b">
                        <th scope="col" class="px-6 py-3 bg-gray-50">Email</th>
                        <td class="px-6 py-4 bg-white">{{$dat->email}}</td>
                    </tr>
                    <tr class="border-b">
                        <th scope="col" class="px-6 py-3 bg-gray-50">Mobile</th>
                        <td class="px-6 py-4 bg-white">{{$dat->mobile}}</td>
                    </tr>
                    <tr class="border-b">
                        <th scope="col" class="px-6 py-3 bg-gray-50">Role</th>
                        <td class="px-6 py-4 bg-white">{{$dat->role}}</td>
                    </tr>
                </table>
            @endforeach
            </div>
        </div>
        <div class="block mt-8">
            <a href="{{ route('users.index') }}" 
            class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
        </div>
    </div>
</x-app-layout>