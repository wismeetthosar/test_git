<?php echo 'Meet Mandar Thosar';?>
<form  name="donationFrm" id="donationFrm" style="display: none;">
<table>
<tr>
  				<td>
					  <input type="hidden" name="defin" value="USD" />
					   <input type="hidden" name="defout" value="EUR" />
					   <table width="100%" border="1">
					     <tr>
					       <td>
					         <img src='images/conv6.gif' ALT='Step 1 - enter base amount' BORDER='0'>
					       </td>
					       <td>
					         <input type="text" name="amount" size="10" value="1" />
					       </td>
					       <td>
					         <select name="curin"></select>
					      </td>
					      <td>
					        <img src='images/conv7.gif' ALT='Step 2 - select first currency' BORDER='0'>
					      </td>
					    </tr>
					    <tr>
					      <td>
					        <img src='images/conv9.gif' ALT='Step 4 - result here' BORDER='0'>
					      </td>
					      <td>
					        <div style="margin-top:8px;float:left;height:20px;min-width:40px;width:auto;color:red;font-weight:bold;" id='result'>
					        </div>
					      </td>
					      <td>
					        <select name="curout"></select>
					      </td>
					      <td>
					        <img src='images/conv8.gif' ALT='Step 3 - select conversion currency' BORDER='0'>
					       </td>
					    </tr>
					  </table>
					  <input type="hidden" name="texaccept" value="site operator accepts conditions at http://cconv.textor.com" />
					   <p style="font-family: arial; font-size: 10px; margin-top: 0;display: none;">
					    <a id="textor" href="http://www.governor.co.uk/">
					      Currency converter © Governor Technology Ltd 2009-2010. All rates are indicative only.
					    </a>
					  </p>

					<SCRIPT type="text/javascript" LANGUAGE="JavaScript1.1" SRC="http://cconv.textor.com/cconv.js"></SCRIPT>
					<SCRIPT type="text/javascript" LANGUAGE="JavaScript1.1">initialize('donationFrm');</script>
					</td>
				</tr>
</table>
</form>
<SCRIPT type="text/javascript" LANGUAGE="JavaScript1.1" SRC="http://cconv.textor.com/cconv.js"></SCRIPT>
<SCRIPT type="text/javascript" LANGUAGE="JavaScript1.1">initialize('donationFrm');</script>
<script>
function cconvNew(converter,curin,curout)
{
	var result='result';

	if(!(converter))
	{
		alert("Amount????");
	}
	else if ((getrate(curin)==-1) || (getrate(curout)==-1))
	{
		alert("Rate N/A");
	}
	else
	{
		var res = parseFloat(converter)*(parseFloat(getrate(curin))/parseFloat(getrate(curout)));
		res=Math.round(res*100)/100;
		if(document.getElementById(result))
		{
			document.write(res);
			//document.getElementById(result).innerHTML=res;
		}
	}
}
cconvNew('<?php echo 3;?>','USD','INR');
cconvNew('<?php echo 3;?>','USD','INR');
cconvNew('<?php echo 3;?>','USD','INR');
cconvNew('<?php echo 3;?>','USD','INR');
cconvNew('<?php echo 3;?>','USD','INR');
cconvNew('<?php echo 3;?>','USD','INR');
</script>
<?php
