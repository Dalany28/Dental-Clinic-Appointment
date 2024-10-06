<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    .container {
        margin-bottom: 88px;
    }
</style>
<body>
@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Booked Appointments</div>
                <div class="card-body">
                    @if($appointments->isNotEmpty())
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment->service }}</td>
                                        <td>{{ $appointment->formatted_appointment_date }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('appointment.delete', ['id' => $appointment->id]) }}">
                                                @csrf
                                                <button type="button" class="btn-delete" style="background: none; border: none; cursor: pointer;" data-toggle="modal" data-target="#deleteModal{{$appointment->id}}"><i class="fas fa-trash-alt text-danger"></i></button>
                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="deleteModal{{$appointment->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$appointment->id}}" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel{{$appointment->id}}">Confirm Appointment Cancellation</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>This cancellation needs to be done before 24 hours of the appointment.</p>
                                                                <p>Are you sure you want to cancel this appointment?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Cancel Appointment</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No appointments booked yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Include Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
