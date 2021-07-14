@extends('layouts.app');

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row mt-5">
                        <div class="col-md-12">
                        <h2>Seller Property - Index</h2>
                        <a href="{{ route('seller_prop.create') }}"class="btn btn-success">Create new property</a>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif

                    <table class="table table-bordered">

                        <tr>
                            <th>No.</th>
                            <th>ชื่อเรื่อง</th>
                            <th>สถานะผู้ประกาศ</th>
                            <th>ประเภทการขาย</th>
                            <th width="280px">Action</th>
                        </tr>

                        @foreach ($data as $key => $value)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $value->topic_name }}</td>
                                <td>{{ $value->seller_status }}</td>
                                <td>{{ $value->sell_type }}</td>
                                <td>
                                    <form action="{{ route('seller_prop.destroy', $value->id) }}" method="POST">
                                        <a href="{{ route('seller_prop.show', $value->id) }}" class="btn btn-primary">Show</a>
                                        <a href="{{ route('seller_prop.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </table>

                    {!! $data->links() !!}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection