<?php
$language = $_GET['lg'] ?? null;
if(!$language){
    $language='pt';
    include 'translate.pt.php';
}
elseif($language=='en'){
    $language='en';
    include 'translate.en.php';
}
else{
    $language='pt';
    include 'translate.pt.php';
}

include 'includes/header.php';
?>




<body>

<div id="preloader" style="display: none;">
    <div class="lds-facebook"><div></div><div></div><div></div></div>
</div>


<!--div id="body_loading_first">
    <h1>Please Wait...</h1>
</div-->

<!--div class="body-load d-none">
    <img src='/assets/images/load_2.gif'>
</div-->

    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJ2HZSW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


<?php include 'includes/nav.php'; ?>



<?php include 'includes/banner.php';?>




<div class="background-index-image" style="padding-top: 15vh; padding-bottom: 100px;">
	<div class="container" style="padding-bottom: 180px;">
		<div class="row d-flex justify-content-center py-5">
			<span class="title-customer-page text-center"><?php echo $translate['Technical Support'];?></span>
		</div>

		<div class="row d-flex justify-content-center py-4">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Bp-xA4sqw1g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
		</div>

		<div class="row d-flex justify-content-center" style="padding-top: 180px;">
			<span class="second-title-customer-page text-center"><?php echo $translate['Select your equipment:'];?></span>
		</div>
		<div class="row d-flex justify-content-center">
				

                <a href="https://secure.corporate.beanywhere.com/integration/integration.php?uid=86297b6b-ce87-11de-80be-dbd28730592f" target="_blank" ><img class="image-device-customer-page" src="https://admin.fpfsistemas.ibiz.pt/data/file-explorer/content/post/609a92812d0a1.svg" title="Windows"></a>

				<a href="http://startcontrol.com/fpfsistemas" target="_blank"><img class="image-device-customer-page" src="https://admin.fpfsistemas.ibiz.pt/data/file-explorer/content/post/609a925226f29.svg" title="macOS"></a>
							
				
						<!--img class='image-device-customer-page' src="assets/images/sp-img.svg"-->
		</div>
	</div>
    <div class="container py-4">
        <div class="row">
            <h2><?php echo $translate['See our'];?>:</h2>
        </div>
        <div class="row d-flex justify-content-between align-items-center py-5">
            <p><a href="https://fpfsistemas.ibiz.pt/SLA" target="_blank" style="color: blue;">SERVICE LEVEL AGREEMENT</a></p><br>
            <p><a href="https://anydesk.com/pt" target="_blank"  style="color: blue;"><img src="images/anydesk_logo.png"></a></p><br>
            <p><a href="https://www.supremocontrol.com/" target="_blank"  style="color: blue;"><img src="images/supRemo_logo.png"></a></p>
        </div>
    </div>
	<div class="container py-5">
		<div class="row d-flex justify-content-between">
			<div><span class="second-title-customer-page text-center"><?php echo $translate['Still having doubts?'];?></span></div>
			<div><a class="btn btn-danger noLoad border-0 my-3" href="#contact" style="background-color:#8019B3;"><?php echo $translate['Contact us'];?></a></div>
		</div>
								</div>
</div>


<?php include 'includes/footer.php';?>
</body></html>