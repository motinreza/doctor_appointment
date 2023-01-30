<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.css')

</head>
<body>
<div class="container-scroller">

@include('admin.sidebar')

@include('admin.navbar')

    <div class="page-body-wrapper">
        <div class="row mt-5">
            <div class="appointment-table">
                <table class="table-bordered text-black bg-light">
                    <tr>
                        <th class="p-2">Name</th>
                        <th class="p-2">Phone</th>
                        <th class="p-2">Speciality</th>
                        <th class="p-2">Room</th>
                        <th class="p-2">Image</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>

                    @foreach($data as $doctor)
                        <tr>
                            <td class="p-2">{{ $doctor->name }}</td>
                            <td class="p-2">{{ $doctor->phone }}</td>
                            <td class="p-2">{{ $doctor->speciality }}</td>
                            <td class="p-2">{{ $doctor->room }}</td>
                            <td class="p-2">
                                <img style="width: 100px;" src="doctorimage/{{ $doctor->image }}" alt="">
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure delete this!')" href="{{ url('deletedoctor', $doctor->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                            <td>
                                <a href="{{ url('doctorupdate', $doctor->id) }}" class="btn btn-primary">Update</a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

@include('admin.script')

</body>
</html>
