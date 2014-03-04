<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8" />
<title>PLANIO Survey Responsive Template</title>
<meta name="description" content="" />
<meta name="author" content="Ansonika" />

<!-- Favicons-->
<link rel="shortcut icon" href="{{ url('') }}/img/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" type="image/x-icon" href="{{ url('') }}/img/apple-touch-icon-57x57-precomposed.png" />
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ url('') }}/img/apple-touch-icon-72x72-precomposed.png" />
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ url('') }}/img/apple-touch-icon-114x114-precomposed.png" />
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ url('') }}/img/apple-touch-icon-144x144-precomposed.png" />

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- CSS -->
<link href="{{ url('') }}/css/bootstrap.css" rel="stylesheet" />
<link href="{{ url('') }}/css/style.css" rel="stylesheet" />
<link href="{{ url('') }}/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="{{ url('') }}/css/socialize-bookmarks.css" rel="stylesheet" />
<link href="{{ url('') }}/js/fancybox/source/jquery.fancybox.css?v=2.1.4" rel="stylesheet" />
<link href="{{ url('') }}/check_radio/skins/square/aero.css" rel="stylesheet" />

<!-- Toggle Switch -->
<link rel="stylesheet" href="{{ url('') }}/css/jquery.switch.css" />

<!-- Owl Carousel Assets -->
<link href="{{ url('') }}/css/owl.carousel.css" rel="stylesheet" />
<link href="{{ url('') }}/css/owl.theme.css" rel="stylesheet" />

<!-- Google web font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css' />

<!--[if lt IE 9]>
<script src="{{ url('') }}/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Jquery -->
<script src="{{ url('') }}/js/jquery-1.10.2.min.js"></script>
<script src="{{ url('') }}/js/jquery-ui-1.8.12.min.js"></script>

<!-- Wizard-->
<script src="{{ url('') }}/js/jquery.wizard.js"></script>

<!-- Radio and checkbox styles -->
<script src="{{ url('') }}/check_radio/jquery.icheck.js"></script>

<!-- HTML5 and CSS3-in older browsers-->
<script src="{{ url('') }}/js/modernizr.custom.17475.js"></script>

<!-- Support media queries for IE8 -->
<script src="{{ url('') }}/js/respond.min.js"></script>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

	<header>
         <div class="container">
            <div class="row">
        	<div class="col-md-4 col-xs-3" id="logo"><a href="{{ url('') }}/index.html">Planio Survey template</a></div>
            
            <div class="btn-responsive-menu"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </div>

           <!--  <nav class="col-md-8 col-xs-9" id="top-nav">
            	<ul>
                    <li><a href="{{ url('') }}/../index.html">Full version</a></li>
                    <li><a href="{{ url('') }}/#" id="purchase">Purchase this template</a></li>
               </ul>
            </nav> --><!-- End Nav -->
            
         </div><!-- End row -->
         </div><!-- End container -->
        </header> <!-- End header -->
        	
          
        <div style="min-height:500px">
        	@yield('c')
        </div>


<!-- end section main container -->
       
<footer>
	<section class="container">
	<div class="row">
    	<div class="col-md-4">
        	<h3>About us</h3>
            <p>Lorem ipsum dolor sit amet, duo iudico accusamus ne, at vix sumo alia. Usu etiam probatus ne, eu magna ullum iusto his. Nec ea case eirmod dissentiunt. Etiam denique has cu, nam quando accusamus dissentiunt ne. Ea sit malorum scribentur.</p>
        </div>
        
        <div class="col-md-4" id="contact">
        	<h3>Contact info</h3>
            <p>Nec ea case eirmod dissentiunt. Etiam denique has cu, nam quando accusamus dissentiunt ne. </p> 
                <ul>
                        <li><i class="icon-home"></i> 1110 Bates Avenue Los Angeles, CA 90029, US</li>
                        <li><i class="icon-phone"></i> Telephone: 41.22.319.36.10 </li>
                        <li><i class="icon-envelope"></i> Email: <a href="{{ url('') }}/#">info@planio.com </a></li>
                        <li><i class="icon-skype"></i> Skype name: Planio</li>
                    </ul>    
        </div>
        
        <div class="col-md-4">
        	<h3>Latest tweet</h3>
            <div id="tweets"></div>
        </div>
        
    </div><!-- end row -->
  	</section>
    
    <section id="footer_2">
    <div class="container">
    <div class="row">
    	<div class="col-md-6">
                <ul id="footer-nav">
                	<li>Copyright© Ansonika </li>
                    <li><a href="{{ url('') }}/#">Terms of Use</a></li>
                    <li><a href="{{ url('') }}/#">Privacy</a></li>
                </ul>              
        </div>
            <div class="col-md-6" style="text-align:center">
                <ul class="social-bookmarks clearfix">
                    <li class="facebook"><a href="{{ url('') }}/#">facebook</a></li>
                    <li class="googleplus"><a href="{{ url('') }}/#">googleplus</a></li>
                    <li class="twitter"><a href="{{ url('') }}/#">twitter</a></li>
                    <li class="delicious"><a href="{{ url('') }}/#">delicious</a></li>
                    <li class="paypal"><a href="{{ url('') }}/#">paypal</a></li>
                </ul>
            </div>
        </div>
		</div>
    </section>

</footer> 
 
 <div id="toTop">Back to Top</div>  

<!-- Modal About -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">About us</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal About -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- OTHER JS --> 
<script src="{{ url('') }}/js/jquery.validate.js"></script>
<script src="{{ url('') }}/js/jquery.placeholder.js"></script>
<script src="{{ url('') }}/js/jquery.tweetable.min.js"></script> 
<script src="{{ url('') }}/js/jquery.switch.min.js"></script>
<script src="{{ url('') }}/js/quantity-bt.js"></script>
<script src="{{ url('') }}/js/bootstrap.js"></script>
<script src="{{ url('') }}/js/retina.js"></script>
<script src="{{ url('') }}/js/owl.carousel.min.js"></script>
<script src="{{ url('') }}/js/functions.js"></script>


<!-- FANCYBOX -->
<script src="{{ url('') }}/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4" type="text/javascript"></script> 
<script src="{{ url('') }}/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5" type="text/javascript"></script> 
<script src="{{ url('') }}/js/fancy_func.js" type="text/javascript"></script> 

</body>
</html>