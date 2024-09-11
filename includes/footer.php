    <!-- lets connect -->
    <section class="bg-dark text-light py-5 hero">
      <div class="container">
        <?php        
        $currentPage = $_SERVER['REQUEST_URI']; // Get the current page URL path
        
        if (strpos($currentPage, 'contact-us') === false) { // Check if the current page is 'contact-us' ?>
          <div class="row position-relative py-5">
            <div class="col-lg-10">
              <h1 class="display-1 text-uppercase">
                <a href="#" class="text-light text-decoration-none">
                  Lets Connect
                  <svg xmlns="http://www.w3.org/2000/svg" width="92" height="92" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                </a>
              </h1>
            </div>
          </div>
        <?php }?>
        <div class="row m-0 <?= strpos($currentPage, 'contact-us') === false ? 'border-top  mt-5 pt-5' : ''?> pb-5">
          <div class="col-lg-2 my-5">
            <span class="logo">TCW</span>
          </div>
          <div class="col-lg-10 mt-5">
            <ul class="list-inline d-flex justify-content-end">
              <li class="px-4"><a href="" class="text-light text-decoration-none">Home</a></li>
              <li class="px-4"><a href="" class="text-light text-decoration-none">Video Editing</a></li>
              <li class="px-4"><a href="" class="text-light text-decoration-none">Web Development</a></li>
              <?php if(strpos($currentPage, 'contact-us') === false){ ?>
                <li class="ps-4"><a href="" class="text-light text-decoration-none">Contact</a></li>
              <?php }?>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="m-0">&copy; 2024. Designed & Developed by The Creative Webworks</p>
          </div>
        </div>
      </div>
    </section>


    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>