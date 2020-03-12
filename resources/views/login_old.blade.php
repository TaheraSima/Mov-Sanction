<html lang="en-us">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SIMEC ERP Pro::..</title>

<style type="text/css">
<!--
.style11 {font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    font-weight: bold;
    color: #666666;
}
.style12 {  color: #FFFFFF;
    font-size: 24px;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-weight: bold;
}
-->
@media (max-width: 800px) {
#system_logo, #system_client {
width: 100%;float:none;
}
}
.style10 {  font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
}
.style8 {color: #749B00}
.style14 {font-family: Arial, Helvetica, sans-serif}
.style15 {
    font-size: 12px;
    color: #CC0000;
}
</style>
</head>
<body style="margin:0px;" bgcolor="#EDEDED">

<table style="border:none; width:100%; height:100%; border-collapse:collapse; " border="0" cellpadding="0" cellspacing="0" align="center">
<tr><td valign="top">

 <fieldset style="border:none; text-align:center; background-color:#4A6C93;">
  <div style="width:100%; height:auto;" align="center">
   <div id="system_logo" style="float:left; margin-top:15px;margin-bottom:15px; height:90px; padding-top:0px;"><img src="{{ asset('public/image/logo_large_company.png') }}" width="113" height="106" /></div>
   <br><div id="system_title" class="style12" style="float:left; max-width:100%; width:auto; margin-left:15px;margin-right:15px;margin-top:30px; height:auto;"><div align="center" style="width:100%;">MOVE SANCTION MANAGEMENT SYSTEM</div></div>
   </div>
 </fieldset>

</td></tr>
<tr>
<form action="{{route('dashboard')}}" name="form1" >
<td valign="top" align="center"> 

 <fieldset id="center" style="border:none;">
  <div style="width:100%; padding-top:3%; padding-bottom:3%; margin-bottom:15px;">
    <div style="width:235px; padding:15px; background-color:#FFFFFF; background-repeat:no-repeat; box-shadow: 1px 1px 6px #CCCCCC;border-radius:5px;" >
      <fieldset style="border-color:#EFEFEF; border-style:dotted; border-radius:5px;">
      <legend class="style11">User Login</legend>
        <div class="style14 style15" style="padding-top:10px;"></div>
        <div style="padding:15px; float:left;">
        <input name="user_id" type="text" id="user" placeholder="User ID" size="10" style=" margin:5px; height:30px; text-align:center; width:160px; float:left;" onClick="this.focus();this.select();"/>
        <input name="password" type="password" id="password" placeholder="Password" size="10" style=" margin:5px; height:30px;text-align:center; width:160px; float:left;" onClick="this.focus();this.select();" />
        <select name="location" id="location" style="margin:5px; height:40px;text-align:center; width:160px; float:left;">
          <option value="1">Training Move</option>
          <option value="2">Operation Move</option>
          <option value="3">Admin Move</option>
        </select>
      </div>
        <div>
        <div align="center">
          <input name="btn" type="submit" id="btn" value="Login" style="background-color:#006699; border-color:#FFFFFF; border:thick; color:#FFFFFF; font-family:arial; font-size:14px; font-weight:bold; height:30px; width:60px; cursor:pointer;" onMouseOver="this.style.backgroundColor='#0066CC';" onMouseOut="this.style.backgroundColor='#006699';"/>
        </div>
        </div>
        </fieldset>
    </div>
  </div>
 </fieldset></td>
</form>
</tr>
<tr><td valign="bottom">
<div style="border:none;background-color:#333333;;width:100%;height:80px;float:left; bottom:0px;" align="center">
  <div class="style8 style10" style="padding-top:20px;"></div>
  <span style="background-repeat:repeat-x; background-position:bottom; cursor:pointer; float:right; margin-top:-20px; margin-right:20px;"><img src="{{ asset('public/image/simec_system.png') }}" width="100" height="36" onClick="window.open('http://www.simec-inc.net','_blank');" /></span></div>
</td></tr>
</table>
</body>
</html>