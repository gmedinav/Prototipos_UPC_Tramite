<?php include_once("../template/cabecera.php"); ?>
  
<div class="container">



<!-- Accordion - START -->
<div class="container">
    <div class="row">
        
        
        <?php include_once("../template/menu.php"); ?>
        
        <div class="col-sm-9 col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Menu Information</h3>
                </div>
               
                <div class="panel-body"  >                    
                    <!-- <div class="alert alert-success">
                        <h3>Review the information supplied in this section to get to know something more about the company, blogs and contents.</h3>
                    </div> -->
               
               
                    <div style="width: 50%">
                        
                   
                    <form role="form">
       <div class="form-group">
         <label for="ejemplo_email_1" >Email</label>
         <input  type="email" class="form-control" id="ejemplo_email_1"
                placeholder="Introduce tu email">
       </div>
       <div class="form-group">
         <label for="ejemplo_password_1">Contraseña</label>
         <input type="password" class="form-control" id="ejemplo_password_1" 
                placeholder="Contraseña">
       </div>
       <div class="form-group">
         <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
         <input type="file" id="ejemplo_archivo_1">
         <p class="help-block">Ejemplo de texto de ayuda.</p>
       </div>
       <div class="checkbox">
         <label>
           <input type="checkbox"> Activa esta casilla
         </label>
       </div>
       <button type="submit" class="btn btn-default">Enviar</button>
     </form>

                         </div>
                     </div> 
                    
            </div>
        </div>
        
        
    </div>
</div>


<!-- Accordion - END -->

</div>


<?php include_once("../template/pie.php"); ?>




