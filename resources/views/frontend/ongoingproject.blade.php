@include('frontend.partial.header')

		<main class="main">

				<!-- causes inner start-->
				<section class="section causes-inner">
					<div class="container">
						<div class="row offset-margin">

							@foreach ($running_project as $project)
                                <div class="col-md-6 col-lg-4">
                                    <div class="causes-item causes-item--primary">
                                        <div class="causes-item__body">
                                            <div class="causes-item__top" style="text-align: center;">
                                                <h6 class="causes-item__title"> <a href="cause-details.html">{{$project->project_name}}</a></h6>
                                                <p></p>
                                            </div>
                                            <div>
                                                <p>{{$project->project_desp}}</p>
                                            </div>

                                        </div><a class="button causes-item__button button--primary" target="_blank" href="">See Details</a>
                                    </div>
                                </div>
                            @endforeach




						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-12">

								<ul class="pagination">
									<li class="pagination__item pagination__item--prev"><i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span>
									</li>
									<li class="pagination__item"><span>1</span></li>
									<li class="pagination__item pagination__item--active"><span>2</span></li>
									<li class="pagination__item"><span>3</span></li>
									<li class="pagination__item"><span>4</span></li>
									<li class="pagination__item"><span>5</span></li>
									<li class="pagination__item pagination__item--disabled">...</li>
									<li class="pagination__item"><span>12</span></li>
									<li class="pagination__item pagination__item--next"><span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i>
									</li>
								</ul>

							</div>
						</div>
					</div>
				</section>
				<!-- causes inner end-->
				<!-- bottom bg start-->

				<!-- bottom bg end-->
			</main>
			@include('frontend.partial.footer')
