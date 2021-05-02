<div class="container">

<!--	<div class="copyright">
        <img src="resources/images/nicLogo.png" alt="National Informatics Centre opens a new window">
    </div> -->
    <div class="credits" style="padding-top: 25px;">Designed and developed by Anurag A | CovidCare4U 2020</div>
</div>
</footer>
<!-- #footer -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


<script type="text/javascript" src="resources/core/js/jquery.min.js"></script>



<script src="resources/core/js/bootstrap.bundle.min.js"></script>


<script src="resources/core/js/easing.min.js"></script>

<script src="resources/core/js/mobile-nav.js"></script>
<script src="resources/core/js/wow.min.js"></script>

<script src="resources/core/js/waypoints.min.js"></script>

<script src="resources/core/js/counterup.min.js"></script>

<script src="resources/core/js/owl.carousel.min.js"></script>

<script src="resources/core/js/isotope.pkgd.min.js"></script>

<script src="resources/core/js/lightbox.min.js"></script>

<script src="resources/core/js/main.js"></script>

<script src="resources/core/js/chosen.jquery.js"></script>

<script src="resources/core/js/jquery.validate.js"></script>
<script src="resources/core/js/additional-methods.min.js"></script>

<script src="resources/core/js/datatables.js"></script>
<script type="text/javascript" src="resources/core/js/jquery-ui.min.js"></script>
<script src="resources/core/js/jquery.datetimepicker.js"></script>

<script src="resources/core/js/bootstrap-datepicker.js"></script>
<script src="resources/core/js/hashes.min.js"></script>
<script src="resources/core/js/pbkdf2.js"></script>
<script src="resources/core/js/aes.js"></script>
<script src="resources/core/js/AesUtil.js"></script>
<script src="resources/core/js/sweetalert.min.js"></script>
<script src="resources/core/js/Chart.js"></script>
<div class="modal fade in " id="pdf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 9999">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="card ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>

                <div class="header  header-navy text-center ">
                    <h4 class="card-title"></h4>

                </div>
            </div>
            <div class="modal-body">
                <div id="pdfView"></div>
            </div>
        </div>
    </div>
</div>
</div>


<script type="text/javascript">$(document).on('click','.view',function(e){e.preventDefault();$('#pdf').modal({backdrop:'static',keyboard:false});newSrc=$(this).attr("href");$("#pdfView").html('<object type="application/pdf" data="'+newSrc+'" width="100%" height="500" id="pdfView" style="height: 85vh;">Your browser does not support pdf view, instead you can <a href="'+newSrc+'" target="_blank">Download Here</a></object>');$("#pdf").modal('show');});function nrefresh(){$.ajax({url:'../home/captcha',success:function(){d=new Date();$("#captcha").attr("src","../home/captcha?"+d.getTime());$("#ncaptchaCode").val("");$("#ncaptchaCode").focus();},});}function sendMessageWithCaptcha(mobile,captcha,otpCallback){$.ajax({url:'../home/sendMessageWithCaptcha',data:{mobile:mobile,_csrf:$("#csrf").val(),captchaCode:captcha},type:"POST",success:function(data){if(data=='F'){alert("Invalid Captcha!");nrefresh();}else{otpCallback();alert("OTP send to your mobile number. Please proceed with OTP.");timer(180);}},error:function(jqXHR,textStatus,errorThrown){if(jqXHR.status==403){location.reload();}}});}</script>

<script type="text/javascript">$(document).ready(function(){var message='';if(message!=""){alert(message);}});</script>
<script type="text/javascript">$(document).on('click','.social',function(){var distId=$(this).find('.distId').val();window.location.href="/home/listReportingFormat?distId="+distId;});$(document).on('click','.surveillance',function(){var distId=$(this).find('.distId').val();if(distId==8){window.location.href="/home/addSurveillanceDashboard?distId="+distId;}else{alert("This dashboard is available to the District Collector and District Medical Officer")};});$(document).on('click','.transit',function(){window.location.href="home/addTransitDashBoard.html";});$(document).on('click','.sur',function(){window.location.href="home/addSurveillanceDashboard.html";});$(document).on('click','.tst',function(){window.location.href="home/addTestandContactDashBoard.html";});$(document).on('click','.hos',function(){window.location.href="home/addHospitalDashBoard.html";});$(document).on('click','.per',function(){window.location.href="home/permitPassDashboard.html";});$(document).on('click','.ccc',function(){window.location.href="home/cccManagement.html";});$('.texsrl').on('mouseover',function(e){owlalert.trigger('play.owl.autoplay');})
$('.texsrl').on('mouseleave',function(e){owlalert.trigger('stop.owl.autoplay');})</script>


</body>


</html>