<?php 
echo '<meta charset="UTF-8">';
/* <img style="width:120px;height:32px" onclick="javascript:this.src='/index.php/home/reg/get_yz_code/num/'+Math.random()"
src="/index.php/home/reg/get_yz_code" alt=""> */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<HTML> 
<HEAD> 
<TITLE> New Document </TITLE> 
<META NAME="Generator" CONTENT="EditPlus"> 
<META NAME="Author" CONTENT=""> 
<META NAME="Keywords" CONTENT=""> 
<META NAME="Description" CONTENT=""> 
</HEAD> 
<SCRIPT LANGUAGE="JavaScript"> 
     
    //展现结果 
    function showResult(result) { 
        var showDiv = document.getElementById('result'); 
        showDiv.innerHTML = ''; 
        showDiv.innerHTML = result; 
    }; 
    //展现结果2 
    function showResult2(result) { 
        var showDiv = document.getElementById('result2'); 
        showDiv.innerHTML = ''; 
        showDiv.innerHTML = result; 
    }; 
    //展现结果3 
    function showResult3(result) { 
        var showDiv = document.getElementById('result3'); 
        showDiv.innerHTML = ''; 
        showDiv.innerHTML = result; 
    }; 
    //测试同名方法 
    function testFun() { 
        showResult('this is a function named \'testFun\' with no arguments.'); 
    }; 
    function testFun(arg) { 
        showResult('this is a function named \'testFun\' with one argument,the argument is '+arg); 
    }; 
    //2th测试，交换两个函数的顺序 
    //测试同名方法 
    function testFun2(arg) { 
        showResult2('this is a function named \'testFun2\' with one argument,the argument is '+arg); 
    }; 
    function testFun2() { 
        showResult2('this is a function named \'testFun2\' with no arguments.'); 
    }; 
    //3th测试，测试覆盖，同名同参数 
    function testFun3() { 
        showResult3('this is a function named \'testFun3\' first.'); 
    }; 
    function testFun3() { 
        showResult3('this is a function named \'testFun3\' second.'); 
    }; 

</SCRIPT> 
<BODY> 
<div> 
    <input type='button' onclick='testFun();' value='function with no arguments'/></br> 
    <input type='button' onclick="testFun('test');" value='function with one argument test'/> 
</div> 
<div id="result"></div> 
<hr>2th test <hr> 
<div> 
    <input type='button' onclick='testFun2();' value='function with no arguments'/></br> 
    <input type='button' onclick="testFun2('test');" value='function with one argument test'/> 
</div> 
<div id="result2"></div> 
<hr>3th test <hr> 
<div> 
    <input type='button' onclick='testFun3();' value='test 3'/></br> 
</div> 
<div id="result3"></div> 
</BODY> 
</HTML>

