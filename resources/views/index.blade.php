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
            <button type="submit" name="manual" value="0" class="bg-red-500 text-white font-semibold py-2 px-8 rounded-md">
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
</x-app-layout>