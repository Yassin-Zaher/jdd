@extends('layouts.auth')


@section('content')
<div class="relative flex  text-gray-800 antialiased flex-col justify-center  bg-gray-50 py-2 sm:py-4">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
        <span class="text-2xl font-light ">Login to your account</span>
        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
            <div class="h-2 bg-purple-400 rounded-t-md"></div>
        <div class="bg-white shadow-md rounded-lg p-8">
            @if (count($errors) > 0)
                <div class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">
                    <strong>Whoops!</strong> There were problems with input:
                    <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form-horizontal"
                  role="form"
                  method="POST"
                  action="{{ url('login') }}">
                <input type="hidden"
                       name="_token"
                       value="{{ csrf_token() }}">

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password"
                           id="password"
                           name="password"
                           placeholder="Password"
                           placeholder="Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                </div>


                        <!-- Rest of the form -->
        <div class="mb-4">
            <label for="remember" class="inline-flex items-center">
                <input type="checkbox"
                    id="remember"
                    name="remember"
                    class="form-checkbox">
                <span class="ml-2">Remember me</span>
            </label>
        </div>

            <div class="flex justify-between items-baseline">
                <button type="submit"
                class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 ">
                    Login
                </button>
                <a href="{{ route('auth.password.reset') }}" class="text-sm hover:underline">Forgot password</a>
            </div>

</form>
</div>
</div>
</div>
</div>
</div>

@endsection


