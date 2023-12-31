@extends('admin.layout.main-layout')

@section('title', 'Labacces | Inventory')

@section('content')

    <div class="bg-light p-5">
        <h5> Add Laboratory</h5>
        <div class="container-fluid bg-white p-4 rounded-3 shadow mt-4">
            <form action="create-inventory-items" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col">
                        <label for="roomCapacity">Room Capacity</label>
                        <input type="integer" class="form-control mt-1" id="roomCapacity " name="roomCapacity" required>
                    </div>

                    <div class="col">
                        <label for="computerAvaiable">Avaiable Computer</label>
                        <input type="integer" class="form-control mt-1" id="computerAvaiable" name="computerAvaiable"
                            required>
                    </div>

                    <div class="col">
                        <label for="screenProjector">Screen Projector</label>
                        <input type="integer" class="form-control mt-1" id="screenProjector" name="screenProjector"
                            required>
                    </div>

                    <div class="col">
                        <label for="projector">Projector</label>
                        <input type="integer" class="form-control mt-1" id="projector" name="projector" required>
                    </div>
                    <div class="col">
                        <label for="lab">Select Laboratorium</label>
                        <select name="labolatoryId" id="lab" class="form-select">
                            <option selected>Choose Laboratorium Rooms</option>
                            @foreach ($laboratoriums as $laboratorium)
                                <option value="{{ $laboratorium->labolatoryId }}">
                                    {{ $laboratorium->laboratory_name }}
                                </option>
                            @endforeach
                        </select>

                    </div>


                </div>

                <div class="action-area mt-4">
                    <button type="submit" class="justify-content-end btn btn-success">Create</button>
                    <a href="/laboratory" class="btn btn-success"> Back</a>
                </div>


            </form>
        </div>


    </div>
@endsection
