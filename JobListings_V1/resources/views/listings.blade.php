<x-layout>

@include('partials._hero');
@include('partials._search')

{{-- All Job Listings --}}
<div class="">
    <div class="lg:grid lg:grid-cols-2 gap-10 space-y-4 md:space-y-0 mx-10 ">

        @unless(count($listings) == 0 )
        @foreach($listings as $listing)

        <x-listing-card :listing='$listing'/>

        @endforeach

        @else
        <p>No Listing Found</p>
        @endunless

    </div>
</div>

</x-layout>