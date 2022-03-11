<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giriş Yap ya da Kayıt Ol</title>
</head>

<body>
<center>
<table>
	<tr>
		<td>
        	<form id="form1" name="form1" method="post" action="islem.php?sayfa=giris-yap">
              <table width="282" border="1" align="center">
                <tr>
                  <td colspan="2"><div align="center">Giriş Yap</div></td>
                </tr>
                <tr>
                  <td width="97"><label>Kullanıcı Adı: </label></td>
                  <td width="87"><label>
                    <input type="text" name="fkadi" id="fkadi" />
                  </label></td>
                </tr>
                <tr>
                  <td>Şifre:</td>
                  <td><label>
                    <input type="password" name="fsifre" id="fsifre" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="button" id="button" value="GİRİŞ YAP"/>
                    
                  </label></td>
                </tr>
              </table>
              <div align="center"></div>
            </form>
        </td>
        
        <td>
        	<form id="form2" name="form2" method="post" action="islem.php?sayfa=kayit-ol">
              <table width="282" align="center" border="1">
                <tr>
                  <td colspan="2"><div align="center">Kayıt Ol</div></td>
                </tr>
                <tr>
                  <td width="97"><label>Ad Soyad </label></td>
                  <td width="87"><label>
                    <input type="text" name="fkisim" id="fkisim" />
                  </label></td>
                </tr>
                <tr>
                  <td width="97"><label>Kullanıcı Adı: </label></td>
                  <td width="87"><label>
                    <input type="text" name="fkadi" id="fkadi" />
                  </label></td>
                </tr>
                <tr>
                  <td>Şifre:</td>
                  <td><label>
                    <input type="password" name="fsifre" id="fsifre" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="button" id="button" value="KAYDOL"
                     />
                    
                  </label></td>
                </tr>
              </table>
              <div align="center"></div>
            </form>
        </td>
	</tr>
</table>
</center>
</body>
</html>
