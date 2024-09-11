<?php include_once('./includes/header.php'); ?>

<main>
  <!-- hero -->
  <section class="mt-5">
    <div class="container">
      <div class="row position-relative align-items-center">
        <div class="col-lg-6 pb-5">
          <h1 class="display-2 fw-800">Have questions? Get in touch!</span></h1>
        </div>
        <div class="col-lg-6">
          <img src="https://images.pexels.com/photos/1015568/pexels-photo-1015568.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" height="500" class="col-12 object-fit-cover mtn5 mb-2n5">
        </div>
      </div>
    </div>
  </section>

  <!-- reach us -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row justify-content-between pt-5 mt-5">
        <div class="col-lg-5 mt-5">
          <h4 class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis atque, similique aspernatur eveniet officia eos earum!</h4>
          <p class="mb-3 fs-5">Phone: <span class="fw-800">+91 1234567890</span></p>
          <p class="mb-3 fs-5">Email: <span class="fw-800">info@thecreativewebworks.com</span></p>
        </div>
        <div class="col-lg-6 offset-lg-1 mt-5">
          <form action="" id="contactForm" class="needs-validation" novalidate>
            <div class="row">
              <div class="col-sm-6 mb-3">
                <label for="name" class="form-label fw-800 small">Full Name *</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                <div class="invalid-feedback">
                    Please enter your full name.
                </div>
              </div>
              <div class="col-sm-6 mb-3">
                  <label for="email" class="form-label fw-800 small">Email *</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
                  <div class="invalid-feedback">
                      Please enter a valid email address.
                  </div>
              </div>
              <div class="col-sm-6 mb-3">
                  <label for="url" class="form-label fw-800 small">Phone *</label>
                  <input type="url" name="url" class="form-control" id="url" placeholder="Enter URL">
                  <div class="invalid-feedback">
                      Please enter a valid URL.
                  </div>
              </div>
              <div class="col-sm-6 mb-3">
                  <label for="url" class="form-label fw-800 small">Subject (Optional)</label>
                  <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter Subject">
                  <div class="invalid-feedback">
                      Please enter a valid subject.
                  </div>
              </div>
              <div class="mb-3">
                  <label for="message" class="form-label fw-800 small">Message *</label>
                  <textarea class="form-control" name="message" id="message" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="mb-3 text-end">
                  <button type="submit" class="btn btn-dark px-5">Send</button>
              </div>
              <div class="loader position-fixed top-0 bottom-0 start-0 end-0 bg-light d-none" style="opacity: 0.6;">
                <div class="spinner-grow position-absolute top-50 start-50 translate-middle" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include_once('./includes/footer.php'); ?>