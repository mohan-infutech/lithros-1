@extends('adminlte::page')

@section('title', 'Create New Openings')

@section('content')

<div class="row">
    <div class="col-md-6 mx-auto">
        @if(session('success'))
            <script>
                $(document).ready(function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: '{{ session('success') }}',
                    });
                });
            </script>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="jobForm" action="{{ route('openings.store') }}" method="post" autocomplete="off">
            @csrf
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-fw fa-plus"></i> Create New Openings</h3>
                    <div class="card-tools">
                        <a href="{{ route('openings.list-job') }}" class="btn btn-link btn-sm p-0"><i class="fas fa-fw fa-reply"></i> Back to Job Listings</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="products-material-item-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Job Title" required>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type">Job Type:</label>
                                    <select id="type" class="form-control @error('type') is-invalid @enderror" name="type" required>
                                        <option value="Full time">Full time</option>
                                        <option value="Part time">Part time</option>
                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="experience">Experience:</label>
                                    <input type="text" id="experience" class="form-control @error('experience') is-invalid @enderror" name="experience" placeholder="Enter Experience" required>
                                    @error('experience')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="education">Education:</label>
                                    <input type="text" id="education" class="form-control @error('education') is-invalid @enderror" name="education" placeholder="Enter Education" required>
                                    @error('education')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="skills">Skills:</label>
                                    <input type="text" id="skills" class="form-control @error('skills') is-invalid @enderror" name="skills" placeholder="Enter Skills" required>
                                    @error('skills')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about">Job Description:</label>
                                    <textarea id="about" class="form-control @error('about') is-invalid @enderror" name="about" required></textarea>
                                    @error('about')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="salary">Salary:</label>
                                    <input type="number" id="salary" class="form-control @error('salary') is-invalid @enderror" name="salary" required>
                                    @error('salary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location">Location:</label>
                                    <input type="text" id="location" class="form-control @error('location') is-invalid @enderror" name="location" required>
                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="working_days">Working Days:</label>
                                    <select id="working_days" class="form-control @error('working_days') is-invalid @enderror" name="working_days" required>
                                        <option value="5">5 Days</option>
                                        <option value="6">6 Days</option>
                                        <option value="7">7 Days</option>
                                    </select>
                                    @error('working_days')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="working_hours">Working Hours:</label>
                                    <input type="text" id="working_hours" class="form-control @error('working_hours') is-invalid @enderror" name="working_hours" placeholder="09.00 AM - 06.00 PM" required>
                                    @error('working_hours')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('openings.list-job') }}" class="btn btn-outline-danger"><i class="fas fa-fw fa-times"></i> Cancel</a>
                    <button type="submit" class="btn btn-outline-primary"><i class="fas fa-fw fa-check"></i> Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- Submit Form with SweetAlert -->
<script>
    $('#jobForm').submit(function(event) {
        event.preventDefault();
        var form = $(this);
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function(data) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Openings created successfully.',
                });
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Failed to create Openings.',
                });
            }
        });
    });
</script>

@stop
