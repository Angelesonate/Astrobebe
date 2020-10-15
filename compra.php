<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gracias por tu compra | Astro Bebé</title>
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/compra.css">
</head>

<body>
    <div class="opacity">
        <main>
            <div class="container content">
                <div class="row">
                    <div class="col-12">
                        <h1>¡Gracias por tu compra!</h1>
                        <h6>Completa este formulario y recibe la carta astral de tu bebé lo antes posible. </h6>
                    </div>
                </div>

                <form id="form" class="form row" >
                    <div class="col-12">
                        <!-- <div class="alert d-none" id="mensajeExito">Mensaje enviado con éxito. Recibirás tu certificado lo antes posible.</div>
                        <div class="alert alert-danger d-none" id="mensajeError"></div> -->
                    </div>
                    <div class="col-12">
                        <h4>
                            Tus datos
                        </h4>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" name="name1" class="form-control" id="name1" placeholder="Nombre completo" jiya>
                    </div>
                    <div class="form-group col-12">
                        <input type="email" class="form-control" id="email1" name="email1" placeholder="E-mail" jiya>
                    </div>
                    <div class="col-12 mt-5">
                        <h4>
                            Datos del bebé
                        </h4>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" name="namebebe" class="form-control" id="namebebe" placeholder="Nombre del bebé" jiya>
                    </div>
                    <div class="form-group col-12"> <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="date" name="date" placeholder="Fecha de nacimiento" jiya>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" onfocus="(this.type='time')" onblur="(this.type='text')" class="form-control" id="time" name="time" placeholder="Hora de nacimiento" jiya>
                    </div>

                    <div class="form-group col-12">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control" id="country" name="country" placeholder="País de nacimiento" jiya>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control" id="state" name="state" placeholder="Estado de nacimiento" >
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control" id="city" name="city" placeholder="Ciudad de nacimiento" jiya>
                            </div>
                        </div>

                    </div>
                    <div class="form-group col-12">
                        <label for="" class="inicial">Color de la carta</label>
                        <div class="styled-radiobutton">
                            <input  id="azul" name="color" type="radio" value="Azul" >
                            <label class="rbutton" for="azul"></label>
                            <label class="text" for="azul">
                                                                                    Azul
                                                                                </label>
                        </div>
                        <div class="styled-radiobutton">
                            <input id="rosa" name="color" type="radio" value="Rosa">
                            <label class="rbutton" for="rosa"></label>
                            <label class="text" for="rosa">
                                                                                    Rosa
                                                                                </label>
                        </div>
                    </div>                  



                    <div class="form-group col-12 ">
                        <button type="submit" class="btn float-right">Enviar</button>
                    </div><br>
                    <div id="msg"></div>

                </form>

                <div class="col-12">
                    <h5>Si tienes dudas sobre tu pedido, escríbenos a <a href="mailto:infoastrobebe@gmail.com">infoastrobebe@gmail.com.</a> </h5>
                </div>
            </div>


        </main>
    </div>


    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <a href="index.html">
                        <h6>
                            Astro Bebé ©
                            <script type="text/javascript">
                                document.write(new Date().getFullYear());
                            </script>
                        </h6>
                    </a>
                </div>
                <div class="col-12">
                    <ul class="nav justify-content-center flex-md-row flex-column ">
                        <li class="nav-item">
                            <a class="nav-link " href="aviso-legal.html">Aviso Legal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="politica-de-privacidad.html">Politica de Privacidad</a>
                      </li>
                        <li class="nav-item">
                            <a class="nav-link" href="politica-de-cookies.html">Politica de Cookies</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </footer>


    <script src="assets/js/jquery-3.3.1.js "></script>
    <script src="assets/js/popper.min.js "></script>
    <script src="assets/js/bootstrap.min.js "></script>
    <script src="formulario2.js"></script>
    
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(e){
        $("#form").on('submit',function(e){
            e.preventDefault();
            $.ajax({
            url: "form2.php",
            type: "post",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() { 
                $("#msg").html('<option> Sending ...</option>');
                },
            success: function(msg1){
                    $("#msg").html(msg1);
                    
                }

        });
    });

});
    
</script>