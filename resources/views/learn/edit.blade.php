<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('学習モード') }}
    </h2>
  </x-slot>

  <form class="mb-6" action="{{ route('learn.update',$learn->id) }}" method="POST">
    @csrf
      @method('put')
        <div class="flex flex-col space-y-2 p-2 w-80">
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
        <div class="mt-4">
                <input type=textarea row="2" name="comment" class="block mt-1 w-full">
        </div>
        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
                        <input type="hidden" name="end_at" value="{{ \Carbon\Carbon::now() }}">
                        <!--<input type="hidden" name="comment" value="ホゲホゲ">-->
                <button type="submit" name="manual" value="0" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                  終了ボタン
                </button>
          </div>
        </div>
    </form>
</x-app-layout>