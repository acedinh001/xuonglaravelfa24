@extends('master')

@section('title', 'Quản lý khách hàng')

@section('content')
    <h1>Quản lý khách hàng</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Is Active</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $customer)
                    <tr class="">
                        <td scope="row">{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->adress }}</td>
                        <td>
                            <img src="{{ Storage::url($customer->avatar) }}" alt="" width="100px">
                        </td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            @if ($customer->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Not Active</span>
                            @endif

                        </td>
                        <td>{{ $customer->created_at }}</td>
                        <td>{{ $customer->updated_at }}</td>
                        <td>
                            <a class="btn btn-secondary" href="{{ route('customers.show', $customer) }}"
                                role="button">Show</a>
                            <a class="btn btn-success" href="{{ route('customers.edit', $customer) }}"
                                role="button">Update</a>
                            <a class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn thực hiện thao tác?')"
                                href="{{ route('customers.destroy', $customer) }}" role="button">XC</a>
                            <a class="btn btn-dark" onclick="return confirm('Bạn có chắc muốn thực hiện thao tác?')"
                                href="{{ route('customers.forceDestroy', $customer) }}" role="button">XM</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $data->links() }}
    </div>

@endsection
