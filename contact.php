<?php include 'header.php'; ?>
<div class="banner-contact ">
    <div class="d-flex justify-content-center flex-column align-items-center">      
             <span class="mt-4 text-white"> <h1>Contact</h1></span>
             <span><i class="fa-solid fa-angle-down text-white text-center fs-3"></i></span>
     </div>
</div>


<div class="container-fluid pb-5 contact-background">
 <div class="container">
        <div class="row ">
            <div class="col-lg-3 col-md-6">
                <div class="text-left mt-5">
                    <h3 class="text-indigo">Contact Details</h3>
                    <p class="mt-4 text-muted mb-4 offer-p fs-5">Sheetal Ind. No.6, Gala No.11, Navghar, Vasai (E), Dist. Palghar - 401 209</p>
<div class="gst-no mb-3">
                        <span class="offer-p fs-7">
                            GST NO. : 27BDXPC9189H1ZP
                        </span>
                    </div>
                    <span class="offer-p fs-5">druviengineering29@gmail.com</span>
                    <h4 class="mt-4 text-indigo">+91 9325682260</h4>
                    <h4 class="mt-4 text-indigo">+91 7507483383</h4>

                    
                    <!-- <div class="social mt-4">
                    <i class="fa-brands fa-facebook-f icon fs-5"></i>
                    <i class="fa-brands fa-x-twitter icon  fs-5"></i>
                    <i class="fa-brands fa-instagram icon  fs-5 mb-5"></i> 

                    </div> -->
            
                 </div>
                
            </div>
            <div class="col-lg-9 col-md-6 bg-transparent d-flex">
                <form id="contact_usForm">
                    <div class="row mt-5">

                        <div class="col-md-6  bg-transparent mb-3">
                           
                                <!-- <label for="name">Name</label> -->
                                <input type="text" id="name" name="name" placeholder="Enter Your Name" class="form-control" required>
                            
                        </div>
                        <div class="col-md-6  col-xs-12 mb-3">
                            
                            <input type="email" id="email" name="email" placeholder="Enter Your Email" class="form-control" required>
                            
                        </div>
                        <div class="col-md-6 col-xs-12  mb-3">
                            
                            <input type="number" id="phone" name="number" placeholder="Enter Your Number" class="form-control" required>
                            
                        </div>
                        <div class="col-md-6 col-xs-12 mb-3">
                            
                        <input type="text" name="address" id="address" placeholder="Enter Your Address" class="form-control" required>
                            
                        </div>
                        <div class="col-md-12">
                            
                       <textarea name="message" rows="5" class="form-control" id="message" placeholder="How Can We Help You? Feel free to get in touch " required></textarea>
                            
                        </div>
    
                        <div class="col-12 mt-4  d-flex justify-content-center">
                            <button type="submit"  class="btn-red  w-100 fs-5 text-white">Submit</button>
                        </div>
                        <div class="msgSubmit" id="msgSubmit"></div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0">
    <div class="row">

        <div class="col-lg-12">
    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60219.46661495117!2d72.75986552238464!3d19.381417341151163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7afb47ad032df%3A0xdbba9fe61973a336!2sSHITAL%20INDUSTRIES!5e0!3m2!1sen!2sin!4v1742550330107!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
   

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script type="text/javascript">




        $(document).ready(function() {

        $('#contact_usForm').submit(function(e) {

            e.preventDefault();
            var all_ok = true;
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var subject = $('#address').val();
            var message = $('#message').val();

            $(".error").remove();

            if (name.length < 2) {
            $('#name').after('<span class="error text-danger">This field is required</span>');
            all_ok =false;
        }
        if (phone.length < 1 ) {
            $('#phone').after('<span class="error text-danger ">This field is required</span>');
            all_ok =false;
        }
        else if(phone.length > 10){
            $('#phone').after('<span class="error text-danger ">Enter Valid Mobile Number</span>');
            all_ok =false;
        }
        else if(phone.length < 10){
            $('#phone').after('<span class="error text-danger ">Enter Valid Mobile Number</span>');
            all_ok =false;
        }
       

        if (email.length < 1) {
            $('#email').after('<span class="error  text-danger ">This field is required</span>');
            all_ok =false;
        } 
        if (subject =='') {
            $('#address').after('<span class="error text-danger ">This field is required</span>');
            all_ok =false;
        } 

        if (message =='') {
            $('#message').after('<span class="error text-danger ">This field is required</span>');
            all_ok =false;
        } 

            
        if(all_ok){
            
            $.ajax({
                type: 'post',
                url: 'mail.php',
                data: $('#contact_usForm').serialize(),
                success: function (data) {
                    
                    $('#msgSubmit').html(data);
                    
                    //window.location.href = 'https://primepulse.in';
            }
        });
            
        } 

        
        

    });

    });
    </script>
<?php include 'footer.php'; ?>