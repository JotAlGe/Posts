<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
</head>
<body class="grid content-center">
<!-- component -->
    <div class="grid grid-cols-6 gap-2 auto-rows-max h-1/2 h-screen h-5/6">
        <div class="col-start-4 col-span-6 mx-auto bg-white shadow-md rounded-md px-6 py-4 my-6">
            <div class="sm:flex sm:justify-between">
                <div class="flex items-center">
                    <img class="h-12 w-12 rounded-full" src="https://lh3.googleusercontent.com/a-/AOh14Gi0DgItGDTATTFV6lPiVrqtja6RZ_qrY91zg42o-g" alt="">
                    <div class="ml-2">
                        <h3 class="text-lg text-green-500 font-medium">
                            {{ $user->name }}
                        </h3>
                        <span class="text-gray-600">{{ $user->email }}</span>
                    </div>
                </div>
                <div class="mt-2 sm:mt-0">
                    <button class="flex items-center text-white bg-blue-600 rounded px-2 py-1 hover:bg-blue-500 focus:outline-none focus:shadow-outline">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="ml-1 text-sm">Follow</span>
                    </button>
                </div>
            </div>
            <div class="flex justify-between items-center mt-4">
                <div>
                    <h4 class="text-gray-600 text-sm">Registrdo: </h4>
                    <span class="mt-2 text-xl font-medium text-gray-800">{{ $user->created_at->diffForHumans() }}</span>
                </div>
                <div>
                    <h4 class="text-gray-600 text-sm">Submissions</h4>
                    <span class="mt-2 text-xl font-medium text-gray-800">12171</span>
                </div>
                <div>
                    <h4 class="text-gray-600 text-sm">Reviews</h4>
                    <span class="mt-2 text-xl font-medium text-gray-800">35</span>
                </div>
            </div>
            <div class="mt-3">
                <h4 class="text-gray-600 text-sm">User Score</h4>
                <span class="mt-2 text-xl font-medium text-gray-800">21%</span>
            </div>
            
            <a class="block mt-4 text-green-500 hover:underline" href="{{ route('dashboard') }}">Volver</a>
        </div>
    </div>


</body>
</html>
