<section id="contact" class="contact">
    <div class="container">
        <div class="section-header">
            <h2>Hubungi Kami</h2>
        </div>
    </div>
    <div class="map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=poris gaga&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 100%;
                                width: 100%;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 100%;
                                width: 100%;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->
    <div class="container">
        <div class="row gy-5 gx-lg-5">
            <div class="col-lg-4">
                <div class="info">
                    <h3>Hubungi Kami</h3>
                    <p>&nbsp;</p>
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Alamat:</h4>
                            <p>Jalan KH Maulana Hassanuddin, Batuceper, Kota Tangerang</p>
                        </div>
                    </div>
                    <!-- End Info Item -->
                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>Khanif8905@gmail.com</p>
                        </div>
                    </div>
                    <!-- End Info Item -->
                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Kontak:</h4>
                            <p>0812 8048 4590 (Erlita)</p>
                        </div>
                    </div>
                    <!-- End Info Item -->
                </div>
            </div>
            <div class="col-lg-8">
                <form action="{{ route('login.store') }}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" placeholder="Pesan"></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
            <!-- End Contact Form -->
        </div>
    </div>
</section>
