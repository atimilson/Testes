<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <form id="form" name="form1">
            <select name="estado" id="estado">
                <option>Selecione o Estado</option>
                <option value="MT">Mato Grosso</option>
                <option value="SP">São Paulo</option>
                <option value="RJ">Rio</option>
                <option value="AM">Amazonas</option>
            </select>
            <select name="cidade" id="cidade">
                <option>Selecione a Cidade</option>
                <option value="MT">Cuiabá</option>
                <option value="SP">Outra ai</option>
                <option value="RJ">Quem quer saber</option>
                <option value="AM">Estamos no movimento</option>
            </select>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="submit" class="btn btn-secondary">Gravar</button>            
            </div>
        </form>
        <div class="form-group">        
            <textarea class="form-control" id="area" rows="4"></textarea>
        </div>   
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('#form').submit(function(e){            
            e.preventDefault();   

            var uf = $('#estado').val();
            var cid = $('#estado').val();

            $.ajax({
                url:'config.php/Config/cadastrar',
                method: 'POST',
                data: new FormData(this),
                //data: {uf:uf,cid:cid},
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,  
                beforeSend:function(){
                    $('#area').html('Aguarde...');
                },      
                success: function(response){
                    console.log(response);
                    $('#area').html(response);                                            
                },
                error: function(errorThrown){  
                    console.log(errorThrown); 
                    $('#area').css('color','red');
                    $('#area').html('Deu Erro em Alguma Coisa AI.');                          
                }               
            }); 

        });
    })
</script>
  </body>
</html>