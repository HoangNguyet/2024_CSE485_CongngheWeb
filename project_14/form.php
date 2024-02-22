<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <style>
        h4{
            color: #111111;
            padding: 10px;
            padding-bottom: 2px;
            border-bottom: 2px solid black;
        }
        .gird-container{
            display: grid;
            grid-template-columns: 30% 80%;
            grid-template-rows: 30px 30px 30px 120px 30px 30px 30px 30px 30px 30px;
            padding-top:20px ;
            padding-left: 100px;
            justify-content: center;

        }
        .gird-container1{
            display: grid;
            grid-template-columns: 30% 80%;
            grid-template-rows: 30px 30px 30px 30px 30px 30px 30px 30px 30px;
            padding-top:20px ;
            padding-left: 100px;
            justify-content: center;

        }
        .gird-container2{
            display: grid;
            grid-template-columns: 30% 80%;
            grid-template-rows: 200px 60px 30px 120px ;
            padding-top:20px ;
            padding-left: 100px;
            justify-content: center;

        }
        .gird-container div{
            align-self: center;
        }
        .footer_1{
            border-top: 2px solid black ;
        }
    </style>
</head>
<body>
<?php
$countries=array(
    'NAM ĐỊNH','BẮC NINH','VĨNH PHÚC','NINH BÌNH','THÁI BÌNH','HÀ NỘI','TP HỒ CHÍ MINH',
    'VĨNH LONG','TIỀN GIANG','KIÊN GIANG','HẬU GIANG','TRA VINH','BINH PHUOC','HA TĨNH','THANH HÓA','HÀ GIANG'
);
?>
<basic>
<header>
    <h4>Basic Info</h4>
</header>
    <div class="gird-container">
        <div>Employee ID</div>
        <div class="gird-item">9</div>
        <div>Last Name</div>
        <div class="gird-item">Dodsworth</div>
        <div>First Name</div>
        <div class="gird-item">
            <input type="text" value="anna">
        </div>
        <div>Gender</div>
        <div>
            <input type="radio" name="option" value="option1">Male <br>
            <input type="radio" name="option" value="option2">Female <br>
            <input type="radio" name="option" value="option3">XXX <br>
            <input type="radio" name="option" value="option4">ZZZ
        </div>
        <div>Title</div>
        <div class="gird-item">
            <input type="text" value="Sales Representative">
        </div>
        <div>suffix</div>
        <div class="gird-item"><input type="text" value="Ms."></div>
        <div>BirthDate</div>
        <div class="gird-item"><input type="datetime-local" name="birthdate"></div>
        <div>HireDate</div>
        <div class="gird-item"><input type="datetime-local" name="hiredate"></div>
        <div>SSN # (if applicable)</div>
        <div class="gird-item "><input type="text" name="ssn"></div>
        <div>Reports To</div>
        <div class="gird-item "><select name="answer" id="">
                <option value="option1"> viet nam</option>
                <option value="option2"> thai lan</option>
                <option value="option3"> han quoc</option>
            </select></div>
    </div>
</basic>
<contact>

    <header>
        <h4>Contact Info</h4>
    </header>
    <div class="gird-container1">
            <div>Email</div>
            <div><input type="text"></div>
            <div>Address</div>
            <div><input type="text"></div>
            <div>City</div>
            <div><input type="text"></div>
            <div>Region</div>
            <div><input type="text"></div>
            <div>Postal Code</div>
            <div><input type="text"></div>
            <div>Country</div>
            <div><select name="country" id="">
                    
                </select></div>
            <div>US Home Phone</div>
            <div><input type="text"></div>
            <div>Photo</div>
            <div><input type="text"></div>
        </div>
</contact>
<optional>
    <header>
        <h4>Optional Info</h4>
    </header>
    <div class="gird-container2">
        <div>Note</div>
        <div></div>
        <div>Preferred Shift</div>
        <div><input type="radio" name="select" value="option1">Regular <br>
            <input type="radio" name="select" value="option2">Grawy Yard<br>
        </div>
        <div>Active?</div>
        <div><input type="button"></div>
        <div>Are you human?</div>
        <div>
            <div style="font-size: 30px;font-family: Arial,sans-serif;text-decoration: dashed">
                TIDAWO
            </div>
            <div>
                <p style="justify-content: center">Click to change</p>
                <input type="text">
            </div>
        </div>
    </div>
</optional>
<footer class="footer_1">
    <div class="item">
        <div class="item icon">
        </div>
        <div class="item icon">
        </div>
        <div class="item icon">
        </div>
        <div class="item icon">
        </div>
    </div>
</footer>
</body>
</html>