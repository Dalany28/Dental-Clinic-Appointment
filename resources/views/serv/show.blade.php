<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .mb {
        margin-bottom: 302px;  
    }
</style>

<body>
    @extends('layouts.main')

@section('content')
<div class="container mb">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Book Appointment</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('appointment.book') }}">
                        @csrf
                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <div class="form-group">
                            <label for="datepicker">Select Date:</label>
                            <input type="text" class="form-control" id="datepicker" name="date">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Datepicker JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function () {
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script>
@endpush

</body>
</html>