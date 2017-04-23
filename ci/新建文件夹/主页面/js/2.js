
function disp_prompt()
{
var r=confirm("确认提交吗？");
if (r==true)
  {
  alert("提交成功！");
  }
   
}
$(document).ready(function () {
    $('#btn').click(function () {
	$('#nav').slideToggle('medium');
    });
});

function setTab(name, cursel, n) {
for (i = 1; i <= n; i++) {
var menu = document.getElementById(name + i);
var con = document.getElementById("con_" + name + "_" + i);
menu.className = i == cursel ? "curr": "";
con.style.display = i == cursel ? "block": "none";
nav.style.display = i-1 == cursel ? "block": "none";
nav.style.display = i+1 == cursel ? "block": "none";
}
}
function dep(x){ 
var form2=document.diqu.one.options.length;
var diqul=new Array(form2)
for(i=0;i<form2;i++)
diqul[i]=new Array();
var shi=document.diqu.shi;
diqul[0][0]=new Option("行政部","行政部"); 
diqul[0][1]=new Option("办公室","办公室"); 
diqul[0][2]=new Option("策划组","策划组"); 
diqul[0][3]=new Option("人资组","人资组"); 
diqul[1][0]=new Option("宣传部","宣传部"); 
diqul[1][1]=new Option("自媒组","自媒组"); 
diqul[1][2]=new Option("美工组","美工组"); 
diqul[1][3]=new Option("新媒体组","新媒体组"); 
diqul[1][4]=new Option("讲堂组","讲堂组"); 
diqul[1][5]=new Option("调研组","调研组"); 
diqul[2][0]=new Option("运营组","运营组"); 
diqul[2][1]=new Option("项目组","项目组"); 
diqul[2][2]=new Option("新人组","新人组"); 
diqul[3][0]=new Option("网络组","网络组"); 
diqul[3][1]=new Option("研发组","研发组"); 
diqul[3][2]=new Option("美工组","美工组"); 
for(m=shi.options.length-1;m>0;m--) 
shi.options[m]=null;
for(j=0;j<diqul[x].length;j++){ 
shi.options[j]=new Option(diqul[x][j].text,diqul[x][j].value) 
} 
shi.options[0].selected=true;
} 