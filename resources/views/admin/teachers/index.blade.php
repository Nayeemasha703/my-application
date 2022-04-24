<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="card col-md-12">
                            <div class="card-header m-2">{{ __('All Teacher') }}
                                <a href="{{ route('teachers.create') }}" class="btn btn-sm btn-primary m-2"
                                    style="float:right">Add
                                    New Teacher</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive table-strioe">
                                    <thead>
                                        <tr>
                                            <td>SL</td>
                                            <td>Name</td>
                                            <td>Phone</td>
                                            <td>Email</td>
                                            <td>Class</td>
                                            <td>Book</td>
                                            <td>Time</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teachers as $key => $row)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->phone }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>
                                                    {{ $row->class_id }}
                                                </td>
                                                <td>
                                                    {{ $row->book_id }}
                                                </td>
                                                <td>
                                                    {{ 'Create: ' . $row->created_at }} <br>
                                                    {{ 'Update: ' . $row->updated_at }}
                                                </td>
                                                <td>
                                                    <form action="{{ route('teachers.destroy', $row->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <a href="{{ route('teachers.show', $row->id) }}"
                                                            class="btn btn-info btn-sm m-1">View</a>
                                                        <a href="{{ route('teachers.edit', $row->id) }}"
                                                            class="btn btn-primary btn-sm m-1">Edit</a>
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm m-1 text-primary">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if (session()->has('success'))
                                    <strong class="text text-success">{{ session()->get('success') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
