<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


        <div class="container">
            <h2 class="text-success">{{ __('Employee List') }}</h2>
        </div>
    </x-slot>

    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <table class="min-w-full divide-y divide-gray-200 w-full">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-gray-500">ID</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-gray-500">Name</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-gray-500">Email</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-gray-500">Mobile</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-gray-500">Roles</th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-gray-500">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($data as $user)
                        <tr>
                            <td class="px-6 py-4 text-sm">{{ $user->id }}</td>
                            <td class="px-6 py-4 text-sm">{{ $user->name }}</td>
                            <td class="px-6 py-4 text-sm">{{ $user->email }}</td>
                            <td class="px-6 py-4 text-sm">{{ $user->mobile }}</td>
                            <td class="px-6 py-4 text-sm">{{ $user->role }}</td>
                            <td class="px-6 py-4 text-sm">

                                @if ($role == "User")
                                    <a href="{{ route('users.show', $user->id)}}" class="hover:text-indigo-900 mb-2 mr-2">View</a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="hover:text-indigo-900 mb-2 mr-2 ">Edit</a>
                                @else
                                    @if ($user->role=="Admin" && $user->id == $id)
                                        <a href="{{ route('users.show', $user->id) }}" class="hover:text-indigo-900 mb-2 mr-2">View</a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                    @elseif($user->role=="User")
                                        <a href="{{ route('users.show', $user->id) }}" class="hover:text-indigo-900 mb-2 mr-2">View</a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                        <form class="inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                        </form>
                                    @elseif ($user->role=="Admin" && $user->id!=$id)
                                        <a href="{{ route('users.show', $user->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">View</a>
                                    @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>