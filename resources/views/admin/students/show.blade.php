<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="card col-md-12">
                            <div class="card-header">{{ __('All Students') }}
                                <a href="{{ route('students.index') }}" class="btn btn-sm btn-primary m-2"
                                    style="float:right">All
                                    New Student</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive table-strioe">
                                    <thead>
                                        <tr>
                                            <td>Roll</td>
                                            <td>Name</td>
                                            <td>Phone</td>
                                            <td>Class</td>
                                            <td>Email</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $students->roll }}</td>
                                            <td>{{ $students->name }}</td>
                                            <td>{{ $students->phone }}</td>
                                            <td>
                                                @foreach ($classes as $row)
                                                    @if ($row->id == $students->class_id)
                                                        {{ $row->class_name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{ $students->email }}</td>
                                            <td>
                                                <a href="{{ route('students.edit', $students->id) }}"
                                                    class="btn btn-primary btn-sm m-1">Edit</a>
                                            </td>
                                        </tr>
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
