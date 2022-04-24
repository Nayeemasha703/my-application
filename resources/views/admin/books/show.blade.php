<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="card col-md-12">
                            <div class="card-header">{{ __('All Books') }}
                                <a href="{{ route('books.index') }}" class="btn btn-sm btn-primary m-2"
                                    style="float:right">All Books</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive table-strioe">
                                    <thead>
                                        <tr>
                                            <td>Book Name</td>
                                            <td>Class</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $books->book_name }}</td>
                                            <td>
                                                @foreach ($classes as $row)
                                                    @if ($row->id == $books->class_id)
                                                        {{ $row->class_name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('books.edit', $books->id) }}"
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
