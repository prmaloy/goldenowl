@extends('layout')


@section('contact')

<section class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact.!</h2>
          <p>Get in touch with me ...</p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <form>
              <div class="form-group">
                <label for="fullName" class="sr-only">Full name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Enter your yame">
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="phoneNumber" class="sr-only">phone number</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter phone number">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Enter your message</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
              </div>
              <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </form>
          </div>
          <div class="col-md-6">
            <div id="map"></div>
          </div>
        </div>
        <div class="contact-info">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <i class="fas fa-map"></i>
                <p>Olympia, <br>
                Washington, USA.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <i class="fas fa-mobile"></i>
                <a href="tel:+12 345 678 9101">+12 345 678 9101</a>
                <a href="tel:+98 765 432 1987">+98 765 432 1987</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <i class="fas fa-envelope-open"></i>
                <a href="mailto:goldenowldesign@gmail.com">goldenowldesign@gmail.com</a>
                <a href="mailto:info@goldenowldesign.com">info@goldenowldesign.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection