@extends('front.master')

@section('title', '| Drop The Bag')

  @section('body')
        <div class="page-header">
		<div class="container">
			<h1 class="entry-title">Order &#8211; Here</h1>				
		</div>
	</div>
	<div id="content" class="site-content">
        <div id="content-inside" class="container right-sidebar">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">	
					<article id="post-23" class="post-23 page type-page status-publish hentry">
						<header class="entry-header">
						</header>

						<div class="entry-content">
							<div data-elementor-type="wp-page" data-elementor-id="23" class="elementor elementor-23" data-elementor-settings="[]">
								<div class="elementor-inner">
									<div class="elementor-section-wrap">
										<section class="elementor-element elementor-element-946f420 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="946f420" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div class="elementor-row">
													<div class="elementor-element elementor-element-8737e07 elementor-column elementor-col-100 elementor-top-column" data-id="8737e07" data-element_type="column">
														<div class="elementor-column-wrap  elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-d046215 elementor-widget elementor-widget-text-editor" data-id="d046215" data-element_type="widget" data-widget_type="text-editor.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-text-editor elementor-clearfix">
																			<h4>
																				Einfach Geld verdienen mit &#8220;Drop the Bag&#8221; &#8211; Unverbindlich und ohne Risiko!
																			</h4>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
	<section class="elementor-element elementor-element-7c66fd8 elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="7c66fd8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
		<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-row">
			<div class="elementor-element elementor-element-83c527a elementor-column elementor-col-100 elementor-top-column" data-id="83c527a" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
				<div class="elementor-widget-wrap">
					<div class="elementor-element elementor-element-0e3ece5 elementor-widget elementor-widget-text-editor" data-id="0e3ece5" data-element_type="widget" data-widget_type="text-editor.default">
					<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix">
					<p>
					
						<div class="card">
						<h5 class="card-header info-color white-text text-center py-4">
						<strong>Order for Getting Partners</strong>
						</h5><!--Card content-->
						<div class="card-body px-lg-5 pt-0"><!-- Location -->
						<form action="{{ route('order-insert') }}" method="post" class="text-center" style="color: #757575;">
							@csrf
						<br>
						<div class="md-form mt-0">
							<input type="number" name="bag_no" id="location" class="form-control">
								<label for="location">Number Of Bag</label>
														</div>
						<br>
						
							<div class="col"><!-- First name -->
								<div class="md-form">
									<input type="number" id="vorname" name="deposite" class="form-control">
									<label for="vorname">Estimated Price $ </label>
									
								</div>
							</div>
							<div class="col">
								<div class="md-form">
									<input type="text" id="lname" name="loc_id" class="form-control">
									<label for="lname">Location</label>
									
								</div>
							</div>
						<br>
						
							<div class="col">
								<div class="md-form">
									<input type="date" id="firma" name="start_time" class="form-control">
									<label for="firma">Start 
									Time</label>	
								</div>
							</div>
							<br>

							<div class="col">
								<div class="md-form">
									<input type="date" id="firma" name="end_time" class="form-control">
									<label for="firma">End 
									Time</label>	
								</div>
							</div>
							
						<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submitted" value="Sign in">
							Order Now
						</button>
						<hr><!-- Terms of service -->
						<p>By clicking<em>Sign up</em> you agree to our		
							<a href="#" target="_blank">terms of service</a>
						</form><!-- Form -->
						</div>
					
			
			</p>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-element elementor-element-21fc3da elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="21fc3da" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-row">
			<div class="elementor-element elementor-element-13be4d6 elementor-column elementor-col-100 elementor-top-column" data-id="13be4d6" data-element_type="column">
				<div class="elementor-column-wrap">
					<div class="elementor-widget-wrap"></div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
</div>
</div>
</div>
</article>	
				</main>
			</div>

                                        
		</div>
	</div>




  @endsection 

    




