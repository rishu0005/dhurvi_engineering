    <footer>
    <div class="container-fluid footer">
         <!-- <div class="elementor-spacer-inner"></div> -->
          <div class="container">
             
            <div class="row p-1">
             <div class="col-md-12 col-sm-12"> 
                <div class="text-light  mt-5 ">
                    <h1 class="width">Driven by Excellence, Defined by Perfection: Dhruvi Engineering</h1>
                </div>
            </div>
               

<!-- <div class="d-flex justify-content-center align-items-center"> -->
                <div class="col-md-4 col-sm-12">
                    <h3 class="text-light mt-5">Address</h3>
                    <p class="color w-50">Sheetal Ind. No.6, Gala No. 11, Navghar, Vasai (E),
                        Dist. Palghar - 401 210
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 mt-5">
                    <h3 class="text-light"> Say Hello </h3>
                    <p class="color"><span></span>druviengineering29@gmail.com</p>
                    <h4 class="text-light">+91 7507483383
                    </h4>
                    <h4 class="text-light">+91 9325682260
                    </h4>
                </div>
                <div class="col-md-2 col-sm-12 mt-5">
                    <h3 class="text-light">Socials</h3>
                    <ul class="list-unstyled">
                        <li class="mt-3">
                            <a class="text-decoration-none  color" href="">FaceBook</a>
                        </li>
                        <li>
                            <a class="text-decoration-none mt-2 color" href="">Twitter</a>
                        </li>
                        <li>
                            <a class="text-decoration-none  mt-2  color" href="">Dribble</a>
                        </li>
                        <li>
                            <a class="text-decoration-none mt-2 color" href="">Instagram</a>
                        </li>
                    </ul>
                </div> 
                
                <div class="col-md-2 col-sm-12 mt-5">
                    <h3 class="text-light">Pages</h3>
                    <ul class="list-unstyled">
                        <li class="mt-3">
                            <a class="text-decoration-none  color" href="">Home</a>
                        </li>
                        <li>
                            <a class="text-decoration-none mt-2 color" href="">About us</a>
                        </li>
                        <li>
                            <a class="text-decoration-none  mt-2  color" href="">Products</a>
                        </li>
                        <li>
                            <a class="text-decoration-none mt-2 color" href="">Contact</a>
                        </li>
                    </ul>
                </div> 
              <!-- </div> -->
              
                
                <div class="text-center ">
                    <hr class="border">
              <p class="color mt-2">Copyright © 2025, All rights are reserved by Dhruvi Engineering and Developed by DeltaSoft.</p>
          </div>
            </div>
              
          </div>
          
     
    </div>
</footer>




  <!-- Count Up Animation -->
  <script src="https://cdn.rawgit.com/inorganik/countUp.js/master/dist/countUp.min.js"></script>

  <!-- Bootstrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>



function countUp(elementId, start, end, duration) {
            let current = start;
            const increment = (end - start) / (duration / 50); // Update every 50ms
            const counterElement = document.getElementById(elementId);
            
            function updateCounter() {
                current += increment;
                if (current >= end) {
                    current = end;
                    clearInterval(interval);
                }
                counterElement.textContent = Math.floor(current);
            }
            function updateCounter() {
        current += increment;
        if (current >= end) {
            current = end;
            clearInterval(interval);
        }
        
        if (elementId === 'profit') {
            // For 'profit', append '%' sign
            counterElement.textContent = Math.floor(current) + '%';
        } else {
            // For other counters, just display the number
            counterElement.textContent = Math.floor(current);
        }
    }


            const interval = setInterval(updateCounter, 50);
        }

        // Initialize counters with start, end, and duration (in ms)
        countUp('clients', 0, 200, 2000);    // 2 seconds for clients
        countUp('projects', 0, 50, 3000);   // 3 seconds for projects
        countUp('cases', 0, 120, 2500);      // 2.5 seconds for cases
        countUp('profit', 0,79,2500)         //2.5 seconds for profit

</script>
</body>
</html>