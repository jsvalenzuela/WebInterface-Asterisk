<html>
<title>Borrar interno</title>
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

<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
}
body {
	background-image: url(imagenes/background_stripes9.JPG);
}
</style>

<img src="imagenes/banner2.png" width="845" height="204" align="absmiddle">
<table width="100%" border="0">
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
    <td><form action="bor.php" method="post">
      <table width="100%" border="5" cellpadding="10" cellspacing="4">
        <tr>
          <td><div align="center">Interno</div></td>
          <td><div align="center">
            <?php
        global $archivo;
        $archivo = parse_ini_file("sip.conf", true);
        $path = ("sip.conf");
        $c = 0;

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
                           echo "<td>" . "<button name=$y type=submit>Borrar</button></td>";
                         echo "</tr>";  
                        
                        }
                    }
                  
                }
             
                
                global $sub;
                $sub = 0;
                global $y;
                $y = $y + 1;
                
             
            }
            
            echo '</table>';
        }

//fin cargar

        cargar($archivo);
        ?>
          </div></td>
          <td><div align="center">
            <?php
      $cont=0;
      $h=0;
        
        for ($j = 0; $j <= $y; $j++) {
            if (isset($_POST[$j])) { //si hay algo en post  del boton
                $SFfdescriptor = fopen( $path, "w" );
                foreach ($archivo as $key => $arreglo) {
                    if ($cont!= $j) {
                    fwrite( $SFfdescriptor, "[" . $key . "]\n" );
                } else {

                    fwrite( $SFfdescriptor,  "" );
                }
                    foreach ($arreglo as $clave => $valor) {
                      if($j==$cont)
                      { 
                          
                              fwrite( $SFfdescriptor, "" );
                                           $h=1;     
                        
                    }
                  else {
                     
                           if ($clave == 'qualify') {
             if ($valor == 1) {
                                $valor='yes';
                            fwrite($SFfdescriptor, "$clave=$valor\n");
                                
                            } else {
                                $valor="no";
                            
                                fwrite($SFfdescriptor, "$clave=$valor\n");
                            }
                   
        
             }elseif ($clave == 'canreinvite') {
            
                      if ($valor == 1) {
                                $valor='yes';
                            
                                fwrite($SFfdescriptor, "$clave=$valor\n"); 
                            } else {
                                $valor="no";
                            
                                fwrite($SFfdescriptor, "$clave=$valor\n"); 
                            }
                    
            
            } 
            
            else{
              if ($clave == 'videosupport') {
            
                      if ($valor == 1) {
                                $valor='yes';
                            
                                fwrite($SFfdescriptor, "$clave=$valor\n"); 
                            } else {
                                $valor="no";
                            
                                fwrite($SFfdescriptor, "$clave=$valor\n"); 
                            }
                    
            
            }else{
              fwrite($SFfdescriptor, "$clave=$valor\n"); } 
            }
                  
                           
                  }     
                                                 
         
               
			}//contenido del interno
			if ($h!=1)                
			{
                        $esp=chr(13) . chr(10);
                        fwrite( $SFfdescriptor, $esp);
                	}
                $h=0;
                $cont++;
                } //internos
            
                
                ?>
          </div></td>
          <td><div align="center">
            <?php 
           
            echo "<script language='Javascript'> 
          
           location.reload(true); 
            </script> ";
            
           
           
           } // if boton
        }//for
         
         @fclose( $SFfdescriptor );
		 //$cmd="sudo asterisk -rx 'sip reload'";
         //shell_exec($cmd);
?>
          </div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </form></td>
  </tr>
</table>
</html>
