@extends('layouts.app');

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    <div class="row mt-5">
                        <div class="col-md-12">
                        <h2>Buyer Property - Matching</h2>
                        <!-- <a href="{{ route('buyer_prop.create') }}"class="btn btn-success">Create new property</a> -->
                        </div>
                    </div>

                    <!-- @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif -->

                    <table class="table table-bordered">

                        <tr>
                            <th>No.</th>
                            <th>ประเภทอสังหาริมทรัพย์</th>
                            <th>ชื่อโครงการ</th>
                            <th width="280px">Action</th>
                        </tr>

                        @foreach ($data2 as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->property_type }}</td>
                            <td>{{ $row->project_name}}</td>
                        </tr>
                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection