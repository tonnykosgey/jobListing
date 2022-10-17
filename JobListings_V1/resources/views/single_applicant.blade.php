<x-layout>
  @include('partials._search');

  <a href="{{ '/applicants' }}" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
</a>

  <div class="row text-center">
      <div class="col-md-10 mx-auto table-responsive">
        
      <h1 class="pb-5 "><b>JOB APPLIED FOR: <i>{{}}</i></b></h1>
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
                  <td>Mark Otto</td>
                  <td>mo@gmail.com</td>
                  <td>0791181729</td>
                  <td>pending</td>
                </tr>
                
              </tbody>
            </table>
            <div class="row">
              <div class="col-md-6 mx-auto">
                <h1 class="p-3"><b>DESCRIPTION</b></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Blanditiis odio, nemo natus, dolor sint sequi modi animi vel ipsa, 
                    reprehenderit cum. Suscipit consequatur nisi, modi eaque iste magnam blanditiis! Voluptate?
                </p>
              <div class="p-4">
                <ul class="flex">
                  <li
                      class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                  >
                      <a href="#">Laravel</a>
                  </li>
                  <li
                      class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                  >
                      <a href="#">API</a>
                  </li>
                  <li
                      class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                  >
                      <a href="#">Backend</a>
                  </li>
                  <li
                      class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                  >
                      <a href="#">Vue</a>
                  </li>
              </ul>
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