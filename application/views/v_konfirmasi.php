<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<!-- Contact Section-->
<section class="page-section" id="contact">
    
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">KONFIRMASI</h2>
                
                <!-- Icon Divider-->
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                    
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form  action="<?= base_url("index.php/auth1")?>" method="POST">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <div class="form-control" id="" type="text" placeholder="Enter your nama_depan..."  name="nama_depan" data-sb-validations="required"   readonly ></div>
                                <label for="nama_depan">PESANAN AKAN KONFIRMASI? </label>
                                <div class="invalid-feedback" data-sb-feedback="nama_depan:required">A nama_depan is required.</div>
                            </div>
                            
                            <div><button class="btn btn-primary">YA</button> <button class="btn btn-primary">TIDAK</button></div>
                            
                        </form>
                        
                        <script src="//cdn.jsdeliver.net/npm/sweetalert2@11"></script>
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs.animate.css/4.1.1/animate.min.css" />

                            <script>
                                function tambah(){
                                    Swal.fire({
                                        icon: 'succes',
                                        title: 'berhasil ditambah!',
                                        $showClass: {
                                            popup: 'animate_animated animate_fadeInDown'
                                        },
                                        hodeClass: {
                                            popup: 'animate_animated animate_fadeInDown'
                                        }
                                    })
                                }
                            </script>
                    </div>
                </div>
            </div>
        </section>