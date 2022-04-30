<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('リカモス | 学習モード') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="flex flex-col text-center w-full mb-8">
        <h3 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">朝学習お疲れ様でした！</h3>
    </div>
    <div class="flex justify-center max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
            <button onclick="location.href='{{ route('learn.past') }}'" class="bg-gray-600 text-white px-32 py-3 rounded-md text-1xl font-medium hover:bg-gray-700 transition duration-300">
              学習記録を見る
            </button>
    </div>
  </div>
</x-app-layout>