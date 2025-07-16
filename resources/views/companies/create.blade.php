<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create Company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto border-b border-gray-200 bg-white p-6">
                    <form action="{{ route('companies.store') }}" method="POST" class="space-y-4">
                        @csrf

                        <div>
                            <x-input-label for="name" value="Name *" />
                            <x-text-input id="name" name="name" value="{{ old('name') }}" type="text" class="block w-full mt-1" required />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="email" value="Email *" />
                            <x-text-input id="email" name="email" value="{{ old('email') }}" type="email" class="block w-full mt-1" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="website" value="Website" />
                            <x-text-input id="website" name="website" value="{{ old('website') }}" type="url" class="block w-full mt-1" />
                            <x-input-error :messages="$errors->get('website')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="address" value="Address" />
                            <textarea id="address" name="address" rows="3" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('address') }}</textarea>
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <div class="mt-6">
                            <x-primary-button type="submit" class="px-4 py-2">
                                Save
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
