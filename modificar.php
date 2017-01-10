<html>
    <title>Modificar</title>
    <link href="YUI/2.9/build/fonts/fonts-min.css" rel="stylesheet" type="text/css">
    <link href="YUI/2.9/build/menu/assets/skins/sam/menu.css" rel="stylesheet" type="text/css">
    <script src="YUI/2.9/build/yahoo-dom-event/yahoo-dom-event.js" type="text/javascript"></script>
    <script src="YUI/2.9/build/container/container_core-min.js" type="text/javascript"></script>
    <script src="YUI/2.9/build/menu/menu-min.js" type="text/javascript"></script>
    <script type="text/xml">
        <!--
        <oa:widgets>
          <oa:widget wid="2567022" binding="#OAWidget" />
        </oa:widgets>
        -->
    </script>

    <form action="modificar.php" method="post">
        <table width="100%" border="0" align="center">
            <tr>
                <td><div align="center"><img src="imagenes/banner2.png" width="845" height="204" align="absmiddle"></div></td>
            </tr>
            <tr>
                <td><style>
                        .yui-skin-sam .yui-menu-shadow-visible {
                            background-color:#000;
                            opacity:.25;
                        }

                        .yui-menu-shadow-visible {
                            top:2px;
                            right:-3px;
                            left:-3px;
                            bottom:-3px;
                        }

                        .yui-skin-sam .yuimenuitem-selected {
                            background-color:#B3D4FF;
                        }

                        .yui-skin-sam .yuimenuitemlabel {
                            color:#000;
                        }

                        .yui-skin-sam .yuimenuitemlabel-disabled {
                            color:#A6A6A6;
                        }

                        .yui-skin-sam .yuimenu {
                            font-size:12px;
                        }

                        .yui-skin-sam .yuimenu .bd {
                            background-color: #FFFFFF;
                            border: solid 1px #808080;
                        }	


                    </style>
                    <div id="OAWidget" class="yuimenubar yuimenubarnav">
                        <div class="bd">
                            <ul class="first-of-type">
                                <li class="yuimenubaritem first-of-type"><a class="yuimenubaritemlabel" href="resip.php">Internos</a>
                                    <div id="communication" class="yuimenu">
                                        <div class="bd">
                                            <ul>
                                                <li class="yuimenuitem"><a class="yuimenuitemlabel" href="arch.php">Grabar Nuevo</a></li>
                                                <li class="yuimenuitem"><a class="yuimenuitemlabel" href="modificar.php">Modificar</a></li>
                                                <li class="yuimenuitem"><a class="yuimenuitemlabel" href="bor.php">Borrar</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="yuimenubaritem"><a class="yuimenubaritemlabel" href="tblexten.php">Extensions</a>
                                    <div id="shopping" class="yuimenu">
                                        <div class="bd">
                                            <ul>
                                                <li class="yuimenuitem"><a class="yuimenuitemlabel" href="tblexten.php">Resumen</a></li>
                                                <li class="yuimenuitem"><a class="yuimenuitemlabel" href="exten.php">Editar</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        // BeginOAWidget_Instance_2567022: #OAWidget
 
                        (function() { 
                            var cn = document.body.className.toString();
                            if (cn.indexOf('yui-skin-sam') == -1) {
                                document.body.className += " yui-skin-sam";
                            }
                        })();

                        var initOAWidget = function() {
                            /*
               Instantiate a Menu:  The first argument passed to the 
               constructor is the id of the element in the page 
               representing the Menu; the second is an object literal 
               of configuration properties.
                             */

                            var OAWidget = new YAHOO.widget.MenuBar("OAWidget",  { autosubmenudisplay: true, lazyload: true } );
    
                            OAWidget.render();
                        };

                        // Create the YUI Menu when the HTML document is usable.
                        YAHOO.util.Event.onDOMReady(initOAWidget);

                        // EndOAWidget_Instance_2567022
                    </script></td>
            </tr>
            <tr>
                <td><div align="center">Interno
                        <?php
                        global $archivo;
                        $archivo = parse_ini_file("sip.conf", true);
                        $path = ("sip.conf");
                        $c = 0;
                        global $i;
                        $i = 0;
                        $sub = 0;

                        function cargar($arch) { //cargar tabla
                            echo "<table border=1 cellspacing=0 cellpadding=2 >";
                            echo " <tr> <td><b>User</b></td><td><b>Pass</b></td><td><b>Type</b></td><td><b>Host</b></td><td><b>Context</b></td><td><b>Disallow</b></td><td><b>Allow</b></td><td><b>Qualify</b></td><td><b>Canreinvite</b></td></tr>";

                            $y = 0; //contador para crear array por interno

                            foreach ($arch as $key => $arreglo) {

                                foreach ($arreglo as $clave => $valor) {

                                    if ($clave == 'disallow' || $clave == 'allow') {
                                        if ($clave == 'disallow') {
                                            echo "<td>" . $valor . "</td>";
                                        }
                                        if ($clave == 'allow') {
                                            echo "<td>" . $valor . "</td>";
                                        }
                                        //echo "<td>" . $valor . "</td>";
                                        $sub = 1;
                                    } else {


                                        if ($clave == 'user') {



                                            echo "<tr><td>" . $valor . "  " . "</td>";
                                            global $u;
                                        }
                                        if ($clave == 'pass') {
                                            //echo "<td>" . $valor . "  " . "</td>";
                                            echo "<td>" . str_repeat('*', strlen($valor)) . "</td>";
                                        }
                                        if ($clave == 'type') {
                                            echo "<td>" . $valor . "</td>";
                                        }
                                        if ($clave == 'host') {
                                            echo "<td>" . $valor . "  " . "</td>";
                                        }


                                        if ($clave == 'context') {

                                            echo "<td>" . $valor . "  " . "</td>";
                                        }



                                        if ($clave == 'qualify') {
                                            if ($sub == 1) {
                                                if ($valor == 1) {
                                                    echo "<td>" . "yes" . "  ";
                                                } else {
                                                    echo "<td>" . "no" . " ";
                                                }

                                                echo "</td>";
                                            } else {
                                                echo "<td>" . '-' . "</td>";
                                                echo "<td>" . '-' . "</td>";
                                                if ($valor == 1) {
                                                    echo "<td>" . "yes" . "  ";
                                                } else {
                                                    echo "<td>" . "no" . " ";
                                                }

                                                echo "</td>";
                                            }
                                        }


                                        if ($clave == 'canreinvite') {
                                            if ($valor == 1) {
                                                echo "<td>" . "yes" . "  ";
                                            } else {
                                                echo "<td>" . "no" . " ";
                                            }
                                            echo "</td>";
                                            echo "<td>" . "<button name=$y type=submit>Editar</button></td>";
                                        }
                                    }
                                } //bucle foreach

                                global $sub;
                                $sub = 0;
                                global $y;
                                $y = $y + 1;
                            }

                            echo "</tr>";
                            echo '</table>';
                        }

//fin cargar

                        cargar($archivo);
                        ?>
                    </div></td>
            </tr>
            <tr>
                <td><div align="center">
                        <?php
                        $cont = 0;
                        $pos = 0;
                        $band = 0;
                        for ($j = 0; $j <= $y; $j++) {
                            if (isset($_POST[$j])) { //si hay algo en post  del boton
                                foreach ($archivo as $arreglo) {

                                    foreach ($arreglo as $clave => $valor) {
                                        if ($j == $cont) {

                                            $pos = $j;
                                            $handle = @fopen('mod.temp', 'w+');
                                            @fputs($handle, $pos);
                                            @fclose($handle);
                                            if ($clave == 'disallow' || $clave == 'allow') {
                                                $band = 1;
                                                if ($clave == 'disallow') {
                                                    echo "<input type=checkbox name=d  checked='yes'>" . $clave . "<input type='text' name='disallow' value='all' /><br>";
                                                }
                                                if ($clave == 'allow') {
                                                    ?>
                                                    <input type=checkbox name=a  checked='yes'>
                                                    Allow:
                                                    <SELECT NAME='allow' >
                                                        <option value="alaw" <?php if ($valor == 'alaw') echo 'selected="selected"'; ?>>alaw</option>
                                                        <option value="ulaw" <?php if ($valor == 'ulaw') echo 'selected="selected"'; ?>>ulaw</option>
                                                        <option value="h263" <?php if ($valor == 'h263') echo 'selected="selected"'; ?>>h263</option>
                                                        <OPTION VALUE="alaw,ulaw,h263" <?php if ($valor == 'alaw,ulaw,h263') echo 'selected="selected"'; ?>>alaw,ulaw,h263</OPTION>
                                                        <OPTION VALUE="alaw,ulaw,h263,g729,gsm " <?php if ($valor == 'alaw,ulaw,h263,g729,gsm') echo 'selected="selected"'; ?> >alaw,ulaw,h263,g729,gsm</OPTION>
                                                        <OPTION VALUE="alaw,ulaw" <?php if ($valor == 'alaw,ulaw') echo 'selected="selected"'; ?> >alaw,ulaw</OPTION>
                                                    </SELECT>
                                                </div></td>
                                        </tr>
                                        <tr>
                                            <td><div align="center">
                                                    <?php
                                                }
                                            } else {


                                                if ($clave == 'user') {
                                                    global $pos;
                                                    /* $pos = $j;
                                                      $handle = fopen('mod.temp', 'w+');
                                                      fputs($handle, $pos);
                                                      fclose($handle); */
                                                    echo "<b>" . $clave . "  " . "</b>";
                                                    echo "<input type='text' name ='user' value= '" . $valor . "'  />";
                                                    echo "<br>";
                                                }
                                                if ($clave == 'pass') {

                                                    echo "<b>" . $clave . "  " . "</b>";
                                                    echo "<input type='password' name ='pass' value= '" . $valor . "'  />";
                                                    echo "<br>";
                                                }
                                                if ($clave == 'type') {
                                                    echo "<b>" . $clave . "  " . "</b>";
                                                    ?>
                                                    <select name="type">
                                                        <option value="friend" <?php if ($valor == 'friend') echo 'selected="selected"'; ?>>friend</option>
                                                        <option value="peer" <?php if ($valor == 'peer') echo 'selected="selected"'; ?>>peer</option>
                                                        <option value="user" <?php if ($valor == 'user') echo 'selected="selected"'; ?>>user</option>
                                                    </select>
                                                </div></td>
                                        </tr>
                                        <tr>
                                            <td><div align="center">
                                                    <?php
                                                    echo "<br>";
                                                }
                                                if ($clave == 'host') {

                                                    echo "<b>" . $clave . "  " . "</b>";

                                                    echo "<input type='text' name ='host' value= '" . $valor . "'  />";
                                                    echo "<br>";
                                                }


                                                if ($clave == 'context') {

                                                    echo "<b>" . $clave . "  " . "</b>";
                                                    echo "<input type='text' name ='context' value= '" . $valor . "'  />";
                                                    echo "<br>";
                                                }



                                                if ($clave == 'qualify') {
                                                    if ($band == 1) {
                                                        echo "<br>" . $clave . ":";
                                                        ?>
                                                        <SELECT NAME="qualify" >
                                                            <option value="yes" <?php if ($valor == 1) echo 'selected="selected"'; ?>>yes</option>
                                                            <option value="no" <?php if ($valor == "") echo 'selected="selected"'; ?>>no</option>
                                                        </SELECT>
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td><div align="center">
                                                        <?php
                                                    }


                                                    else {
                                                        ?>
                                                        <input type=checkbox name=d  />  Disallow:   <input type='text' name='disallow' value='all' /><br>

                                                      <input type=checkbox name=a  />Allow: <SELECT NAME='allow' >
                                 <OPTION VALUE='alaw'>alaw</OPTION>
                                <OPTION VALUE='ulaw'>ulaw</OPTION>
                               <OPTION VALUE='h263'>h263</OPTION>
                             <OPTION VALUE='alaw,ulaw,h263' >alaw,ulaw,h263</OPTION>
                          <OPTION VALUE='alaw,ulaw,h263,g729,gsm' >alaw,ulaw,h263,g729,gsm</OPTION>
                         <OPTION VALUE='alaw,ulaw'>alaw,ulaw</OPTION>
                         </SELECT>
                                                     <?php
                                                        if ($clave == 'qualify') {
                                                            echo "<br>" . $clave . ":";
                                                            ?>
                                                            <SELECT NAME="qualify" >
                                                                <option value="yes" <?php if ($valor == 1) echo 'selected="selected"'; ?>>yes</option>
                                                                <option value="no" <?php if ($valor == "") echo 'selected="selected"'; ?>>no</option>
                                                            </SELECT>
                                                        </div></td>
                                                </tr>
                                                <tr>
                                                    <td><div align="center">
                                                            <?php
                                                        }
                                                    }
                                                }

                                                if ($clave == 'canreinvite') {

                                                    echo $clave . ":";
                                                    ?>
                                                    <SELECT NAME="canreinvite" >
                                                        <option value="yes" <?php if ($valor == 1) echo 'selected="selected"'; ?>>yes</option>
                                                        <option value="no" <?php if ($valor == "") echo 'selected="selected"'; ?>>no</option>
                                                    </SELECT>
                                                </div></td>
                                        </tr>
                                        <tr>
                                            <td><div align="center">
                                                    <?php
                                                    echo "<br><button name=update type=submit  onClick=location.reload();>Actualizar</button>";
                                                }
                                            }
                                        }
                                    }//contenido del interno

                                    $cont++;


                                    $band = 0;
                                } //internos
                            } // if boton
                        }//for

                        if (isset($_POST['update'])) { //si hay algo en post  del boton actualizar(grabar)
                            $user = @$_POST['user'];
                            $pass = @$_POST['pass'];
                            $type = @$_POST['type'];
                            $host = @$_POST['host'];
                            $context = @$_POST['context'];
                            $sect = '[' . @$_POST['user'] . ']';
                            $disallow = @$_POST['disallow'];
                            $allow = @$_POST['allow'];
                            $qualify = @$_POST['qualify'];
                            $canreinvite = @$_POST['canreinvite'];
                            $ct = 0;
                            $ban = 0;
                            $raya = 0;



                            $clav = @file('mod.temp');
                            $path = ("sip.conf");
                            $SFfdescriptor = fopen($path, "w");



                            foreach ($archivo as $key => $arreglo) {


                                //grabar seccion
                                if ($ct != $clav[0]) {
                                    fwrite($SFfdescriptor, "[" . $key . "]\n");
                                } else {

                                    fwrite($SFfdescriptor, $sect . "\n");
                                }

                                foreach ($arreglo as $clave => $valor) {
                                    //si clave del archivo es igual a contador


                                    if ($clav[0] == $ct) {
                                        if ($clave == 'user') {
                                            fwrite($SFfdescriptor, "$clave=$user\n");
                                        }

                                        if ($clave == 'pass') {
                                            fwrite($SFfdescriptor, "$clave=$pass\n");
                                        }

                                        if ($clave == 'type') {
                                            fwrite($SFfdescriptor, "$clave=$type\n");
                                        }

                                        if ($clave == 'host') {
                                            fwrite($SFfdescriptor, "$clave=$host\n");
                                        }

                                        if ($clave == 'context') {
                                            fwrite($SFfdescriptor, "$clave=$context\n");
                                        }

                                        if ((isset($_POST['d'])) && (isset($_POST['a']))) {
                                           
                                            if ($clave == 'disallow') {
                                                fwrite($SFfdescriptor, "$clave=$disallow\n");
                                            
                                                $raya = 1; 
                                            }
                                            if ($clave == 'allow') {
                                                fwrite($SFfdescriptor, "$clave=$allow\n");
                                            }
                                        }

                                        if ($clave == 'qualify') {
                                            if ($raya==0) {
                                                if ( isset($_POST['d']) && isset($_POST['a']) ) {
                                                    //$raya=1;

                                                    fwrite($SFfdescriptor, "disallow=$disallow\n");

                                                    fwrite($SFfdescriptor, "allow=$allow\n");
                                                    fwrite($SFfdescriptor, "$clave=$qualify\n");
                                                }else {
                                                fwrite($SFfdescriptor, "$clave=$qualify\n");
                                            }
                                            
                                                
                                            } elseif($raya==1) {
                                             fwrite($SFfdescriptor, "$clave=$qualify\n");   
                                            }
                                        
                                            
                                        }
                                    if ($clave == 'canreinvite') {
                                        fwrite($SFfdescriptor, "$clave=$canreinvite\n");
                                    }
                                        
                                    } //fin modificar archivo 
                                    else {    //grabar lo que no se modifica

                                        //cleve video

                                        if ($clave == 'qualify') {
                                            if ($valor == 1) {
                                                $valor = 'yes';
                                                fwrite($SFfdescriptor, "$clave=$valor\n");
                                            } else {
                                                $valor = "no";

                                                fwrite($SFfdescriptor, "$clave=$valor\n");
                                            }
                                        } else if ($clave == 'canreinvite') {
                                            if ($valor == 1) {
                                                $valor = 'yes';
                                                fwrite($SFfdescriptor, "$clave=$valor\n");
                                            } else {
                                                $valor = "no";

                                                fwrite($SFfdescriptor, "$clave=$valor\n");
                                            }
                                        } elseif ($clave == 'videosupport') {

                                            if ($valor == 1) {
                                                $valor = 'yes';

                                                fwrite($SFfdescriptor, "$clave=$valor\n");
                                            } else {
                                                $valor = "no";

                                                fwrite($SFfdescriptor, "$clave=$valor\n");
                                            }
                                        } else {
                                            fwrite($SFfdescriptor, "$clave=$valor\n");
                                        }
                                    } //escribir original
                                } // fin foreach 2

                                $esp = chr(13) . chr(10);
                                fwrite($SFfdescriptor, $esp);
                                $raya = 0;
                                $ct = $ct + 1;
                            } // fin foreach seccion

                            @fclose($SFfdescriptor);
                            unset($user);
                            unset($pass);
                            unset($type);
                            unset($host);
                            unset($context);
                            if (file_exists('mod.temp')) {
                                echo "<script language='Javascript'>
                    //alert ('Cambios actualizados con exito');
                    location.reload(true);
                            </script>";
                                ?>
                            </div></td>
                    </tr>
                </table>
                <p><br>
                    <br>
                </p>
                <p>
                </p>



        <?php
        @unlink('mod.temp');
        $filena = "sip.conf";
        //$cmd="sudo asterisk -rx 'sip reload'";
        //shell_exec($cmd);
        $ah = parse_ini_file($filena, true);
        cargar($ah);
    } //funcion que borra archivo
} // if boton actualizar
?>


    </form>
</html>
