<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="py-12 ml-2">
    <form action="{{ route('phone.store') }}" method="post">
        @csrf

            <h2 class="text-2xl font-bold">Phone</h2>
            <div class="mt-8 max-w-md">
                <div class="grid grid-cols-1 gap-6">
                    <label class="block">
                        <span class="text-gray-700">Phone</span>
                        <input
                            type="text"
                            class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0
                            @error('phone') border-pink-600 @enderror"
                            placeholder=""
                            name="phone"
                            id="phone"
                        />
                        @error('phone')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </label>
                    <label class="block">
                        <input type="submit" class="bg-blue-500 text-white px-4 py-2 rounded" value="Test Phone"/>
                    </label>
                </div>
            </div>

    </form>
</div>

</body>
</html>
