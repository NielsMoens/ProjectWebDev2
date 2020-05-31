
    
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-4">
                    <h4 class="mb-4">{{__('home.f_newsletter')}}</h4>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="submit">{{__('home.button')}}</button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">{{__('home.f_find')}}</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://play.google.com/store/apps/details?id=com.kabacon.octoremote">
                        <i class="fab fa-google-play"></i>
                    </a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="mb-4">PRIVACY</h4>
                    <a class="pre-wrap text-white lead mb-0" href="{{ route('privacy', ['language' => app()->getLocale()])}}">{{__('home.f_terms')}}</a>
                </div>
                
            </div>
        </div>
    </footer>    
    <div class="container"><small class="pre-wrap">Copyright © Niels Moens 2020</small></div>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
