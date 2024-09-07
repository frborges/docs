
<!-- Script by hscripts.com -->
<!-- Copyright of HIOXINDIA -->
<!-- More scripts @www.hscripts.com -->
<script type="text/javascript">
function calculate()
{
   var tot=document.getElementById("tot").value;
   var count=2;
   if(tot>1){
     var n1=document.getElementById("txt0").value;
     var n2=document.getElementById("txt1").value;
     var res1=n1*n2;
     n1=calc(n1,n2);
     lcm=res1/n1;
     while(count<tot){
        var gg="txt"+count;
        n2=document.getElementById(gg).value;
        res1=lcm*n2;
        n1=calc(n1,n2);
        var lcmv=calc(lcm,n2);
        lcm=res1/lcmv;
        count=count+1;
     }  
   }
   document.getElementById("re").style.display="block";
   document.getElementById("resul").value=lcm;
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
function newtextbox(val)
{
  if(val<6){
     var dd=document.getElementById('new1'); 
     var en=document.getElementById('va').style.display='block';
     if(dd.innerHTML==""){
       for(var i=0;i<val;i++)
       {
          var textbox=document.createElement('input');
          textbox.setAttribute("type","text");
          var textname="txt"+i;
          textbox.setAttribute("id",textname);
          textbox.setAttribute("size","4");
          dd.appendChild(textbox);
       }
     }
     else{
       for(var i=0;i<val;i++)
       {
           var gg="txt"+i;
           dd.removeChild(document.getElementById(gg));
           document.location.reload(); 
       }
     }
   } 
   else{
     alert("Enter values upto 5 only");
   }
}
</script>

<!-- Script by hscripts.com -->

<table align=center style='border:1px solid green;color: #3D366F;font-size:13px;'>
<form name=frm>
<tr><td>Total Numbers:</td><td><input type="text" id="tot" name="tot" value="" size="4" onkeyup="newtextbox(this.value)"></td></tr>
<tr><td id=va style='display:none;'>Values:</td><td id='new1'></td></tr>
<tr><td align=center colspan=2><input type="button" onclick="calculate()" value="LCM"></td></tr>
<tr><td align=right id=re colspan=2 style='display:none;'>LCM of the above numbers:<input type="text" name="resul" id="resul" value="" readonly size="4"></td></tr>
</form>
</table>

