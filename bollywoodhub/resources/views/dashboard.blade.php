<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('BollyWood Hit Songs') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($songs as $song)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="{{ $song->imagePath }}" alt="{{ $song->songName }}" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold mb-2 text-gray-600">{{ $song->songName }}</h3>
                                    <p class="text-black mb-2 ">
                                        Movie: <a href="{{ route('movies.show', $song->movie) }}" class="text-blue-500 hover:underline">
                                            {{ $song->movie->movieName }}
                                        </a>
                                    </p>
                                    <div class="flex justify-between items-center">
                                        <a href="{{ route('songs.show', $song) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            View Details
                                        </a>
                                        @if(auth()->user()->isAdmin())
                                            <div>
                                                <a href="{{ route('songs.edit', $song) }}" class="text-yellow-500 hover:text-yellow-700 mr-2">
                                                    Edit
                                                </a>
                                                <form action="{{ route('songs.destroy', $song) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this song?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-500 hover:text-red-700">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
