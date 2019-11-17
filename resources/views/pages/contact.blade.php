@extends('master')
@section('title','Contact Us')
@section('contact','active_nav')
@section('content')

<div class="container-fluid nav-space">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.4386402394816!2d90.40888961512292!3d23.73173259540574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f66bd03e2f%3A0x415808e261f3da38!2sLEvel-6%2C%206%20Purana%20Paltan%2C%20Dhaka%201000!5e0!3m2!1sen!2sbd!4v1573904634406!5m2!1sen!2sbd" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
<div>
    <div class="container text-center">
        <h1 class="heading mt-3 mb-5">Get in Touch</h1>
        <div class="row margin_top">

            <div class="col-md-6">
                <form>
                    <input name="name" type="text" class="feedback-input" placeholder="Name" />
                    <input name="email" type="text" class="feedback-input" placeholder="Email" />
                    <textarea name="text" class="feedback-input" placeholder="Message"></textarea>
                    <input type="submit" class="submit" value="SUBMIT"/>
                </form>
            </div>
            <div class="col-md-6">
                <div class="contact_list">
                    <ul>
                        <li>
                            <span><i class="fas fa-map-marked-alt"></i></span>
                            <span >: Israt Tower, 6 Purana Paltan, Lift-6, LEvel-6, Dhaka-1000</span>
                        </li>
                        <li>
                            <span><i class="fas fa-envelope-open-text"></i></span>
                            <span >: dreamlpg18@gmail.com</span>
                        </li>
                        <li>
                            <span><i class="fas fa-phone"></i></span>
                            <span >: 02-55110746</span>
                        </li>
                        <li>
                            <span><i class="fas fa-mobile-alt"></i></span>
                            <span >: 01715-731054</span>
                        </li>
                        <li>
                            <span><i class="fas fa-mobile-alt"></i></span>
                            <span >: 01978-665140-50</span>
                        </li>
                        <li>
                            <span><i class="fas fa-mobile-alt"></i></span>
                            <span >: 01978-665153-56</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>




@endsection
