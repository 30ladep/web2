@extends('layout.master_layout')
@section('content')

<!-- Breadcrumbs -->
<div class="container">
      <ol class="breadcrumb">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="#">Pages</a>
        </li>
        <li class="active">
          Contact
        </li>
      </ol> <!-- end breadcrumbs -->
    </div>

    <!-- Google Map -->
    <div class="container mt-60">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4786145912058!2d106.755745014117!3d10.85115516077873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527bd532d45d9%3A0x6b46595d312dcffe!2zNTMgVsO1IFbEg24gTmfDom4sIExpbmggQ2hp4buDdSwgVGjhu6cgxJDhu6ljLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1619251084763!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Contact -->
    <section class="section-wrap contact">
      <div class="container">
        <div class="row">

          <div class="col-md-8">
            <h5 class="uppercase mb-30">Send Us Message</h5>
            <form id="contact-form" action="#">

              <div class="contact-name">
                <input name="name" id="name" type="text" placeholder="Name*">
              </div>
              <div class="contact-email">
                <input name="mail" id="mail" type="email" placeholder="E-mail*">
              </div>
              <div class="contact-subject">
                <input name="subject" id="subject" type="text" placeholder="Subject">
              </div>                

              <textarea name="comment" id="comment" placeholder="Message" rows="9"></textarea>
              <input type="submit" class="btn btn-lg btn-color btn-submit" value="Submit" id="submit-message">
              <div id="msg" class="message"></div>
            </form>
          </div> <!-- end col -->

          <div class="col-md-4 mb-40 mt-mdm-40 contact-info">

            <div class="address-wrap">
              <h4 class="uppercase">Address</h4>
              <h6>Philippines Store</h6>
              <address class="address">Philippines, PO Box 620067, Talay st. 66, A-ha inc.</address>
              <h6>Canada Store</h6>
              <address class="address">A-ha inc, 10-123 Main st. NW, Montreal QC, H3Z2Y7</address>
            </div>

            <h4 class="uppercase">Contact Info</h4>
            <ul class="contact-info-list">
              <li><span>Phone: </span><a href="tel:+1-888-1554-456-123">+ 1-888-1554-456-123</a></li>
              <li><span>Email: </span><a href="mailto:themesupport@gmail.com" class="sliding-link">themesupport@gmail.com</a></li>
              <li><span>Skype: </span><a href="#">ahasupport</a></li>
            </ul>

            <h4 class="uppercase">Business Hours</h4>
            <p>Monday – Friday: 9am to 20 pm</p>
            <p>Saturday: 9am to 17 pm</p>
            <p>Sunday: closed</p>

          </div>          

        </div>
      </div>
    </section> <!-- end contact -->

@endsection