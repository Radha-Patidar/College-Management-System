@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 rounded-4 shadow-lg" style="background-color: #0b1d3a; color: #ffffff;">
                <div class="card-header fs-4 fw-bold text-center" 
                    style="background-color:rgb(25, 45, 82); border-top-left-radius: 20px; border-top-right-radius: 20px; color: #ffffff; box-shadow: 0 4px 8px rgba(0,0,0,0.3);">
                    Edit Student
                </div>

                <div class="card-body">
                    <form action="{{ route('students.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        @php
                            $inputStyle = 'background-color: #112a44; color: #ffffff; border: 1px solid #1f4068; box-shadow: inset 0 1px 3px rgba(0,0,0,0.3);';
                        @endphp

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Name</label>
                            <input type="text" name="name" value="{{ $student->name }}" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" name="email" value="{{ $student->email }}" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Phone</label>
                            <input type="text" name="phone" value="{{ $student->phone }}" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Date of Birth</label>
                            <input type="date" name="dob" value="{{ $student->dob }}" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Gender</label>
                            <select name="gender" class="form-select rounded-3" style="{{ $inputStyle }}" required>
                                <option value="">Select</option>
                                <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ $student->gender == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Address</label>
                            <textarea name="address" rows="3" class="form-control rounded-3" style="{{ $inputStyle }}" required>{{ $student->address }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Course</label>
                            <input type="text" name="course" value="{{ $student->course }}" class="form-control rounded-3" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Enrollment Year</label>
                            <input type="number" name="enrollment_year" value="{{ $student->enrollment_year }}" class="form-control rounded-3" min="2000" max="2099" style="{{ $inputStyle }}" required>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="submit" class="btn rounded-3 px-4 py-2 fw-semibold shadow" style="background-color: #1abc9c; border: none; color: white;">
                                Update Student
                            </button>

                            <a href="{{ route('students.index') }}" class="btn rounded-3 px-4 py-2 fw-semibold shadow" style="background-color: #34495e; border: none; color: white;">
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
