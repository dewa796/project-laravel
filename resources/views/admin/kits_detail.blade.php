@extends('templates.main')

@section('content')
    
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

            <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <h4 class="card-title card-title-dash">{{ $title }}</h4>
                    <p class="card-subtitle card-subtitle-dash">Created at {{ $kits->created_at }}</p>
                </div>
            </div>

                <div class="row">
                        
                    {{-- Text --}}
                    <div class="col">
                        <div class="form-group">

                            <div class="input-group mb-1">
                                <div class="input-group-prepend w-50">
                                    <span class="input-group-text bg-dark text-bold">Kits Id</span>
                                </div>
                                <input type="text" class="form-control" value="{{ $kits->id }}">
                                </div>

                            <div class="input-group mb-1">
                                <div class="input-group-prepend w-50">
                                    <span class="input-group-text bg-dark text-bold">Item Name</span>
                                </div>
                                <input type="text" class="form-control" value="{{ $kits->kits_name }}">
                            </div>

                            <div class="input-group mb-1">
                                <div class="input-group-prepend w-50">
                                    <span class="input-group-text bg-dark text-bold">Type</span>
                                </div>
                                <input type="text" class="form-control" value="{{ $kits->type }}">
                            </div>

                            <div class="input-group mb-1">
                                <div class="input-group-prepend w-50">
                                    <span class="input-group-text bg-dark text-bold">Description</span>
                                </div>
                                <input type="text" class="form-control" value="{{ $kits->description }}">
                                
                            </div>
                            
                        </div>
                    </div>
                    {{-- End Text --}}

                    {{-- Image --}}
                    <div class="col">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ url('assets/photos/'.$kits->image) }}" class="d-block w-100" alt="...">
                            </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Image --}}

                </div>
        
                <div>
                    <a class="btn btn-block btn-md btn-danger text-white" href="/inventory/kits">Back to Kits Inventory</a>
                </div>

          </div>
        </div>
      </div>

@endsection