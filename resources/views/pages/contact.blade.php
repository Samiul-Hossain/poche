@extends('layouts.app')

@section('content')

<div>
    <div class="row no-gutters" style="background-color: #f6f9fd">
    <div class="col-lg-6 col-md-6 col-sm-6 col-sm-offset-0 col-xs-offset-0">
        <div class="col-lg-6">
            <div class="contact_box_top">
                <h3 style="font-weight: bold;">Office</h3>
                <p>Fernando Gomez<br>
                +880 9617776661<br>
                fernando@pochegroup.com</p>
            </div>
        </div>
        <div class="image_box">
            <img src="http://pochegroup.com/frontend/images/parliament2.jpg" alt="">
        </div>
        <div class="col-lg-6">
            <div class="contact_box_bottom">
                <h3 style="font-weight: bold;">Dhaka</h3>
                <p>House-28, Road-38 Floor- 10th <br>Gulshan-2, Dhaka 1212, Bangladesh</p>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-sm-offset-0 col-xs-offset-0">
        <div class="col-lg-6">
            <div class="contact_box_top">
                <h3 style="font-weight: bold;">Careers</h3>
                <p>Zareen Tasnim<br>
                +880 9617776666<br>
                zareen@pochegroup.com</p>
            </div>
        </div>
        <div class="image_box">
            <img src="http://pochegroup.com/frontend/images/los_angeles_broad%20museum_bw.jpg" alt="">
        </div>
        <div class="col-lg-6">
            <div class="contact_box_bottom">
                <h3 style="font-weight: bold;">Los Angeles</h3>
                <p>Los Angeles, California, USA<br> +(323) 354 -6212 
                </p>
            </div>
        </div>
    </div>
    </div>
    <div class="py-3">
        <h3 style="font-weight: normal;text-align: center;">Send us a message!</h3>
    </div>
    <div class="container message_box" >
        <form action="/contact" method="POST">
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input required type="text" name="name" class="form-control" id="name" placeholder="Please enter your email address">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input required type="email" name="email" class="form-control" id="email" placeholder="Please enter your name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Subject</label>
              <input required type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Message</label>
              <textarea required style="height: 60px" class="form-control" name="message" cols="5" rows="5" placeholder="Please type your message"></textarea>
            </div>
            <div class="text-center pt-3">
                <button class="btn btn-secondary" type="submit" name="contact">Send Message</button>
            </div>
            @if ($errors->any())
            <div class="text-danger">
            @foreach ($errors->all() as $error)
              <li class="text-center">
                {{ $error }}
              </li>
            @endforeach
            </div>
            @endif
          </form>
    </div>
    
</div>

@endsection