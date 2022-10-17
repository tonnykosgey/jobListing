@props(['skillsCSV'])

@php
 $skills = explode(',', $skillsCSV);   
@endphp

<ul class="flex">

   @foreach($skills as $skill){

    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">

        <a href="/?tag={{$skill}}">{{$skill}}</a>

    </li>
    
    }

    @endforeach
</ul>