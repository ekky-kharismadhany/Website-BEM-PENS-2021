<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add News') }}
        </h2>
    </x-slot>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <h3 class="font-bold">Add News' Section</h3>
                        <p>This section allow member to add news related to their respective ministry</p>
                        @if(Session::get('success'))
                        <p style="color:green">{{ Session::get('success') }}</p>
                        @endif
                        @if(!empty($errors->all()))
                        Whoops! Ada kesalahan saat input data, yaitu:
                        <ul style="color:red">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <form method="POST" action="{{route('news.create')}}">
                            @csrf
                            <x-label for="title" :value="__('Title')" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" required />
                            <x-label for="author" :value="__('Author')" />
                            <x-input id="author" class="block mt-1 w-full" type="text" :value="auth()->user()->name" name="author" />
                            <x-label for="body" :value="__('Body')" />
                            <textarea id="editor" name="editor" placeholder="Write Here..."></textarea>
                            <button type="submit" class="bg-gray-600 hover:bg-gray-400 text-white py-2 px-4 rounded mt-3">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{ route('news.store', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
        height: '250px',
        width: '700px'
    });
</script>