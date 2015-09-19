@section('title', ucfirst(Request::segment(1))))
@section('content')
    <?php
    $baseUrl = URL::to('/');
    ?>
    <br/>
    <div class="dividerHeading">
        <h4></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            {{$article->contact}}
            <br/>
            <form novalidate="novalidate" action="{{$baseUrl}}/contact-us/send" id="contactForm">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject">
                            <input type="hidden" placeholder="pot" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="pot" id="subject">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea placeholder="Message" maxlength="5000" data-msg-required="Please enter your message." cols="50" rows="10" name="message" class="form-control" id="message"></textarea>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Send Message" class="btn btn-default btn-lg" data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>
        <!--end isotope -->
    </div> <!--./span12-->
<br/>
<br/>
@stop