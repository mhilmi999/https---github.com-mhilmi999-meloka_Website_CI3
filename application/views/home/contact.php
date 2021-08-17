<div id="main_menu" class="slide1Contact pb-5">
    <div class="logo_area">
        <a href=""><img src="<?= base_url(); ?>assets/img/logo.png" alt=""></a>
    </div>
    <div class="inner_main_menu">
        <ul id="menu">
            <li><a href="<?= base_url() . 'index.php/Home'; ?>" style="color: white;">Home</a></li>
            <li><a href="<?= base_url() . 'index.php/Home/about'; ?>" style="color: white;">About</a></li>
            <li><a href="<?= base_url() . 'index.php/Home/events'; ?>" style="color: white;">Events</a></li>
            <li><a href="<?= base_url() . 'index.php/Home/blog'; ?>" style="color: white;">Blog</a></li>
            <li><a href="" style="color: white;">Find Us</a></li>
            <li><a href="<?= base_url() . 'index.php/Home/contact'; ?>" style="color: white;"> Contact</a></li>
        </ul>
    </div>

    <!-- FORM -->
    <div class="container-fluid vertical-center pt-4">
        <div class="container pt-5 d-flex justify-content-center" ">
            <div class="col-5">
                <div class="row justify-content-center">
                    <form  class="rounded-3 text-white" style="background-color:#466C74;">
                        <div class="my-3 mx-3">
                            <label for="exampleInputEmail1" class="form-label fw-ligher">Nama</label>
                            <input type="text" class="form-control bg-transparent  border-0 border-bottom" id="exampleInputEmail1" aria-describedby="emailHelp" style="color: white;">
                        </div>
                        <div class="my-3 mx-3">
                            <label for="exampleInputEmail1" class="form-label fw-ligher">Email address</label>
                            <input type="email" class="form-control bg-transparent  border-0 border-bottom" id="exampleInputEmail1" aria-describedby="emailHelp" style="color: white;">
                        </div>
                        <div class="mb-3 mx-3">
                            <label for="exampleInputPassword1" class="form-label fw-ligher">Pesan yang akan disampaikan</label>
                            <input type="text" class="form-control bg-transparent  border-0 border-bottom" id="exampleInputEmail1" style="color: white;">
                        </div>
                        <div class="mb-3 mx-3 text-center">
                            <button type="submit" class="btn text-white rounded-pill fw-bold" style="background-color: #C25A37;">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FORM -->

</div>