<div class="hd">
        <img src="../../../image/yiban.png" class="img1"> 
    </div>

    <input type="button" id="btn" value="" style="" >
<div class="all">    
    <div id="nav" class="hd1">
        <ul>
            <li><a id="a1" onclick="setTab('a',1,7)" href="javascript:scrollTo(0,0);">填写考核表</a></li>
            <li><a a id="a2" onclick="setTab('a',2,7)" href="javascript:scrollTo(0,0);">查看上一次考核表</a></li>
            <li><a a id="a3" onclick="setTab('a',3,7)" href="javascript:scrollTo(0,0);">查看评价</a></li>
            <li><a a id="a4" onclick="setTab('a',4,7)" href="javascript:scrollTo(0,0);">查看自己所有考核表</a></li>
            <li><a a id="a5" onclick="setTab('a',5,7)" href="javascript:scrollTo(0,0);">查看所有人上一次考核表</a></li>
            <li><a a id="a6" onclick="setTab('a',6,7)" href="javascript:scrollTo(0,0);">查看一个人所有考核表</a></li>
        </ul>   
    </div>
 <div id="con_a_1" class="cc">
    <table border="1" cellspacing="0">
        <caption>中南大学易班工作站绩效考核表</caption>
        <tr class="tr1">
            <th>姓名</th>
            <td class="td1"><input type="text" name="姓名"></td>
            <th>部门</th>
            <td class="td2"><input type="text" name="部门"></td>
            <th>职务</th>
            <td class="td3"><input type="text" name="职务"></td>
        </tr>
        <tr class="tr2">
            <th>部门常规工作</th>
            <td colspan="5"><textarea name="部门常规工作"></textarea></td>
        </tr>
        <tr class="tr3">
            <th rowspan="2">线上活动任务</th>
            <td colspan="2">微信推送浏览数</td>
            <td colspan="4"><textarea name="微信推送浏览数"></textarea></td>
        </tr>
        <tr class="tr4">
            <td colspan="2">易班APP线上活动（包括轻应用、优课、微视频征集大赛等）</td>
            <td colspan="4"><textarea name="线上活动"></textarea></td>
        </tr>
        <tr class="tr5">
            <th>计划外工作</th>
            <td colspan="5"><textarea name="计划外工作"></textarea></td>
        </tr>
        <tr class="tr6">
            <th>工作计划/工作创新/工作想法</th>
            <td colspan="5"><textarea name="工作计划/工作创新/工作想法"></textarea></td>
        </tr>
        <tr class="tr10">
            <th>备注</th>
            <td colspan="5"><textarea name="备注"></textarea></td>
        </tr>
    </table>
    <p>
<b>工资考核标准：</b><br></p>
    <p id="p1">员工工资= 基本工资 + 绩工资 + 效工资 + 值班工资</p>
<p><b>月绩效考核表填写说明：</b><br><br>
1、此文件由每部门在编人员填写；<br>
2、部门一栏填写说明：<br>
部长填写本部门名称，部长外人员具体到组别，例如“办公室”等；<br>
3、职务一栏填写说明：<br>
有职务的填写“部长”“组长”等，没有职务的填写“试用员工”“正式员工”；<br>
4、组内常规工作是填写每个月完成的本职工作，尽量描述详细，将作为员工工作量考核与工资量化的标准，计划外非常规工作是填写完成非本组本职工作，比如参与各类项目或未申报上项目的工作以及各种临时性工作。<br>
5、普通员工的绩效考核表需先交由组长审核并由组长评定等级，组长评价直接按照章程评定等级，A（150元）、B（110元）、C（80元）、D（40）、E（0），部长意见可同意组长评价，也可提出修改意见；组长考核表直接交由部长审核，部长考核表需交由对应的指导老师审核。<br>
6、文件以“绩效考核表-姓名年份.月份”命名，每月总结由部长汇总后提交人资组即可，无需打印。
    </p>
        <div class="button">
            <button onclick="disp_prompt()" style="width: 150px;">提交<a href=""></a></button>
        </div> 
    </div>
    <div id="con_a_2" class="cc" style="display: none;">
    <table border="1" cellspacing="0">
        <caption>中南大学易班工作站绩效考核表</caption>
        <tr class="tr1">
            <th>姓名</th>
            <td class="td1" name="姓名"></td>
            <th>部门</th>
            <td class="td2" name="部门"></td>
            <th>职务</th>
            <td class="td3" name="职务"></td>
        </tr>
        <tr class="tr2">
            <th>部门常规工作</th>
            <td colspan="5" name="部门常规工作"></td>
        </tr>
        <tr class="tr3">
            <th rowspan="2">线上活动任务</th>
            <td colspan="2">微信推送浏览数</td>
            <td colspan="4" name="微信推送浏览数"></td>
        </tr>
        <tr class="tr4">
            <td colspan="2">易班APP线上活动（包括轻应用、优课、微视频征集大赛等）</td>
            <td colspan="4" name="线上活动"></td>
        </tr>
        <tr class="tr5">
            <th>计划外工作</th>
            <td colspan="5" name="计划外工作"></td>
        </tr>
        <tr class="tr6">
            <th>工作计划/工作创新/工作想法</th>
            <td colspan="5" name="工作计划"></td>
        </tr>
        <tr class="tr7">
            <th>组长评价</th>
            <td colspan="5" name="组长评价"></td>
        </tr>
        <tr class="tr8">
            <th>部长意见</th>
            <td colspan="5" name="部长意见"></td>
        </tr>
        <tr class="tr9">
            <th>教师评价</th>
            <td colspan="5" name="教师评价"></td>
        </tr>
        <tr class="tr10">
            <th>备注</th>
            <td colspan="5" name="备注"></td>
        </tr>
    </table>
    <div id="djpd2">等级评定：
        <p><font name=abcd></font>级</p>
    </div>
    </div>
    
    <div id="con_a_3" class="cc" style="display: none;">
    <table border="1" cellspacing="0">
        <caption>上次考核评价</caption>
        <tr class="tr7">
            <th>组长评价</th>
            <td colspan="7" name="组长评价"></td>
        </tr>
        <tr class="tr8">
            <th>部长意见</th>
            <td colspan="7" name="部长意见"></td>
        </tr>
        <tr class="tr9">
            <th>教师评价</th>
            <td colspan="7" name="教师评价"></td>
        </tr>
    </table>
    </div>
    <div id="con_a_4" class="cc" style="display: none;">
       <div class="">
    <table border="1" cellspacing="0">
        <caption>中南大学易班工作站绩效考核表</caption>
        <p class="time">时间：</p>
        <tr class="tr1">
            <th>姓名</th>
            <td class="td1" name="姓名"></td>
            <th>部门</th>
            <td class="td2" name="部门"></td>
            <th>职务</th>
            <td class="td3" name="职务"></td>
        </tr>
        <tr class="tr2">
            <th>部门常规工作</th>
            <td colspan="5" name="部门常规工作"></td>
        </tr>
        <tr class="tr3">
            <th rowspan="2">线上活动任务</th>
            <td colspan="2">微信推送浏览数</td>
            <td colspan="4" name="微信推送浏览数"></td>
        </tr>
        <tr class="tr4">
            <td colspan="2">易班APP线上活动（包括轻应用、优课、微视频征集大赛等）</td>
            <td colspan="4" name="线上活动"></td>
        </tr>
        <tr class="tr5">
            <th>计划外工作</th>
            <td colspan="5" name="计划外工作"></td>
        </tr>
        <tr class="tr6">
            <th>工作计划/工作创新/工作想法</th>
            <td colspan="5" name="工作计划"></td>
        </tr>
        <tr class="tr7">
            <th>组长评价</th>
            <td colspan="5" name="组长评价"></td>
        </tr>
        <tr class="tr8">
            <th>部长意见</th>
            <td colspan="5" name="部长意见"></td>
        </tr>
        <tr class="tr9">
            <th>教师评价</th>
            <td colspan="5" name="教师评价"></td>
        </tr>
        <tr class="tr10">
            <th>备注</th>
            <td colspan="5" name="备注"></td>
        </tr>
    </table>
    <div id="djpd2">等级评定：
        <p><font name=abcd></font>级</p>
    </div>
    </div>
    
<hr>
    <div class="f2">
    <table border="1" cellspacing="0">
        <caption>中南大学易班工作站绩效考核表</caption>
        <p class="time">时间：</p>
        <tr class="tr1">
            <th>姓名</th>
            <td class="td1" name="姓名"></td>
            <th>部门</th>
            <td class="td2" name="部门"></td>
            <th>职务</th>
            <td class="td3" name="职务"></td>
        </tr>
        <tr class="tr2">
            <th>部门常规工作</th>
            <td colspan="5" name="部门常规工作"></td>
        </tr>
        <tr class="tr3">
            <th rowspan="2">线上活动任务</th>
            <td colspan="2">微信推送浏览数</td>
            <td colspan="4" name="微信推送浏览数"></td>
        </tr>
        <tr class="tr4">
            <td colspan="2">易班APP线上活动（包括轻应用、优课、微视频征集大赛等）</td>
            <td colspan="4" name="线上活动"></td>
        </tr>
        <tr class="tr5">
            <th>计划外工作</th>
            <td colspan="5" name="计划外工作"></td>
        </tr>
        <tr class="tr6">
            <th>工作计划/工作创新/工作想法</th>
            <td colspan="5" name="工作计划"></td>
        </tr>
        <tr class="tr7">
            <th>组长评价</th>
            <td colspan="5" name="组长评价"></td>
        </tr>
        <tr class="tr8">
            <th>部长意见</th>
            <td colspan="5" name="部长意见"></td>
        </tr>
        <tr class="tr9">
            <th>教师评价</th>
            <td colspan="5" name="教师评价"></td>
        </tr>
        <tr class="tr10">
            <th>备注</th>
            <td colspan="5" name="备注"></td>
        </tr>
    </table>
    <div id="djpd2">等级评定：
        <p><font name=abcd></font>级</p>
    </div>
    </div>
    
<hr>
    <div class="f3">
    <table border="1" cellspacing="0">
        <caption>中南大学易班工作站绩效考核表</caption>
        <p class="time">时间：</p>
        <tr class="tr1">
            <th>姓名</th>
            <td class="td1" name="姓名"></td>
            <th>部门</th>
            <td class="td2" name="部门"></td>
            <th>职务</th>
            <td class="td3" name="职务"></td>
        </tr>
        <tr class="tr2">
            <th>部门常规工作</th>
            <td colspan="5" name="部门常规工作"></td>
        </tr>
        <tr class="tr3">
            <th rowspan="2">线上活动任务</th>
            <td colspan="2">微信推送浏览数</td>
            <td colspan="4" name="微信推送浏览数"></td>
        </tr>
        <tr class="tr4">
            <td colspan="2">易班APP线上活动（包括轻应用、优课、微视频征集大赛等）</td>
            <td colspan="4" name="线上活动"></td>
        </tr>
        <tr class="tr5">
            <th>计划外工作</th>
            <td colspan="5" name="计划外工作"></td>
        </tr>
        <tr class="tr6">
            <th>工作计划/工作创新/工作想法</th>
            <td colspan="5" name="工作计划"></td>
        </tr>
        <tr class="tr7">
            <th>组长评价</th>
            <td colspan="5" name="组长评价"></td>
        </tr>
        <tr class="tr8">
            <th>部长意见</th>
            <td colspan="5" name="部长意见"></td>
        </tr>
        <tr class="tr9">
            <th>教师评价</th>
            <td colspan="5" name="教师评价"></td>
        </tr>
        <tr class="tr10">
            <th>备注</th>
            <td colspan="5" name="备注"></td>
        </tr>
    </table>
    <div id="djpd2">等级评定：
        <p><font name=abcd></font>级</p>
    </div>
    </div>
    
    </div>
    <!--<div id="con_a_5" class="cc" style="display: none;">
         <table border="1" cellspacing="0">
        <caption>中南大学易班工作站绩效考核表</caption>
        <tr class="tr1">
            <th>姓名</th>
            <td class="td1" name="姓名"></td>
            <th>部门</th>
            <td class="td2" name="部门"></td>
            <th>职务</th>
            <td class="td3" name="职务"></td>
        </tr>
        <tr class="tr2">
            <th>部门常规工作</th>
            <td colspan="5" name="部门常规工作"></td>
        </tr>
        <tr class="tr3">
            <th rowspan="2">线上活动任务</th>
            <td colspan="2">微信推送浏览数</td>
            <td colspan="4" name="微信推送浏览数"></td>
        </tr>
        <tr class="tr4">
            <td colspan="2">易班APP线上活动（包括轻应用、优课、微视频征集大赛等）</td>
            <td colspan="4" name="线上活动"></td>
        </tr>
        <tr class="tr5">
            <th>计划外工作</th>
            <td colspan="5" name="计划外工作"></td>
        </tr>
        <tr class="tr6">
            <th>工作计划/工作创新/工作想法</th>
            <td colspan="5" name="工作计划"></td>
        </tr>
        <tr class="tr7">
            <th>组长评价</th>
            <td colspan="5" name="组长评价"><textarea name="组长评价"></textarea></td>
        </tr>
        <tr class="tr8">
            <th>部长意见</th>
            <td colspan="5" name="部长意见"><textarea name="部长意见"></textarea></td>
        </tr>
        <tr class="tr9">
            <th>教师评价</th>
            <td colspan="5" name="教师评价"></td>
        </tr>
        <tr class="tr10">
            <th>备注</th>
            <td colspan="5" name="备注"></td>
        </tr>
    </table>
            <div id="djpd2">等级评定：
                <input type="radio" name="abcd" value="A">A
                <input type="radio" name="abcd" value="B">B
                <input type="radio" name="abcd" value="C">C
                <input type="radio" name="abcd" value="D">D
                <input type="radio" name="abcd" value="E">E
            </div> 
    <p>
<b>工资考核标准：</b><br></p>
    <p id="p1">员工工资= 基本工资 + 绩工资 + 效工资 + 值班工资</p>
<p><b>月绩效考核表填写说明：</b><br><br>
1、此文件由每部门在编人员填写；<br>
2、部门一栏填写说明：<br>
部长填写本部门名称，部长外人员具体到组别，例如“办公室”等；<br>
3、职务一栏填写说明：<br>
有职务的填写“部长”“组长”等，没有职务的填写“试用员工”“正式员工”；<br>
4、组内常规工作是填写每个月完成的本职工作，尽量描述详细，将作为员工工作量考核与工资量化的标准，计划外非常规工作是填写完成非本组本职工作，比如参与各类项目或未申报上项目的工作以及各种临时性工作。<br>
5、普通员工的绩效考核表需先交由组长审核并由组长评定等级，组长评价直接按照章程评定等级，A（150元）、B（110元）、C（80元）、D（40）、E（0），部长意见可同意组长评价，也可提出修改意见；组长考核表直接交由部长审核，部长考核表需交由对应的指导老师审核。<br>
6、文件以“绩效考核表-姓名年份.月份”命名，每月总结由部长汇总后提交人资组即可，无需打印。
    </p>
    <div class="button">
        <button onclick="disp_prompt()">提交评价<a href=""></a></button>
         <button>下一张表</button>
    </div> 
    </div>-->
    <div id="con_a_5" class="cc" style="display: none;">
    <div class="">
    <table border="1" cellspacing="0">
        <caption>中南大学易班工作站绩效考核表</caption>
        <tr class="tr1">
            <th>姓名</th>
            <td class="td1" name="姓名"></td>
            <th>部门</th>
            <td class="td2" name="部门"></td>
            <th>职务</th>
            <td class="td3" name="职务"></td>
        </tr>
        <tr class="tr2">
            <th>部门常规工作</th>
            <td colspan="5" name="部门常规工作"></td>
        </tr>
        <tr class="tr3">
            <th rowspan="2">线上活动任务</th>
            <td colspan="2">微信推送浏览数</td>
            <td colspan="4" name="微信推送浏览数"></td>
        </tr>
        <tr class="tr4">
            <td colspan="2">易班APP线上活动（包括轻应用、优课、微视频征集大赛等）</td>
            <td colspan="4" name="线上活动"></td>
        </tr>
        <tr class="tr5">
            <th>计划外工作</th>
            <td colspan="5" name="计划外工作"></td>
        </tr>
        <tr class="tr6">
            <th>工作计划/工作创新/工作想法</th>
            <td colspan="5" name="工作计划"></td>
        </tr>
        <tr class="tr7">
            <th>组长评价</th>
            <td colspan="5" name="组长评价"></td>
        </tr>
        <tr class="tr8">
            <th>部长意见</th>
            <td colspan="5" name="部长意见"></td>
        </tr>
        <tr class="tr9">
            <th>教师评价</th>
            <td colspan="5" name="教师评价"></td>
        </tr>
        <tr class="tr10">
            <th>备注</th>
            <td colspan="5" name="备注"></td>
        </tr>
    </table>
    <div id="djpd2">等级评定：
        <p><font name=abcd></font>级</p>
    </div>
    </div>
    
<hr>
    <div class="f2">
    <table border="1" cellspacing="0">
        <caption>中南大学易班工作站绩效考核表</caption>
        <tr class="tr1">
            <th>姓名</th>
            <td class="td1" name="姓名"></td>
            <th>部门</th>
            <td class="td2" name="部门"></td>
            <th>职务</th>
            <td class="td3" name="职务"></td>
        </tr>
        <tr class="tr2">
            <th>部门常规工作</th>
            <td colspan="5" name="部门常规工作"></td>
        </tr>
        <tr class="tr3">
            <th rowspan="2">线上活动任务</th>
            <td colspan="2">微信推送浏览数</td>
            <td colspan="4" name="微信推送浏览数"></td>
        </tr>
        <tr class="tr4">
            <td colspan="2">易班APP线上活动（包括轻应用、优课、微视频征集大赛等）</td>
            <td colspan="4" name="线上活动"></td>
        </tr>
        <tr class="tr5">
            <th>计划外工作</th>
            <td colspan="5" name="计划外工作"></td>
        </tr>
        <tr class="tr6">
            <th>工作计划/工作创新/工作想法</th>
            <td colspan="5" name="工作计划"></td>
        </tr>
        <tr class="tr7">
            <th>组长评价</th>
            <td colspan="5" name="组长评价"></td>
        </tr>
        <tr class="tr8">
            <th>部长意见</th>
            <td colspan="5" name="部长意见"></td>
        </tr>
        <tr class="tr9">
            <th>教师评价</th>
            <td colspan="5" name="教师评价"></td>
        </tr>
        <tr class="tr10">
            <th>备注</th>
            <td colspan="5" name="备注"></td>
        </tr>
    </table>
    <div id="djpd2">等级评定：
        <p><font name=abcd></font>级</p>
    </div>
    </div>
    
<hr>
    <div class="f3">
    <table border="1" cellspacing="0">
        <caption>中南大学易班工作站绩效考核表</caption>
        <tr class="tr1">
            <th>姓名</th>
            <td class="td1" name="姓名"></td>
            <th>部门</th>
            <td class="td2" name="部门"></td>
            <th>职务</th>
            <td class="td3" name="职务"></td>
        </tr>
        <tr class="tr2">
            <th>部门常规工作</th>
            <td colspan="5" name="部门常规工作"></td>
        </tr>
        <tr class="tr3">
            <th rowspan="2">线上活动任务</th>
            <td colspan="2">微信推送浏览数</td>
            <td colspan="4" name="微信推送浏览数"></td>
        </tr>
        <tr class="tr4">
            <td colspan="2">易班APP线上活动（包括轻应用、优课、微视频征集大赛等）</td>
            <td colspan="4" name="线上活动"></td>
        </tr>
        <tr class="tr5">
            <th>计划外工作</th>
            <td colspan="5" name="计划外工作"></td>
        </tr>
        <tr class="tr6">
            <th>工作计划/工作创新/工作想法</th>
            <td colspan="5" name="工作计划"></td>
        </tr>
        <tr class="tr7">
            <th>组长评价</th>
            <td colspan="5" name="组长评价"></td>
        </tr>
        <tr class="tr8">
            <th>部长意见</th>
            <td colspan="5" name="部长意见"></td>
        </tr>
        <tr class="tr9">
            <th>教师评价</th>
            <td colspan="5" name="教师评价"></td>
        </tr>
        <tr class="tr10">
            <th>备注</th>
            <td colspan="5" name="备注"></td>
        </tr>
    </table>
     <div id="djpd">等级评定：
        <p><font name=abcd></font>级</p>
    </div>
    </div>
   
    </div>
        <div id="con_a_6" class="cc" style="display: none;">
        <div class="lst">
    <div id="out"> 
        <ul>
            <li><a href="">行政部</a></li>
            <li><a href="">宣传部</a></li>
            <li><a href="">运营部</a></li>
            <li><a href="">技术部</a></li>
        </ul>
    </div>   
</div>
<div class="lst2">
    <div id="out2">
    <a href="">asdfs</a><a href="">asdfs</a><a href="">asdfs</a><a href="">asdfs</a><a href="">asdfs</a><a href="">asdfs</a><a href="">asdfs</a><a href="">asdfs</a><a href="">asdfs</a><a href="">asdfs</a><a href="">asdfs</a><a href="">asdfs</a><a href="">asdfs</a><a href="">asdfs</a>
    </div>
</div>
<div class="">
    <table border="1" cellspacing="0">
        <caption>中南大学易班工作站绩效考核表</caption>
        <tr class="tr1">
            <th>姓名</th>
            <td class="td1" name="姓名"></td>
            <th>部门</th>
            <td class="td2" name="部门"></td>
            <th>职务</th>
            <td class="td3" name="职务"></td>
        </tr>
        <tr class="tr2">
            <th>部门常规工作</th>
            <td colspan="5" name="部门常规工作"></td>
        </tr>
        <tr class="tr3">
            <th rowspan="2">线上活动任务</th>
            <td colspan="2">微信推送浏览数</td>
            <td colspan="4" name="微信推送浏览数"></td>
        </tr>
        <tr class="tr4">
            <td colspan="2">易班APP线上活动（包括轻应用、优课、微视频征集大赛等）</td>
            <td colspan="4" name="线上活动"></td>
        </tr>
        <tr class="tr5">
            <th>计划外工作</th>
            <td colspan="5" name="计划外工作"></td>
        </tr>
        <tr class="tr6">
            <th>工作计划/工作创新/工作想法</th>
            <td colspan="5" name="工作计划"></td>
        </tr>
        <tr class="tr10">
            <th>备注</th>
            <td colspan="5" name="备注"></td>
        </tr>
</table>    
    <div id="djpd">等级评定：
        <p><font name=abcd></font>级</p>
    </div>
</div>
        <table border="1" cellspacing="0">
            <tr class="tr9">
            <th>组/部长评价</th>
            <td colspan="5" name="组/部长评价"><textarea name="组/部长评价"></textarea></td>
             </tr>
        </table>
            <div class="button">
                <button onclick="disp_prompt()" style="width: 150px; ">提交评价<a href=""></a></button>
            </div>
<hr>
<div class="f2">
        <table border="1" cellspacing="0">
        <caption>中南大学易班工作站绩效考核表</caption>
        <p class="time">时间：</p>
        <tr class="tr1">
            <th>姓名</th>
            <td class="td1" name="姓名"></td>
            <th>部门</th>
            <td class="td2" name="部门"></td>
            <th>职务</th>
            <td class="td3" name="职务"></td>
        </tr>
        <tr class="tr2">
            <th>部门常规工作</th>
            <td colspan="5" name="部门常规工作"></td>
        </tr>
        <tr class="tr3">
            <th rowspan="2">线上活动任务</th>
            <td colspan="2">微信推送浏览数</td>
            <td colspan="4" name="微信推送浏览数"></td>
        </tr>
        <tr class="tr4">
            <td colspan="2">易班APP线上活动（包括轻应用、优课、微视频征集大赛等）</td>
            <td colspan="4" name="线上活动"></td>
        </tr>
        <tr class="tr5">
            <th>计划外工作</th>
            <td colspan="5" name="计划外工作"></td>
        </tr>
        <tr class="tr6">
            <th>工作计划/工作创新/工作想法</th>
            <td colspan="5" name="工作计划"></td>
        </tr>
        <tr class="tr7">
            <th>组长评价</th>
            <td colspan="5" name="组长评价"></td>
        </tr>
        <tr class="tr8">
            <th>部长意见</th>
            <td colspan="5" name="部长意见"></td>
        </tr>
        <tr class="tr9">
            <th>教师评价</th>
            <td colspan="5" name="教师评价"></td>
        </tr>
        <tr class="tr10">
            <th>备注</th>
            <td colspan="5" name="备注"></td>
        </tr>
    </table>
    <div id="djpd2">等级评定：
        <p><font name=abcd></font>级</p>
    </div>
</div>
<hr>
<div class="f3">
    <table border="1" cellspacing="0">
        <caption>中南大学易班工作站绩效考核表</caption>
        <p class="time">时间：</p>
        <tr class="tr1">
            <th>姓名</th>
            <td class="td1" name="姓名"></td>
            <th>部门</th>
            <td class="td2" name="部门"></td>
            <th>职务</th>
            <td class="td3" name="职务"></td>
        </tr>
        <tr class="tr2">
            <th>部门常规工作</th>
            <td colspan="5" name="部门常规工作"></td>
        </tr>
        <tr class="tr3">
            <th rowspan="2">线上活动任务</th>
            <td colspan="2">微信推送浏览数</td>
            <td colspan="4" name="微信推送浏览数"></td>
        </tr>
        <tr class="tr4">
            <td colspan="2">易班APP线上活动（包括轻应用、优课、微视频征集大赛等）</td>
            <td colspan="4" name="线上活动"></td>
        </tr>
        <tr class="tr5">
            <th>计划外工作</th>
            <td colspan="5" name="计划外工作"></td>
        </tr>
        <tr class="tr6">
            <th>工作计划/工作创新/工作想法</th>
            <td colspan="5" name="工作计划"></td>
        </tr>
        <tr class="tr7">
            <th>组长评价</th>
            <td colspan="5" name="组长评价"></td>
        </tr>
        <tr class="tr8">
            <th>部长意见</th>
            <td colspan="5" name="部长意见"></td>
        </tr>
        <tr class="tr9">
            <th>教师评价</th>
            <td colspan="5" name="教师评价"></td>
        </tr>
        <tr class="tr10">
            <th>备注</th>
            <td colspan="5" name="备注"></td>
        </tr>
    </table>
    <div id="djpd2">等级评定：
        <p><font name=abcd></font>级</p>
    </div>
    </div>
</div>    