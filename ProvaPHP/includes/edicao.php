   
<main>
    
    <a href="index.php">
        <button type="button" class="btn btn-primary">Voltal</button>
    </a>
   
   <h2 class="mt-3"><?=TITLE?></h2>

    <form action="" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="name" value="<?=$newUser->name?>">
            </div>

            <div class="form-group mb-3">
                <label>E-mail</label>
                <input type="text" class="form-control"  name="email" value="<?=$newUser->email?>">
            </div>
            
            <div class="form-group">
                    
                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" class="form-check-inline" name="color" value="1" <?=$newUser->color == 1 ? 'checked' : ''?>>Blue
                        </label>
                    </div>
                
                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" class="form-check-inline" name="color" value="2" <?=$newUser->color == 2 ? 'checked' : ''?>>Red
                        </label>
                    </div>
                
                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" class="form-check-inline" name="color" value="3" <?=$newUser->color == 3 ? 'checked' : ''?>>Yellow
                        </label>
                    </div>
                
                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" class="form-check-inline" name="color" value="4" <?=$newUser->color == 4 ? 'checked' : ''?>>Green
                        </label>
                    </div>
        </div>
        
        <div class="form-group mt-3 col-12">
                <button type="submit" class="btn btn-primary">Alterar</button>
        </div>

    </form>

</main>    