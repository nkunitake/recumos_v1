<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('リカモス | 早起きモード') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="flex flex-col text-center w-full mb-8">
        <h3 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">今日も早起き頑張りましたね！</h3>
          <p>{{ \Carbon\Carbon::now()->month }}月{{ \Carbon\Carbon::now()->day }}日{{ \Carbon\Carbon::now()->hour }}時{{ \Carbon\Carbon::now()->hour }}分に起きました。</p>
    </div>
    <div class="flex justify-center max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
        <form action="{{ route('wakeup.store') }}" method="POST">
          @csrf
              <input type="hidden" name="wakeup_at" value="{{ \Carbon\Carbon::now() }}">
              <input type="hidden" name="feeling" value="5">
              <input type="hidden" name="comment" value="ホゲホゲ"> 
            <button type="submit" name="manual" value="0" class="bg-gray-600 text-white px-32 py-3 rounded-md text-1xl font-medium hover:bg-gray-700 transition duration-300">
              早起きを記録
            </button>
        </form>
    </div>
  </div>
</x-app-layout>