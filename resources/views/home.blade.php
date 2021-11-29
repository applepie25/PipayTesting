<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('stylesheet.css')}}">
    <link rel="icon" type="png" href="{{ asset('gambar\PiPay.png') }}">
    <meta charset="utf-8">
    <title> PiPay | Uang Elektronik </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Ropa+Sans&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/492fc916a9.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <img src="{{ asset('gambar\PiPay.png') }}">
                <a class="navbar-brand" href="https://www.gojek.com/">
                    PiPay
                </a>
                <div class="navbar-collapse">
                    <div class="navbar">
                        <a href="https://www.gojek.com/id-id/">Beranda
                        </a>
                        <div class="subnav">
                            <button class="subnavbtn"> Gabung jadi Mitra
                                <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="subnav-content">
                                <a href="https://www.gojek.com/driver/"> Mitra Driver </a>
                                <a href="https://www.gojek.com/merchant/"> Mitra Usaha </a>
                            </div>
                        </div>
                        <a href="https://www.gojek.com/employee/"> Karir </a>
                        <div class="subnav">
                            <button class="subnavbtn"> Perusahaan
                                <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="subnav-content">
                                <a href="https://www.gojek.com/id-id/about/"> Tentang </a>
                                <a href="https://www.gojek.com/aman/"> Aman </a>
                            </div>
                        </div>
                        <a href="https://www.gojek.com/products/"> Produk </a>
                        <a href="https://www.gojek.com/blog/"> Blog </a>
                        @auth
                        <div class="subnav">
                            <button class="subnavbtn"> Halo, {{ auth()->user()->name }}
                                <i class="fas fa-caret-down"></i>
                            </button>
                            <form method="POST" action="{{ route('logout') }}" class="subnav-content">
                                @csrf
                                @method('DELETE')
                                <button href=""> Logout </button>
                            </form>
                        </div>
                        @endauth
                        @guest
                        <a href="{{ route('login') }}"> Login </a>
                        @endguest
                    </div>
                </div>
            </div>
            <hr size="1px" color="grey" style=" opacity: 0.5">
        </nav>
        <div class="secondary-navbar">
            <div class="container-second">
                <div class="row-center">
                    <div class="col-auto">
                        <ul class="row">
                            <li class="col-auto secondary-navbar">
                                <a class="item-link" href="https://www.gojek.com/gopay/"> PiPay
                                    <i class="fab fa-product-hunt"></i>
                                </a>
                            </li>
                            <li class="col-auto secondary-navbar">
                                <a class="item-link" href="/gopay/#component-steps-4"> Keuntungan & Layanan</a>
                            </li>
                            <li class="col-auto secondary-navbar">
                                <a class="item-link" href="/gopay/gopayplus"> PiPay Plus</a>
                            </li>
                            <li class="col-auto secondary-navbar">
                                <a class="item-link" href="https://www.gojek.com/gopay/cara-top-up/"> Cara Top Up PiPay
                                </a>
                            </li>
                            <li class="col-auto secondary-navbar">
                                <a class="item-link"
                                    href="https://www.gojek.com/blog/gopay/jaga-kerahasiaan-kode-verifikasi-go-jekmu/">
                                    Keamanan </a>
                            </li>
                            <li class="col-auto secondary-navbar">
                                <a class="item-link" href="https://www.gojek.com/gopay/#component-information-47"> PiPay
                                    di Mana-mana </a>
                            </li>
                            <li class="col-auto secondary-navbar">
                                <a class="item-link" href="https://www.gojek.com/gopay/kebijakan-privasi"> Syarat &
                                    Ketentuan </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="sec-container">
            <div class="img-bckg">
                <img src="{{ asset('gambar\Untitled design (2).png') }}">
                <div class="capt">
                    <h1> Transaksi Aman & Terpercaya </h1>
                    <p> dengan teknologi fitur, layanan,
                        dan jaminan keamanan dalam satu aplikasi
                        <br>
                        <small> <strong> #AmanBersamaPipay </strong></small>
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="th-container">
            <div class="wrap">
                <!--flex wrap-->
                <div class="img-two text-center">
                    <p>
                        <img src="{{ asset('gambar\Untitled design (3).png') }}">
                    </p>
                </div>
                <div class="capt-two">
                    <h1> Kenalan Sama PiPay </h1>
                    <h3>
                        <p> PiPay adalah dompet digital serba bisa. Mulai dari transaksi cepat untuk semua
                            layanan PiJek dan ratusan Rekan Usaha, hingga mengirim atau menerima uang dengan mudah,
                            semua bebas dilakukan bersama PiPay.
                            <br>
                            <br>
                            <a
                                href="https://gojek.onelink.me/2351932542?af_banner=true&af_dp=gojek%3A%2F%2Fhome?utm_source=Website&utm_medium=WebsiteGoPay&utm_campaign=Brand">
                                Coba Sekarang
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </p>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="ft-container">
            <h1> Bayar Pakai PiPay di Mana Saja </h1>
            <br>
            <p class="just"> Mulai dari layanan PiJek, restoran, supermarket, ecommerce, sampai tagihan dan pulsa! </p>
            <br>
            <br>
            <br>
            <div class="fou-container">
                <div class="rows">
                    <div class="column">
                        <p class="txt-ctr">
                            <img src="{{ asset('gambar\Untitled design (4).png') }}">
                        </p>
                        <h3 class="ttl">Semua Layanan PiPay</h3>
                        <p class="txt-ctr"> Jajan di PiFood, bepergian pake PiCar/PiRide, kirim barang pake PiSend, dan
                            layanan PiJek lainnya lebih praktis pakai PiPay.</p>
                        <br>
                        <a class="links"
                            href="https://gojek.onelink.me/2351932542?af_banner=true&af_dp=gojek%3A%2F%2Fhome?utm_source=Website&utm_medium=WebsiteGoPay&utm_campaign=Brand">
                            Selengkapnya
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="column">
                        <p class="txt-ctr">
                            <img src="{{ asset('gambar\Untitled design (5).png') }}">
                        </p>
                        <h3 class="ttl"> Restoran atau Supermarket </h3>
                        <p class="txt-ctr"> Tinggal scan buat bayar pakai PiPay di warung, restoran, minimarket, hingga
                            supermarket favorit.</p>
                        <br>
                        <a class="links" href="https://www.gojek.com/blog/gopay/bayar-lebih-mudah-pakai-go-pay/">
                            Selengkapnya
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="column">
                        <p class="txt-ctr">
                            <img src="{{ asset('gambar\Untitled design (6).png') }}">
                        </p>
                        <h3 class="ttl"> Belanja Online </h3>
                        <p class="txt-ctr"> Bayar belanjaan di ecommerce, beli dan berlangganan apps, sampai top up game
                            jadi lebih mudah!</p>
                        <br>
                        <a class="links" href="https://www.gojek.com/blog/gopay/bayar-lebih-mudah-pakai-go-pay/">
                            Selengkapnya
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="column">
                        <p class="txt-ctr">
                            <img src="{{ asset('gambar\Untitled design (7).png') }}">
                        </p>
                        <h3 class="ttl"> Bayar Tagihan & Pulsa </h3>
                        <p class="txt-ctr"> Bayar tagihan BPJS, Internet, listrik, TV kabel, hingga pajak pake PiTagihan
                            langsung dari aplikasi!</p>
                        <br>
                        <a class="links" href="https://www.gojek.com/blog/gopay/bayar-lebih-mudah-pakai-go-pay/">
                            Selengkapnya
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="sec-container">
            <div class="img-bckg">
                <img src="{{ asset('gambar\yowww (1).png') }}">
                <div class="capt">
                    <h1> Upgrade PiPay Plus</h1>
                    <p> Cuma butuh 2 langkah biar kamu bisa kirim saldo, transfer bank,
                        <br>
                        akses PayLater,
                        dapetin promo eksklusif, dan jaminan saldo kembali.
                        <br>
                        <br>
                        <a href="https://www.gojek.com/gopay/gopayplus/"> Baca Selengkapnya
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="ft-container">
            <h1> Transaksi Aman Bebas Khawatir Pakai PiPay </h1>
            <br>
            <br>
            <br>
            <div class="fou-container">
                <div class="rows">
                    <div class="column">
                        <p class="txt-ctr">
                            <img src="{{ asset('gambar\PiPay (5).png') }}">
                        </p>
                        <h3> Panduan Keamanan </h3>
                        <p> Gopay selalu berusaha menginformasikan panduan
                            terkait keselamatan dan menjaga keamanan bertransaksi</p>
                    </div>
                    <div class="column">
                        <p class="txt-ctr">
                            <img src="{{ asset('gambar\PiPay (6).png') }}">
                        </p>
                        <h3> Teknologi </h3>
                        <p> Kamu akan diminta memasukkan PIN atau sidik jari/wajah
                            setiap kali akan menggunakan PiPay</p>
                    </div>
                    <div class="column">
                        <p class="txt-ctr">
                            <img src="{{ asset('gambar\PiPay (7).png') }}">
                        </p>
                        <h3> Jaminan Saldo Kembali </h3>
                        <p> Proteksi ekstra untuk pengguna PiPay Plus,
                            penggantian saldo PiPay atau PayLater akibat penyalahgunaan </p>
                    </div>
                    <div class="column">
                        <p class="txt-ctr">
                            <img src="{{ asset('gambar\PiPay (8).png') }}">
                        </p>
                        <h3> Sertifikasi Keamanan </h3>
                        <p> PiPay memiliki sertifikasi ISOP 25092, standar
                            internasional dalam penerapan sistem
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <div class="footer">
            <div class="six-container">
                <div class="rowz">
                    <div class="logo-brand">
                        <img src="{{ asset('gambar\PiPay (9) (1).png') }}">
                    </div>
                    <div class="contact">
                        <h3> Contact </h3>
                        <ul>
                            <li>
                                <p>
                                    <i class="fas fa-envelope"></i>
                                    pipay234@gmail.com
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fab fa-whatsapp-square"></i>
                                    089665898902
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fab fa-instagram-square"></i>
                                    PiPay
                                </p>
                            </li>
                            <li class="twit">
                                <p>
                                    <i class="fab fa-twitter-square"></i>
                                    PiPay
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="opening-hour">
                        <h3>
                            <i class="fas fa-clock"></i>
                            Gabung
                        </h3>
                        <li>
                            <p> Mitra Usaha </p>
                        </li>
                        <li>
                            <p> Mitra Driver </p>
                        </li>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="sx-container">
                    <p class="copy copyright"> Copyright © PiPay 2021. All right reserved. </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>