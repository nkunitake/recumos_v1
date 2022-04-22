<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create New Learn') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <!--<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">-->
        <!--<div class="p-6 bg-white border-b border-gray-200">-->
          <form class="mb-6" action="{{ route('wakeup.store',$learn->id) }}" method="POST">
            @csrf
            @method('put')
                        <input type="hidden" name="end_at" value="{{ \Carbon\Carbon::now() }}">
                        <input type="hidden" name="feeling" value="5">
                        <input type="hidden" name="comment" value="ホゲホゲ"> 
            <button type="submit" name="manual" value="0" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              終了ボタン
            </button>
          </form>
        <!--</div>-->
      <!--</div>-->
    </div>
  </div>
</x-app-layout>