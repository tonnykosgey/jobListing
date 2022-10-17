
    <header class="text-center pt-4">
        <h2 class="text-2xl font-bold uppercase mb-1">
            APPLY FOR THIS JOB
        <!-- </h2>
        <p class="mb-4">Post a gig to find a developer</p> -->
    </header>

    <form action="">
        <div class="row">
            <div class="col mb-6">
                <label
                    for="fname"
                    class="inline-block text-lg mb-2"
                    >First Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="fname"
                />
            </div>

            <div class="col mb-6">
                <label
                    for="lname"
                    class="inline-block text-lg mb-2"
                    >Last Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="lname"
                />
            </div>
        </div>


        <div class="mb-6">
            <label for="phone" class="inline-block text-lg mb-2"
                >Phone Number</label
            >
            <input
                type="tel"
                class="border border-gray-200 rounded p-2 w-full"
                name="phone"
                placeholder="+2547........"
            />
        </div>


        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Contact Email</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
            />
        </div>

        <div class="mb-6">
            <label
                for="website"
                class="inline-block text-lg mb-2"
            >
                Website/Application URL
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="website"
            />
        </div>

        <div class="mb-6">
            <label for="skills" class="inline-block text-lg mb-2">
                Skills (Comma Separated)
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="skills"
                placeholder="Example: Laravel, Backend, Postgres, etc"
            />
        </div>

        <div class="mb-6">
            <label for="cv" class="inline-block text-lg mb-2">
                CV PDF
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="cv"
            />
        </div>

        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
            >
                Brief Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
                placeholder="Include tasks, requirements, salary, etc"
            ></textarea>
        </div>

        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                APPLY
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>