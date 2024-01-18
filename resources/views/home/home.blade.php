@extends('master.master_home')
@section('content')
<main class="main">
    <!-- section why chouse us -->
    <div class="container my-5">
        <h2 class="display-6 fw-bold mb-5 text-center" style="font-family: 'poppins';" data-aos="zoom-in-up" data-aos-duration="1000">Kenapa memilih kami?</h2>
        <div class="row">
            <!-- gambar why choose us -->
            <div class="col-lg-5 col-md-12 mx-auto" data-aos="fade-right" data-aos-duration="0900">
                <div class="text-center img-choose">
                    <img src="theme/home/asets/why-choose-us-1.jpg" class="rounded-3 img-fluid why-choose-us" style="box-shadow: 0 4px 8px #B0B0B0;" alt="image">
                </div>
            </div>
            <!-- caption why choose us -->
            <div class="col-lg-6 col-sm-12 mx-auto my-4">
                <div class="container">
                    <div class="d-flex align-items-start" data-aos="fade-left" data-aos-duration="0800">
                        <div class="badge bg-secondary p-4 rounded-circle me-3">
                            <i class="fas fa-tasks fa-4x text-white"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold fs-4" style="font-family: 'poppins';">Desain Kreatif dan Responsif</h3>
                            <p>"Pilih kami karena kami menghadirkan desain website yang kreatif dan responsif. Dengan
                                perpaduan estetika yang menarik dan fungsionalitas responsif, kami memastikan setiap
                                website mencerminkan identitas unik bisnis Anda."</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start" data-aos="fade-left" data-aos-duration="1000">
                        <div class="badge bg-secondary p-4 rounded-circle">
                            <i class="fas fa-check-circle fa-4x text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h3 class="fw-bold fs-4" style="font-family: 'poppins';">Pengalaman Terbukti dan Reputasi
                                Positif</h3>
                            <p>"Percayakan proyek website Anda kepada kami karena kami membawa pengalaman terbukti dalam
                                industri ini. Reputasi positif kami dibangun atas dasar kepuasan klien dan hasil luar
                                biasa. Bergabunglah dengan mereka yang telah memilih kualitas dan keandalan."</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start" data-aos="fade-left" data-aos-duration="1200">
                        <div class="badge bg-secondary py-4 px-3 rounded-circle">
                            <i class="fas fa-users fa-4x text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h3 class="fw-bold fs-4" style="font-family: 'poppins';">Tim Profesional dan Pelayanan
                                Personal</h3>
                            <p>"Kenapa memilih kami? Kami memiliki tim profesional yang tidak hanya mahir dalam
                                teknologi terkini, tetapi juga berkomitmen memberikan pelayanan personal. Bersama kami,
                                Anda akan merasakan dukungan dan pengertian penuh terhadap visi dan tujuan Anda."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- captiion how we work -->
    <div class="container my-5">
        <h2 class="display-6 fw-bold mb-5 text-center" style="font-family: 'poppins';" data-aos="zoom-in-up" data-aos-duration="0900">Bagaimana kami bekerja</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="caption-kerja" data-aos="fade-right" data-aos-duration="0800">
                    <div class="text-center mb-4" data-aos="zoom-in-down" data-aos-duration="0800"><i class="fas fa-search fa-5x text-secondary"></i></div>
                    <h2 class="fw-bold mb-3"> Konsultasi Mendalam</h2>
                    <p>"Setiap proyek kami dimulai dengan konsultasi mendalam untuk memahami visi dan tujuan bisnis
                        Anda. Percakapan ini menjadi landasan bagi desain dan pengembangan website yang sesuai."</p>
                </div>
                <div class="caption-kerja" data-aos="fade-right" data-aos-duration="0900">
                    <div class="text-center mb-4" data-aos="zoom-in-down" data-aos-duration="0900"><i class="fas fa-users fa-5x text-secondary"></i></div>
                    <h2 class="fw-bold mb-3"> Perencanaan Kolaboratif</h2>
                    <p>"Perencanaan bersama adalah kunci keberhasilan. Kami melibatkan Anda dalam setiap tahap, mulai
                        dari perencanaan hingga implementasi. Kolaborasi yang erat memastikan setiap elemen sesuai
                        dengan harapan Anda."</p>
                </div>
                <div class="caption-kerja" data-aos="fade-right" data-aos-duration="1000">
                    <div class="text-center mb-4" data-aos="zoom-in-down" data-aos-duration="1000"><i class="fas fa-code fa-5x text-secondary"></i></div>
                    <h2 class="fw-bold mb-3"> Pengembangan yang Disesuaikan</h2>
                    <p>"Setiap website yang kami buat adalah unik, dibangun sesuai dengan kebutuhan khusus Anda. Kami
                        memahami bahwa setiap bisnis memiliki karakteristiknya sendiri, dan itulah mengapa kami fokus
                        pada pengembangan yang disesuaikan."</p>
                </div>
                <div class="caption-kerja" data-aos="fade-right" data-aos-duration="1100">
                    <div class="text-center mb-4" data-aos="zoom-in-down" data-aos-duration="1100"><i class="fas fa-comments fa-5x text-secondary"></i></div>
                    <h2 class="fw-bold mb-3"> Komunikasi Transparan</h2>
                    <p>"Kami memprioritaskan komunikasi yang transparan. Melalui platform yang terbuka dan jelas, kami
                        memberikan pembaruan berkala tentang perkembangan proyek. Anda selalu tahu apa yang terjadi dan
                        bagaimana proyek Anda berkembang."</p>
                </div>
            </div>
            <!-- img how we work -->
            <div class="col-lg-5 col-md-10" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="text-center img-work">
                    <img src="theme/home/asets/how-we-work-1.png" class="rounded-3 img-fluid why-choose-us" style="filter: drop-shadow(4px 4px 8px #B0B0B0);" alt="image">
                </div>
            </div>
        </div>
    </div>


    <!-- testimoni owl carousel -->
    <div class="container my-5">
        <h2 class="display-6 fw-bold mb-5 text-center" style="font-family: 'poppins';" data-aos="zoom-in-up" data-aos-duration="0800">Testimoni</h2>
        <div class=" row justify-content-center" data-aos="zoom-in-up" data-aos-duration="0900">
            <div class="col-md-12">
                <div class="owl-carousel">
                    <!-- Testimoni 1 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card border-secondary mx-auto rounded-3" style="width: 18rem;">
                            <div class="card-header"><img src="https://placekitten.com/100/100" class="rounded-circle my-4 mx-auto" style="width: 10rem;" alt="Profile Picture">
                            </div>
                            <div class="card-body">
                                <div class="ratings">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <h5 class="card-title testimonial-name">Qodri</h5>
                                <p class="card-text testimonial-impression">"Website mereka sungguh luar biasa! Desain
                                    yang keren dan layanan pembuatan website yang sangat profesional."</p>
                            </div>
                            <div class="card-footer p-2">
                                <a href="https://www.facebook.com/" target="_blank" class="btn btn-secondary btn-square rounded-circle m-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank" class="btn btn-secondary btn-square rounded-circle m-1">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni 2 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card border-secondary mx-auto" style="width: 18rem;">
                            <div class="card-header"><img src="https://scontent.cdninstagram.com/v/t51.2885-19/414470456_1003683144065335_5232503064169330462_n.jpg?stp=dst-jpg_s100x100&_nc_cat=101&ccb=1-7&_nc_sid=c4dd86&_nc_ohc=L2E1pgHX3FAAX8LIKfx&_nc_ad=z-m&_nc_cid=1101&_nc_ht=scontent.cdninstagram.com&oh=00_AfB_uYiLCcjjMgEd8USei28lD9wlQRhQgzE0KCQaM9J3ig&oe=65AD8AB5" class="rounded-circle my-4 mx-auto" style="width: 10rem;" alt="Profile Picture">
                            </div>
                            <div class="card-body">
                                <div class="ratings">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <h5 class="card-title testimonial-name">Iqbal</h5>
                                <p class="card-text testimonial-impression">"Terima kasih kepada tim pembuat website
                                    ini. Hasilnya beyond expectations! Sempurna!"</p>
                            </div>
                            <div class="card-footer p-2">
                                <a href="https://www.facebook.com/" target="_blank" class="btn btn-secondary btn-square rounded-circle m-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank" class="btn btn-secondary btn-square rounded-circle m-1">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni 3 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card border-secondary mx-auto" style="width: 18rem;">
                            <div class="card-header"><img src="https://scontent.cdninstagram.com/v/t51.2885-19/405200417_285976553898298_489651127946158020_n.jpg?stp=dst-jpg_s100x100&_nc_cat=110&ccb=1-7&_nc_sid=c4dd86&_nc_ohc=ainE8y38DZ4AX8fAJD6&_nc_ad=z-m&_nc_cid=1101&_nc_ht=scontent.cdninstagram.com&oh=00_AfArLP3TdAEW3cANM8SIaahxlV3Fu2RZYYa0iQBXJ06DdA&oe=65ADCA07" class="rounded-circle my-4 mx-auto" style="width: 10rem;" alt="Profile Picture">
                            </div>
                            <div class="card-body">
                                <div class="ratings">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <h5 class="card-title testimonial-name">Nailul</h5>
                                <p class="card-text testimonial-impression">"Website saya sekarang terlihat begitu
                                    menakjubkan, semua berkat bantuan ahli dari platform ini."</p>
                            </div>
                            <div class="card-footer p-2">
                                <a href="https://www.facebook.com/" target="_blank" class="btn btn-secondary btn-square rounded-circle m-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank" class="btn btn-secondary btn-square rounded-circle m-1">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni 4 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card border-secondary mx-auto" style="width: 18rem;">
                            <div class="card-header"><img src="https://scontent.cdninstagram.com/v/t51.2885-19/419051094_395811296262247_3561640217737824035_n.jpg?stp=dst-jpg_s100x100&_nc_cat=106&ccb=1-7&_nc_sid=c4dd86&_nc_ohc=zfM-bsz-Cd4AX_KpoI0&_nc_ad=z-m&_nc_cid=1101&_nc_ht=scontent.cdninstagram.com&oh=00_AfCgLgGXMDtIt3A8P9RywWvIO8Nd6AYZ10yBCzJD2KtAyg&oe=65AC8866" class="rounded-circle my-4 mx-auto" style="width: 10rem;" alt="Profile Picture">
                            </div>
                            <div class="card-body">
                                <div class="ratings">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <h5 class="card-title testimonial-name">Surya</h5>
                                <p class="card-text testimonial-impression">"Pembuatan website jadi lebih mudah dan
                                    menyenangkan! Desain yang modern dan pelayanan yang sangat ramah."</p>
                            </div>
                            <div class="card-footer p-2">
                                <a href="https://www.facebook.com/" target="_blank" class="btn btn-secondary btn-square rounded-circle m-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank" class="btn btn-secondary btn-square rounded-circle m-1">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni 5 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card border-secondary mx-auto" style="width: 18rem;">
                            <div class="card-header"><img src="https://scontent.cdninstagram.com/v/t51.2885-19/397452698_242457285195109_5803087551887255724_n.jpg?stp=dst-jpg_s100x100&_nc_cat=104&ccb=1-7&_nc_sid=c4dd86&_nc_ohc=lgv-J0FNPyIAX_Wv9I7&_nc_ad=z-m&_nc_cid=1101&_nc_ht=scontent.cdninstagram.com&oh=00_AfAKuCpxF0LA9I7W21ZdhdAMW-3o2C6WK55vVajGFCutDA&oe=65AD084B" class="rounded-circle my-4 mx-auto" style="width: 10rem;" alt="Profile Picture">
                            </div>
                            <div class="card-body">
                                <div class="ratings">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <h5 class="card-title testimonial-name">Mas Alif</h5>
                                <p class="card-text testimonial-impression">"Sangat puas dengan website baru saya!
                                    Proses pembuatannya cepat dan hasilnya sungguh memukau."</p>
                            </div>
                            <div class="card-footer p-2">
                                <a href="https://www.facebook.com/" target="_blank" class="btn btn-secondary btn-square rounded-circle m-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank" class="btn btn-secondary btn-square rounded-circle m-1">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- card lainnya di sini -->
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="display-6 fw-bold mb-5 text-center" style="font-family: 'poppins';" data-aos="zoom-in-up" data-aos-duration="0800">FAQ</h2>
        <div class="row justify-content-center">
            <!-- faq image -->
            <div class="col-lg-5 col-md-12 mb-5 mx-auto" data-aos="fade-right" data-aos-duration="0900">
                <div class="text-center img-choose">
                    <img src="theme/home/asets/faq-1.jpg" class="rounded-3 img-fluid why-choose-us" style="box-shadow: 0 4px 8px #B0B0B0;" alt="image">
                </div>
            </div>
            <!-- accordion Faq -->
            <div class="col-lg-6 col-md-10 col-sm-12">
                <div class="accordion" id="accordionExample" data-aos="fade-left" data-aos-duration="0800">
                    <!-- Accordion Item 1 -->
                    <div class="accordion-item show" style="border-radius: 30px; ">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="border-radius: 30px;">
                                Bagaimana Memesan Jasa Kami?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="border-radius: 30px;">
                            <div class="accordion-body text-secondary">
                                <P>Anda dapat melakukan salah satu hal berikut:</P>

                                <ol>
                                    <li>
                                        <P>Langsung datang ke kantor kami di 35, Jalan Tadulako, Kota Palu, Sulawesi Tengah, Indonesia.</P>
                                    </li>
                                    <li>
                                        <P>Hubungi kami melalui halaman kontak</P>
                                    </li>
                                    <li>
                                        <P>Hubungi kami melalui email official@techno-celebes.com</P>
                                    </li>
                                    <li>
                                        <P>Hubungi kami melalui whatsapp di <a href="https://api.whatsapp.com/send/?phone=6282194077126&text&type=phone_number&app_absent=0" class="text-primary">+62-821-9407-7126</a></P>
                                    </li>
                                    <li>
                                        <P>Hubungi kami melalui media sosial kami (Facebook dan Instagram) - Respon Lambat</P>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="accordion-item my-4" style="border-radius: 30px;">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="border-radius: 30px;">
                                Bagaimana Jika Website Belum Selesai Ketika Batas Waktu Yang Di Tentukan?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="border-radius: 30px;">
                            <div class="accordion-body">
                                <p class="text-secondary">Jika aplikasi tidak selesai tepat waktu, maka akan mendapat diskon sesuai perjanjian di surat perjanjian</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="accordion-item " style="border-radius: 30px;  ">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="border-radius: 30px;">
                                Dimana dan Bagaimana Pembayaran Dilakukan?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="border-radius: 30px;">
                            <div class="accordion-body">
                                <p class="text-secondary">Pembayaran hanya dilakukan di rekening CV Techno Celebes atau melalui cash di kantor CV Techno Celebes. Jika terdapat pihak yang ingin membayar di luar dari ketentuan di atas, maka itu di luar dari tanggung jawab kami. <br><br>
                                    Mengenai pembayaran layanan, konsumen dapat memilih untuk melunasi semuanya atau membayar DP sebesar 50%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
@endsection