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
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark Otto</td>
                    <td>mo@gmail.com</td>
                    <td>0791181729</td>
                    <td>JOb A Listing Title</td>
                    <td>pending</td>
                    <td><a href="/single_applicant"><button type="button" class="btn bg-laravel btn-success">View</button></a></td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
    </div>
</x-layout>