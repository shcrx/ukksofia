<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR SOFIA</title>
    <style>

    body {
            font-family: Garamond, serif;
            background-color: #FEFBF6;
            margin: 100px;
            padding-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100hv;
        }

    table {
        border-radius :100px;
        box-shadow : 20px 20x 10px rgba(0,0,0,0,5);

    }

    .calculator {
            background-color: #8CB9BD;
            width: 300px;
            height: 450px;
            font-weight : bold;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 5px 5px  10px; rgba(6, 6, 6, 6,8);
            text-align: left;
        }
    input[type="button"] {

        width   : 100%;
        height  : 200;
        padding : 10px 20px;
        font-size: 30px;
        background-color: #FFFFFF;
        color    : black;
        font-weight : bold;
        border  :none;
        border-radius : 50px;
        box-shadow : 5px 5px 5px rgba(0,0,0,0,8);
        
    }

    input[type="text"] {
        padding : 10px 25px;
        font-size: 15px;
        font-weight :bold;
        text-align :center;
        border: none;
        border-radius: 100px;
        border: 2px solid black;
        width: center 50%;
    }

    h1 {
        color: #1E0342;
        font-size: 25px;
        font-weight : bold;
        margin: 0w;
    }

    h2 {
        color: #1E0342;
        font-size: 15px;
        font-weight : bold;
        margin: 0w;
    }

    </style>
</head>
    
<body>
    
    <div class="calculator">
   <h1><center>KALKULATOR SOFIA</center></h1>
   <center> 
    <form name ="form1" action="" method="post">
        <input type="text" name="txt1" id="">  <br>
        
    <table>
        
        <tr>
            <td><input type="button" value="1" onClick="form1.txt1.value+='1'"></td>
            <td><input type="button" value="2" onClick="form1.txt1.value+='2'"></td>
            <td><input type="button" value="3" onClick="form1.txt1.value+='3'"></td>
            <td><input type="button" value="+" onClick="form1.txt1.value+='+'"></td>
        </tr>

         <tr>
            <td><input type="button" value="4" onClick="form1.txt1.value+='4'"></td>
            <td><input type="button" value="5" onClick="form1.txt1.value+='5'"></td>
            <td><input type="button" value="6" onClick="form1.txt1.value+='6'"> </td>
            <td><input type="button" value="-" onClick="form1.txt1.value+='-'"></td>
         </tr>

         <tr>
            <td><input type="button" value="7" onClick="form1.txt1.value+='7'"></td>
            <td><input type="button" value="8" onClick="form1.txt1.value+='8'"></td>
            <td><input type="button" value="9" onClick="form1.txt1.value+='9'"></td>
            <td><input type="button" value="*" onClick="form1.txt1.value+='*'"></td>
         </tr>

         <tr>
             <td><input type="button" value="0" onClick="form1.txt1.value+='0'"></td>
             <td><input type="button" value="/" onClick="form1.txt1.value+='/'"></td>
             <td><input type="button" value="=" onClick="form1.txt1.value=eval(form1.txt1.value)"></td>
            <td> <input type="button" value="c" onClick="form1.txt1.value=''"></td>
         </tr>
    
    </table>

    <table>
    <tr>
        <td><input type="button" value="000" onClick="form1.txt1.value+='000'"></td>
    </tr>
    </table>

    <h2><center>Nama: Sofia Ananta Putri <br>
        Kelas: XII PPLG 2
    </center></h2></br>

        </form>
        </center>
        </div>
</body>

</html>

