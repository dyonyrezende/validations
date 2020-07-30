@extends('layouts\newlayout')

<body>
	<div class="container">
	
		<div class="card border mt-5">
			
				<h5 class="card-header">Cadastro de Produtos</h5>
				<div class="card-body">
				
                <form action="/product" method="POST">
                	
                	@csrf
                	<input type="hidden" id="id" class="form-control">
                
              		<div class="form-group">
                    <label for="productName">Produto</label>
                    <div class="input-group">
							<input type="text" name="productName" id="productName" class="form-control" placeholder="Nome do Produto">
                  	</div>
                  	<p class="text-danger">@error('productName') {{$message}} @enderror</p>
                  	</div>
                  	
                  	<div class="form-group">
                    <label for="productStock">Quantidade em Estoque</label>
                    <input type="number" class="form-control" name="productStock" id="productStock" placeholder="Quantidade em Estoque">
                    <p class="text-danger">@error('productStock') {{$message}} @enderror</p>
                  	</div>
                  	
                  	
                  	<div class="form-group">
                    <label for="productPrice">Preço</label>
                    <input type="number" step="any" class="form-control" name="productPrice" id="productPrice" placeholder="Preço do Produto">
                    <p class="text-danger">@error('productPrice') {{$message}} @enderror</p>
                  	</div>
                  	
                 
                	
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                  <button type="reset" class="btn btn-danger" data-dismiss>Cancelar</button>

    			</form>
    			
    			
    		</div>
    	</div>
    </div>

    
</body>