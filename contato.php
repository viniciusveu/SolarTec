



   
   <?php 
    require_once "./header.php";
    ?>
       <div class="container darken-3">
           <div class="row">
               <h4 class="header" style="margin: 3%">Solicite um orçamento: </h4>
               <form class="col s12" action="assets/php/enviar.php" method="post" name="form">
                   <div class="row">
                       <div class="input-field col s12">
                           <i class="material-icons prefix">account_circle</i>
                           <input name="nome" id="icon_prefix" type="text" class="validate" required>
                           <label for="icon_prefix">Nome</label>
                       </div>
                       <div class="input-field col s12">
                           <i class="material-icons prefix">phone</i>
                           <input name="tel" id="icon_telephone" type="tel" class="validate">
                           <label for="icon_telephone">Telefone</label>
                       </div>
                       <div class="input-field col s12">
                           <i class="material-icons prefix">email</i>
                           <input name="email" id="icon_email" type="email" class="validate" required>
                           <label for="icon_email">E-Mail</label>
                       </div>
                       <div class="input-field col s6">
                           <i class="material-icons prefix">location_on</i>
                           <input name="cidade" id="location_on" type="text" class="validate">
                           <label for="location_on">Cidade / UF</label>
                       </div>
                       <div class="input-field col s6">
                           <select name="luz">
                               <option value="" disabled selected>Opção</option>
                               <option value="150">Até R$ 150,00</option>
                               <option value="200">De R$ 151,00 até R$ 200,00</option>
                               <option value="250">De R$ 201,00 até R$ 250,00</option>
                               <option value="300">De R$ 251,00 até R$ 300,00</option>
                               <option value="350">De R$ 301,00 até R$ 350,00</option>
                               <option value="400">De R$ 351,00 até R$ 400,00</option>
                               <option value="450">De R$ 401,00 até R$ 450,00</option>
                               <option value="500">De R$ 451,00 até R$ 500,00</option>
                               <option value="1000">Acima de R$ 501,00</option>
                           </select>
                           <label>Média anual da conta de luz: </label>
                       </div>
                       <div class="input-field col s12">
                           <i class="material-icons prefix">mode_edit</i>
                           <textarea name="mensagem" id="textarea1" class="materialize-textarea" required></textarea>
                           <label for="textarea1">Insira o texto aqui...</label>
                       </div>
                   </div>
                   <div class="center">
                       <button class="btn waves-effect waves-light" style="position: center;" type="submit">ENVIAR
                           <i class="material-icons right">send</i>
                       </button>
                   </div>
       
               </form>
           </div>
       </div>



<?php
require_once "./footer.php";
?>