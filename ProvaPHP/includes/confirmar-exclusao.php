   
    

   <h2 class="mt-3">Excluir usuario</h2>

    <form action="" method="post">
            <div class="form-group">
              <p>Voce deseja excluir o usuario <strong><?=$newUser->name?></strong>?</p>  
            </div>

          
            
            <div class="form-group col-12">
                <a href="index.php">
                    <button type="button" class="btn btn-primary">Cancelar</button>
                </a>

                <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
            </div>
            
    </form>