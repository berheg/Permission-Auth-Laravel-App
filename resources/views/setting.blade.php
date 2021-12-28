<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Setting for Administrator') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as an admin! <br>
                    Your name is: {{Auth::user()->name}} <br>
                    Your email addrress: {{Auth::user()->email}}
                </div>
            </div>
            <div class="form-container w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" >

            <form method="POST" action="/setting" >
                @csrf              
                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('User Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Select Option Rol type -->
                <div class="mt-4">
                    <x-label for="role_id" value="{{ __('Register as:') }}" />
                    <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="user">User</option>
                        <option value="blogwriter">Blog Writer</option>
                        <option value="admin">Administrator</option>
                    </select>
                </div>
                <x-button class="ml-3">
                    {{ __('Submit') }}
                </x-button>

            </form>
            </div>
        </div>

    </div>

</x-app-layout>
