
<html>
    <head>
        <meta charset="utf-8">
        <style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: #D1E9E9;
  text-align: center;
}  
Body h1 {  
    font-size: 45px;
    font-family: Calibri, Helvetica, sans-serif;  
    background-color: #D1E9E9;
    text-align: center;
} 
table{
    margin-top:20px;
    margin-left:auto; 
    margin-right:auto;
    margin-bottom:20px;
    background-color: #FFF7FB;
}
div {
    display: flex; 
    justify-content: space-around;
    width:550px;
    margin-left:auto; 
    margin-right:auto;
    margin-bottom:20px;
}

button {   
       background-color: #FFBD9D;   
        width: 50%;  
        color: #F75000;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
        text-align: center;
        border-radius: 5px; 
         }   
 form {   
        border: 3px solid #4F9D9D; 
        padding: 10px;
        margin-left:auto; 
        margin-right:auto;
        text-align: center; 
        width:70%;
    }   
    input{   
        padding:5px 15px;
        background:#FDFFFF; 
        border:0 none;
        cursor:pointer;
        -webkit-border-radius: 5px;
        border-radius: 5px; 
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: #FF8040;  
    }   
    
</style>   
    </head>
    <body>
                <h1>墾丁三日遊</h1>
                    <h2>1.行程內容<br></h2>
                屏東海生館是進入墾丁國家公園的第一站，接著恆春鎮周邊景點美食都不少，<br>
                    繼續往南走則是有很多海灘，以及最熱鬧的墾丁大街。還有龍磐草原、鵝鑾鼻<br>
                    燈塔等人氣景點，規劃行程時可以就順著沿線這樣玩過去很順暢。<p>

                <div class="box">
                    <div class="box1">
                        <a href="https://www.taiwan.net.tw/m1.aspx?sNo=0001016&id=421"><img src="https://www.taiwan.net.tw/pic.ashx?qp=1/big_journey/pic_69_2.jpg&sizetype=2" width="220" height="150"></a>
                    </div>
                    <div class="box2">
                        <a href="https://ezgo.coa.gov.tw/zh-TW/Front/Agri/Detail/725"><img src="https://ezgo.coa.gov.tw/UploadImg/6/9fceb2111be9459d8d754aa7b5cce0c1.jpg" width="220" height="150"></a>
                    </div>
                </div>

                    <h2>2.基本資料<br></h2>
                    <form action = "rinfo.php" method = "post" enctype = "multipart/form-data">
                        Name： <input type="type" name="uName" required><p>
                        email： <input type="email" name="email" required><p>
                        tel： <input type="tel" name="tel" required><p>
                        Gender： <input type="radio" name="gender" value = "1"> 男
                        <input type="radio" name="gender" value = "2"> 女<p>
                    
                        Food Preference： <input type="checkbox" name="food[]" value='0'> 辣
                        <input type="checkbox" name="food[]" value="1"> 油炸
                        <input type="checkbox" name="food[]" value="2"> 油膩
                        <input type="checkbox" name="food[]" value="3"> 清淡<p>
                        T-shirt size
                        <select name = "size" required>
                            <option>請選擇衣服尺寸</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select></p>
                        <p>T-shirtcolor： <input type="color" name="color"></p>
                        <p>Birthday： <input type="date" name="birthday"></p>
                    
                        <p>Tickets： <input type="type" name="number" required></p>
                        <p>comment： <input type="type" name="comment" required></p>
                        <button>Submit</button>
                    </form>

                        <table style="border:3px #cccccc solid;" cellpadding="10" border=1 >
                            <caption>T-shirt size 對照表<p></caption>
                            <tr>
                                <td></td>
                                <td>S</td>
                                <td>M</td>
                                <td>L</td>
                                <td>XL</td>
                            </tr>
                            <tr>
                                <td>衣長</td>
                                <td>62</td>
                                <td>65</td>
                                <td>67</td>
                                <td>70</td>
                            </tr>
                            <tr>
                                <td>肩寬</td>
                                <td>43</td>
                                <td>45</td>
                                <td>48</td>
                                <td>51</td>
                            </tr>
                            <tr>
                                <td>身高</td>
                                <td>155</td>
                                <td>160</td>
                                <td>165</td>
                                <td>170</td>
                            </tr>
                          </table>
          
              
    </body>

</html>
