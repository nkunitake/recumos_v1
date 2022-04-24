<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('目標設定') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <!--<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">-->
        <!--<div class="p-6 bg-white border-b border-gray-200">-->
          <form action="{{ route('goal.store') }}" method="POST">
            @csrf
                        <input type="hidden" name="goal" value="5">
            <button type="submit" name="type" value="0" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              目標を設定する
            </button>
          </form>
        <!--</div>-->
      <!--</div>-->
    </div>
  </div>
</x-app-layout>