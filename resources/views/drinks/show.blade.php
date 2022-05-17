<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Drink Menu') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 ">


          <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ $Drink->Images }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <div class="d-flex justify-between mr-2">
                    <h2 class="card-title text-dark">{{ $Drink->Title }}</h2>
                    <h4 class="card-text text-info ">{{ $Drink->Type }}</h4>
                  </div>
                  <hr>
                  <p class="card-text">{{ $Drink->SmallTitle }}</p>
                  <p class="card-text"><small class="text-muted">{{ $Drink->Description }}</small></p>
                  <div class="d-flex justify-between mr-2" style="align-items: center;">
                    <h6>尺寸：{{$Drink->Size }} 價錢：{{ $Drink->Price }}</h6>
                    <div>
                      <a href="{{ route('drinks.show', $Prev) }}" class="btn btn-outline-info mr-2">PREV</a>
                      <a href="{{ route('drinks.show', $Next) }}" class="btn btn-outline-info">NEXT</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>