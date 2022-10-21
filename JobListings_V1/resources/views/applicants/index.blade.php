<x-layout>
    @include('partials._search');
    
  <a href="{{ '/' }}" class="inline-block text-black ml-4 mb-4"
  ><i class="fa-solid fa-arrow-left"></i> Back
</a>

    <div class="row">
        <div class="col-md-10 mx-auto">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Job</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                    @unless(count($applicants) == 0 )
                      @foreach($applicants as $applicant)
                      <tr>
                        <x-applicants-table :applicant='$applicant'/>
                      </tr>
                      

                      @endforeach

                      @else
                      <p>No Listing Found</p>
                    @endunless
                    
                  
                  
                </tbody>
              </table>
        </div>
    </div>
</x-layout>