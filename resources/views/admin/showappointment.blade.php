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
                        <th class="p-2">Customer name</th>
                        <th class="p-2">Email</th>
                        <th class="p-2">Phone</th>
                        <th class="p-2">Doctor name</th>
                        <th class="p-2">Date</th>
                        <th class="p-2">Message</th>
                        <th class="p-2">Status</th>
                        <th class="p-2">Approved</th>
                        <th class="p-2">Canceled</th>
                        <th class="p-2">Send Mail</th>
                    </tr>

                    @foreach($data as $appoint)
                        <tr>
                            <td class="p-2">{{ $appoint->name }}</td>
                            <td class="p-2">{{ $appoint->email }}</td>
                            <td class="p-2">{{ $appoint->phone }}</td>
                            <td class="p-2">{{ $appoint->doctor }}</td>
                            <td class="p-2">{{ $appoint->date }}</td>
                            <td class="p-2">{{ $appoint->message }}</td>
                            <td class="p-2">{{ $appoint->status }}</td>
                            <td class="p-2">
                                <a href="{{ url('approved', $appoint->id) }}" class="btn btn-primary">Approved</a>
                            </td>
                            <td class="p-2">
                                <a href="{{ url('canceled', $appoint->id) }}" class="btn btn-danger">Canceled</a>
                            </td>
                            <td class="p-2">
                                <a href="{{ url('emailview', $appoint->id) }}" class="btn btn-info">Mail Send</a>
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
