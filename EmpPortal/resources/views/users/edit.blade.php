<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


        <div class="container">
            <h2 class="text-success">{{ __('Update Information') }}</h2>
        </div>
    </x-slot>

    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            @foreach($data as $user)
            <form action="{{ route('users.update', $user->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Employee ID</label>
                        <input type="text" class="form-control" value="{{$user->id}}" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Role</label>
                        <input type="text" class="form-control" value="{{$user->role}}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter the Name" 
                        value="{{$user->name }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Mobile</label>
                        <input type= "text" class="form-control" placeholder="Enter the Mobile" 
                        value="{{$user->mobile}}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class ="form-control" placeholder="Enter the Email" 
                    value="{{$user->email}}">
                </div><br>
                <div class="form-group text-center">
                    <button type= "submit" class="btn btn-primary col-md-3">Update</button>
                </div>              
            </form>
            @endforeach
        </div>
    </div>
</x-app-layout>