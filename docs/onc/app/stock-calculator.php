<SCRIPT LANGUAGE="JavaScript">



<!-- Begin
function round(num) {
amount = Math.round(num*Math.pow(10,2))/Math.pow(10,2);
amount -= 0;
// .99 cent format courtsey of Martin Webb
return (amount == Math.floor(amount)) ? amount + '.00' : ( (amount*10 == Math.floor(amount*10)) ? amount + '0' : amount);
}

function dectable() {
windowprops = 'personalbar=no,toolbar=no,' +
'status=no,scrollbars=yes,location=no,' +
'resizable=yes,menubar=no,width=340,height=400';
decimalWin=window.open('', 'table', windowprops);

text = "<html><body><table width=300 cellpadding=0 cellspacing=1>";
text += "<tr><td bgcolor='#333366' align=center><font face='arial";
text += ",helvetica' size=2 color='#ffffff'><b>Fractional Price</";
text += "b></font></td><td bgcolor='#333366' align=center><font f";
text += "ace='arial,helvetica' size=2 color='#ffffff'><b>Dollar E";
text += "quivalent</b></font></td></tr><tr align=center><td align";
text += "=center><font face='arial,helvetica' size=2>1/32<br>1/16";
text += "<br>3/32<br>1/8<br>5/32<br>3/16<br>7/32<br>1/4<br>9/32<b";
text += "r>5/16<br>11/32<br>3/8<br>13/32<br>7/16<br>15/32<br>1/2<";
text += "br>17/32<br>9/16<br>19/32<br>5/8<br>21/32<br>11/16<br>23";
text += "/32<br>3/4<br>25/32<br>13/16<br>27/32<br>7/8<br>29/32<br";
text += ">15/16<br>31/32<br>1</td><td align=center><font face='ar";
text += "ial,helvetica' size=2>$0.03125<br>$0.06250<br>$0.09375<b";
text += "r>$0.12500<br>$0.15625<br>$0.18750<br>$0.21875<br>$0.250";
text += "00<br>$0.28125<br>$0.31250<br>$0.34375<br>$0.37500<br>$0";
text += ".40625<br>$0.43750<br>$0.46875<br>$0.50000<br>$0.53125<b";
text += "r>$0.56250<br>$0.59375<br>$0.62500<br>$0.65625<br>$0.687";
text += "50<br>$0.71875<br>$0.75000<br>$0.78125<br>$0.81250<br>$0";
text += ".84375<br>$0.87500<br>$0.90625<br>$0.93750<br>$0.96875<b";
text += "r>$1.00000</td></tr></table></body></html>";

decimalWin.document.open();
decimalWin.document.writeln(text);
decimalWin.document.close();
}

function stocks(form) {
shares = form.shares.value * 1;

buyprice = form.buyprice.value * 1;
buycomm = form.buycomm.value * 1;

sellprice = form.sellprice.value * 1;
sellcomm = form.sellcomm.value * 1;

bought = round(parseFloat(shares * buyprice) + buycomm); // price for purchase
sold = round(parseFloat(shares * sellprice) - sellcomm); // price sold for
result = round(sold - bought);

form.buycost.value  = "$ " + bought;
form.sellcost.value = "$ " + sold;
form.result.value = "$ " + result;
}
//  End -->
</script>

<center>
<form name='stockform'>
<table border=1>
<tr>
<td align=center><font face="arial, helvetica" size="-1">Shares</td>
<td><input type=text name=shares size=11></td>
</tr>
<tr>
<td align=center><font face="arial, helvetica" size="-1">Symbol</td>
<td><input type=text name=symbol size=11></td>
</tr>
<tr>
<td align=center><font face="arial, helvetica" size="-1">Purchase Price</td>
<td><input type=text name=buyprice size=8> *</td>
</tr>
<tr>
<td align=center><font face="arial, helvetica" size="-1">Sell Price</td>
<td><input type=text name=sellprice size=8> *</td>
</tr>
<tr>
<td align=center><font face="arial, helvetica" size="-1">Buy commission</td>
<td><input type=text name=buycomm size=11></td>
</tr>
<tr>
<td align=center><font face="arial, helvetica" size="-1">Sell Commission</td>
<td><input type=text name=sellcomm size=11></td>
</tr>
<tr>
<td colspan=2 align=center>
<input type=button name=calc value="Calculate Trade" onClick="javascript:stocks(this.form)">
</td>
</tr>
<tr>
<td align=center><font face="arial, helvetica" size="-1">Purchased For</font></td>
<td align=center><input type=text name=buycost size=11></td>
</tr>
<tr>
<td align=center><font face="arial, helvetica" size="-1">Sold For</font></td>
<td align=center><input type=text name=sellcost size=11></td>
</tr>
<tr>
<td align=center><font face="arial, helvetica" size="-1">Result</font></td>
<td align=center><input type=text name=result size=11></td>
</tr>
</table>
<p>
<font face="arial, helvetica" size="-2">
* <a href="javascript:dectable();">Remember to convert fractions to decimals!</a>
</font>
</form>
</center>