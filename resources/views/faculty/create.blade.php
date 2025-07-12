@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 rounded-4 shadow-lg" style="background-color: #0b1d3a; color: #ffffff;">
                <div class="card-header fs-4 fw-bold text-center"
                    style="background-color:rgb(25, 45, 82); border-top-left-radius: 20px; border-top-right-radius: 20px; color: #ffffff; box-shadow: 0 4px 8px rgba(0,0,0,0.3);">
                    Add New Faculty
                </div>

                <div class="card-body">
                    <form action="{{ route('faculties.store') }}" method="POST">
                        @csrf

                        @php
                            $inputStyle = 'background-color: #112a44; color: #ffffff; border: 1px solid #1f4068; box-shadow: inset 0 1px 3px rgba(0,0,0,0.3);';
                        @endphp

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Name</label>
                            <input type="text" name="name" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" name="email" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Phone Number</label>
                            <input type="text" name="phone" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">DOB</label>
                            <input type="date" name="dob" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Gender</label>
                            <select name="gender" class="form-select rounded-3" style="{{ $inputStyle }}" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Department</label>
                            <input type="text" name="department" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Qualification</label>
                            <input type="text" name="qualification" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Designation</label>
                            <input type="text" name="designation" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Subjects</label>
                            <input type="text" name="subjects" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Address</label>
                            <textarea name="address" rows="3" class="form-control rounded-3" style="{{ $inputStyle }}"></textarea>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="submit" class="btn rounded-3 px-4 py-2 fw-semibold shadow" style="background-color: #1abc9c; border: none; color: white;">
                                Save Faculty
                            </button>

                            <a href="{{ route('faculties.index') }}" class="btn rounded-3 px-4 py-2 fw-semibold shadow" style="background-color: #34495e; border: none; color: white;">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
