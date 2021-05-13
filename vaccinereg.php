<?php 
    include 'mainheader.php'; ?>
    
    <br><br>
  <section id="about" style="background-color: #ecf5ff; box-shadow: 0px 0px 12px 0px #aeb8ba;">
    <div class="container ">

      <header class="section-header">
        <h3>Vaccine Registration</h3><br>
      </header>

      <script type="text/javascript">
  
  function phoneUser() {
    var f5 = document.getElementById("f5");
    var inputPhone = document.getElementById('inputPhone').value;
    if(!/^[6-9]{1}[0-9]{9}$/.test(inputPhone))
       {
         f5.textContent = "**Invalid Phone # Format";
         document.getElementById("inputPhone").focus();
         return false;
       }
       else
       {
        f5.textContent = "";
        return true;
       }
  }

  function otpUser() {
    var f6 = document.getElementById("f6");
    var inputOtp = document.getElementById('inputOtp').value;
    if(!/^[0-9]{6}$/.test(inputOtp))
       {
         f6.textContent = "**Enter 6 Digit OTP";
         document.getElementById("inputOtp").focus();
         return false;
       }
       else
       {
        f6.textContent = "";
        return true;
       }
  }
</script>

          <form class="form-signin" accept="#">
    <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Verify OTP To Continue</h1><br><br>

    <input type="number"  class="form-control" placeholder="Phone Number" id="inputPhone"  onkeyup="phoneUser()">
                  <span style="color: red;font-size: 14px" id="f5"></span>
    <br>

    <center><div id="recaptcha-container"></div></center><br>
    <button class="btn btn-outline-success btn-block" type="button" id="phoneloginbtn" ><i class="fas fa-sign-in-alt"></i> SEND OTP</button><br>
    <input type="password" id="inputOtp" class="form-control" placeholder="OTP" required="" onclick="otpUser()">
    <span style="color: red;font-size: 14px" id="f6"></span><br>
    <button class="btn btn-outline-primary btn-block" type="button" id="verifyotp"><i class="fas fa-sign-in-alt"></i> VERIFY OTP</button><br><br><br><br>
</form>


<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-analytics.js"></script>
<script defer src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>
<script>
  var firebaseConfig = {
    apiKey: "AIzaSyCzgwpNtavE1LOg927fYTmT6xx7tFrcJsI",
    authDomain: "fir-tutorial-c97f6.firebaseapp.com",
    projectId: "fir-tutorial-c97f6",
    storageBucket: "fir-tutorial-c97f6.appspot.com",
    messagingSenderId: "991342362115",
    appId: "1:991342362115:web:9baaaeba6501eec25f1836",
    measurementId: "G-PM07TNNG3L"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

   //===================Saving Login Details in My Server Using AJAX================
   function sendDatatoServerPhp(email,provider,token,username){
       
        var xhr = new XMLHttpRequest();
        //xhr.withCredentials = true;

        xhr.addEventListener("readystatechange", function() {
        if(this.readyState === 4) {
            console.log(this.responseText);
            if(this.responseText=="Login Successfull" || this.responseText=="User Created"){
                //alert("OTP Verified");
                location='vaccine/vaccinehome.php';
            }
            else if(this.responseText=="Please Verify Your Email to Get Login"){
                alert("Please Verify Your Email to Login")
            }
            else{
                alert("Error in Login");
            }
        }
        });

        xhr.open("POST", "http://localhost/covidcare4u/login.php?email="+email+"&provider="+provider+"&username="+username+"&token="+token);
        xhr.send();
   }
   //===========================End Saving Details in My Server=======================
   //=========================Login With Phone==========================
   var loginphone=document.getElementById("phoneloginbtn");
   var phoneinput=document.getElementById("inputPhone");
   var otpinput=document.getElementById("inputOtp");
   var verifyotp=document.getElementById("verifyotp");
   document.getElementById("inputOtp").style.display = 'none';
   document.getElementById("verifyotp").style.display = 'none';


   loginphone.onclick=function(){
    var inputPhone = document.getElementById('inputPhone').value;
    if(!/^[6-9]{1}[0-9]{9}$/.test(inputPhone))
       {
         f5.textContent = "**Invalid Phone # Format";
         document.getElementById("inputPhone").focus();
         return false;
       }
       else
       {
        f5.textContent = "";
    document.getElementById("phoneloginbtn").style.display = 'none';
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
        'size': 'normal',
        'callback': function(response) {
            document.getElementById("inputPhone").style.display = 'none'
            document.getElementById("recaptcha-container").style.display = 'none'
            document.getElementById("phoneloginbtn").style.display = 'none';
            document.getElementById("inputOtp").style.display = 'block';
            document.getElementById("verifyotp").style.display = 'block';
            alert("Enter OTP");
        },
        'expired-callback': function() {
            alert("Captcha Timeout");
            window.location.replace("vaccinereg.php");
        }
        });

        var cverify=window.recaptchaVerifier;

        firebase.auth().signInWithPhoneNumber('+91'+phoneinput.value,cverify).then(function(response){
            //console.log(response);
            window.confirmationResult=response;
        }).catch(function(error){
            console.log(error);
        })
   }
 }

   verifyotp.onclick=function(){
      verifyotp.disabled=true;
      verifyotp.textContent="Verifying OTP, Please Wait";
      setTimeout(timeManage, 3000);
      function timeManage(){

        confirmationResult.confirm(otpinput.value).then(function(response){
           console.log(response);
           verifyotp.disabled=false;
           verifyotp.textContent="Verified";           
            var userobj=response.user;
            var token=userobj.xa;
            var provider="phone";
            var email='+91'+phoneinput.value;
            if(token!=null && token!=undefined && token!=""){
            sendDatatoServerPhp(email,provider,token,email);
            }
       })
       .catch(function(error){
           //console.log(error);
           alert("Invalid OTP....Enter the correct OTP or reload the page again and generate new OTP");
           window.location.replace("vaccinereg.php");
       })
        
      }
      
       
   }
   //=================End Login With Phone=========================

</script>
<br>
      </div>

    </div>
  </section>

  
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-info">
          <br><h4>Disclaimer</h4>
          <p class="text-justify">Conceptualized and designed by Anurag A engaging Master Of Computer Application in Amal Jyothi College Of Engineering, Kanjirampally, Kottayam.
            </p>

          
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <br><h4>Useful Links</h4>
          <ul>
            
            <li><a href="http://dhs.kerala.gov.in/" target="_blank" rel="noopener noreferrer">Directorate of Health Services</a></li>
            <li><a href="https://play.google.com/store/apps/details?id=com.qkopy.prdkerala&amp;hl=en_IN" target="_blank" rel="noopener noreferrer">GoK - Direct Kerala
                app</a></li>
            <li><a href="https://play.google.com/store/apps/details/?id=in.nic.kerala.nicscanner" target="_blank" rel="noopener noreferrer">NIC QR Scanner</a></li>
          <li>  
          </ul>
      <!--    <a href="https://itmission.kerala.gov.in/" target="_blank" rel="noopener noreferrer"><img src="resources/images/itmission.png" alt="IT Mission Logo" style="width: 100px; height: 70px;" class="mt-3"></a>
      --> </div>

        <div class="col-lg-3 col-md-6 footer-contact">

          <h4 style="margin-top: 20px;">Contact Us</h4>
          <i class="fa fa-envelope mr-1 text-white mb-2"></i>directoratehealthcare@kerala.gov.in<br> <a href='resources/downloads/helpline.pdf' class="text-white view"><i class="fa fa-phone mr-1 text-white"></i>Helpline</a>

          <!--   -->
          <h4 class="mt-5">Hit Count:&emsp;1</h4>
        </div>

      </div>
    </div>
  </div>

<?php    include 'mainfooter.php';
?>