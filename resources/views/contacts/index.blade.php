<x-layout>
 @if(Session::has('message'))
  <p class="alert alert-info">{{ Session::get('message') }}</p>
 @endif
<button><a href="{{route('newsletter')}}">Send Newsletter to all</a></button><br><br>
 <div class="card">
  @foreach($cforms as $cforms)
   <div class="card">
     Fullname: {{$cforms->fullname}}<br>
     Email: {{$cforms->email}}<br>
     Mobile Number: {{$cforms->mobileno}}<br>
     Comment/Inquiry: {{$cforms->comment}}
   </div><br>
  @endforeach
 </div>
</x-layout>