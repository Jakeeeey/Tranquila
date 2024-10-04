<x-layout>
    <h1>Contact Us</h1>
     @if(Session::has('message'))
     <p class="alert alert-info">{{ Session::get('message') }}</p>
     @endif
    <div class="card">
     <form action="{{route('contactform')}}" method="post">
      @csrf
      <label for="fullname">Full Name</label><br>
      <input type="text" name="fullname" value="{{old ('fullname')}}" class="input"><br>
       @error('fullname')
        {{$message}}
       @enderror<br>
      <label for="email">Email</label><br>
      <input type="email" name="email" value="{{old ('email')}}" class="input"><br>
       @error('email')
        {{$message}}
       @enderror<br>
      <label for="mobileno">Mobile Number</label><br>
      <input type="number" name="mobileno" value="{{old ('mobileno')}}" class="input"><br>
       @error('mobileno')
        {{$message}}
       @enderror<br>
      <label for="comment">Comment</label><br>
      <textarea name="comment" id="comment" rows="8" cols="30">{{old ('comment')}}</textarea><br>
       @error('comment')
        {{$message}}
       @enderror<br>
       <br>
      <button type="submit">SEND MESSAGE</button>
     </form>
    </div>
</x-layout>
