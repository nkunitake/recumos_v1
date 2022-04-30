<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('リカモス | 朝学習を習慣化') }}
        </h2>
    </x-slot>
<section class="text-gray-600 body-font">
    <div class="container p-4 mx-auto">
        <div class="flex flex-col text-center w-full mb-8">
            <h3 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">おはようございます！</h3>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">継続できる学習ペースを掴んでいきましょう。</p>
        </div>
        <div class="flex flex-wrap justify-center m-4 text-center">
            <div class="m-4 sm:w-full max-w-sm">
                <form action="{{ route('learn.store') }}" method="POST" class="max-w-md">
                @csrf
                <input type="hidden" name="start_at" value="{{ \Carbon\Carbon::now() }}">
                <div class="">
                    <button type=submit name="manual" value="0" class="block p-6 w-64 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">学習をはじめる</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">クリックした時間から<br>学習記録がスタートします</p>
                    </button>
                </div>
                </form>
            </div>
            <div class="m-4 sm:w-full max-w-sm">
                <a href="{{route('learn.learning')}}" class="block p-6 w-64 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">学習を終える</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">今日の学習状況を記録して<br>終了しましょう</p>
                    </button>
                </a>
            </div>
            <div class="m-4 sm:w-full max-w-sm">
                <a href="{{route('wakeup.create')}}" class="block p-6 w-64 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">起きる</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">早起きだけの日は<br>早起き記録をつけましょう</p>
                </a>
            </div>
        </div>
    </div>
</section>





<!--    <div class="py-12">-->
<!--        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">-->
<!--            <form action="{{ route('learn.store') }}" method="POST">-->
<!--                @csrf-->
<!--                <input type="hidden" name="start_at" value="{{ \Carbon\Carbon::now() }}">-->
<!--                <button type="submit" name="manual" value="0"-->
<!--                    class="bg-red-500 text-white font-semibold py-2 px-8 rounded-md">-->
<!--                    学習をはじめる-->
<!--                </button>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="py-12">-->
<!--        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">-->
<!--            <button class="bg-red-500 text-white font-semibold py-2 px-8 rounded-md">-->
<!--                <a href="{{route('wakeup.create')}}">-->
<!--                    {{ __('起きる') }}</a>-->
<!--            </button>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="py-12">-->
<!--        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">-->
<!--            <button class="bg-red-500 text-white font-semibold py-2 px-8 rounded-md">-->
<!--                <a href="{{route('statement.create')}}">-->
<!--                    {{ __('早起きを記録') }}</a>-->
<!--            </button>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="py-12">-->
<!--        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">-->
<!--            <button class="bg-red-500 text-white font-semibold py-2 px-8 rounded-md">-->
<!--                <a href="{{route('goal.create')}}">-->
<!--                    {{ __('目標設定') }}</a>-->
<!--            </button>-->
<!--        </div>-->
<!--    </div>-->
<!--<div class="bg-white py-6 sm:py-8 lg:py-12">-->
<!--  <div class="max-w-screen-xl px-4 md:px-8 mx-auto">-->
    <!-- text - start -->
<!--    <div class="mb-8 md:mb-12">-->
<!--      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Our Team by the numbers</h2>-->

<!--      <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>-->
<!--    </biv>-->
    <!-- text - end -->

<!--    <div class="grid grid-cols-2 md:grid-cols-2 gap-4 lg:gap-8">-->
      <!-- stat - start -->
<!--        <div class="flex flex-col justify-center items-center bg-gray-100 rounded-lg p-4 md:p-8">-->
<!--            <form action="{{ route('learn.store') }}" method="POST">-->
<!--                @csrf-->
<!--                <input type="hidden" name="start_at" value="{{ \Carbon\Carbon::now() }}">-->
<!--                    <button type=submit name="manual" value="0">-->
<!--                        <div class="text-indigo-500 text-xl sm:text-2xl md:text-3xl font-bold">朝学習を始める！</div>-->
<!--                        <div class="text-sm sm:text-base font-semibold">クリックした時間から学習記録がスタートします</div>-->
<!--                    </button>-->
<!--            </form>-->
<!--        </div>cd-->
      <!-- stat - end -->

       <!--stat - start -->
<!--      <div class="flex flex-col justify-center items-center bg-gray-100 rounded-lg p-4 md:p-8">-->
<!--        <div class="text-indigo-500 text-xl sm:text-2xl md:text-3xl font-bold">朝学習を終える</div>-->
<!--        <div class="text-sm sm:text-base font-semibold">今日の学習状況を記録して終了しましょう</div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

</x-app-layout>