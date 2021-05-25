<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2 class="text-success">{{ __('Image Gallery') }}</h2>
                </div>
                <div class="col-sm text-right">
                    <a href="{{ route('gallery.create') }}" class="btn btn-primary hover:bg-green-700">Add new image</a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-3">
                <div class="row">
                    @foreach ($data as $img)
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <img src="galleryimage/{{$img->image}}"
                            class="w-100 shadow-1-strong rounded mb-4" alt="" style="height: 70vh;"/>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>