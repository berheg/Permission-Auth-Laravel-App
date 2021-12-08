<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form for New Blog post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as a blogwriter! <br>
                    Create your new blog post Here!
                    <br>
                    <textarea placeholder="Describe yourself here..."rows="6" cols="70" placeholder="Why do you want go for the Editor Job Profile? (100 words)">
                    </textarea>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
