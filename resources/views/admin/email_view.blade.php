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

                    <form method="POST" action="{{ url('sendmail', $data->id) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="greeting" class="form-label">Greeting</label>
                            <input type="text" name="greeting" class="form-control text-white">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <input type="text" name="body" class="form-control text-white">
                        </div>
                        <div class="mb-3">
                            <label for="actiontext" class="form-label">Action Text</label>
                            <input type="text" name="actiontext" class="form-control text-white">
                        </div>
                        <div class="mb-3">
                            <label for="actionurl" class="form-label">Action Url</label>
                            <input type="text" name="actionurl" class="form-control text-white">
                        </div>
                        <div class="mb-3">
                            <label for="endpart" class="form-label">End Part</label>
                            <input type="text" name="endpart" class="form-control text-white">
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
