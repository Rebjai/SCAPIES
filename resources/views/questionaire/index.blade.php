<main role="main">
      <article>        
                  <div class="wrap size-80">

                  <form action="procesar_scapies.php" method="post">
                    
                    <br>
                     
                      <p><legend>Dato escolar </legend></p>
                      <p><label><strong>Subsistema y el plantel </strong></label>
                        <select name="subsistema" id="subsistema">
                        <option value="0">Selecciona</option>
                           <?php
                              try {
              
                                require ("../config.php");

                                //Creamos la conexión PDO por medio de una instancia de su clase
                                $cnn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

                                //Preparamos la consulta sql
                                $respuesta = $cnn->prepare("select * from catalogo_subsistemas ORDER BY subsistema ASC");

                                //Ejecutamos la consulta
                                $respuesta->setFetchMode(PDO::FETCH_ASSOC);

                                $respuesta->execute();

                                $conta=0;

                                while($row = $respuesta->fetch())
                                {        
                                                                        
                                 echo "<option codigo='".$row["id"]."' value='".$row["subsistema"]."'>".$row["subsistema"]."</option>";                                                
                                } 
                              }
                                catch(Exception $e)
                                {
                                  echo $e->getMessage();
                                }                
                          ?>          
                        
                      </select>                    
                      </p>
                        <p><label><strong>Plantel</strong></label>
                        <select name="plantel" id="plantel" required>
                        <!--   <option value="0">- Selecciona -</option> -->
                           <?php
                              try {
              
                                require ("../config.php");

                                //Creamos la conexión PDO por medio de una instancia de su clase
                                $cnn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);

                                //Preparamos la consulta sql
                                $respuesta = $cnn->prepare("select * from catalogo_planteles ORDER BY plantel ASC");

                                //Ejecutamos la consulta
                                $respuesta->setFetchMode(PDO::FETCH_ASSOC);

                                $respuesta->execute();

                                $conta=0;

                                while($row = $respuesta->fetch())
                                {        
                                                                        
                                 echo "<option codigo='".$row["id_subsistema"]."' value='".$row["plantel"]."'>".$row["plantel"]."</option>";                                                
                                } 
                              }
                                catch(Exception $e)
                                {
                                  echo $e->getMessage();
                                }                
                          ?>       
                        
                      </select>                    
                      </p>
                      </fieldset>   
                    
                       
                        <p><label><strong>Selecciona tu campo de formación que estás cursando</strong></label>
                        <select name="areas_bachilleratos" id="areas_bachillerato">
                        <option value="0">Selecciona</option>
                           <?php
                              try {
              
                                require ("../config.php");

                                //Creamos la conexión PDO por medio de una instancia de su clase
                                $cnn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

                                //Preparamos la consulta sql
                                $respuesta = $cnn->prepare("select * from areas_bachillerato ORDER BY area_bachillerato ASC");

                                //Ejecutamos la consulta
                                $respuesta->setFetchMode(PDO::FETCH_ASSOC);

                                $respuesta->execute();

                                $conta=0;

                                while($row = $respuesta->fetch())
                                {        
                                                                        
                                echo "<option codigo='".$row["id"]."' value='".$row["id"]."'>".$row["area_bachillerato"]."</option>";                                                
                                } 
                              }
                                catch(Exception $e)
                                                                {
                                  echo $e->getMessage();
                                }                
                          ?>       
                        
                      </select>                    
                      </p>
                      
                
                
              
                <p>
                <fieldset>
                
                 <hr>
                 <p><label><strong>¿Piensas continuar tus estudios de nivel superior?</strong></label></p>
                 <p> <input type="radio" name="p9a" value="si" required onclick="showDiv(false)"><label for="">si</label></p>
                 <p> <input type="radio" name="p9a" value="no" required onclick="showDiv(true)"><label for="">no (seleccione cual es la causa)</label></p>  

                </fieldset>
                <br>    
                <fieldset>        
                <div id="causa">
                  <article>
                    <p><label><strong>Causa</strong></label></p>
                 <p> <input type="radio" name="p9b" value="1"><label>Problemas economicos</label></p>
                 <p> <input type="radio" name="p9b" value="2"><label>Problemas familiares</label></p>
                 <p> <input type="radio" name="p9b" value="3"><label>Problemas escolares</label></p>
                 <p> <input type="radio" name="p9b" value="4"><label>No me interesa estudiar</label></p>
                 <p> <input type="radio" name="p9b" value="5"><label>Emigrare a otro estado/pais</label></p>
                 <p> <input type="radio" name="p9b" value="6"><label>Otra causa</label></p>
                 <p><input type="text"  name="p9c" placeholder="Indique..." ></p>
               </article>
               <hr>
               </div> 
                 </fieldset>
                <br>

                <fieldset>
                  <div id="causa2">
                <p><label><strong>Sí tuvieras apoyo económico ¿Seguirías estudiando?</strong></label>
                    <p><center> <input type="radio" name="p10" value="si" onclick="showDiv2(true)"><label for="">si </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="p10" value="no" id="p10" onclick="showDiv2(false)"><label for="">no </label></center></p>
                                    
                </p>
                               
                </div>
              </fieldset>
              <br>
              
              <fieldset>
                <p><label><strong>¿En qué modelo educativo te gustaría estudiar la licenciatura?</strong></label>
                  <p> <input type="radio" name="p8" required value="1"><label for="">Escolar (Presencial)</label>
                  <input type="radio" name="p8" required value="2"><label for="">No Escolarizada</label>
                  <input type="radio" name="p8" required value="3"><label for="">Mixta</label></p>                        
                 </p>
               </fieldset>
               <br>
              
                <div id="finaliza">
                    <br>
                <p><label><strong>¿En qué institución de educación superior te quieres inscribir y que carrera piensas estudiar ?</strong></label>
                                    
                        <select name="p11" id="universidad1">
                        <option value="0">Selecciona</option>
                           <?php
                              try {
              
                                require ("../config.php");

                                //Creamos la conexión PDO por medio de una instancia de su clase
                                $cnn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

                                //Preparamos la consulta sql
                                $respuesta = $cnn->prepare("select * from universidad ORDER BY estatus DESC, nombre ASC");

                                //Ejecutamos la consulta
                                $respuesta->setFetchMode(PDO::FETCH_ASSOC);

                                $respuesta->execute();

                                $conta=0;

                                while($row = $respuesta->fetch())
                                {        
                                                                        
                                 echo "<option codigo='".$row["id"]."' value='".$row["nombre"]."'>".$row["nombre"]."</option>";                                             
                                } 
                              }
                                catch(Exception $e)
                                {
                                  echo $e->getMessage();
                                }                
                          ?>       
                        
                      </select>                    
                      </p>
                     <p><label><strong>Carrera:</strong></label>                     
                    <select name="p11b" id="carrera1">                        
                           <?php
                              try {
              
                                require ("../config.php");

                                //Creamos la conexión PDO por medio de una instancia de su clase
                                $cnn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

                                //Preparamos la consulta sql
                                $respuesta = $cnn->prepare("select * from universidad_carreras ORDER BY carrera ASC");

                                //Ejecutamos la consulta
                                $respuesta->setFetchMode(PDO::FETCH_ASSOC);

                                $respuesta->execute();

                                $conta=0;

                                while($row = $respuesta->fetch())
                                {        
                                                                        
                                 echo "<option codigo='".$row["id_universidad"]."' value='".$row["carrera"]."'>".$row["carrera"]."</option>";                                             
                                } 
                              }
                                catch(Exception $e)
                                {
                                  echo $e->getMessage();
                                }                
                          ?>       
                        
                      </select>                    
                      </p>                    
                  <p><label><strong>Anota el nombre completo de la institución donde deseas estudiar  </strong></label>
                        <input type="text" value="" name="otraec" placeholder="Otra escuela y carrera (fuera de Oaxaca)" maxlength="200" >
                      </p>

                 <hr>
                 <p><label><strong>En caso de no ser admitido en la institución que señalaste en la pregunta anterior, ¿ cuál sería tu segunda opción ?</strong></label>
                    
                    
                    <select name="p12" id="universidad2">
                    <option value="0">Selecciona</option>    
                           <?php
                              try {
              
                                require ("../config.php");

                                //Creamos la conexión PDO por medio de una instancia de su clase
                                $cnn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

                                //Preparamos la consulta sql
                                $respuesta = $cnn->prepare("select * from universidad ORDER BY estatus DESC, nombre ASC");

                                //Ejecutamos la consulta
                                $respuesta->setFetchMode(PDO::FETCH_ASSOC);

                                $respuesta->execute();

                                $conta=0;

                                while($row = $respuesta->fetch())
                                {        
                                                                        
                                  echo "<option codigo='".$row["id"]."' value='".$row["nombre"]."'>".$row["nombre"]."</option>";
                                } 
                              }
                                catch(Exception $e)
                                {
                                  echo $e->getMessage();
                                }                
                          ?>       
                        
                      </select>                    
                      </p>
                    
                      <p><label><strong>Carrera:</strong></label>                     
                    <select name="p12b" id="carrera2">                        
                           <?php
                              try {
              
                                require ("../config.php");

                                //Creamos la conexión PDO por medio de una instancia de su clase
                                $cnn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

                                //Preparamos la consulta sql
                                $respuesta = $cnn->prepare("select * from universidad_carreras ORDER BY carrera ASC");

                                //Ejecutamos la consulta
                                $respuesta->setFetchMode(PDO::FETCH_ASSOC);

                                $respuesta->execute();

                                $conta=0;

                                while($row = $respuesta->fetch())
                                {        
                                                                        
                                 echo "<option codigo='".$row["id_universidad"]."' value='".$row["carrera"]."'>".$row["carrera"]."</option>";                                              
                                } 
                              }
                                catch(Exception $e)
                                {
                                  echo $e->getMessage();
                                }                
                          ?>       
                        
                      </select>                    
                      </p>                    
              
                 </p>
               </div>
                
                <div id="finaliza2">
                 <fieldset>                  
                <p><label><strong>Para poder elegir adecuadamente tu carrera profesional, en qué mes prefieres recibir la información de las instituciones y carreras de educación superior</strong></label>
                  <p>
                      <tr style="width:100%">
                      <td><input type="radio" name="p13" value="Marzo"><label for=""> Febrero</label></td>&nbsp;&nbsp;&nbsp;
                      <td><input type="radio" name="p13" value="Marzo"><label for=""> Marzo</label></td>&nbsp;&nbsp;&nbsp;
                      <td><input type="radio" name="p13" value="Abril"><label for="">Abril</label></td>&nbsp;&nbsp;&nbsp;
                      <td><input type="radio" name="p13" value="Mayo"><label for="">Mayo</label></td>&nbsp;&nbsp;&nbsp;
                      <td><input type="radio" name="p13" value="Junio"><label for="">Junio</label> </td>&nbsp;&nbsp;&nbsp;
                      <td><input type="radio" name="p13" value="Agosto"><label for="">Agosto</label></td>&nbsp;&nbsp;&nbsp;
                      <td><input type="radio" name="p13" value="Septiembre"><label for="">Septiembre</label></td>&nbsp;&nbsp;
                      <td><input type="radio" name="p13" value="Octubre"><label for="">Octubre</label> </td>&nbsp;
                      <td><input type="radio" name="p13" value="Noviembre"><label for="">Noviembre</label></td>
                    </tr>
                  </p>
                    <hr>
                    </p>
                                        
                  </p>
                    
                </p>
                </fieldset>
                <br>
                <fieldset>
                <p><label><strong>Marca la opción que indique la manera de como prefieres recibir el folleto ¡Ya es hora!</strong></label>
                    <p><center> <input type="radio" name="p14" value="Digital"><label for="">Digital</label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="p14" value="Impreso"><label for="">Impreso</label></center></p>                     
                 </p>
                 <hr>
               </fieldset>
               <br>
               <fieldset>
                 <p><label><strong>¿Autorizas compartir tus datos personales del cuestionario, para que las instituciones de educación superior que elegiste para continuar tus estudios, te envien información adicional?</strong></label>
                     <p><center> <input type="radio" name="p15" value="si"><label for="">Si</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="p15" value="no"><label for="">No</label></center></p>                   
                 </p>               
                 </fieldset>        

                 </div>
                  
                        <table border="0">
                          <tr>
                            <td align="center">
                              <button class="button" type="btn-primary" title="Login">Enviar</button>
                            </td>                            
                                                       
                          </tr>
                        </table>                                               
                       <a href="avisodep.html" target="ORDE_blank" >
                                                                  
                        <p align="right"><FONT SIZE=3>Consulte nuestro aviso de pirvacidad</FONT></p>
                        </a>
                        <br>
                        <br>
                        <br>
                        <br>
                  </form>
                  
                </div>
                          
      </article>
    </main>