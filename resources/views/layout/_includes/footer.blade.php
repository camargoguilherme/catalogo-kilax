

                </div>
        </body>
        <!--footer>
            <div class="footer">
                    <small>Copyright© Kilax Japan <a href="https://www.facebook.com/kilaxjapan/">Facebook Kilax Japan</a> - <a href="https://www.instagram.com/kilax.japan/">Instagram Kilax Japan</a></small>
            </div>[
        </footer-->
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
        <script type="text/javascript">

                    $(document).ready(function () {
                        Materialize.updateTextFields();

                        $(".button-collapse").sideNav();
                        $('.carousel.carousel-slider').carousel({fullWidth: true});
                        $('.modal').modal({
                                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                                opacity: .5, // Opacity of modal background
                                inDuration: 300, // Transition in duration
                                outDuration: 200, // Transition out duration
                                startingTop: '4%', // Starting top style attribute
                                endingTop: '10%', // Ending top style attribute
                            }
                        );
                    });
        </script>
</html>