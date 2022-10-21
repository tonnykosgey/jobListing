<x-layout>
  @include('partials._search');

  <a href="{{ '/applicants' }}" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
</a>

  <div class="row text-center">
      <div class="col-md-10 mx-auto table-responsive">
        
      <h1 class="pb-5 "><b>JOB APPLIED FOR: <i></i></b></h1>
          <table class="table table-hover">
              <thead> 
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$applicant['fname']}} {{$applicant['lname']}}</td>
                  <td>{{$applicant['email']}}</td>
                  <td>{{$applicant['phone']}}</td>
                  <td>{{$applicant['status']}}</td>
                </tr>
                
              </tbody>
            </table>
            <div class="row">
              <div class="col-md-6 mx-auto">
                <h1 class="p-3"><b>DESCRIPTION</b></h1>
                <p>
                  {{$applicant['description']}}
                </p>
              <div class="p-4">
                <x-applicant-tags :skillsCSV="$applicant->skills"/>
              </div>

            <div class="btn-group p-3" role="group" aria-label="Basic example">
              <button type="button" class="btn bg-success btn-success">Shortlist</button>
              <button type="button" class="btn bg-danger btn-danger">Reject</button>
              <button type="button" class="btn bg-primary btn-primary">Mark Pending</button>
            </div>
              </div>
            </div>
            
          </div>
  </div>
</x-layout>