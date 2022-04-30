<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('リカモス | 学習モード') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="flex flex-col text-center w-full mb-8">
      <h3 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">今日も頑張りましょう。</h3>
      <p>{{ \Carbon\Carbon::parse($learn->start_at)->month }}月{{ \Carbon\Carbon::parse($learn->start_at)->day }}日{{ \Carbon\Carbon::parse($learn->start_at)->hour }}時{{ \Carbon\Carbon::parse($learn->start_at)->minute }}分から学習を開始しました。</p>
    </div>
    <div class="flex justify-center max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
        <form method="get" action="{{ route('learn.edit', $learn->id) }}">
          @csrf
            <button type="submit" class="bg-gray-600 text-white px-32 py-3 rounded-md text-1xl font-medium hover:bg-gray-700 transition duration-300">
              学習を終える
            </button>
        </form>
    </div>
  </div>

</x-app-layout>