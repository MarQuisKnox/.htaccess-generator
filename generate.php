<?
/*
###########################################################################
#                           htaccess-Generator                            #
###########################################################################
#                                                                         #
#  Copyright © 2000+2001 by Alexander Mieland (DMA147.ThW.N)              #
#  Contact: dma147@gamesweb.com / http://www.apboard.de                   #
#                                                                         #
###########################################################################
#  Dieses Script ist vollkommen frei und kostenlos erh‰ltlich.            #
#  Dieses Script darf an Dritte weitergegeben werden, Vorraussetzung      #
#  ist, dass der Code unver‰ndert bleibt und diese Text-Datei             #
#  !!! WICHTIG !!!.txt mit weitergegeben wird.                            #
#  Dieses Script ist herunterzuladen unter:  http://www.apboard.de        #
###########################################################################


*/
$version="v.1.6";


	//
	// alle globalen Variablen in lokale ¸bertragen => REGISTER_GLOBALS = OFF
	//
	
	if (!empty($_GET))                   { extract($_GET); }
	else if (!empty($HTTP_GET_VARS))     { extract($HTTP_GET_VARS); }
	
	if (!empty($_POST))                  { extract($_POST); }
	else if (!empty($HTTP_POST_VARS))    { extract($HTTP_POST_VARS); }
	
	if (!empty($_COOKIE))                { extract($_COOKIE); }
	else if (!empty($HTTP_COOKIE_VARS))  { extract($HTTP_COOKIE_VARS); }
	
	if (!empty($_ENV))                   { extract($_ENV); }
	else if (!empty($HTTP_ENV_VARS))     { extract($HTTP_ENV_VARS); }
	
	if (!empty($_SERVER))                { extract($_SERVER); }
	else if (!empty($HTTP_SERVER_VARS))  { extract($HTTP_SERVER_VARS); }
	
	if (!empty($_SESSION))               { extract($_SESSION); }
	else if (!empty($HTTP_SESSION_VARS)) { extract($HTTP_SESSION_VARS); }
	
	if (!empty($_FILES))
	{
		while (list($name, $value) = each($_FILES))
		{
			$$name = $value['tmp_name'];
		}
	}
	else if (!empty($HTTP_POST_FILES))
	{
		while (list($name, $value) = each($HTTP_POST_FILES))
		{
			$$name = $value['tmp_name'];
		}
	}

function error($text) {
echo"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td><div align=\"center\"><p><font face=\"Geneva, Arial, Helvetica, san-serif\" size=\"4\" color=\"#FF0000\"><b><font color=\"#FF3300\">ERROR:</font></b></font></p>
<p><b><font face=\"Geneva, Arial, Helvetica, san-serif\" size=\"2\" color=\"#333333\">Das Script meldet folgenden Fehler:<br>&quot;<font size=\"3\" color=\"#FF3300\">".$text."</font>&quot; </font></b></p>
<p><b><font face=\"Geneva, Arial, Helvetica, san-serif\" size=\"2\" color=\"#333333\"><br>[ - <a href=\"./access.php\">Index</a> - <a href=\"javascript:history.go(-1)\">Zur&uuml;ck</a> - ]</font></b></p><br><br><br>
</div></td></tr></table></b></font></form></td><td width=\"3%\">&nbsp;</td></tr><tr><td width=\"4%\">&nbsp;</td><td width=\"93%\"><div align=\"right\"><font face=\"Geneva, Arial, Helvetica, san-serif\" size=\"1\" color=\"#666666\"><br>
htaccess-Generator Copyright &copy; 2000+2001 by <a href=\"mailto:dma147@gamesweb.com\">Alexander Mieland (DMA147)</a></font></div></td><td width=\"3%\">&nbsp;</td></tr></table></td></tr></table></body></html>";
exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><html><head><title>htaccess-Generator <? echo $version; ?></title><style type="text/css">
a:link { color:#0033FF; text-decoration:none; }
a:visited { color:#0033FF; text-decoration:none; }
a:active { color:#FF3300; text-decoration:none; }
a:hover { color:#FF3300; text-decoration:none; }
</style></head><body bgcolor="#666666" text="#333333" link="#0033FF" vlink="#0033CC" alink="#FF3300" topmargin="30"><br><br><br><table width="550" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
<tr><td><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr bgcolor="#CCCCCC"><td width="2%" height="31">&nbsp;</td><td width="96%" height="31" bgcolor="#CCCCCC">
<div align="center"><font face="Geneva, Arial, Helvetica, san-serif" size="3" color="#666666"><b><font size="4">DMA`s <font color="#FF3300">htaccess</font>-Generator <? echo $version; ?></font></b></font></div>
</td><td width="2%" height="31">&nbsp;</td></tr><tr><td width="2%" bgcolor="#CCCCCC">&nbsp;</td><td width="96%"> <font face="Geneva, Arial, Helvetica, san-serif" size="1" color="#333333">
<br>
Script zum erstellen eines kompletten, passwortgesch&uuml;tzen Bereichs
auf dem Server.<br>
<font color="#FF3300"><b><li>Das Verzeichnis, welches gesch&uuml;tzt werden soll, MUSS chmod 777 haben!
<li>Dieses Script muss IN dem, zu sch&uuml;tzenden Verzeichnis liegen!<br><br><br><br></b></font></font></td><td width="2%" bgcolor="#CCCCCC">&nbsp;</td></tr><tr><td width="2%" bgcolor="#CCCCCC">&nbsp;</td><td width="96%">
<?
if (!isset($auswahl)):
?>
            <br>
            <div align="center"> <font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b>
              <font size="3" color="#FF3300">htaccess</font><font size="3">-Men&uuml;</font><br>
              <br>
              </b></font>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="50%">
                    <div align="right"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#333333"><b><a href="./access.php?auswahl=neu">Neuen
                      Admin-Bereich erstellen</a>&nbsp;&nbsp;&nbsp;</b></font></div>
                  </td>
                  <td width="50%">
                    <div align="left"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#333333"><b>&nbsp;&nbsp;&nbsp;<a href="./access.php?auswahl=change">Einen
                      Admin-Bereich &auml;ndern</a></b></font></div>
                  </td>
                </tr>
                <tr>
                  <td width="50%">
                    <div align="right"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#333333"><b>&nbsp;&nbsp;&nbsp;</b></font></div>
                  </td>
                  <td width="50%">
                    <div align="left"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#333333"><b>&nbsp;&nbsp;&nbsp;</b></font></div>
                  </td>
                </tr>
                <tr>
                  <td width="50%">
                    <div align="right"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#333333"><b><a href="./access.php?auswahl=open">Einen
                      Admin-Bereich wieder &ouml;ffnen</a>&nbsp;&nbsp;&nbsp;</b></font></div>
                  </td>
                  <td width="50%">
                    <div align="left"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#333333"><b>&nbsp;&nbsp;&nbsp;<a href="http://www.apboard.de">Zur
                      Homepage des Generators</a></b></font></div>
                  </td>
                </tr>
                <tr>
                  <td width="50%">
                    <div align="right"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#333333"><b>&nbsp;&nbsp;&nbsp;</b></font></div>
                  </td>
                  <td width="50%">
                    <div align="left"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#333333"><b>&nbsp;&nbsp;&nbsp;</b></font></div>
                  </td>
                </tr>
                <tr>
                  <td width="50%">
                    <div align="right"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#333333"><b><a href="mailto:dma147@gamesweb.com?subject=Mail%20aus%20dem%20Generator%20heraus">Dem
                      Autor eine eMail schicken</a>&nbsp;&nbsp;&nbsp;</b></font></div>
                  </td>
                  <td width="50%">
                    <div align="left"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#333333"><b>&nbsp;&nbsp;&nbsp;<a href="http://www.dmx147.de/download/htaccess.zip">Die
                      neueste Version downloaden</a></b></font></div>
                  </td>
                </tr>
              </table>
              <br>
              <br>
              <br>
              <font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b>
              </b> </font> </div>
<?
elseif ($auswahl == "neu"):              
     if (!isset($user)):
?>
              <br>
              <div align="center"> <font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b> 
                <font size="4" color="#FF3300">Neuen Bereich anlegen</font></b></font><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"> 
                <br>
                <br>
                <br>
                <br>
                <a href="./access.php?auswahl=neu&user=1">Bereich mit nur einem User anlegen</a><br>
                <br>
                <a href="./access.php?auswahl=neu&user=2">Bereich mit mehreren Usern anlegen</a><br>
                <br>
                <br>
                <br>
                [ - <a href="./access.php">index</a> - ]</font>
                <br>
                <br>
                <br>
              </div>
              <?
              elseif ($user == "1"):
                    if (!isset($save)):
              ?>
                         <form method="post" action="./access.php" name="send">
                         <center>
                            <font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b>
                            <div align="center"><br>
                               Neuen Admin-Bereich erstellen </div>
                            </b></font>
                         </center>
                            <div align="center"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b><br>
                             <br>
                              Vergib einen Namen f¸r den Bereich (max. 30 Zeichen):<br>
                             <input type="text" name="realm" maxsize=30>
                             <br>
                             <br>
                             Gib den Usernamen ein:<br>
                             <input type="text" name="name">
                             <br>
                             <br>
                             Gib das Passwort zweimal ein:<br>
                             <input type="password" name="pwd1">
                             <br>
                             <input type="password" name="pwd2">
                             <input type="hidden" name="save" value="yes">
                             <input type="hidden" name="user" value="1">
                             <input type="hidden" name="auswahl" value="neu">
                             <br>
                             <br>
                             <input type="submit" name="submit" value="speichern">
                             </b></font></div>
                             <font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b> 
                             </b></font> 
            </form>
                    <?php
                    elseif ($save == "yes"):
                        if ($name == "" || $name == " " || $pwd1 == "" || $pwd2 == "")
                        {
                             error("Da fehlt doch was???!!!");
                        } else {
                        if ($pwd1 == $pwd2) {
                             $passwd = crypt($pwd2,substr($pwd2,0,2));
                             $inhalt = $name.":".$passwd;
                             $i=1;
                             while(!$pwfile) {
                               if(file_exists("./.htpasswd0$i")) $i++;
                               else $pwfile=".htpasswd0$i";
                             }
                             $wf = fopen ("./".$pwfile, "w+");
                             if(!fwrite ($wf,$inhalt)) error($pwfile." konnte nicht geschrieben werden! Bitte das Verzeichnis auf 777 chmoden! (Info in wichtig.txt!)");
                             fclose ($wf);
                             $path = $SCRIPT_FILENAME;
                             $path = ereg_replace('/access.php', '', $path);
                             $htaccessinhalt = "AuthType Basic\nAuthName \"".$realm." - \"\nAuthUserFile ".$path."/".$pwfile."\nrequire valid-user";
                             $wf = fopen ("./.htaccess", "w+");
                             if(!fwrite ($wf,$htaccessinhalt)) error(".htaccess konnte nicht geschrieben werden! Bitte das Verzeichnis auf 777 chmoden! (Info in wichtig.txt!)");
                             fclose ($wf);
                             echo "<br><br><p><font color=#FF3300>Die .htpasswd wurde mit folgendem Inhalt gespeichert:</font><br>".$inhalt."</p>
                             <font color=#FF3300>Die .htaccess wurde mit folgendem Inhalt gespeichert:</font><br><pre>".$htaccessinhalt."</pre></p><br>
                             <hr><br>
                             Denken Sie daran, dass man versteckte Dateien auf einem Server mit einem FTP-Programm manchmal nicht sieht!<br>
                             Da die Datei &quot;.htpasswd&quot; eine versteckte Datei ist (in Unix ist alles, mit Punkt vorne, versteckt),
                             Kann es sein, dass sie sie nicht sehen. Sie kˆnnen sie sich aber dennoch runterladen, indem sie in die FTP-Console
                             Ihres FTP-Clients folgendes eingeben:&nbsp;&nbsp;&nbsp;get .htpasswd<br><br></font>";
                         } else {
                             echo "<br><br><br>";
                             error("Die beiden Passwort-Eingaben unterscheiden sich voneinander!");
                         }
                         }
                    endif;
                 ?>
            <font face="Geneva, Arial, Helvetica, san-serif" size="1" color="#666666"><center><br>
              <br>
              [ - <a href="./access.php">Index</a> - ]<br>
            </center>
            </font><br>
              <?
              elseif ($user == "2"):
                    if (!isset($save)):
              ?>
                         <form method="post" action="./access.php" name="send">
                         <center>
                            <font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b>
                            <div align="center"><br>
                               Neuen Admin-Bereich erstellen </div>
                            </b></font>
                         </center>
                            <div align="center"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b><br>
                             <br>
                              Vergib einen Namen f¸r den Bereich (max. 30 Zeichen):<br>
                             <input type="text" name="realm" maxsize=30>
                             <br>
                             <br>
                             Gib den 1. Usernamen ein:<br>
                             <input type="text" name="name">
                             <br>
                             <br>
                             Gib das 1. Passwort zweimal ein:<br>
                             <input type="password" name="pwd1">
                             <br>
                             <input type="password" name="pwd2">
                             <input type="hidden" name="save" value="no">
                             <input type="hidden" name="user" value="2">
                             <input type="hidden" name="auswahl" value="neu">
                             <br>
                             <br>
                             <input type="submit" name="submit" value="speichern">
                             </b></font></div>
                             <font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b> 
                             </b></font> 
            </form>
                    <?php
                elseif ($save == "no"):
                                if ($submit == "speichern" || $submit == "weitere User"):
                        if ($name == "" || $name == " " || $pwd1 == "" || $pwd2 == "")
                        {
                             error("Da fehlt doch was???!!!");
                         } else {
                                    if ($pwd1 == $pwd2) {
                                    $passwd = crypt($pwd2,substr($pwd2,0,2));
                                    $inhalt1 .= $name.":".$passwd."\n";
                                ?>
                                    <form method="post" action="./access.php" name="send">
                                    <center>
                                    <font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b>
                                    <div align="center"><br>
                                    Weitere User</div>
                                    </b></font>
                                    </center>
                                    <div align="center"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b><br>
                                    <br>
                                    Gib den n‰chsten Usernamen ein:<br>
                                    <input type="text" name="name">
                                    <br>
                                    <br>
                                    Gib das n‰chste Passwort zweimal ein:<br>
                                    <input type="password" name="pwd1">
                                    <br>
                                    <input type="password" name="pwd2">
                                    <input type="hidden" name="save" value="no">
                                    <input type="hidden" name="user" value="2">
                                    <input type="hidden" name="auswahl" value="neu">
                                    <input type="hidden" name="inhalt1" value="<? echo $inhalt1; ?>">
                                    <input type="hidden" name="realm" value="<? echo $realm; ?>">
                                    <br>
                                    <br>
                                    <input type="submit" name="submit" value="weitere User">&nbsp;&nbsp;
                                    <input type="submit" name="submit" value="endg¸ltig speichern">
                                    </b></font></div>
                                    <font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b> 
                                    </b></font> 
                                    </form>
                                <?php
                                    } else {
                                        echo "<br><br><br>";
                                        error("Die beiden Passwort-Eingaben unterscheiden sich voneinander!");
                                    }
                         }
                                elseif ($submit == "endg¸ltig speichern"):
                        if ($name == "" || $name == " " || $pwd1 == "" || $pwd2 == "")
                        {
                             error("Da fehlt doch was???!!!");
                         } else {
                                    if ($pwd1 == $pwd2) {
                                    $passwd = crypt($pwd2,substr($pwd2,0,2));
                                    $inhalt1 .= $name.":".$passwd."\n";
                                    $i=1;
                                    while(!$pwfile) {
                                      if(file_exists("./.htpasswd0$i")) $i++;
                                      else $pwfile=".htpasswd0$i";
                                    }
                                    $wf = fopen ("./".$pwfile, "w+");
                                    if(!fwrite ($wf,$inhalt1)) error($pwfile." konnte nicht geschrieben werden! Bitte das Verzeichnis auf 777 chmoden! (Info in wichtig.txt!)");
                                    fclose ($wf);
                                    $path = $SCRIPT_FILENAME;
                                    $path = ereg_replace('/access.php', '', $path);
                                    $htaccessinhalt = "AuthType Basic\nAuthName \"".$realm." - \"\nAuthUserFile ".$path."/".$pwfile."\nrequire valid-user";
                                    $wf = fopen ("./.htaccess", "w+");
                                    if(!fwrite ($wf,$htaccessinhalt)) error(".htaccess konnte nicht geschrieben werden! Bitte das Verzeichnis auf 777 chmoden! (Info in wichtig.txt!)");
                                    fclose ($wf);
                                    $inhalt2 = str_replace("\n", "<br>", $inhalt1);
                                    echo "<br><br><p><font color=#FF3300>Die .htpasswd wurde mit folgendem Inhalt gespeichert:</font><br>".$inhalt2."</p>
                                    <font color=#FF3300>Die .htaccess wurde mit folgendem Inhalt gespeichert:</font><br><pre>".$htaccessinhalt."</pre></p><br>
                                    <hr><br>
                                    Denken Sie daran, dass man versteckte Dateien auf einem Server mit einem FTP-Programm manchmal nicht sieht!<br>
                                    Da die Datei &quot;.htpasswd&quot; eine versteckte Datei ist (in Unix ist alles, mit Punkt vorne, versteckt),
                                    Kann es sein, dass sie sie nicht sehen. Sie kˆnnen sie sich aber dennoch runterladen, indem sie in die FTP-Console
                                    Ihres FTP-Clients folgendes eingeben:&nbsp;&nbsp;&nbsp;get .htpasswd<br><br></font>";
                                    } else {
                                        echo "<br><br><br>";
                                        error("Die beiden Passwort-Eingaben unterscheiden sich voneinander!");
                                    }
                         }
                                endif;
                    endif;
                 ?>
            <font face="Geneva, Arial, Helvetica, san-serif" size="1" color="#666666"><center><br>
              <br>
              [ - <a href="./access.php">Index</a> - ]<br>
            </center>
            </font><br>
<?
               endif;
elseif ($auswahl == "change"):
?>
            <br>
            <div align="center"> <font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b> 
              <font size="3">Admin-Bereich ‰ndern</font><br>
              <font size="2" color="#333333"><br>
              <font color=#ff0000><b>VORSICHT!</b><br>
              Dies sollten nur Leute machen, die auch wirklich wissen, was sie tun!<br><br></font>
              <br>
       <?
       if (!isset($pwdatei)):
       ?>
              <form method=post action=access.php>
              Folgende Datei ‰ndern:<br>
              <?
              echo "<select name=pwdatei>";
              $handle=opendir('.');
              while ($file = readdir ($handle)) {
                  if ($file == ".htaccess" || eregi(".htpasswd", $file)) {
                      echo "<option>".$file."</option>";
                  }
              }
              closedir($handle);
              echo "</select>";
              ?>
              <br><br>
              <input type="hidden" name="auswahl" value="change">
              <input type="submit" name="submit" value="‰ndern">&nbsp;&nbsp;&nbsp;
              <input type="submit" name="submit" value="lˆschen">
              </form>
       <?
       elseif (isset($pwdatei)):
        if ($submit == "‰ndern"):
            if (!isset($save)):
            ?>
              <form method=post action=access.php>
              Folgende Datei ‰ndern:<br>
              <?
              echo $pwdatei."<br>";
              $fp = fopen ("./".$pwdatei, "r");
              $inhalt = fread ($fp, filesize("./".$pwdatei));
              echo "<TEXTAREA NAME=\"inhalt\" cols=\"60\" rows=\"14\">".$inhalt."</TEXTAREA>";
              fclose ($fp);
              ?>
              <br><br>
              <input type="hidden" name="pwdatei" value="<? echo $pwdatei; ?>">
              <input type="hidden" name="save" value="1">
              <input type="hidden" name="auswahl" value="change">
              <input type="submit" name="submit" value="Datei speichern">
              </form>
            <?
            elseif ($save == "1"):
              $fp = fopen ("./".$pwdatei, "w+");
                if (!fwrite ($fp, $inhalt)) {
                    error ("Datei konnte nicht geschrieben werden!");
                } else {
                    echo"<b>Datei erfolgreich gespeichert!</b><br>[ - <a href=access.php>Index</a> - ]<br>";
                }
              fclose ($fp);
            endif;
         elseif ($submit == "lˆschen"):
                if (!isset($del)):
                    echo "Die Datei ".$pwdatei." wirklich lˆschen?<br><br>";
                    echo "[ - <a href=\"./access.php?auswahl=change&pwdatei=".$pwdatei."&submit=lˆschen&del=JA\">JA</a> - <a href=\"./access.php\">NEIN!</a> - ]";
                elseif ($del == "JA"):
                    if(file_exists("./".$pwdatei)) {
                        if (!unlink("./".$pwdatei)) { 
                            error($pwdatei." konnte nicht gelˆscht werden! Bitte manuell, per FTP lˆschen."); 
                        } else {
                            echo "<br>Datei ".$pwdatei." wurde erfolgreich gelˆscht!<br>[<a href=access.php>Index</a>]<br><br>";
                        }
                    } else {
                        error("Diese Datei ist nicht vorhanden!!??");
                    }
                endif;
         endif;
       endif;
       ?>
              <br><br>
              </font></b> </font> <font face="Geneva, Arial, Helvetica, san-serif" size="1" color="#666666"><br>
              [ - <a href="javascript:history.go(-1)">zur&uuml;ck</a> - ]<br>
              <br>
              <br>
              <br>
              <b> </b> </font> </div>
<?
elseif ($auswahl == "open"):
?>
            <br>
            <div align="center"> <font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#666666"><b> 
              <font size="3">Admin-Bereich wieder &ouml;ffnen</font><br>
              <font size="2" color="#333333"><br>
              <?
                if (!isset($del)):
                    echo "Den gesch¸tzen Bereich wirklich wieder f¸r alle freigeben?<br>(Datei .htaccess wirklich lˆschen?)<br><br>";
                    echo "[ - <a href=\"./access.php?auswahl=open&del=JA\">JA</a> - <a href=\"./access.php\">NEIN!</a> - ]";
                elseif ($del == "JA"):
                    if(file_exists("./.htaccess")) {
                        if (!unlink("./.htaccess")) { 
                            error(".htaccess konnte nicht gelˆscht werden! Bitte manuell, per FTP lˆschen."); 
                        } else {
                            echo "<br>Datei .htaccess wurde erfolgreich gelˆscht!<br>[<a href=access.php>Index</a>]<br><br>";
                        }
                    } else {
                        error("Keine .htaccess - Datei zum lˆschen vorhanden!!??");
                    }
                endif;
              ?>
              <br>
              </font></b> </font> <font face="Geneva, Arial, Helvetica, san-serif" size="1" color="#666666"><br>
              [ - <a href="javascript:history.go(-1)">zur&uuml;ck</a> - ]<br>
              <br>
              <br>
              <br>
            <b> </b> </font> </div>
<?
endif;
?>
</td><td width="2%" bgcolor="#CCCCCC">&nbsp;</td></tr><tr bgcolor="#CCCCCC"><td width="2%">&nbsp;</td><td width="96%"><div align="right"><font face="Geneva, Arial, Helvetica, san-serif" size="1" color="#666666"><br>
<font color="#FF3300">htaccess</font>-Generator Copyright &copy; 2000+2001 by <a href="mailto:dma147@gamesweb.com">Alexander Mieland (DMA147)</a></font></div></td><td width="2%">&nbsp;</td></tr></table></td></tr></table></body></html>
