<html>
<title>Grabar interno</title>
    <style type="text/css">
body {
	background-image: url(imagenes/background_stripes9.JPG);
}
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
}
</style>
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
<body>
    <table width="100%" border="0">
      <tr align="center">
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
                <li class="yuimenubaritem first-of-type"><a href="resip.php">Internos</a>
                  <div id="communication" class="yuimenu">
                    <div class="bd">
                      <ul>
                        <li class="yuimenuitem"><a href="arch.php">Grabar Nuevo</li>
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
        <td><div align="center">
          <p>&nbsp;</p>
          <table border="20" cellpadding="10" cellspacing="4">
            <form action='arch.php' method="post">
  
  <tr>
    <td>User:
      <input type="text" name="user" /></td>
  </tr>
  <tr>
    <td>Pass:
      <input type="password" name="pass" /></td>
  </tr>
  <tr>
    <td>Type:
      <SELECT NAME="type" >
        <OPTION VALUE="friend">Friend</OPTION>
        <OPTION VALUE="peer">Peer</OPTION>
        <OPTION VALUE="user">User</OPTION>
      </SELECT></td>
  </tr>
  <tr>
    <td>Host:
      <input type="text" name="host" /></td>
  </tr>
  <tr>
    <td>Context:
      <input type="text" name="context" /></td>
  </tr>
  <tr>
    <td><input type=checkbox name=d >
      Disallow:
      <input type="text" name="disallow" value="all" /></td>
  </tr>
  <tr>
    <td><input type=checkbox name=a >
      Allow:
      <SELECT NAME="allow" >
        <OPTION VALUE="alaw">alaw</OPTION>
        <OPTION VALUE="ulaw">ulaw</OPTION>
        <OPTION VALUE="h263">h263</OPTION>
        <OPTION VALUE="alaw,ulaw,h263">alaw,ulaw,h263</OPTION>
        <OPTION VALUE="alaw,ulaw,h263,g729,gsm">alaw,ulaw,h263,g729,gsm</OPTION>
        <OPTION VALUE="alaw,ulaw">alaw,ulaw</OPTION>
      </SELECT></td>
  </tr>
  <tr>
    <td>Qualify
      <SELECT NAME="qualify" >
        <OPTION VALUE="yes">yes</OPTION>
        <OPTION VALUE="no">no</OPTION>
      </SELECT></td>
  </tr>
  <tr>
    <td>Canreinvite
      <SELECT NAME="canreinvite" >
        <OPTION VALUE="yes">yes</OPTION>
        <OPTION VALUE="no">no</OPTION>
      </SELECT></td>
  </tr>
        </table>
        </div></td>
      </tr>
</table>
    <br><div align="center"><button name="Alta" type="submit" >Alta
        </button></div></form>
    <?php
    define('U', "user=");
    define('P', "pass=");
    define('T', "type=");
    define('H', "host=");
    define('C', "context=");
    define ('D',"disallow=");
    define('A',"allow=");
    define('Q',"qualify=");
    define('CAN',"canreinvite=");
    $user = @$_POST['user'];
    $pass = @$_POST['pass'];
    $type = @$_POST['type'];
    $host = @$_POST['host'];
    $context = @$_POST['context'];
    $disallow= @$_POST['disallow'];
    $allow= @$_POST['allow'];
    $qualify=@$_POST['qualify'];
    $canreinvite=@$_POST['canreinvite'];
    $path="sip.conf";
    $arch = @fopen($path, "a+");
    $parse=  parse_ini_file($path, true);
    $ban=0;
    if (isset ($_POST['Alta']))
{    
         foreach ($parse as  $arreglo) {
                    
                foreach ($arreglo as $clave => $valor) { 
                
                    if ($clave=='user'){
                     if ($valor==$user){
                         $ban=1;
                     }   
                    }
                }
                
                }
        if ($ban!=1){
                if ((!empty($_POST["user"])) && (!empty($_POST["pass"])) && (!empty($_POST["type"])) && (!empty($_POST["host"])) && (!empty($_POST["context"]))) {
        $cor = "[" . $user . "]";
        $us = U . $user;
        $p = P . $pass;
        $ty = T . $type;
        $h = H . $host;
        $con = C . $context;
        $qua=Q. $qualify;
        $canre=CAN.$canreinvite;       
        $esp= chr(13) . chr(10);
        $dis=D.$disallow;
        $al=A.$allow;
        fwrite($arch, "$cor\n");
        fwrite($arch, "$us\n");
        fwrite($arch, "$p\n");
        fwrite($arch, "$ty\n");
        fwrite($arch, "$h\n");
         fwrite($arch, "$con\n");//\r
        
         if(isset($_POST['d'])&& (isset($_POST['a']))) {
        
        fwrite($arch, "$dis\n");
        fwrite($arch, "$al\n");
        
        fwrite($arch, "$qua\n");
        fwrite($arch, "$canre\n"); 
         fwrite($arch, "$esp"); 
        
       } 
    else { 
       fwrite($arch, "$qua\n");
        fwrite($arch, "$canre\n"); 
          fwrite($arch, "$esp");  
    } 
    
    echo ("Grabado con exito!");
    $cmd="sudo asterisk -rx 'sip reload'";
    shell_exec($cmd);
    
}//if user
else {   
echo ("No se grabo");
    
} //si no hay un catso
 }else{ 
    echo "El Usuario ya  existe";
} 
}
   
$cer = @fclose($arch);
    unset($user);
    unset($pass);
    unset($type);
    unset($host);
    ?>
</body>
</html>
