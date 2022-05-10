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
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">SmallTitle</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Size</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($drinks as $i => $drink)
              <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $drink->Title }}</td>
                <td>{{ $drink->SmallTitle }}</td>
                <td>{{ $drink->Type }}</td>
                <td>{{ $drink->Price }}</td>
                <td>{{ $drink->Size }}</td>
                <td><button type="button" class="btn btn-outline-info">Edit</button></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row justify-content-md-center">
            @foreach ($drinks as $i => $drink)

            <div class="col-md-4 col-sm-6 col-12 d-flex justify-content-center">
              <div class="card mb-3 " style="width: 18rem;">
                <img class="card-img-top" src="{{ $drink->Images }}" alt="{{ $drink->Title }}">
                <div class="card-body d-flex justify-content-center">
                  <h5 class="card-title">{{ $drink->Title }}</h5>
                </div>
              </div>
            </div>
            @endforeach

          </div>

          <!-- <img src="/img/demo/drinks/alotOfRouge.jpeg" class="position-relative h-100 w-100 rounded-circle profile-image" alt="Dr. Codex Lantern" style="object-fit:cover; object-position:center"> -->
        </div>
      </div>
    </div>
  </div>
</x-app-layout>