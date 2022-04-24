<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Learn') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
            <form action="{{ route('learn.store') }}" method="POST">
                @csrf
                <input type="hidden" name="start_at" value="{{ \Carbon\Carbon::now() }}">
                <button type="submit" name="manual" value="0"
                    class="bg-red-500 text-white font-semibold py-2 px-8 rounded-md">
                    学習をはじめる
                </button>
            </form>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
            <button class="bg-red-500 text-white font-semibold py-2 px-8 rounded-md">
                <a href="{{route('wakeup.create')}}">
                    {{ __('起きる') }}</a>
            </button>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
            <button class="bg-red-500 text-white font-semibold py-2 px-8 rounded-md">
                <a href="{{route('statement.create')}}">
                    {{ __('早起きを記録') }}</a>
            </button>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
            <button class="bg-red-500 text-white font-semibold py-2 px-8 rounded-md">
                <a href="{{route('goal.create')}}">
                    {{ __('目標設定') }}</a>
            </button>
        </div>
    </div>
<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
    <!-- text - start -->
    <div class="mb-8 md:mb-12">
      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Our Team by the numbers</h2>

      <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
    </biv>
    <!-- text - end -->

    <div class="grid grid-cols-2 md:grid-cols-2 gap-4 lg:gap-8">
      <!-- stat - start -->
        <div class="flex flex-col justify-center items-center bg-gray-100 rounded-lg p-4 md:p-8">
            <form action="{{ route('learn.store') }}" method="POST">
                @csrf
                <input type="hidden" name="start_at" value="{{ \Carbon\Carbon::now() }}">
                    <button type=submit name="manual" value="0">
                        <div class="text-indigo-500 text-xl sm:text-2xl md:text-3xl font-bold">朝学習を始める</div>
                        <div class="text-sm sm:text-base font-semibold">クリックした時間から学習記録がスタートします</div>
                    </button>
            </form>
        </div>cd
      <!-- stat - end -->

       <!--stat - start -->
      <div class="flex flex-col justify-center items-center bg-gray-100 rounded-lg p-4 md:p-8">
        <div class="text-indigo-500 text-xl sm:text-2xl md:text-3xl font-bold">朝学習を終える</div>
        <div class="text-sm sm:text-base font-semibold">今日の学習状況を記録して終了しましょう</div>
      </div>

      <!-- stat - start -->
      <!--<div class="flex flex-col justify-center items-center bg-gray-100 rounded-lg p-4 md:p-8">-->
      <!--  <div class="text-indigo-500 text-xl sm:text-2xl md:text-3xl font-bold">1000+</div>-->
      <!--  <div class="text-sm sm:text-base font-semibold">Customers</div>-->
      <!--</div>-->
      <!-- stat - end -->

      <!-- stat - start -->
      <!--<div class="flex flex-col justify-center items-center bg-gray-100 rounded-lg p-4 md:p-8">-->
      <!--  <div class="text-indigo-500 text-xl sm:text-2xl md:text-3xl font-bold">A couple</div>-->
      <!--  <div class="text-sm sm:text-base font-semibold">Coffee breaks</div>-->
      <!--</div>-->
      <!-- stat - end -->
    </div>
  </div>
</div>
</x-app-layout>