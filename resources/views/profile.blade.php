<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <h3 class="font-bold">My Profile's Section</h3>
                        <p>This section allow members to change their profile's information</p>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <x-success-message />
                        <form method="POST" action="{{route('profile.update')}}">
                            @method('PUT')
                            @csrf
                            <div class="grid grid-cols-2 gap-5">
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{auth()->user()->name}}" required />
                                </div>
                                <div>
                                    <x-label for="kementerian" :value="__('Kementerian')" />
                                    <x-input id="kementerian" class="block mt-1 w-full" type="text" name="kementerian" value="{{auth()->user()->kementerian}}" required />
                                </div>
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />
                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
                                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                    <x-button class="ml-3">
                                        {{ __('Update') }}
                                    </x-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>