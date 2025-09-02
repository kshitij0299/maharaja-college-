
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Alumni Registration</title>
<style type="text/css">
<!--
.style1 {
	font-size: 15px;
	color: #FFFFFF;
	font-family: Cambria;
}
body {
	margin-top: 0px;
	margin-bottom: 0px;
}
.style6 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 12px; }
.style14 {font-family: Georgia, "Times New Roman", Times, serif}
.style55 {color: #99CCFF}
.style56 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 12px; color: #99CCFF; }
.style58 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 12px; color: #CCCC00; }
.style59 {font-weight: bold; color: #CCCC00; font-family: Georgia, "Times New Roman", Times, serif; font-size: 16px; }
-->
</style>



<script language="javascript">
	function validMe()
	{
	
	var v1=document.frm_alumni.al_name.value;
	var v2=document.frm_alumni.alf_name.value;
	var v3=document.frm_alumni.alm_name.value;
	var v4=document.frm_alumni.vill.value;
	var v5=document.frm_alumni.ps.value;
	
	var v6=document.frm_alumni.po.value;
	var v7=document.frm_alumni.city.value;
	var v8=document.frm_alumni.dist.value;
	var v9=document.frm_alumni.state.value;
	//var v10=document.frm_alumni.pincode.value;
	var v11=document.frm_alumni.contact_no.value;
	//var v12=document.frm_alumni.email_id.value;
	var v13=document.frm_alumni.ac_qual.value;
	//var v14=document.frm_alumni.prof_qual.value;
	//var v15=document.frm_alumni.passing_yr.value;
	
	var v16=document.frm_alumni.about_himself.value;
	var v17=document.frm_alumni.message1.value;
	

		if(v1=="")
		{
		alert("Please enter Your Name.");
		document.frm_alumni.al_name.focus();
		//document.frm_alumni.alm_name.select();
		return false;
		}
		if(v2=="")
		{
		alert("Please enter your father's name.");
		document.frm_alumni.alf_name.focus();
		//document.frm_book_stock_index.b_nm.select();
		return false;
		}	
		
		if(v3=="")
		{
		alert("Please enter your mother's name.");
		document.frm_alumni.alm_name.focus();
		//document.frm_book_stock_index.btype.select();
		return false;
		}	
		if(v4=="")
		{
		alert("Enter your Village/Street.");
		document.frm_alumni.vill.focus();
		//document.frm_book_stock_index.book_srce.select();
		return false;
		}	
		if(v5=="")
		{
		alert("Enter your Police Station.");
		document.frm_alumni.ps.focus();
		return false;
		}	
		
		if(v6=="")
		{
		alert("Enter Post-Office.");
		document.frm_alumni.po.focus();
		//document.frm_book_stock_index.book_srce.select();
		return false;
		}	
		if(v7=="")
		{
		alert("Enter City.");
		document.frm_alumni.city.focus();
		//document.frm_book_stock_index.book_srce.select();
		return false;
		}		
		if(v8=="")
		{
		alert("Enter District name.");
		document.frm_alumni.dist.focus();
		//document.frm_book_stock_index.p_nm.select();
		return false;
		}
		if(v9=="")
		{
		alert("Enter State.");
		document.frm_alumni.state.focus();
		//document.frm_book_stock_index.supp_nm.select();
		return false;
		}
		
		if(v11=="")
		{
		alert("Please Select contact no.");
		document.frm_alumni.contact_no.focus();
		//document.frm_book_stock_index.pur_dt.select();
		return false;
		}
		if(v13=="")
		{
		alert("Please enter education qualification.");
		document.frm_alumni.ac_qual.focus();
		//document.frm_book_stock_index.pur_dt.select();
		return false;
		}	
		if(v16=="")
		{
		alert("Enter about Him Self.");
		document.frm_alumni.about_himself.focus();
		//document.frm_book_stock_index.book_srce.select();
		return false;
		}
	
		if(v17=="")
		{
		alert("Please Enter Message.");
		document.frm_alumni.message1.focus();
		//document.frm_book_stock_index.book_srce.select();
		return false;
		}
		return true;
}
</script>
</head>
<body>
<div align="center">
  <table width="870" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
			<table width="100%" border="1" cellpadding="0" style="border-collapse: collapse">
            
            <tr>
              <th scope="col" valign="TOP">
			  
			  <form name="frm_alumni" action="registration.php" method="post">
			  
			  <div align="center">
			  
			  <table width="98%" border="1" cellpadding="0" cellspacing="0" height="594" style="border-collapse: collapse" bordercolor="#C0C0C0">
                <tr>
                  <td height="22" colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td height="22" colspan="4" bgcolor="#99CCFF">
					<p align="center"><u><b>
					<font color="#400000" face="Verdana">
					Alumni Registration Form </font></b></u></td>
                </tr>
                <tr>
                  <td height="22" colspan="4"><span class="style58"><strong>
					<font color="#400000" face="Times New Roman" size="3">
					&nbsp;Personnel Details</font></strong></span></td>
                </tr>
                <tr>
                  <td width="22%" height="26" valign="top" align="left"><span class="style46 style6 style14 style55">
					<font color="#000000" face="Verdana" size="2">&nbsp;Name 
					</font> </span></td>
                  <td width="77%" height="26" valign="top" colspan="3">
					<span class="style6">
                    <font size="3" face="Times New Roman">
                    <input name="al_name" style="border-color:#CC3300; float:left" size="79" /></font></span></td>
                </tr>
                <tr>
                  <td height="23" valign="top" align="left">
					<font face="Verdana" size="2">&nbsp;Father's &nbsp;Name</font></td>
                  <td height="23" colspan="3">
					<span class="style6">
                    <font size="3" face="Times New Roman">
                    <input name="alf_name" style="border-color:#CC3300; float:left" size="79" /></font></span></td>
                </tr>
                <tr>
                  <td height="27" valign="top" align="left"><span class="style56">
					<font color="#000000" face="Verdana" size="2">&nbsp;Mother's Name</font></span></td>
                  <td height="27" colspan="3">
					<span class="style6">
                    <font size="3" face="Times New Roman">
                    <input name="alm_name" style="border-color:#CC3300; float:left" size="79" /></font></span></td>
                </tr>
                <tr>
                  <td height="28" valign="top"><font face="Verdana" size="2">&nbsp;Vill./Street</font></td>
                  <td height="28"><span class="style6">
                    <font size="3" face="Times New Roman">
                    <input name="vill" style="border-color:#CC3300; float:left" size="35" />
					</font>
                  </span></td>
                  <td height="28" valign="top" class="style56">
					<font face="Verdana" size="2">&nbsp;&nbsp;</font><font color="#000000" face="Verdana" size="2">Police 
					Station</font></td>
                  <td height="28"><span class="style6">
                    <font face="Times New Roman" size="3">&nbsp;<input name="ps" type="text" size="30" style="border-color:#CC3300;" /></font></span></td>
                </tr>
                <tr>
                  <td height="24" valign="top"><span class="style56">
					<font color="#000000" face="Verdana" size="2">&nbsp;Post Office</font></span></td>
                  <td height="24"><span class="style6"><span class="style14">
                    <font size="3" face="Times New Roman">
                    <input name="po" size="35" style="border-color:#CC3300; float:left" />
                  </font>
                  </span></span></td>
                  <td height="24" valign="top" class="style56">
					<font color="#000000" face="Verdana" size="2">&nbsp;&nbsp;District</font></td>
                  <td height="24"><span class="style6">
                    <font size="3" face="Times New Roman">
                    &nbsp;<input type="text" name="dist" style="border-color:#CC3300;" size="30" /></font></span></td>
                </tr>
                <tr>
                  <td height="23" valign="top"><span class="style56">
					<font color="#000000" face="Verdana" size="2">&nbsp;City</font></span></td>
                  <td height="23"><font size="3" face="Times New Roman">
					<input name="city" size="35" style="border-color:#CC3300; float:left" /></font></td>
                  <td height="23" valign="top" class="style56">
					<font color="#000000" face="Verdana" size="2">&nbsp;&nbsp;Pin. 
					Code </font></td>
                  <td height="23"><span class="style6">
                    <font size="3" face="Times New Roman">
                    &nbsp;<input type="text" name="pincode" style="border-color:#CC3300;" size="30"/></font></span></td>
                </tr>
                <tr>
                  <td height="23" valign="top"><span class="style46"><span class="style56">
					<font color="#000000" face="Verdana" size="2">&nbsp;State</font></span></span></td>
                  <td height="23"><span class="style6">
                    <font size="3" face="Times New Roman">
                    <input name="state" style="border-color:#CC3300; float:left" size="35"/>
					</font>
                  </span></td>
                  <td height="23" valign="top" class="style56">
					<font color="#000000" face="Times New Roman" size="3">&nbsp;&nbsp;</font></td>
                  <td height="23"><span class="style6">
                    <font size="3" face="Times New Roman">
                    &nbsp;</font></span></td>
                </tr>
                <!-- <tr>
                          <td height="35" valign="middle"><span class="style46"><span class="style6">Photo</span></span></td>
                          <td height="35"><span class="style6">
                            <input name="userfile" type="file" />
                          </span></td>
                          <td height="35" colspan="2" valign="middle" class="style6"><span class="style53">&nbsp;(Width=200, Height=180)</span>&nbsp;&nbsp;&nbsp;</td>
                        </tr>-->
                <tr>
                  <td height="30" colspan="4"><b><span class="style58">
					<font color="#400000" face="Times New Roman" size="3">&nbsp;Contact Details</font></span></b><font face="Times New Roman">
					</font> </td>
                </tr>
                <tr>
                  <td height="26" class="style6"><span class="style46 style55">
					<font color="#000000" face="Verdana" size="2">&nbsp;Contact No.</font></span></td>
                  <td height="26" colspan="3"><span class="style6"><span class="style14">
                    <font size="3" face="Times New Roman">
                    <input name="contact_no" size="35"  style="border-color:#CC3300; float:left"/>
					</font>
                  </span><font face="Times New Roman" size="3">&nbsp;&nbsp;&nbsp;</font></span></td>
                </tr>
                <tr>
                  <td height="26" class="style6"><span class="style46 style55">
					<font color="#000000" face="Verdana" size="2">&nbsp;Email Address</font></span></td>
                  <td height="26" colspan="3"><span class="style6"><span class="style14">
                    <font size="3" face="Times New Roman">
                    <input name="email_id" size="35" style="border-color:#CC3300; float:left"/>
					</font>
                  </span></span></td>
                </tr>
                <tr>
                  <td height="27" colspan="4"><span class="style58">
					<font color="#000000" face="Times New Roman" size="3">&nbsp;Educational Qualification</font></span><font face="Times New Roman">
					</font> </td>
                </tr>
                <tr>
                  <td height="72" valign="top" class="style6"><span class="style46 style55">
					<font color="#000000" face="Times New Roman" size="3">&nbsp;</font><font color="#000000" face="Verdana" size="2">Academic Qualification</font></span></td>
                  <td height="72" class="style6">
					<p align="left">
					<font size="3" face="Times New Roman">
					<textarea name="ac_qual" cols="30" rows="4" style="border-color:#CC3300;"></textarea></font></td>
                  <td height="72" valign="top" class="style6">
					<span class="style46 style55">
					<font face="Times New Roman" size="3">&nbsp;&nbsp;</font><font color="#000000" size="2" face="Verdana">Professional &nbsp;&nbsp;Qualification</font></span></td>
                  <td height="72" class="style6">
					<p align="left"><span class="style14">
                    <font size="3" face="Times New Roman">
                    <textarea name="prof_qual" cols="30" rows="4" style="border-color:#CC3300;"></textarea>
                  </font>
                  </span></td>
                </tr>
                <tr>
                  <td height="28" class="style6"><span class="style46 style55">
					<font color="#000000" face="Verdana" size="2">&nbsp;Pass out Year</font></span></td>
                  <td height="28" class="style6">
					<font size="3" face="Times New Roman">
					<input name="passing_yr" size="35" style="border-color:#CC3300; float:left" />
					</font>                  </td>
                  <td height="28" align="center" valign="middle" class="style6">&nbsp;</td>
                  <td height="28" class="style6">
					<font face="Times New Roman" size="3">&nbsp;&nbsp;&nbsp;</font></td>
                </tr>
                <tr>
                  <td height="71" align="center">
					<p align="left"><span class="style46 style55">
					<font color="#000000" face="Times New Roman">&nbsp;</font><font size="2" face="Verdana" color="#000000">Present 
					Working Details</font></span></td>
                  <td height="71"><font size="3" face="Times New Roman">
					<textarea name="working_details" cols="30" rows="4" style="border-color:#CC3300;"></textarea></font></td>
                  <td height="71" align="center" valign="middle">
					<font face="Times New Roman"><strong>&nbsp;</strong></font></td>
                  <td height="71"><span class="style6">
					<font face="Times New Roman" size="3">&nbsp;&nbsp;&nbsp;</font></span></td>
                </tr>
                <tr>
                  <td height="26"><font face="Times New Roman">&nbsp;</font><font face="Verdana" size="2">Organization (Where You&nbsp; Working, If Any)</font></td>
                  <td height="26" colspan="3"><span class="style6"><span class="style14">
                    <font size="3" face="Times New Roman">
                    <input name="work_org" size="81" style="border-color:#CC3300; float:left"/></font></span></span></td>
                </tr>
                <tr>
                  <td height="26" colspan="4"><span class="style58">
					<font color="#000000" face="Times New Roman" size="3">&nbsp;Message</font></span><font face="Times New Roman">
					</font> </td>
                </tr>
                <tr>
                  <td height="60" valign="top" class="style56">
					<font color="#000000" face="Times New Roman" size="3">&nbsp;</font><font color="#000000" face="Verdana" size="2">About Himself</font></td>
                  <td height="60" class="style6">
					<p align="left">
					<font size="3" face="Times New Roman" color="#000000">
					<textarea name="about_himself" cols="30" rows="5" style="border-color:#CC3300;"></textarea></font><font face="Times New Roman" size="3">
					</font>                  </td>
                  <td height="60" valign="top" class="style56">
					<font color="#000000" face="Times New Roman" size="3">&nbsp;&nbsp;</font><font color="#000000" face="Verdana" size="2">Message</font></td>
                  <td height="60" class="style6"><span class="style14">
                    <font size="3" face="Times New Roman" color="#000000">
                    <textarea name="message1" cols="30" rows="5" style="border-color:#CC3300;"></textarea></font><font face="Times New Roman" size="3">
					</font>
                  </span></td>
                </tr>
                <tr>
                  <td height="32" align="center">&nbsp;</td>
                  <td height="32"><span class="style6">&nbsp;&nbsp; </span></td>
                  <td height="32" align="center" valign="middle">&nbsp;</td>
                  <td height="32"><span class="style6">
                  <input name="submit" type="submit" value="Submit" onClick="return validMe();" />
                  </span></td>
                </tr>
<!--                <tr>
                  <td height="22" colspan="4" bgcolor="#440000"><span class="style6">&nbsp;&nbsp;&nbsp;</span><span class="style54">Password Details </span> </td>
                </tr>
                <tr>
                  <td height="35" class="style6">Password</td>
                  <td height="35" class="style6"><input type="password" name="passs" /></td>
                  <td height="35" valign="middle" class="style6"></td>
                  <td height="35" class="style6"><span class="style14">
                   </span>&nbsp;</td>
                </tr>-->
              </table>
			  </div>
			  </form></th>
            </tr>

          </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
  </div>
</body>
</html>


