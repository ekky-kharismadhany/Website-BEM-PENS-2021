<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit News') }}
        </h2>
    </x-slot>
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <h3 class="font-bold">Add News' Section</h3>
                        <p>This section allow member to add news related to their respective ministry</p>
                        <form method="POST" action="{{route('news.update')}}">
                            @csrf
                            @method('put')
                            <x-label for="title" :value="__('Title')" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="__($articles->title)" required />
                            <x-label for="body" :value="__('Body')" />
                            <textarea id="editor" name="editor" placeholder="Write Here..."></textarea>
                            <input name="id" value="{{$articles->id}}" hidden>
                            <button type="submit" class="bg-gray-600 hover:bg-gray-400 text-white py-2 px-4 rounded mt-3">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>