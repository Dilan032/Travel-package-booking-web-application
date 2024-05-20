@extends('layouts/admin-layouts/main-structure')

@section('admincontent')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    {{-- back to page --}}
    <div class="flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a href="{{route('admin.travelPackage.show')}}" type="button" class="btn btn-dark">
            <img src="{{ asset('image/help-tools/back.png') }}" alt="add icon" width="20px">    
            Back
        </a>
    </div>
          {{-- To display validation errors or success messages --}}
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul class="fw-medium">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                  <li class="fw-light">try again</li>
              </ul>
          </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


    <h2 class="fw-light mt-2">Add new Travel Package</h2>

    <div class="container mt-4">

          <form action="{{route('admin.addPackage.store')}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="mb-3 fw-bold">
              <label for="recipient-name" class="col-form-label fw-semibold">Package Name</label>
              <input type="text" name="package_name" value="{{old('package_name')}}" class="form-control" id="recipient-name">
            </div>

            <div class="row g-3 mt-3 fw-bold">
                <div class="col-sm">
                  <input type="file" value="{{old('image_1')}}" name="image_1" class="form-control" placeholder="image 1" aria-label="City">
                </div>
                <div class="col-sm">
                  <input type="file"  value="{{old('image_2')}}" name="image_2" class="form-control" placeholder="image 2" aria-label="State">
                </div>
                <div class="col-sm">
                  <input type="file"  value="{{old('image_3')}}" name="image_3" class="form-control" placeholder="image 3" aria-label="Zip">
                </div>
            </div>

            <div class="row g-3 mt-3 fw-bold">
                <div class="col-md-2">
                    <label for="inputCity" class="form-label">Duration</label>
                    <input type="text"  value="{{old('duration')}}" name="duration" class="form-control" id="inputCity">
                </div>
                <div class="col-md-2">
                    <label for="inputState" class="form-label">Duration Type</label>
                    <select id="inputState" value="{{old('duration_type')}}" name="duration_type" class="form-select">
                        <option > Days </option>
                        <option> Hours </option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputState" class="form-label ">Tour Type</label>
                    <select id="inputState" value="{{old('tour_type')}}" name="tour_type" class="form-select">
                        <option > Day Tour </option>
                        <option> Round Tour </option>
                    </select>
                </div>
            </div>
            
            <div class="mt-3">
              <label for="message-text" class="col-form-label fw-semibold">Overview</label>
              <textarea name="overview" value="{{old('overview')}}"  class="form-control" rows="5">  </textarea>
            </div>

            <div class="mt-3">
                <label for="message-text" class="col-form-label fw-semibold">Include Things</label>
                <textarea name="included_things" value="{{old('included_things')}}" class="form-control" id="includeThings" rows="5">  </textarea>
            </div>

            {{-- <div class="mt-3">
                <label for="recipient-name" class="col-form-label fw-semibold">Tour Plane Title</label>
                <input type="text" name="tourPlaneTitle" value="{{old('')}}" class="form-control" id="recipient-name">
            </div> --}}

            <div class="mt-3">
                <label for="message-text" class="col-form-label fw-semibold">Tour Plane Title & Description</label>
                <textarea name="tour_plane_description" value="{{old('tour_plane_description')}}"  class="form-control" id="tourPlaneDescription" rows="5">  </textarea>
            </div>

            <div class="mt-3">
                <label for="recipient-name" class="col-form-label fw-semibold">Tour Package Price Start From</label>
                <input type="text" name="price_start_from" value="{{old('price_start_from')}}" class="form-control" id="recipient-name">
            </div>

            <div class="row g-3 mt-3 fw-bold">
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Per Adult Fee</label>
                    <input type="text" name="per_adult_fee" value="{{old('per_adult_fee')}}" class="form-control" id="inputCity">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Per Child Fee</label>
                    <input type="text" name="per_child_fee" value="{{old('per_child_fee')}}" class="form-control" id="inputCity">
                </div>
            </div>

            <div class="row g-3 mt-3 fw-bold">
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Service Fee</label>
                    <input type="text" name="service_fee" value="{{old('service_fee')}}" class="form-control" id="inputCity">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Booking Fee</label>
                    <input type="text" name="booking_fee" value="{{old('booking_fee')}}" class="form-control" id="inputCity">
                </div>
            </div>


            <div class="modal-footer gap-3 mt-3">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Add Package</button>
            </div>

            <br>

          </form>

    </div>
</main>
    
        
@endsection

