<section id="contato">
	<div class="d-none d-lg-block">
		<div class="container">
			<div class="col-12 d-flex flex-column align-items-center">
		  		<form action="{{ route('sendContact') }}" method="post" class="col-6" enctype="multipart/form-data">
		  			{{ csrf_field() }}
		  			<div class="col-12">
		  				<h4 class="title-section mb-4">Informações pessoais</h4>
			  			<div class="floating-label {{ $errors->has('name') ? 'has-error' : '' }}">      
							<input class="floating-input" type="text" placeholder="Digite seu nome" name="name" value="{{ old('name')}}">
							<label>Nome Completo</label>
							<span class="text-danger">{{ $errors->first('name') }}</span>
						</div>
						<div class="floating-label {{ $errors->has('email') ? 'has-error' : '' }}">      
							<input class="floating-input" type="email" placeholder="Digite seu e-mail" name="email" value="{{ old('email')}}">
							<label>E-mail</label>
							<span class="text-danger">{{ $errors->first('email') }}</span>
						</div>
						<div class="floating-label {{ $errors->has('phone') ? 'has-error' : '' }}">      
							<input class="floating-input" type="text" placeholder="Digite seu telefone" name="phone" id="phone" value="{{ old('phone')}}">
							<label>Telefone (com DDD)</label>
							<span class="text-danger">{{ $errors->first('phone') }}</span>
						</div>
		  			</div>
		  			<div class="col-12 mt-5">
		  				<h4 class="title-section mb-4">Carta de apresentação</h4>
			  			<div class="floating-label {{ $errors->has('motivation') ? 'has-error' : '' }}">      
							<textarea class="floating-input floating-textarea" type="text" placeholder="Faça um breve resumo sobre você" name="motivation"></textarea>
							<label>CONTE SUA MOTIVAÇÃO (opcional)</label>
							<span class="text-danger">{{ $errors->first('motivation') }}</span>
						</div>
		  			</div>
		  			<div class="col-12 mt-5">
		  				<h4 class="title-section mb-4">Últimas perguntas</h4>
			  			<div class="floating-label {{ $errors->has('linkedin') ? 'has-error' : '' }}">      
							<input class="floating-input" type="text" placeholder="www.linkedin.com/xxxxxxxxxx" name="linkedin">
							<label>URL do seu Linkedin</label>
							<span class="text-danger">{{ $errors->first('linkedin') }}</span>
						</div>
						<div class="floating-label {{ $errors->has('github') ? 'has-error' : '' }}">      
							<input class="floating-input" type="text" placeholder="www.github.com/xxxxxxxxxx" name="github">
							<label>URL DO SEU GITHUB</label>
							<span class="text-danger">{{ $errors->first('github') }}</span>
						</div>
						<div class="floating-label {{ $errors->has('level_english') ? 'has-error' : '' }}">      
							<select class="floating-select" value="" name="level_english">
						        <option value="">Escolha</option>
						        <option value="Básico">Básico</option>
						        <option value="Intermediário">Intermediário</option>
						        <option value="Avançado">Avançado</option>
						     </select>
							<label>QUAL SEU NÍVEL DE INGLÊS?</label>
							<span class="text-danger">{{ $errors->first('level_english') }}</span>
						</div>
						<div class="floating-label {{ $errors->has('salary') ? 'has-error' : '' }}">      
							<input class="floating-input" type="text" placeholder="R$" name="salary" id="salary">
							<label>PRETENSÃO SALARIAL</label>
							<span class="text-danger">{{ $errors->first('salary') }}</span>
						</div>
		  			</div>
		  			<div class="col-12 mt-5 mb-4 ">
		  				<h4 class="title-section mb-4">Anexe seu currículo em PDF ou DOC</h4>
			  			<div class="col-10 mx-auto button-wrapper">
						  	<p class="label">
						    	<i class="fa fa-paperclip" aria-hidden="true"></i> <span>Escolha o arquivo</span>
						  	</p>
						  
						    <input type="file" name="curriculum" id="upload" class="upload-box" placeholder="Upload File" required>
						  
						</div>
		  			</div>
		  			<div class="col-12 d-flex align-items-center justify-content-center">
		  				<button type="submit" class="btn btn-outline-secondary btn-rits">enviar</button>
		  			</div>
		  		</form>
			</div>
		</div>
	</div>
	<div class="container d-block d-lg-none">
	  	
	</div>
</section>