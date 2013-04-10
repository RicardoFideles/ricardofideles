<section class="portfolio_box">
	<header>
		<h4>
			Últimos Projetos
		</h4>		
	</header>
	
	<div class="portfolio-nav">
        <a class="prev" id="prev" href="#">
        	<span>prev</span>
    	</a>
        <a class="next" id="next" href="#">
        	<span>next</span>
    	</a>
    </div>
    
    <div id="pagination" class="pager"></div>
    <div class="box_slider">
		<ul class="lista">
			<li>
				<img src="<?php echo $this->Html->url('/img/portfolio-3col-img.jpg') ?>" />
			</li>
			<li>
				<img src="<?php echo $this->Html->url('/img/portfolio-3col-img.jpg') ?>" />
			</li>
			<li>
				<img src="<?php echo $this->Html->url('/img/portfolio-3col-img.jpg') ?>" />
			</li>
			<li>
				<img src="<?php echo $this->Html->url('/img/portfolio-3col-img.jpg') ?>" />
			</li>
		</ul>
    </div>
</section>


  
<script src="<?php echo $this->Html->url('/js/jquery.carouFredSel-5.5.0-packed.js'); ?>"></script>


<script type="text/javascript">
	$('.portfolio_box .lista').carouFredSel({
		responsive  : true,
		items: {
				visible		: {
					min			: 1,
					max			: 3
				},
				width: 300,
				height: 220
			},
		scroll: 1,
		auto : {
				easing		: "linear",
				duration	: 1000,
				pauseDuration: 4000,
				pauseOnHover: true
				},
		prev : ".portfolio-nav .prev",
		next : ".portfolio-nav .next",
		pagination: ".portfolio_box #pagination"
	});

	
	
</script>