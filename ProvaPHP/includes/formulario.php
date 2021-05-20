<main>
    
    <a href="index.php">
        <button type="button" class="btn btn-primary">Voltal</button>
    </a>

   <h2 class="mt-3"><?=TITLE?></h2>

    <form action="" method="post">
            <div class="form-group">
                <label>Nome
                    <input type="text" class="form-control" name="name" placeholder="Nome">
                </label>
            </div>

            <div class="form-group mb-3">
                <label>E-mail
                    <input type="text" class="form-control"  name="email" placeholder="exenplo@ex"> 
                </label>
            </div>
            
            <div class="form-group">
                    <tr>
                        <div class="form-check form-check-inline">
                            <label class="form-control form-control">
                                <input type="checkbox" class="form-check-inline" name="color" value="1" <?=$newUser->color == 1 ? 'checked' : ''?>>Blue  
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-control form-control">
                                <input type="checkbox" class="form-check-inline" name="color" value="2" <?=$newUser->color == 2 ? 'checked' : ''?>>Red  
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-control form-control">
                                <input type="checkbox" class="form-check-inline" name="color" value="3"  <?=$newUser->color == 3 ? 'checked' : ''?>>Yellow  
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-control form-control">
                                <input type="checkbox" class="form-check-inline" name="color" value="4" <?=$newUser->color == 4 ? 'checked' : ''?>>Green  
                            </label>
                        </div>

                    </tr>';  
                   
                    
            </div>



            <div class="form-group mt-3 col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
            
    </form>

</main>    