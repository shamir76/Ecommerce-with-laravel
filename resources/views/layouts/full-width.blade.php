@include('template-parts.header')
	
	<section>
		<div class="container">
			<div class="row">
                
				@yield('content')

			</div>
		</div>
    </section>
    
	@include('template-parts.footer')