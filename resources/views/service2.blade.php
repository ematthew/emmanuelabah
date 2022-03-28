

<style type="text/css">
  
form {
    border: 1px solid #1A33FF;
    background: #ecf5fc;
    padding: 40px 50px 45px;
}
.form-control:focus {
    border-color: #000;
    box-shadow: none;
}
label {
    font-weight: 600;
}
.error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
}
.form-control.error {
    border-color: red;
    padding: .375rem .75rem;
}

</style>

@extends('layouts.app')

@section('title')
   CONTACT|EMMANUEL ABAH
@endsection

@section('contents')

<section id="blog" class="blog">


  <body>
    <form action="" method="post" action="{{ url('contact.store') }}">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
        <!-- Error -->
        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
        @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
        @if ($errors->has('phone'))
        <div class="error">
            {{ $errors->first('phone') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Subject</label>
        <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
            id="subject">
        @if ($errors->has('subject'))
        <div class="error">
            {{ $errors->first('subject') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Message</label>
        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
            rows="4"></textarea>
        @if ($errors->has('message'))
        <div class="error">
            {{ $errors->first('message') }}
        </div>
        @endif
    </div>
    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form>
</body>
</html>

 </section>

                               
@endsection