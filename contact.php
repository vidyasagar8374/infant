
<?php  
        include('header.html'); 
    ?> 
  <!-- Breadcum -->
      <div class="container-fluid contact-header shadow">
          <div class="breadcum-badge p-3 pt-5 pb-5 text-center">
            <h3>Contact</h3>
          </div>
      </div>
  <!-- End Breadcum -->

  <!-- content -->
  <!-- <div class="container pt-3 pb-3">
    <div class="text-center my-3 p-5">
        <h1>Contact Us</h1>
        <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus impedit officia labore aspernatur voluptatibus rem minus laborum suscipit accusamus nemo?</h4>
    </div>
  </div> -->

  <div class="container contactpage pt-5 mb-3">
    <div class="row">
        <!-- Left column: Contact Form -->
        <div class="col-md-6">
            <form>
                <!-- Form floating inputs -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                    <label for="subject">Subject</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Your message here" id="message" style="height: 150px;"></textarea>
                    <label for="message">Message</label>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>

        <!-- Right column: Contact Details & Google Map -->
        <div class="col-md-6 bg-light p-5 rounded shadow">
            <p><strong>Address:</strong> Infant Jesus Shrine
Thurka Emjala P.O. Abdullapurmet Mandal R. R. Dt. - 501 510, T.S.</p>
            <p><strong>Phone:</strong> +123 456 789</p>
            <p><strong>Email:</strong> infantjesus@gmail.com</p>
            
            <!-- Google Map -->
            <h3>Our Location</h3>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093703!2d144.95592831576105!3d-37.817209742014116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf0727e74baea2d8!2sFlinders%20Street%20Station!5e0!3m2!1sen!2s!4v1633686088725!5m2!1sen!2s" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
  <!-- end content -->



