<html>
    <head>

    <style>
        *
        {
            padding: 0px;
            margin: 0px;
            box-sizing:border-box;
        }
        .container{
            height: 500px;
            width:80%;
            margin-left:10%;
            /* background-color:red; */
            margin-top:150px;
        }
        .heading{
            margin-left:40%;
            position:relative;
            top:50px;
            font-family:sans sherif;

        }
        #form{
            position:relative;
            left:475px;
            
        }
        #inp{
            padding:5px;
            width:20%;
            border-radius:5px;
            border:1px solid black;


        }
        #btn{
            width:10%;
            position:relative;
            top:25px;
            left:525px;
            padding:5px;
        }
    </style>
    </head>
    <body>
            <h1 class="heading">
                Welcome To Billing
            </h1>
        <div class="container">
            <form action="unit.php" method="post">
                <div class="form-group" id="form">
                    <input type="text" id="inp" class="form-control" name="form" placeholder="Enter Amount" required>
                </div>
                <div class="form-group">
                    <button id="btn" class="submit">
                        SUBMIT
                    </button>
                </div>
                
            </form>
        </div>
    </body>
</html>



