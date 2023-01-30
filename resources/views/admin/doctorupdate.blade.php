<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/public">

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

                    <form method="POST" action="{{ url('editdoctor', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Doctor Name</label>
                            <input type="text" name="name" class="form-control text-danger" id="name" value="{{ $data->name }}" placeholder="Enter doctor name.." required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Doctor Number</label>
                            <input type="number" name="phone" class="form-control text-danger" id="phone" value="{{ $data->phone }}" placeholder="Enter doctor number.." required>
                        </div>
                        <div class="mb-3">
                            <label for="speciality" class="form-label">Speciality</label>
                            <input type="text" name="speciality" class="form-control text-danger"  value="{{ $data->speciality }}" placeholder="Enter doctor speciality.." required>
                        </div>
                        <div class="mb-3">
                            <label for="room" class="form-label">Room Number</label>
                            <input type="text" name="room" class="form-control text-danger" id="room" value="{{ $data->room }}" placeholder="Enter doctor room.." required>
                        </div>
                        <div class="mb-3">
                            <label for="room" class="form-label">Old Doctor Image</label>
                            <img style="width: 100px;" src="doctorimage/{{ $data->image }}" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Doctor Photo</label>
                            <input type="file" name="file">
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
