<! -- <?php

/*if(isset($_GET['alert']) == "success"){
    echo "Data Info Updated";
    Header("Location: pending-applicant.php");
} else
    {
      echo "Error Updating Record";
    }*/

 ?> -->
 <html>
     <body>
     <p>Updating Record...</p>
     <script>
         var timer = setTimeout(function() {
             window.location='pending-applicant.php'
         }, 3000);
     </script>
 </body>
 </html>
