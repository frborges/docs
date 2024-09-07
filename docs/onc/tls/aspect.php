
<!-- Script by hscripts.com -->
<!-- Copyright of HIOXINDIA -->
<!-- More scripts @www.hscripts.com -->

<script type="text/javascript">
function aspect_ratio()
{
   var x1=document.getElementById("x1").value;
   var y1=document.getElementById("y1").value;
   var gcd=calc(x1,y1);
   var r1=x1/gcd;
   var r2=y1/gcd;
   var ratio=r1+":"+r2;
   document.getElementById("res").value=ratio;
   var x2=document.getElementById("x2").value;
   var y2=document.getElementById("y2").value;
   var res;
   var res1;
   if(x2=="")
   {
      res=y2/r2;
      res1=r1*res;
      document.getElementById("x2").value=res1.toFixed(2);
   }
   else if(y2=="")
   {
      res=x2/r1;
      res1=r2*res;   
      document.getElementById("y2").value=res1.toFixed(2);
   }
}
function calc(n1,n2)
{
  var num1,num2;
  if(n1 < n2){ 
      num1=n1;
      num2=n2;  
   }
   else{
      num1=n2;
      num2=n1;
    }
  var remain=num2%num1;
  while(remain>0){
      num2=num1;
      num1=remain;
      remain=num2%num1;
  }
  return num1;
}  
function reset()
{
   document.getElementById("x1").value="";
   document.getElementById("y1").value="";
   document.getElementById("x2").value="";
   document.getElementById("y2").value="";
}
function isInteger(s,iid)
{
      var i;
      s = s.toString();
      for (i = 0; i < s.length; i++)
      {
         var c;
         if(s.charAt(i)==".")
         {
         }
         else
         {   
            c = s.charAt(i);
         }
         if (isNaN(c)) 
	   {
		alert("Given value is not a number");
                document.getElementById(iid).value="";
		return false;
	   }
      }
      return true;
}
function ctck()
{
     var sds = document.getElementById("dum");
     if(sds == null){
        alert("You are using a free package.\n You are not allowed to remove the tag.\n");
     }
     var sdss = document.getElementById("dumdiv");
     if(sdss == null){
         alert("You are using a free package.\n You are not allowed to remove the tag.\n");
     }
}
document.onload ="ctck()";

</script>

<!-- Script by hscripts.com -->

<table cellspacing=0 cellpadding=3 style="border:1px solid green;" align=center>
<tr><td><table>
<tr><td>Enter the x1 value:</td><td><input type="text" id="x1" onkeyup="isInteger(this.value,this.id);"></td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td>Enter the y1 value:</td><td><input type="text" id="y1" onkeyup="isInteger(this.value,this.id);"></td></tr>
</table>
</td>
<td align=center>=</td><td>
<table>
<tr><td>Enter the x2 value:</td><td><input type="text" id="x2" onkeyup="isInteger(this.value,this.id);"></td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td>Enter the y2 value:</td><td><input type="text" id="y2" onkeyup="isInteger(this.value,this.id);"></td></tr>
</table></td>
</tr>
<tr><td colspan=3 align=center>Ratio:<input type="text" id="res" readonly>   <input type="button" value="calculate" onclick="aspect_ratio()">  <input type="button" value="Reset" onclick="reset()"></td></tr>
</table>
<div style="font-size: 10px;color: #dadada;" id="dumdiv" align=center>
</div>
