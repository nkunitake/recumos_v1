<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('リカモス | 学習記録') }}
    </h2>
  </x-slot>

  <div class="py-4">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <section class="text-gray-600 body-font">
              <div class="container px-5 py-4 mx-auto">
                <div class="w-full mx-auto overflow-auto">
                  <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                      <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">日程</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">開始日時</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">終了日時</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">感情</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">一言コメント</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($learns as $learn)
                      <tr>
                        <td class="text-blue-500 px-4 py-3">{{ \Carbon\Carbon::parse($learn->start_at)->month }}月{{ \Carbon\Carbon::parse($learn->start_at)->day }}日</a></td>
                        <td class="px-4 py-3">{{ \Carbon\Carbon::parse($learn->start_at)->hour }}時{{ \Carbon\Carbon::parse($learn->start_at)->minute }}分</td>
                        <td class="px-4 py-3">{{ \Carbon\Carbon::parse($learn->end_at)->hour }}時{{ \Carbon\Carbon::parse($learn->end_at)->minute }}分</td>
                        <td class="px-4 py-3">{{ $learn->feeling }}</td>
                        <td class="px-4 py-3">{{ $learn->comment }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
                </div>
              </div>
            </section>
          </div>
      </div>
  </div>
  
</x-app-layout>