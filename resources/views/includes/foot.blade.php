

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="footer-nav clearfix">
                    <ul class="footer-menu">
                        <li><a href="{{url('/')}}">Domov</a></li>
                        <li><a href="{{ url('/vyzvy')}}">Výzvy</a></li>
                        <li><a href="{{ url('/info')}}">Informácie</a></li>
                        <li><a href="{{ url('/univerzity')}}">Univerzity</a></li>
                        <li><a href="{{ url('/kontakt')}}">Kontakt</a></li>
                        <p></p><br>
                        <li><a href="https://www.ukf.sk"><img id="footer-logo" src="{{ \URL::asset('images/includes/ukf-logo.png') }}" style="display: inline-block;" width="42px"
                                                                     height="42px" ></a></li>
                        <li><a href="http://edu.ukf.sk/"><img id="footer-logo" src="{{ \URL::asset('images/includes/edu-logo.png') }}" style="display: inline-block;" width="37px"
                                                                     height="37px" ></a></li>
                        <li><a href="https://ais2.ukf.sk/"><img id="footer-logo" src="{{ \URL::asset('images/includes/ais_logo.png') }}" style="display: inline-block;" width="40px"
                                                                     height="40px" ></a></li>
                        <p></p>
                        <li><a target="_blank" href="https://facebook.com/UKFvNitre/?locale2=sk_SK" style="font-size: 32px;">
                                <i class="fab fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/ukfvnitre/" style="font-size: 32px;">
                                <i class="fab fa-instagram"></i> </a></li>
                        {{--<li><a target="_blank" href="https://www.facebook.com/Medzin%C3%A1rodn%C3%A9-vz%C5%A5ahy-a-mobility-%C5%A1tudentov-UKF-111131456995587/" style="font-size: 26px;">
                            <i class="fab fa-facebook-messenger"></i></a></li>--}}
                    </ul> <!-- /.footer-menu -->

                </nav> <!-- /.footer-nav -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
<br>
            <div class="col-md-12">
                <p class="copyright-text">Copyright &copy; 2019 UKF | Tímový projekt: TP04</p>
            </div> <!-- /.col-md-12 -->
    </div> <!-- /.container -->
</footer> <!-- /.site-footer -->
