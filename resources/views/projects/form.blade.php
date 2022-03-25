<!--<div class="w-full max-w-lg">
    <div class="flex flex-wrap ">
        <h1 class="mb-5 px-300">{{ $title }}</h1>
    </div>
</div>-->

<form class="w-full max-w-lg border-2" method="POST" action="{{ $route }}">
    @csrf
    @isset($update)
        @method("PUT")
    @endisset
     <h1 class="font-semibold text-blue mb-10 bg-yellow-500 text-white p-5">{{ $title }} </h1>
    <div class="flex flex-wrap mb-6">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold -my-1 mb-3" for="name">
                {{ __("Título") }}
            </label>
            <input name="name" value="{{ old('name') ?? $project->name }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Título del video") }}</p>
                @error("name")
                <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                    {{ $message }}
                </div>
                @enderror
        </div>
    </div>

    <div class="flex flex-wrap mb-6">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="description">
                {{ __("ID del vídeo de YouTube") }}
            </label>
            <textarea name="description" class="no-resize appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="description">{{ old("description") ?? $project->description }}</textarea>
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Introduce únicamente la ID de tu vídeo de YouTube con el formato http://www.youtube.com/watch?v=XXXXXXXX") }}</p>
                @error("description")
                <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                    {{ $message }}
                </div>
                @enderror
        </div>
    </div>
    <div class="md:flex md:items-center p-5">
        <div class="md:w-1/3">
            <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                {{ $textButton }}
            </button>
        </div>
    </div>
</form>
