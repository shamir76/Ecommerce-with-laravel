@include('template-parts.header')
	
@include('template-parts.slider')
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					@include('template-parts.sidebar')
                </div>
                
				@yield('content')


			</div>
		</div>
    </section>
    
    @include('template-parts.footer')