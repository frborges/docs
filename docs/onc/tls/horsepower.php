<SCRIPT LANGUAGE="Javascript" TYPE="text/javascript">
<!--
function hp(weight,et,speed)
	{
	var resultet = Math.round(weight/(Math.pow((et/5.825),3)));
	var resulttrap = Math.round(weight*(Math.pow((speed/234),3)));
	var outputtext = "Trap Speed Method: approx. " + resulttrap + " HP\nET Method: approx. " + resultet + " HP";
	document.calculatorform.outputField.value = outputtext;
	}
//-->
</SCRIPT>


<TABLE WIDTH=328 BORDER=0 BGCOLOR="#BFBFBF">
	<TR><TD ALIGN=CENTER><FONT STYLE="FONT-FAMILY:ARIAL;FONT-SIZE:10pt;FONT-WEIGHT:BOLD">Horsepower Calculator</FONT></TD></TR>
	<TR><TD ALIGN=CENTER>
		<TABLE CELLPADDING=0 WIDTH=320>
		<form name="calculatorform">
			<TR><TD><FONT STYLE="FONT-FAMILY:ARIAL;FONT-SIZE:10pt;FONT-WEIGHT:BOLD">Input:</FONT></TD></TR>
			<TR><TD><FONT STYLE="FONT-FAMILY:ARIAL;FONT-SIZE:9pt">Total Car Weight (with driver):</FONT></TD><TD ALIGN=RIGHT><INPUT TYPE=TEXT NAME="weight" SIZE=9 maxlength=8></TD></TR>
			<TR><TD><FONT STYLE="FONT-FAMILY:ARIAL;FONT-SIZE:9pt">E/T (quarter mile elapsed time):</FONT></TD><TD ALIGN=RIGHT><INPUT TYPE=TEXT NAME="et" SIZE=9 maxlength=8></TD></TR>
			<TR><TD><FONT STYLE="FONT-FAMILY:ARIAL;FONT-SIZE:9pt">Trap Speed (MPH at end of quarter mile):</FONT></TD><TD ALIGN=RIGHT><INPUT TYPE=TEXT NAME="speed" SIZE=9 maxlength=8></TD></TR>
			<TR><TD COLSPAN=2 ALIGN=CENTER><INPUT TYPE=BUTTON VALUE="Calculate Horsepower!" onclick="hp(document.calculatorform.weight.value,document.calculatorform.et.value,document.calculatorform.speed.value);"></TD></TR>
		</TABLE>
	</TD></TR>
	<TR><TD>
		<TABLE CELLPADDING=0 WIDTH=320>
			<TR><TD><FONT STYLE="FONT-FAMILY:ARIAL;FONT-SIZE:10pt;FONT-WEIGHT:BOLD">Output:</FONT><BR></TD></TR>
			<TR><TD><TEXTAREA NAME="outputField" COLS=37 ROWS=2 SCROLLING=NO> </TEXTAREA></TD></TR>

		</TABLE>
		</form>
	</TD></TR>
</TABLE>