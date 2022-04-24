<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>This is an CSRF Tolen Page</h2>
                    <form action="{{ route('student.store') }}" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="Write Your Name Here.">
                        <input type="email" name="email" placeholder="Write Your Email Here.">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
