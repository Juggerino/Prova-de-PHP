<?php

    $mensagem = '';
    if(isset($_GET['status'])){
        switch($_GET['status']){
            case 'success':
                $mensagem = '<div class="alert alert-success">Acao executada com sucesso!</div>';
                break;
            case 'error':
                $mensagem = '<div class="alert alert-danger">Acao nao excluido!</div>';
                break;    
        }
    }
    

    $resultados = '';

    foreach($user as $lista){
        $resultados .= '<tr>
                         <td>'.$lista->id.'</td>
                         <td>'.$lista->name.'</td>
                         <td>'.$lista->email.'</td>
                         <td>
                            <a href="editar.php?id='.$lista->id.'">
                                <button type="button" class="btn btn-primary">Editar</button>
                            </a>
                        </td>
                        <td>
                            <a href="excluir.php?id='.$lista->id.'">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                           
                         </td>
                        </tr>';

                        
        $resultados = strlen($resultados) ? $resultados : '<tr>
                                                                <td colaspan="6" class="text-center">
                                                                    Nenhum usuario encontrado
                                                                </td>
                                                           </tr>';              
                     
    }
?>

<main>
    
    <?=$mensagem?>

    <a href="cadastro.php">
        <button type="button" class="btn btn-primary">Cadastrar</button>
    </a>

    <table class="table bg-light mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>nome</th>
                <th>e-mail</th>
            </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>    
        
        
    </table>
    

</main>