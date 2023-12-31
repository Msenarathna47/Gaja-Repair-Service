@extends('backend.manager.main_master')
@section('index')
<div class="col-md-12">
    <div class="card">
            <div class="card-body">
                <h4 class="card-title">Appointment Details</h4>

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Full Name</label>
                    <div class="col-sm-9">
                        <input disabled ="text" class="form-control" value="{{ $appointment->fullName }}" disabled>
                    </div>
                </div>               

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input disabled ="text" value="{{ $appointment->phoneNumber}}" class="form-control" >
                    </div>
                </div>          

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input disabled ="text" class="form-control" value="{{ $appointment->email}}" >
                    </div>
                </div>          

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Address</label>
                    <div class="col-sm-9">
                        <input disabled ="text" class="form-control" value="{{  $appointment->address }}">
                    </div>
                </div>    
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Car Model</label>
                    <div class="col-sm-9">
                        <input disabled ="text" class="form-control" value="{{ $appointment->carModel}}">
                    </div>
                </div>    
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Car Year</label>
                    <div class="col-sm-9">
                        <input disabled ="text" class="form-control" value="{{ $appointment->carYear}}">
                    </div>
                </div>    
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">License Plate</label>
                    <div class="col-sm-9">
                        <input disabled ="text" class="form-control" value="{{ $appointment->licensePlate}}">
                    </div>
                </div>    
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Transmission Type</label>
                    <div class="col-sm-9">
                        <input disabled ="text" class="form-control" value="{{ $appointment->transmissiontype}}">
                    </div>
                </div>    
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Fuel Type</label>
                    <div class="col-sm-9">
                        <input disabled ="text" class="form-control" value="{{ $appointment->fuelfype}}">
                    </div>
                </div>    
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Service Type</label>
                    <div class="col-sm-9">
                        <input disabled ="text" class="form-control"  value="{{ $appointment->serviceSelection}}">
                    </div>
                </div>    
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">preferred Date Time</label>
                    <div class="col-sm-9">
                        <input disabled ="text" class="form-control" value="{{ $appointment->preferredDateTime}}">
                    </div>
                </div>    
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea disabled class="form-control"> {{  $appointment->discription }}</textarea>
                        </div>
                    </div>
    </div>

</div>

<div class="col-md-12">
    <div class="card">
        <form class="form-horizontal" method="POST" action="{{ route('corform.appointment')}}">
            @csrf

            <input  type="text" hidden value="{{$appointment->id}}" name="id">

            <div class="border-top">
                <div class="card-body">
                    <button class="btn btn-primary">conform</button>
                </div>
            </div>
        </form>
    </div>

</div>
           
@endsection
