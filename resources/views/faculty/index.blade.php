@extends('layouts.app')

<style>
    table.table td,
    table.table th {
        color: white !important;
    }

    .table .btn {
        font-weight: 600;
    }
</style>

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4" style="background-color: #0b1d3a; color: white;">
        <div class="card-header fs-4 fw-bold d-flex justify-content-between align-items-center"
            style="background-color: rgb(35, 57, 98); color: white; border-top-left-radius: 20px; border-top-right-radius: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.3);">
            Faculties List
            <a href="{{ route('faculties.create') }}" class="btn btn-success fw-semibold px-3 py-1 shadow rounded-3">
                + Add Faculty
            </a>
        </div>

        <div class="card-body">
            @if($faculties->isEmpty())
                <div class="alert alert-info text-center">No faculties found.</div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle text-white" style="--bs-table-bg: transparent;">
                        <thead style="background-color:rgb(40, 77, 123); color: white;">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Department</th>
                                <th>Qualification</th>
                                <th>Designation</th>
                                <th>Subjects</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faculties as $key => $faculty)
                                <tr style="background-color: rgba(255,255,255,0.05); color: white;">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $faculty->name }}</td>
                                    <td>{{ $faculty->email }}</td>
                                    <td>{{ $faculty->phone }}</td>
                                    <td>{{ $faculty->dob }}</td>
                                    <td>{{ $faculty->gender }}</td>
                                    <td>{{ $faculty->department }}</td>
                                    <td>{{ $faculty->qualification }}</td>
                                    <td>{{ $faculty->designation }}</td>
                                    <td>{{ $faculty->subjects }}</td>
                                    <td>
                                        <a href="{{ route('faculties.edit', $faculty->id) }}" class="btn btn-sm btn-warning rounded-3 shadow-sm">Edit</a>
                                        <form action="{{ route('faculties.destroy', $faculty->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger rounded-3 shadow-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>

                                   
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
