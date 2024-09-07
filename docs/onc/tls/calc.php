<center>
<form name="Keypad" action="">

<b>

<table border=2 width=50 height=60 cellpadding=1 cellspacing=5>
<tr>
	<td colspan=7 align=middle><input name="ReadOut" type="Text" 
size=29 value="0" width=100%></td>
	
	
	
</tr>
<tr>
	<td><input name="btnSeven" type="Button" value="  7  " 

onclick="NumPressed(7)"></td>
	<td><input name="btnEight" type="Button" value="  8  " 

onclick="NumPressed(8)"></td>
	<td><input name="btnNine" type="Button" value="  9  " 

onclick="NumPressed(9)"></td>

	
	<td><input name="btnNeg" type="Button" value=" +/- " 

onclick="Neg()"></td>
	<td align="middle"><input name="btnPercent" type="Button" 

value="  % " onclick="Percent()"></td>
</tr>
<tr>
	<td><input name="btnFour" type="Button" value="  4  " 

onclick="NumPressed(4)"></td>
	<td><input name="btnFive" type="Button" value="  5  " 

onclick="NumPressed(5)"></td>
	<td><input name="btnSix" type="Button" value="  6  " 

onclick="NumPressed(6)"></td>
	
	<td align=middle><input name="btnPlus" type="Button" value="  

+  " onclick="Operation('+')"></td>

	<td align=middle><input name="btnMinus" type="Button" value=" 

  -   " onclick="Operation('-')"></td>
</tr>
<tr>
	<td><input name="btnOne" type="Button" value="  1  " 

onclick="NumPressed(1)"></td>
	<td><input name="btnTwo" type="Button" value="  2  " 

onclick="NumPressed(2)"></td>
	<td><input name="btnThree" type="Button" value="  3  " 

onclick="NumPressed(3)"></td>
	
	<td align=middle><input name="btnMultiply" type="Button" 

value="  *  " onclick="Operation('*')"></td>
	<td align=middle><input name="btnDivide" type="Button" 

value="   /   " onclick="Operation('/')"></td>
</tr>

<tr>
	<td><input name="btnZero" type="Button" value="  0  " 

onclick="NumPressed(0)"></td>
	<td><input name="btnDecimal" type="Button" value="   .  " 

onclick="Decimal()"></td>
	

	<td><input name="btnEquals" type="Button" value="  =  " 

onclick="Operation('=')"></td>
<td><input name="btnClear" type="Button" value="  C  " 

onclick="Clear()"></td>

<td><input name="btnClearEntry" type="Button" value="  CE " 

onclick="ClearEntry()"></td>

</b>
</form>
</center></td></tr></table>
<script language="JavaScript">
<!--
    // Module-level variables
    var FKeyPad = document.Keypad;
    var Accum = 0;		// Previous number (operand) awaiting 

operation
    var FlagNewNum = false;   // Flag to indicate a new number (operand) is 

being entered
    var PendingOp = "";		  // Pending operation waiting for 

completion of second operand

    function NumPressed (Num)
    {
	    if (FlagNewNum)
        {
		    FKeyPad.ReadOut.value  = Num;
            FlagNewNum = false;
        }
        else
        {
            if (FKeyPad.ReadOut.value == "0")
                FKeyPad.ReadOut.value = Num;
            else
                FKeyPad.ReadOut.value += Num;
        }
    }

    function Operation (Op)
    {
        var Readout = FKeyPad.ReadOut.value;
        //alert( 'op' );
        if (FlagNewNum &amp;amp;amp;amp;amp;&amp;amp;amp;amp;amp; PendingOp != "=");
            // User is hitting op keys repeatedly, so don't do anything
        else
        {
            //alert( PendingOp );
            FlagNewNum = true;
            if ( '+' == PendingOp )
                Accum += parseFloat(Readout);
            else if ( '-' == PendingOp )
                Accum -= parseFloat(Readout);
            else if ( '/' == PendingOp )
                Accum /= parseFloat(Readout);
            else if ( '*' == PendingOp )
                Accum *= parseFloat(Readout);
            else
                Accum = parseFloat(Readout);

            FKeyPad.ReadOut.value = Accum;
            PendingOp = Op;
        }
    }

    function Decimal ()
    {
        var curReadOut = FKeyPad.ReadOut.value;

        if (FlagNewNum)
        {
            curReadOut = "0.";
            FlagNewNum = false;
        }
        else
        {
            if (curReadOut.indexOf(".") == -1)
                curReadOut += ".";
        }
        FKeyPad.ReadOut.value = curReadOut;
    }

    function ClearEntry ()
    {
        // Remove current number and reset state
        FKeyPad.ReadOut.value = "0";
        FlagNewNum = true;
    }

    function Clear ()
    {
        // Clear accumulator and pending operation, and clear display
        Accum = 0;
        PendingOp = "";
        ClearEntry();
    }

    function Neg ()
    {
        FKeyPad.ReadOut.value = parseFloat(FKeyPad.ReadOut.value) * -1;
    }

    function Percent ()
    {
        FKeyPad.ReadOut.value = (parseFloat(FKeyPad.ReadOut.value) / 100) * 

parseFloat(Accum);
    }

//-->

</script>