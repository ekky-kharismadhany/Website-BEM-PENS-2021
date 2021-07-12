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
                    <div class="container">
                        <h3 class="font-bold">Add News' Section</h3>
                        <p>This section allow member to add event related to their respective ministry</p>
                        <x-auth-validation-errors/>
                        <form action="{{route('calendar.store')}}" method="POST">
                        @csrf
                            <x-label for="title" :value="__('Title')" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" required />
                            <x-label for="description" :value="__('Description')" />
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" required />
                            <x-label for="startDate" :value="__('Start Date')" />
                            <x-input id="startDate" class="block mt-1 w-full" type="date" name="start" required />
                            <x-label for="endDate" :value="__('End Date')" />
                            <x-input id="endDate" class="block mt-1 w-full" type="date" name="end" required />
                            <div class="flex justify-end mt-4">
                                <x-button>
                                    {{ __('Save') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>