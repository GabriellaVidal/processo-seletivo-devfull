<section id="contato">
	<div class="d-none d-lg-block">
		<div class="container">
			<div class="col-12 d-flex flex-column align-items-center">
		  		<form action="{{ route('sendContact') }}" method="post" class="col-6">
		  			{{ csrf_field() }}
		  			<div class="col-12">
		  				<h4 class="title-section mb-4">Informações pessoais</h4>
			  			<div class="floating-label">      
							<input class="floating-input" type="text" placeholder="Digite seu nome">
							<label>Nome Completo</label>
						</div>
						<div class="floating-label">      
							<input class="floating-input" type="text" placeholder="Digite seu nome">
							<label>E-mail</label>
						</div>
						<div class="floating-label">      
							<input class="floating-input" type="text" placeholder="Digite seu nome">
							<label>Telefone (com DDD)</label>
						</div>
		  			</div>
		  			<div class="col-12 mt-5">
		  				<h4 class="title-section mb-4">Carta de apresentação</h4>
			  			<div class="floating-label">      
							<textarea class="floating-input floating-textarea" type="text" placeholder="Faça um breve resumo sobre você"></textarea>
							<label>CONTE SUA MOTIVAÇÃO (opcional)</label>
						</div>
		  			</div>
		  			<div class="col-12 mt-5">
		  				<h4 class="title-section mb-4">Últimas perguntas</h4>
			  			<div class="floating-label">      
							<input class="floating-input" type="text" placeholder="www.linkedin.com/xxxxxxxxxx">
							<label>URL do seu Linkedin</label>
						</div>
						<div class="floating-label">      
							<input class="floating-input" type="text" placeholder="www.github.com/xxxxxxxxxx">
							<label>URL DO SEU GITHUB</label>
						</div>
						<div class="floating-label">      
							<select class="floating-select" value="">
						        <option value="">Escolha</option>
						        <option value="Básico">Básico</option>
						        <option value="Intermediário">Intermediário</option>
						        <option value="Avançado">Avançado</option>
						     </select>
							<label>QUAL SEU NÍVEL DE INGLÊS?</label>
						</div>
						<div class="floating-label">      
							<input class="floating-input" type="text" placeholder="R$">
							<label>PRETENSÃO SALARIAL</label>
						</div>
		  			</div>
		  			<div class="col-12 mt-5">
		  				<h4 class="title-section mb-4">Anexe seu currículo em PDF ou DOC</h4>
			  			<div class="col-10 mb-4 mx-auto button-wrapper">
						  	<span class="label">
						    	<i class="fa fa-paperclip" aria-hidden="true"></i> Escolha o arquivo
						  	</span>
						  
						    <input type="file" name="upload" id="upload" class="upload-box" placeholder="Upload File">
						  
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