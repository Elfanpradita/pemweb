<main>
    <head>
        <meta charset="utf-8">
        <title>Livewire and filament</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
        <meta name="description" content="This is meta description">
        <meta name="author" content="Themefisher">
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
    
        <!-- # Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    
        <!-- # CSS Plugins -->
        <link rel="stylesheet" href="plugins/slick/slick.css">
        <link rel="stylesheet" href="plugins/font-awesome/fontawesome.min.css">
        <link rel="stylesheet" href="plugins/font-awesome/brands.css">
        <link rel="stylesheet" href="plugins/font-awesome/solid.css">
    
        <!-- # Main Style Sheet -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
    
    <!-- navigation -->
    <header class="navigation bg-tertiary">
        <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="images/logo.png" alt="Wallet">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item"> <a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item "> <a class="nav-link" href="about.html">About Us</a></li>
                        <li class="nav-item "> <a class="nav-link" href="services.html">Services</a></li>
                        <li class="nav-item "> <a class="nav-link" href="team.html">Our Team</a></li>
                        <li class="nav-item "><a class="nav-link " href="blog.html">Blog</a></li>
                        <li class="nav-item "><a class="nav-link " href="faq.html">FAQ</a></li>
                    </ul>
                    <a href="#!" class="btn btn-outline-primary">Contact Us</a>				
                </div>
            </div>
        </nav>
    </header>
    <!-- /navigation -->
    
    <div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h4 class="modal-title" id="exampleModalLabel">How much do you need?</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="#!" method="post">
              <div class="row">
                <div class="col-lg-6 mb-4 pb-2">
                  <div class="form-group">
                    <label for="loan_amount" class="form-label">Amount</label>
                    <input type="number" class="form-control shadow-none" id="loan_amount" placeholder="ex: 25000">
                  </div>
                </div>
                <div class="col-lg-6 mb-4 pb-2">
                  <div class="form-group">
                    <label for="loan_how_long_for" class="form-label">How long for?</label>
                    <input type="number" class="form-control shadow-none" id="loan_how_long_for" placeholder="ex: 12">
                  </div>
                </div>
                <div class="col-lg-12 mb-4 pb-2">
                  <div class="form-group">
                    <label for="loan_repayment" class="form-label">Repayment</label>
                    <input type="number" class="form-control shadow-none" id="loan_repayment" disabled>
                  </div>
                </div>
                <div class="col-lg-6 mb-4 pb-2">
                  <div class="form-group">
                    <label for="loan_full_name" class="form-label">Full Name</label>
                    <input type="text" class="form-control shadow-none" id="loan_full_name">
                  </div>
                </div>
                <div class="col-lg-6 mb-4 pb-2">
                  <div class="form-group">
                    <label for="loan_email_address" class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none" id="loan_email_address">
                  </div>
                </div>
                <div class="col-lg-12">
                  <button type="submit" class="btn btn-primary w-100">Get Your Loan Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <section class="section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-6">
            <div class="section-title text-center">
              <p class="text-primary text-uppercase fw-bold mb-3">Frequient Questions</p>
              <h1>Frequently Asked Questions</h1>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="accordion accordion-border-bottom" id="accordionFAQ">
              <div class="accordion-item">
                <h2 class="accordion-header accordion-button h5 border-0 active"
                  id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
                  aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </h2>
                <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
                  class="accordion-collapse collapse border-0 show"
                  aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body py-0 content">Ipsa tempora esse autem error repellat at unde maiores eos ad iure eius, cumque quaerat placeat architecto quo blanditiis voluptatum veritatis rem.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header accordion-button h5 border-0 "
                  id="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" aria-expanded="false"
                  aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </h2>
                <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" class="accordion-collapse collapse border-0 "
                  aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body py-0 content">Ipsa tempora esse autem error repellat at unde maiores eos ad iure eius, cumque quaerat placeat architecto quo blanditiis voluptatum veritatis rem.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header accordion-button h5 border-0 "
                  id="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd" aria-expanded="false"
                  aria-controls="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </h2>
                <div id="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd" class="accordion-collapse collapse border-0 "
                  aria-labelledby="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body py-0 content">Ipsa tempora esse autem error repellat at unde maiores eos ad iure eius, cumque quaerat placeat architecto quo blanditiis voluptatum veritatis rem.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header accordion-button h5 border-0 "
                  id="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" aria-expanded="false"
                  aria-controls="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </h2>
                <div id="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" class="accordion-collapse collapse border-0 "
                  aria-labelledby="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body py-0 content">Ipsa tempora esse autem error repellat at unde maiores eos ad iure eius, cumque quaerat placeat architecto quo blanditiis voluptatum veritatis rem.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header accordion-button h5 border-0 "
                  id="heading-0c2f829793a1f0562fea97120357dd2d43319164" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-0c2f829793a1f0562fea97120357dd2d43319164" aria-expanded="false"
                  aria-controls="collapse-0c2f829793a1f0562fea97120357dd2d43319164">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </h2>
                <div id="collapse-0c2f829793a1f0562fea97120357dd2d43319164" class="accordion-collapse collapse border-0 "
                  aria-labelledby="heading-0c2f829793a1f0562fea97120357dd2d43319164" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body py-0 content">Ipsa tempora esse autem error repellat at unde maiores eos ad iure eius, cumque quaerat placeat architecto quo blanditiis voluptatum veritatis rem.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header accordion-button h5 border-0 "
                  id="heading-8fe6730e26db16f15763887c30a614caa075f518" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-8fe6730e26db16f15763887c30a614caa075f518" aria-expanded="false"
                  aria-controls="collapse-8fe6730e26db16f15763887c30a614caa075f518">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </h2>
                <div id="collapse-8fe6730e26db16f15763887c30a614caa075f518" class="accordion-collapse collapse border-0 "
                  aria-labelledby="heading-8fe6730e26db16f15763887c30a614caa075f518" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body py-0 content">Ipsa tempora esse autem error repellat at unde maiores eos ad iure eius, cumque quaerat placeat architecto quo blanditiis voluptatum veritatis rem.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="section-sm bg-tertiary">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Service</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="service-details.html">Digital Marketing</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">Web Design</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">Logo Design</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">Graphic Design</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">SEO</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#!">About Us</a>
                            </li>
                            <li class="mb-2"><a href="#!">Contact Us</a>
                            </li>
                            <li class="mb-2"><a href="#!">Blog</a>
                            </li>
                            <li class="mb-2"><a href="#!">Team</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Other Links</h5>
                        <ul class="list-unstyled">
                            <li class="list-inline-item me-4"><a class="text-black" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item me-4"><a class="text-black" href="terms.html">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>			
            </div>
            
        </div>
    </footer>
    
    
    <!-- # JS Plugins -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/script.js"></script>
    
    </body>
</main>