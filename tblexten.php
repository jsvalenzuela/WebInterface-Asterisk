<style type="text/css">
body {
	background-image: url(imagenes/background_stripes9.JPG);
}
</style>
<link href="YUI/2.9/build/fonts/fonts-min.css" rel="stylesheet" type="text/css" />
<link href="YUI/2.9/build/menu/assets/skins/sam/menu.css" rel="stylesheet" type="text/css" />
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
<table width="100%" border="0">
  <tr>
    <td><div align="center"><img src="imagenes/banner2.png" width="845" height="204" align="absmiddle" /></div></td>
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
</table>
    <?php
$fp=fopen('/etc/asterisk/extensions.conf',"r");
echo "<table border=0 cellspacing=0 cellpadding=2>";
while(!feof($fp)){
    $lin=fgets($fp,999);    
    
    echo "<tr><td>".$lin. "</td><tr>" ;
    
}

echo "</table>";
fclose($fp);

?>