<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('リカモス | 学習モード') }}
    </h2>
  </x-slot>

  <form class="mb-6" action="{{ route('learn.update',$learn->id) }}" method="POST">
    @csrf
      @method('put')
      <div class="flex justify-center flex-col">
        <div class="flex flex-col justify-center text-center my-16">
          <div>
            <h3 class="sm:text-lg text-lg font-medium title-font mb-4 text-gray-900">今日の学習の充実度はいかがでしたか？<br>（10点：超充実、1点：イライラ）</h3>
          </div>
          <div class="flex justify-center">
            <div class="flex flex-col justify-center space-y-2 p-2 w-80">
              <input type="range" name="feeling" class="w-full" min="1" max="10" step="1" />
                <ul class="flex justify-between w-full px-[10px]">
                    <li class="flex justify-center relative"><span class="absolute">1</span></li>
                    <li class="flex justify-center relative"><span class="absolute">2</span></li>
                    <li class="flex justify-center relative"><span class="absolute">3</span></li>
                    <li class="flex justify-center relative"><span class="absolute">4</span></li>
                    <li class="flex justify-center relative"><span class="absolute">5</span></li>
                    <li class="flex justify-center relative"><span class="absolute">6</span></li>
                    <li class="flex justify-center relative"><span class="absolute">7</span></li>
                    <li class="flex justify-center relative"><span class="absolute">8</span></li>
                    <li class="flex justify-center relative"><span class="absolute">9</span></li>
                    <li class="flex justify-center relative"><span class="absolute">10</span></li>
                </ul>
            </div>
          </div>
        </div>
        <div  class="flex justify-center">
            <h3 class="sm:text-lg text-lg font-medium title-font mb-4 text-gray-900">今日の感想を一言記入しましょう。</h3>
        </div>
        <div class="p-2 w-full lg:w-1/2 md:w-2/3 mx-auto">
                <input type=textarea row="2" name="comment" class="w-full bg-white bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
        </div>
        <div class="py-12">
          <div class="flex justify-center max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
                        <input type="hidden" name="end_at" value="{{ \Carbon\Carbon::now() }}">
                <button type="submit" name="manual" value="0" class="bg-gray-600 text-white px-32 py-3 rounded-md text-1xl font-medium hover:bg-gray-700 transition duration-300">
                  終了ボタン
                </button>
          </div>
        </div>
      </div>
    </form>
</x-app-layout>