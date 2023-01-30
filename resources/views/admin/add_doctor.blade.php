<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.css')

</head>
<body>
<div class="container-scroller">

@include('admin.sidebar')

@include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container mt-5" >
            <div class="row justify-content-center">
                <div class="col-md-6">

                    @if(session()->has('message'))
                        <div class="alert alert-info">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('upload_doctor') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Doctor Name</label>
                            <input type="text" name="name" class="form-control text-white" id="name" placeholder="Enter doctor name.." required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Doctor Number</label>
                            <input type="number" name="phone" class="form-control text-white" id="phone" placeholder="Enter doctor number.." required>
                        </div>
                        <div class="mb-3">
                            <label for="speciality" class="form-label">Speciality</label>
                            <select name="speciality" id="speciality" class="form-control bg-white" required>
                                <option value="">Select</option>
                                <option value="skin">Skin</option>
                                <option value="eye">Eye</option>
                                <option value="nose">Nose</option>
                                <option value="heard">Heard</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="room" class="form-label">Room Number</label>
                            <input type="text" name="room" class="form-control text-white" id="room" placeholder="Enter doctor room.." required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Doctor Photo</label>
                            <input type="file" name="image" required>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@include('admin.script')

</body>
</html>
