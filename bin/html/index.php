<?php

$i = (isset($_GET['i'])) ? $_GET['i'] : "";
if ($i == "") {
    $i = "Configuration";
}
include_once "../config.inc.php";
include "header.inc.php";


global $edpmode;
$edpmode = "web";


                
                
?>
    <body onload="bootloader();" onresize="aligndesign();">
        <table border="0" width="100%" cellpadding="0" style="border-collapse: collapse" background="images/topbar-bg-normal2.png" height="69">
            <tr style="vertical-align: bottom;"  class="topbarmenu" align="center" style='cursor: hand'>
                <td width="80" onclick="loader('Configuration')"><img src="icons/sysprefs.png" width="40"></td>
                <td width="80" onclick="loader('Fixes')"><img src="icons/fixes.png" width="38"></td>
                <td width="80" onclick="loader('Tools')"><img src="icons/tools.png" width="38"></td>
                <td width="80" onclick="loader('Update');"><img src="icons/Installer.png" width="38"></td>
                <td width="80" onclick="loader('Credits');"><img src="icons/credits.png" width="38"></td>
                <td>&nbsp;</td>
                <td width="80" onclick="window.open('<?= "$donateurl"; ?>')"><img src="icons/paypal.png" width="38"></td>
            </tr>
            <tr class="topbarmenu" align="center" style='cursor: hand'>
                <td onclick="loader('Configuration')">Config</td>
                <td onclick="loader('Fixes')">Fixes</td>
                <td onclick="loadwe('Tools')">Tools</td>
                <td onclick="loader('Update')">Update</td>
                <td onclick="loader('Credits');">Credits</td>
                <td>&nbsp;</td>
                <td onclick="window.open('<?= $donateurl; ?>');">Donate</td>
            </tr>
        </table>

        <iframe id="edpmenu" class="edpmenu" marginwidth="0" marginheight="0" border="0" frameborder="0" height="80%" src="menu.inc.php?i=<?= "$i"; ?>"></iframe>
        <iframe id="console_iframe" class="console_iframe" marginwidth="0" marginheight="0" border="0" frameborder="0" src="show.php?i=pages/welcome.inc.php"></iframe>

    </body>
</html>