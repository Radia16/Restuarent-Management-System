@extends('admin.main_master')

@section('content')

    <div class="row">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Varient</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('foodvarient.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Food Name:</label>
                            <select name="food_name" class="form-control"  >
                            <option value="" selected="" disabled="">Select Food Name </option>
                                @foreach($foodvarient_edit as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $foodvarient_edit->food_name ? 'selected' : ''}} >
                                        {{ $item->expense-category_name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Varient Name:</label>
                            <input type="text" name="food_varient" value="{{$foodvarient_edit->food_varient}}"
                            class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Price:</label>
                            <input type="text" name="price" value="{{$foodvarient_edit->price}}" class="form-control" id="recipient-name">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>

@endsection
