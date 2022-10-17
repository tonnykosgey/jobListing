@props(['listing'])

<!-- Item 1 -->
<div class="bg-gray-50 border border-gray-200 rounded p-10 ">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{ asset('/images/acme.png') }}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listing/{{ $listing['id'] }}">{{$listing['title']}}</a>
            </h3>
            <div class="text-xl font-bold mb-4"><a href="/listing/{{ $listing['id'] }}">{{ $listing['company'] }}</a></div>

            <x-listing-tags :tagsCSV="$listing->tags"/>
                
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing['location'] }}
            </div>
        </div>
    </div>
</div>