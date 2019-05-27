<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>  
        <meta charset="UTF-8">
        <title>水桶文</title>
    </head>
    <body>
    <form action="#" name="index" method="post">
        <fieldset>
    會員資料
    <p>姓名:<input type="text" name ="username" size="6"></p>
    <p>性別:<input type="radio" name="gender" value="男" checked>男<input type="radio" name="gender" value="女">女</p>
    <p>居住縣市:<select name="city">
            <option value="台北">台北</option>
             <option value="桃園">桃園</option>
              <option value="台中">台中</option>
               <option value="嘉義">嘉義</option>
                <option value="台南">台南</option>
                 <option value="高雄">高雄</option>
                  <option value="外島">外島</option>
        </select></p>
    <p>興趣:<input type="checkbox" name="TV" value="電視">電視
            <input type="checkbox" name="computer" value="電腦">電腦
            <input type="checkbox" name="novel" value="小說">小說</p>
    <p>簡介:<br><textarea name="biography" rows="6" cols="40" ></textarea></p>
    <input type="submit"> <input type="reset">
        </fieldset>
    </form>
    </body>
</html>
