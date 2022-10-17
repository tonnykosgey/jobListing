@props(['applicant'])

<th scope="row">{{$applicant['id']}}</th>
<td>{{$applicant['fname']}} {{$applicant['lname']}}</td>
<td>{{$applicant['email']}}</td>
<td>{{$applicant['phone']}}</td>
<td>JOb A Listing Title</td>
<td>{{$applicant['status']}}</td>
<td><a href="/single_applicant/{{$applicant['id']}}"><button type="button" class="btn bg-laravel btn-success">View More</button></a></td>