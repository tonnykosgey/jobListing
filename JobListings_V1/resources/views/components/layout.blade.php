<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{asset('images/favicon.ico')}}" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Job Listings and Projects</title>
    </head>
    <body class="mb-48">
        {{-- nav bar --}}
        <nav class="flex justify-between items-center mb-4 p-6 p-6 bg-laravel ">
            <a href="/"
                >
                <h1 class="text-4xl font-bold  text-white">
                Job<span class="text-black">Listings</span>
                
            </h1>
            </a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="register.html" class="hover:text-white"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="login.html" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
            </ul>
        </nav>
        
{{-- main content --}}
        <main>
            {{$slot}}
        </main>

{{-- footer.css --}}
        <footer
            class=" bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Create Your Job Listing</p>

            <a
                href="create.html"
                class="absolute  right-10 bg-black text-white py-2 px-5"
                >Post Job</a
            >
        </footer>
    </body>
</html>
