@if(session()->has('message'))
<div 
    x-data="{show: true}"
    x-init="setTimeout(()=> show = false, 3000)" 
    x-show="show" 
    class="fixed top-0 lef-0.5   transform -translate-x-0.5 bg-white text-laravel px-48 py-3">

    <p>
        {{session('message')}}
    </p>

</div>



{{-- <div 
        x-data="{show: true}"
        x-init="setTimeout(()=> show = false, 3000)" 
        x-show="show"
        class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">

            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p>
                        {{session('message')}}
                    </p>
                </div>
            </div>
            </div> --}}

      </div>
@endif