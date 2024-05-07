<?php
    $server_name= "localhost";
    $user_name= "root";
    $password= "";
    $database= "robotics";

    $conn= mysqli_connect($server_name,$user_name,$password,$database);
     
    if(!$conn)
    {
        echo "connection was not stablished successfully due to ".mysqli_connect_error($conn);
    }
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $feed = $_POST['comment'];
  
      $sql= "INSERT INTO `feedback` ( `feedback`) VALUES ('$feed');" ;
      $result= mysqli_query($conn, $sql);
  
      if (!$result){
        echo '<div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>We Are facing some issue in submitting your entry.</p>
        <hr>
      </div>';
      }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            overflow-x: hidden;
            background-image:linear-gradient(rgb(42,0,89),cyan,rgb(42, 0, 89),rgb(42,0,89),rgb(42, 0, 89),rgb(42,0,89));
        }
        .one{
            background: #ffffff19;
            position:absolute;
            position:fixed;
            display:flex;
            height:20vh;
            width:100vw;
            left:-10px;
            top:-10px;
            margin: 0%;
            align-items: center;
            justify-content: center;
            z-index:1;
        }
        #logo{
            margin-left:30px;
            margin-right:5px;
            z-index: 1;
            height: 60px;
            border-radius:50%;
            box-shadow: 2px 10px 20px;
        }
        #logo:hover{
            filter: invert();
            box-shadow: 0px 0px 10px rgb(242, 107, 233);
        }
        #onep{
            color:transparent;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 1000;
            text-align: center;
            font-size: 7vh;
            z-index: 2;
            -webkit-background-clip:text;
            background-clip:text;
            background-image:linear-gradient(45deg,red,yellow);
            animation: change 2s ease-in-out infinite;
        }
        @keyframes change {
            100%{
            background-image:linear-gradient(45deg,yellow,red);
            }
            0%{
            background-image:linear-gradient(45deg,red,yellow);
            }
        }
        p{
            color:white;
            text-decoration:underline;
        }
        aside{
            background:#000000;
            width:49px;
            height:230px;
            overflow: hidden;
            position: absolute;
            position: fixed;
            top:55%;
            left:6%;
            transform: translate(-50%,-50%);
            border-radius:25px;
            z-index: 1;
        }
        #nav{
            background:rgb(21, 21, 21);
            height:40px;
            width:40px;
            box-shadow:inset 2px 2px 2px grey;
            border-radius:50%;
            display:flex;
            align-items: center;
            justify-content: center;
            color:white;
            margin: 5px;
        }
        #nav:active{
            box-shadow:inset -2px -2px 2px grey;
            color:rgb(2, 255, 18);
        }
        #nav:hover{
            cursor: pointer;
            box-shadow: 5px 5px 20px rgb(2, 255, 18);
        }
        #betw{
            background:transparent;
            margin-top:25vh;
            margin-left:25vw;
            display:block;
            width:80vw;
            height:230vh;
        }
        section{
            background:white;
            height:70vh;
            width:70vw;
            margin-top:20px;
        }
        .two{
            width:120vw;
            position: relative;
            right:30vw;
            top:-38px;
            text-align:center;
            overflow: hidden;
            display: inherit;
            background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVQicN2PM5VAc1dKHYg0FqZZd4qbIF8sjyKKrD5urfig&s);
            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;
            filter:saturate(2);
            align-items: center;
            justify-content: center;
            display:flex ;
        }
        #colldiv{
            position:absolute;
            color:rgb(255, 255, 255);
            width:55%;
            height: 45vh;
            top:50px;
            backdrop-filter:blur(3px);
            font-size: 18px;
            font-weight: 1000;
            margin: 20px;
            overflow: scroll;
            text-transform:uppercase;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            overflow-x: hidden;
        }
        .three{
            border-radius: 20px;
            position: relative;
            right:10vh;
            height:auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            background:transparent;
        }
        #member{
            height:40vh;
            width:40vh;
            margin:15px;
            border-radius: 50%;
            box-shadow: inset 2px 2px 10px rgb(0, 0, 0);
            display:flex;
            background-position:center;
            background-repeat: no-repeat;
            background: cover;
            background-size:100%;
            align-items: center;
            justify-content: center;
            align-items: end;
        }
        .mem1{
            background-image:url(https://media.licdn.com/dms/image/C4E03AQFALdDiRTI77A/profile-displayphoto-shrink_400_400/0/1656411667528?e=1720656000&v=beta&t=ZYWkPsBuFRzycqq63muoUDoLqG-zznZYr7NWQcJF8ZM);

        }
        .mem2{
            background-image:url(https://media.licdn.com/dms/image/D4D35AQFnc0guYLRNjQ/profile-framedphoto-shrink_800_800/0/1714404603012?e=1715518800&v=beta&t=5-gT3YnFYc45KdnQy4_wnrP7l6pSXGg2Zb0paRh6rCY);

        }
        .mem3{
            background-image:url(https://media.licdn.com/dms/image/D5603AQHIbaF9LGJNcQ/profile-displayphoto-shrink_400_400/0/1687850151471?e=1720656000&v=beta&t=MsarQWD5pHVg5CBYodBsXowkc_lx4MtOfGiCeVrewFk);

        }
        #member:hover{
            box-shadow:0px  0px 20px #ffffff;
            cursor:help;
        }
        .four{
            border-radius: 20px;
            position: relative;
            display: flex;
            flex-wrap: nowrap;
            width:70vw;
            height:50vW;
            margin-top:70px;
            margin-bottom: 0px;
            background:transparent;
            right: 10%;;
        }
        button{
            height:60px;
            width:60px;
            border-radius: 50%;
            position: relative;
            top:25%;
            cursor: pointer;
            color:white;
            background: #000;
        }
        button:hover{
            box-shadow: 5px 5px 20px rgb(2, 255, 18);
        }
        .five{
            position: fixed;
            position: relative;
            display: flex;
            flex-wrap: wrap;
            right:35%;
            margin: 0;
            width:120vw;
            max-height: 92vh;
            background: #000;
            bottom: 0vh;
        }
        #name{
            color:rgb(255, 255, 255);
            text-decoration: none;
            font-weight: 1000;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: smallER;
            text-align: center;
            position: relative;
            top:45px;
            text-shadow: 0px 0px 3px rgb(0, 0, 0);
        }
        a{
            text-decoration: none;
            color: white;
        }
        #navi{
            width:35px;
            height:30px;
            border-radius: 50%;
            margin: auto;
            filter: invert();
        }
        #mem1{
            background-image: url(https://media.licdn.com/dms/image/D4D35AQFnc0guYLRNjQ/profile-framedphoto-shrink_800_800/0/1714404603012?e=1715518800&v=beta&t=5-gT3YnFYc45KdnQy4_wnrP7l6pSXGg2Zb0paRh6rCY);
        }
        #team{
            text-decoration: none;
            font-size: 30px;
            display: block;
            color: white;
            font-family: 'Courier New', Courier, monospace;
        }
        #achi,#about{
            font-family:'Courier New', Courier, monospace;
            font-weight: 1000;
            font-size:40px;
            position: relative;
            right:45px;
        }
        #about,#credits{
            z-index: 0;
            text-align: center;
            color:white;
            position: relative;
            left:10%;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 100;
            text-decoration: none;
            font-size: xx-large;
        }
        #credits,#feed{
            z-index:0;
            text-align: center;
            color:white;
            position: relative;
            text-decoration: none;
            font-family:'Times New Roman', Times, serif;
            font-weight: 100;
            font-size: xx-large;
            position: relative;
        }
        #ab{
            width:50vw;
            min-height:20vh;
            background:rgb(0, 0, 0);
            margin:15px;
            position: relative;
            left:10vw;
            font-size:15px;
        }
        a:hover{
            color:rgb(69, 255, 22);
        }
        .six{
            width:70vw;
            height:50vh;
            position: relative;
            display: flex;
            right:10vw;
            bottom:60px;
            background: transparent;
        }
        #feed{
            right:20vw;
            bottom:50px;
            margin-bottom: 50px;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 1000;
            text-decoration: underline;
            font-size: 40px;
        }
        #comment{
            width:80%;
            height:10%;
            border-radius: 5px;
        }
        #sub{
            width:15%;
            height:12%;
            border-radius: 5px;
            background: rgb(71, 85, 239);
            color: white;
            top: 0;
        }
        #photo{
            width:80%;
            height:60%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position:center;
            flex-wrap: nowrap;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter:brightness(2);
            margin: 10px;
        }
        #ph{
            max-width:50vw;
            max-height:70vh;
        }
        #icons{
            width:30px;
            height: 30px;
            position: relative;
            top:10px;
            filter: invert();
        }
        #dev{
            width:80px;
            height: 80px;
            border-radius:50%;
            margin:10px;
        }
        #dev:hover{
            scale:1.2;
        }
        #ab{
            background: transparent;
        }
    </style>
    <aside>
        <div id="nav"><a href="#s1"><img id="navi" src="data:image/png;base64,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"></a></div>
        <div id="nav"><a href="#team"><img id="navi" src="https://static.vecteezy.com/system/resources/thumbnails/005/005/794/small/user-icon-in-trendy-flat-style-isolated-on-grey-background-user-symbol-for-your-web-site-design-logo-app-ui-illustration-eps10-free-vector.jpg"></a></div>
        <div id="nav"><a href="#achi"><img id="navi" src="https://cdn4.vectorstock.com/i/1000x1000/18/18/trophy-achievement-icon-vector-21011818.jpg"></a></div>
        <div id="nav"><a href="#feed"><img id="navi" src="data:image/jpeg;base64,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"></a></div>
        <div id="nav"><a href="#s4"><img id="navi" src="data:image/png;base64,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"></a></div>
    </aside>
    <section class="one" >
        <img id="logo" src="https://media.licdn.com/dms/image/C5603AQHG7E1OEo0zpA/profile-displayphoto-shrink_800_800/0/1636816334025?e=1720051200&v=beta&t=6EuNpmsl1qf6__h-1iIO2T1uFzG66A9py03bw3HP7xk" alt="logo">
        <p id="onep">DROID CHAMPS</p>
    </section>
    <section id="betw">
    <section class="two" id="s1">
        <img id="college" src="">
        <div id="colldiv"><br><br>Welcome to the Robotics Club at BCE Bakhtiyarpur College, where innovation meets ingenuity! As a hub for aspiring engineers and tech enthusiasts, our club is dedicated to exploring the fascinating world of robotics. Through hands-on projects, workshops, and competitions, we strive to cultivate creativity, problem-solving skills, and teamwork among our members. Whether you're a seasoned roboticist or just beginning your journey, join us as we embark on a thrilling adventure at the intersection of technology and imagination.</div>
    </section>
    <section class="three" id="s2"><h id="team"><br><br><u><b>OUR TEAM:</u></b><br>Dedicated robotics club team members combine passion and expertise to innovate and inspire. Together, they push the boundaries of technology, fostering creativity and teamwork.</h>
        <div id="member" class="mem1"><p id="name"><U>AMRITA SINHA</U><br>INCHARGE</p></div>
        <div id="member" class="mem2"><p id="name" ><U>SUSHANT PRASAD</U><br>LEAD</p></p></div>
        <div id="member" class="mem3"><p id="name"><U>VICKY VIKASH</U><br>LEAD</p></p></div>
    </section>
    <p  id="achi"><br><br>ACHIEVEMENTS:</p>
    <section class="four" id="s3">
        <button id="left" ><</button>
        <div id="photo">
            <img id="ph" src="">
        </div>
        <button id="right" >></button>
    </section>
     
    <div class="container">
        <form action="/yash/robotics/robotics.php" method="post">
            <p id="feed">FEEDBACK:<br><br></p>
            <section class="six" id="s5">

                <textarea class="form-control" placeholder="Enter your feedback..." name="comment" id="comment"></textarea>

                <button type="submit" name="sub" id="sub" class="btn btn-primary">submit</button>
                 
            </section>
        </form>
    </div>

    <section class="five" id="s4">
        <div id="ab"><h id="about"><u>About us:</u></h><br><p><img id="icons" src="https://media.licdn.com/dms/image/C5603AQHG7E1OEo0zpA/profile-displayphoto-shrink_800_800/0/1636816334025?e=1720051200&v=beta&t=6EuNpmsl1qf6__h-1iIO2T1uFzG66A9py03bw3HP7xk"> DROID CHAMPS<br><BR>@BCE BAKHTIYARPUR<BR><BR><img id="icons" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAk1BMVEX///8GBwkAAAAAAAMAAwb19vft7vDw8fIFCAiNjo2HiImUlZb8/PwICQv///4GBwvf39/S0tKnqKmfoKEsLS5xcnOZmpsyMzRRUlOAgYLd3d2xsrNZWlu+vr7T09Pp6elpams+Pj54eHgUFRewsLBJSUskJSfGx8hYWFhhYWJsbG50dHYREhS6u7wxMTM6OjocHB6CUG0hAAAOJ0lEQVR4nO1daWPqKhOOaOpGWo1Vq6173bqc+v9/3RtmQLPA0KNiPPfl+XB7j8TIk4FZgQSBh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHx/2Bc/wTpP94/CvgnUnc+nj5WTHEavgyb/UmnbDsjl0IGIh8HPcXTKFWqySoHf/9M+9N/2mand6uAUwajUoBUaOBjbvBuOyO/j2E+Katg+h/kVoO1eSiaNQV3+L/kP6ZtTdpdrXs/9TyLJNrD81O2Z3+C2xfgF4jws4nqgWJNNhKkIuqrCKaKl9HIUfiuvV32R3/JeKNkp4gsPmMu+EHfsCabSYUzTRiwJBtJ6PNaSgnguzxu7eUPBYdlsLbjLZ18WFTEmzD/9VY/QFJMZYo0vp3/0uRTP4O7li3Cj0RR6wqDcKwrVTkq+x+LLg2BMNg1gApsgUoF95tJaKsSr0j5HiXgkw6tX1mTIqv3w2Ua9ZlNUnw8cgw6IDUItZXX+8umfyIbSZ36tU9vIkugs5o108fz2THY9HtI8OEt7hW8FYC469DxfFldo8cY5xLNRZlplK4YVKCossnhsE7Q/U6TXHp7tUEHdy493bM1nIssmZWVeywywOcpyeGPBhhyypz/XgOA6HGFvdkHh+FMmFo6HaZjkkaEWvJD1IyDII1Utxn7zZ+gXsxMazvB301uITNTk+gVxaJyfapPs0wfJDTrpe+VXLd5CDGQ43t72YqzoZgAWvs7SHzOQ/GKI7dkXWaIQ+2DA1EYUC2wKayTece7AZPtKIUYC/fhlqGDcNjNzMyDNRUfC7cdboRZoexyT2oVJyCSSA0LTzwPas0km4+nBqyMgwCqWhbQR58nozUSPPUboyk522pQ9dh4XH3hFYU5uCEnAzBKopvd4uyisF7YKNyBypPZgz60B9BoSfTtCGUyDEUujYSymZToCFmKct4PSUg6dVSyqA4zMQkTCL7XAfzMgx4hGNccwOlp+bl+TcngjoPpA8S2GQ/LDAMvuUtpkEePJhVFMWyMJJxUqx5yNjzxBBkmooyVHZ/WLw9Ukxmcr8sKQ7k49fpuzqOsLxfUpRhEmU0KrpLZSPcpiR18yqVjNZJnoMifMl/XJShGuosy1s1boWqjsoxGirs09iyAL2VGpvlmzQyTJw3iH3ZUiuod4w4J9fr+G8xk57MUtfID0w/fHUMg7aMo3TRhBQxY7fPqQ6R4E7bK+gz+1Ns0jLkUog7vT55hpsdbp2/6UuPUtunOgxg1i22aBmC86O3GAJjvNvbpV3+O7xK7VCYaIBPpon7ADLXlvv0JEQt8AHcUtskdgq6VGNbbfsMH7puWullmBKidkwsGARnt5yKa+VyagExkd6fRIaFKcW/tOG+ghynP+d3+K+QqPQYc06HQVuHZiQEzD51bS9AvpX/eLCWWaym9o4DqdbaN2KYGDCwhNGpDphFFYecFqYm+LxC37GW9wGdMXyzl8xIRFSjptJ4/B5b38Y/3V5I8AKw11sQRAtcEsPVLex+zNRAioo4dUbT+ASfi/88GRrxAs1XGw0olEeJsnE+TpViN6NCtUdEI3yxaryvUG8aW3p1xBg1tIzoYwZR29ZcY7inbQRPqLppmm5cBSPUdM4QNDdlmdra0DfVqLH4iC+q8fhsXc/EGGMZ4mcwC/ygb9T7pRKQd2OmYj6Xd3Zt9jfMEnJ3oBtrQ6vBL0VsNcm5NN6hveq21A+2sEqJMDbEvgiSYQBfjcz9x7japU3kAfqVVPkS6oXGMIBmiEpKHyUK4NNb/La752CGZS9CY4dCE7GNaSDRDF/l8zNJkTPLI7gcqCe1qRmJrsr+6Ztphg9imZEpDsav493dYQNdoCJRiGXNmTGaYfADqtY8EWdYc3Onaab2eQBxh5mChWHLNgpxlutTC9dAizLmAL5iIi9mbLcwnNh+4NucPrgCOGhrTZo3hY5lopIMRf7HQgAUWZX9rsN/D+x+IVOfBj7jd2M7LUMOkVm+XpXBnFWetHnKq6BnHaSJsm0Q1tA6SgUB2hrhI3TlfuM0pwapqNyTytDGsGdTNZBsdmX0eYNp102ksUoYUL9vY7i1+mULm5QvwNhubkObR2BjOLMOwrZDexHTxlxgTLrdgZ2hyO9HZImi6zCE6lOBH2ICC2iIh2BjCCUtXcX7CG6siVwOMQNYlbykRwYWwS8YCmVajag4/o/NoJwNcOwtD29E+2y/YCh86ydyoCxtv3E2YEWBZQLswWcjHGMrwxgYUr49qgMXNh9zDHQ9HWYRZaysDLfAkFKVdoNyLmLbHAuEOTTXOQFWhlNgSPV/Ble48Gpa9vHPweH4JK6wMsT+U+Ve8SNP5I+cC7HvhdXI4LOO1UHiCivD0C6hJAx/ov3/M/Fi99lm1jyVlWEADKk8iShAP5Em81yAFqEf3cwafJAZYQBksubUr6DJJDtyHg5gDnlIALMcsfka3sIY2nwLKPyQP8PRt3LAEEvbT1UCsjxmvkBuPzRfcdyZyIyXYAXPHUOKoKRYIy5ABtZb2K9wUaApr/Krw/8BQweO6Z0xdCHDwv7kMuGMIVG+h0p8w3aNuMC0LkhV8xuWnwGG1yeIXvU+fDCjjm5/XDdeEY7AHnbM9wjxZ8y3eKh/wD0cMPyFT9O5jk/z9AufpkZ25DyAX6pZ9pvCFf3SR7IjT5aOnAfx6KgSdICxhX77i8I1YotnV7EFxoekCoO1vu7jQzGOr19+4vY8WoArYshs5y9jfHNpBwvFQsrEOD4TkzvJ03Qt5a3zcV+5Nhdp/RAY3iBf+kQXYVW+1EExXywjYF/kJThXiZ30VoYfYOwofTak6+iXYH6LusXCZnWxbuFme0kM1o6cANNLa0+YpqEyrl2YLG6KwFNrrlCmE5fmOXJ5/XBgr/GdDVzQRbtLYBBNCxOD39aAKVOwdlgDBs+U1nOwYKh6cR2fKLtgHd/V7pmB3dY2Lcr0N2sxSHMzYVHD3VqMsV2NfYMeMBdWbOtpoPy5In7gw+2yr8g6BzqW1QwWGZa9Jkq6LOS6ti+6unGddW0fv+nsWUCnl1CVztcm7h3aCsCKmXYkK7Rpt8DCcGFZUgX2ltLVF0Ot0TX/xEVrhNFheDHfHpcLuaiOKnTwGRKOMboFxolIM/y25Hl41TaKL8fa5ngmbkGDsIg0w6W09yYZ4kp3F8VRBS6f8oqYCPQSTct+C0shXaw+jRKXw9085GpTB6HPx/oDMSRIhjiH58Zb4+N1vfEJTkbKC/Ex/WcF+vBB/vsx26wywo+ZVvmnlVop83j8mvpfLg9XcL15DQ8HoLK+Lcp7JfeuHWiXCY8hdL8BsS3C+CrT7ioH4IEKP9qd7APcVaTfkw4eU3XTM9x38GWPT6+CEOtHRGlIFNojqvZ05h5SFCGZRbkGuDrhIenqUxHHveaRpvFU/aNbdY1yI3AyC93vV+eb8qrBzhUpYlIiw5uch8nRbaFgaT77Kzc6+0Pu3alQSgH781ctFfN3lIISdaGbnBrB5TFmtUPbsK8cvdefYnMTvVbNbvUl1u/1+9jbz1Vobd3uULMFam5TPmZsDEGaJovfBl/JUBWBHGNkOLLJBXgSRVWBgz6Okefo6epUpjp+WDVmmNSJRsYTiNwAz+BhkdGHjvSxuN7zlmf6mOKiH/yxG52/o7BnpHIzxZEmhgfisAE8lN9J5Z4C2n3jzMFAqLjM1RA9YWir3wHew0P3TMPFHTrSTzTkRt/0QjQwfIb8lVZxbeXhhTedhAjp2hjiNUwNN/K90jPE0Fab3FEP0mVgb0RPHjajz9qMpDrNWjA9wz9wrW4W1r9wMrg/s0UDjrGuiSLo/8KRnVqG31Bt0S3hCJ/hJTzso6xzdvsy3NMebYT9zlVLtQyfQZEWbCEPeKKSxRuF9kFpRwnP5UDVqBse7DS7nnUMY1MemL/gQdFU0dstuKz3iUUoxUfMsZCUHXwahiFmfoqHzfEF2oldue+66EspLh6KXrFKnZrP8xZ9/zQU5OpDZXFLPbFcvaUi0SmaVPWiUBYvyrBrSIJ2DijB0s6BPqGnXhzQLvQFjrPJVOMKDEPduUHiDRDyrqWYiWxnRKYfOhPB22GyiGWpxfRuBI6jPFeS5CLpCpOzHEOfQ9KDMcgh0r1WZJ9bW5FlyIVDqinkdISOSe4Xde/h/RYC4RurRRAwrnMqsY7FlqPQcm9/mOJp3em4iMtxnxB8cbI87xyoToEYl/VMCyqShf79FnhitgjBUky6Q7nvoV183UKZGP/It8Xhe8VOPWvC+1T2x38d3xXEhU9WaeTOB559SAE+O62DngPePqblq+207gfHRK0gSb8NKZSxe6rKM1uql3617kh6iKRDnTU+fpFlHHWOn4dfqeJ7apSGf5DMyV0bfyjD83N3ApR4XTHcAFljbDfhcrAKdRLJd40ohskcxOJAVdAV042/rtVcrrhYxH0FiHdsiqFaU7ndaLlF6byj+yWWix1zbV2VHMaQQr1XTjybZnhXGiaPejOdv658fIsRCZ5dgw1nCcMIGMaKoJiE29FKfikZ3y1y7eNdIGxXjm8gFXn/59GkLjNzbIs14NlcPYT+rPeWTvY36+W7oTbAlFqoI7ix3+wg9/8yKMVHp/rc4Sjx5GEM3+/4/ZV5TEcsRbJyopv6L0w7+Se5enmv+lMHGGfbvpCefeMp7Lecg+a99/FZRLeJL6wWFep8gbBxfKfzT9PdOYg3QH3b3m9kEfB4nkBNVR4Pb+3tzXPZLlDvvjY/d8PU/t/hrt987/4nyOUQ1hMc//X4eP0tdveEx8f/OkMPDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PD49/Dv8DIybKeHe6keIAAAAASUVORK5CYII="><a href="http://bcebakhtiyarpur.org/">bcebakhtiyarpur.org</a><BR><BR><img src="data:image/png;base64,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" id="icons">612 2272066<BR><BR><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAh1BMVEX///8AAAD8/PwEBAT39/f29vbt7e3x8fHo6OjU1NRwcHA3Nzfa2trl5eXHx8eOjo5MTEyfn58SEhLAwMDQ0NCsrKxnZ2dbW1sdHR1FRUUXFxeMjIy4uLiAgIB6eno0NDQ+Pj4mJiakpKQtLS2WlpYkJCQcHBxJSUleXl5VVVWysrJqamp8fHy8Lo8vAAAMpElEQVR4nO1dCXuiPBAm4RIEVBCP1rNaq3b//+/7MuEQSJBDa+L35N1du1aIeTNJZjKZCZqmoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCg8H8DvvPuTYEx0MD0D31v+54D8Hw7/U32gt+TMFSbsDPJqzFYjdz5crv/CMPwY79dzt1jNDDIBQZth/dlSCvuxe4W8bB1rx698F0ZEgFphjfZhRkjnfxJfuYIdxOPXPWmw5LUeuUWRKbfmOnFn+7q3SaebGRZcYjaIYwt2qfxW/RWqCVMIeZ1WxLbHZCLhlfSUw1DeweOOJlhol1h4LWgiHaBlmoX6QHThucm9W4tQ7hu45M7DdHVb4foROWno5YyhKYgVy4C2SWYKkDLbWZUg42dDGRZidLZUPPHvQkiNB7IzRCmiuC7Pz/SU/eB1EqDVG1FKtpWDbKAOyOJCZLOFbdVEHVSJHdfpVQZmEL7ul/9ljTjZNKSi2YyyazusdBTEaUv965LOqpcDInJRewYvaWKvwtSQhjQ8qQCyNBvY8OEp8Z5CArxJVQZ2BwnlkktfkbXYOp4zjS4jn7uEtTR2JCvl2rnmgrT18vRqdwwPV4KnzP41STrpkRP1Esl3Dh2dWok7+ype0fkK9lk6Nf1OYQ+wRnDzP10nHnr2ttCXwSNeuBZXX+beZkuqd5CVZ5X07kRcuWSYa0mjA0qrPSlgMTAxtio7d6RKDJVQEWNynpeT5eHY69FAd6St1om77AkNjjUYYKY1S5ojrPVqoTBJdER5SbS0Zcmh8og7Wx9M50UpOgarURACpghxqlD3hwsKUQIrTxiBUh+sbHbdTJyle1yvVZHWWRoMyKEDrdt6xuk/sdDdSAC44McWh+TUcjBcNCplMGQNxt/ySFDY8ljGHQsJuIx/JGBoKY5vCXFZ8fWx9onUwYptY22+XusOQyH3UeQOeT0hPVfVLgr7CWHYWe7mcw2V0aGOvox/6bS7etF/gWcznXuYY1g45JomRICCTaIRxyGUfdK4dS4rTAUrxKxVtnBhh576r5LRhcaIWIm1B1jsr8UQMNkJEgNyh5C5CtW0U43DMOwbIvo6MPr7pmnRJywXBi01lQTKkNNY9odlhR9a4TnrAwnQkUI383xQ4x6F8hqfaIRRfoVSU80Oc0+7V1gtcsTnMXuCmNqMVdh9y7PYgvbdbPgnw//g6nTtv+ax9gzpe19wfrQY1t91rtKGJ/ZBYZor6LDMtz0Lw1zQgDELi8wa5XCVNpbW/Am0/7z1nPAYXh8oLgjW1zXpfRTgbky7M8QS8dQ466d+it8bi+VjuFD63LMsZCmQheIWJuyVeqvLTTM2adxBC+BOfqwh48mA7hNq/AEL4F5+4b9LcnqYpNA90Uz5LR6dUO7PTh9/jAQbLVZnJiDSe/SOMpibAtmaMzYSp17l8ZZiv2KjcrA7AoY4gv7mpLenmX4qYn2tvG8R9eeZcWcrYv+Xf4ZwNT0ru6N6ujQywWItW/Gew6eKKF+GoiKqTY6OMj6dVMHcfafTPFRiiG7wY1+e1QKcyJWdBSK9QjT7/4tt3zy3+5R99kypcLRFTzNgKgq8TA6AF06l6RpY8TZmYmFOhMTOCFvh3SSpFa23MeHy47MGIRI0/720fNg//DCoag52da1D43hcWYZHS37eyafiA2Hn47GdG+zlQzhxfzhht8+4NV6IjgxBvD+3HoEwXVzfmCcHLFtjEZM05iObRUZpv4Zbh6DFJ0Ua3V5TmuMm4Lv0ivqwkzliMDkhBjkFI0s8LL2XkjnNuoIUl0hAbC1qKvhbNAw2YCAB+e64NSTJQVBAs4aESWD8Xt6N5YComiDRW0SQ/+F5rPBcSlSivDyad7tpeYa1ScxrF7I4R4wBA3dybX4sjTeaKTJmHcTpXZSzKRJJ2QCTMs1nVg4PwMjI4o1w5rs7hEE57ks41CzmvLSNqtkG/CWre2vUluIfydoR9F+xBwgxNrpUM+WC6ef9crx/cFg4HvOav1zSnnwOzf8cixBwFcC0OlRrTDKtsr3YXj4rvmsipVU5w8Yl/qa9gFkMogOS6zgTtpTT4ZinWwMsLl/LkUUivZ1M7ifAtwdj+yV/wWwZrGBNY8gFL0hw8GRzQzqC51GwktGEdN9tgez8TOCOlr4EjKk6/RnyXAklS4E8FL0HiCIbPG+/Apw5mx5Qj4+KeNT0uM/bG56UA8M2+UtCsD1GZOpjmhqpZzAjxy+c8NOxg6aosad0Qk6imRZFzIgTc/3SXXDRbZptAR/wdkh6yA++Cs6KPgOMFX7jyoMmbwzDECJfT8yncKtpsR9lKp9brZrB1ylHoU4nWx6U9TR3JDwAKUKrMUjM43E00yGuyfVNEJsHldLYF6gb0v8iA+8aAapo1+729YAiLyQnyFUkXvIQguM5Fwz8dDdAodV4VB0tTvA2feQ4Ifo/J9OqN3arxeibE7uBvCS0BogOFm0IzAedHYQv4GuLyDfb2tj3dBgRrqXJrraHQCm5ajhGMUCQ9IQ67fil7hP8bC1c1FHe+O9RJjU1uOk09TI8OS0DUaVBtS+jFuuo0BRvI81UwDNl2QP0yuLj47VzTtYoxwQOS5Rw1ikn8kSGdQdhuY1uN6SowRFZxj2Bj2hHTWMRdCE0rst6oHhtJKmTgqh3O8yy6QhXcmDOHB6QKnbQHGW3IVv8cQSHgOdAaevOH3SDIXFO4btRvCQHV2CszaRmWGxYoPATt9zcqELyHPAPJ8tREJgsgKy/eB4Hi6Sw4GymLc6QIwsFdl0fxqej4Fvyy1DTfOv60t26HqQDUZOdm+Kz9xWS89ECy/rq+gjd0rAt8FH2EX/wmx4UeTJkS5H7cMvZlkpuLQr97GOBtXCBQHfXux4tkXpijBjs7PSytkXliIkuCXb9Tg/DiO5CF6Gs9jGt6lLCLvsy6GXGZF7E12Byjg7XcHmLTP2aTwCxoWYuMLdbmBo4p86A/z84/ZWvVyEh7E7is1UCthjnz6z8PKQ79XIHR+YEhDaTnzBEw98t/WP8+gcN576BccSd0LNd+vpXGP40y+O92q/FhZ4kvZPP0/Nyyzs5ebKVIo+pqzQA2G8Rby4Live7JILbh6Qf76Yvkq/0Zxk8kurc1hPLY6VSetXyFjQk8OkOGftE5LT9SG5Jrt6/2UIWSDDqf87dJteIIN7ZdZN7TDzF43wz3v1NVczVGqOpYj1FWnTr8LzVGCh7mlZ7i8rG3pm980Id/lSSTPdyA/vt9B2OgpjEZPNZ8kfuoiy9QFHjOkHZhbQf6lTA5nBTl6jUz5ok3TNFyKhcpv4oAZus0ue3GOckwcKGI2jinxu/5Y8yhvjpXoDV440WRrNlgc0i7kldd6azeGxNF51l1tC8GP02nVyVHBok5aearzOWQY8vBNbO7SzMW6UOC1ueptvQJrBy+w3TM/0LGgsmt7SRoYGPMvCatPb6BW3eFX6ZTvrVUY4huQKvShDamI39qF0EsK4XXMQc2mXT6j06175yLmSZ0Knz4JLav6EGmSmLPucuhfugvunMkFwRqRPs3icYqoxjMT9UVx0LV63Np4yx8gsVqmufgbDpJQrE1ulv26jvxoKDENy5j1p9ygZpslzoHRRDMuHB6dPxdXd55y0Aq2UPa+s7Bn4eNWRwkRSO1TSFnkVjlM7q2TmH2Zqzymw9B97emRjAOi3LV84l07qNlz05XplGSnDTO+lFkxuyOTc819kP43Bdb3kJYjpSc7ly6wabO3vJaoN3Tjyy4LhFVL+1PCi2B1mfBiCYO29LucSJ1YbT4S5ZD8OS/cYOf7AMnHpzkpRpjXwnejoLg8fubTY7kE76evOqqGdjx8RpJfdiQSH3dz9NzpO4lUUTL0MThCt4slxtHHnu6obrm6/0X3xQt/Y8CebvwDl/O/lfhqTPiD+7xmmXWJjvpqhkUaR/j1H+g1fr99EhQc3TtvHBD1AkPwbOrB6fjHDZAHHOX77D/BpCwy3yT3CfyDKtMjNQKRXH0zkefr4m+dyTCONwvOzDPqeDGnreqOPYps/jyI6HemDdoXxyxarGrZX81NjlbtiMV/Zye6IcBlSeF/3T0Tqit2Xx/kWwbDjDT+ypGrJFT7gYriJJTubhoI6aSxncjnk2xm5P7d2hDIXhIfLl0d35+SRXAp8WwY61+N830JU1U/28+PVyZaWssbVGGnLG6YVTDaz8fbEY1RhvNiOZ5tJkC6zMA3KkZAfxpk3seDwNX0viOLR5rLk7ISj7+VlM4qjwEs3xG+Sa396rVgwThrTtgYAy2aegPEOfBQAGBd/KCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgolPAfro1+90bNc08AAAAASUVORK5CYII=" id="icons">Bakhtiyarpur College of Engineering, Patna,</p></div>
        <div id="ab"><h id="credits"><u>Credits:</u></h><BR><P><img id="icons" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAdVBMVEX///8AAAD6+vrb29vr6+vh4eGWlpYVFRWioqK2trb8/PxjY2Nra2sEBAT4+PiIiIh0dHRZWVnBwcEkJCQqKiqlpaVHR0fQ0NBnZ2eurq4xMTEbGxsgICBdXV3l5eU1NTV8fHyAgICQkJBBQUFPT0/U1NTFxcXmPlVpAAAEqklEQVR4nO2da3uiMBBGA0iFVAQvqPVSrbr9/z9xQWvFEKLdOhnIvudTW3mMp4nkwiQjBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4BDy5hf/3xnKr7eSsvH9eZDv4ygdjGbLlfc0kvV2tsnSaPzObSeGcTZ5npiGyW48ZHIr21KQkdpdyAKmxhqOTuUntHqntx+F1u18MUxpzRRS3241ShFMrQp63jSw6OdLEVv2K4mVfoSUnEHQ83JLdsU/Mie/v2goSozsfBd5muiZ2I5iwFGDJUWpFm43Uvi276JVpj69orDbD6qk5O1UhqyCnkc/uhkxG46oBQNmQfqbjZ3ZhImMVnDI7VdAO1/k6+wvJMTdPn8jTYibKWdvf2FCWIXyndvuBOXy1Jhb7sSY0JBnXqgSERryjkkvpISG/LfSkgGh4cZcdKL98elQDk1n9wrfjYNeOP4g1Cs4EBpuzUWnlwHVcF/UIlk1LgkN18aS55Ur54QNdUVo2Pyhk5NgZbTxh8qvgNDQVOyLci1h38ljuJbqk807X9pfQLccJQ2l1gcadJXIY1hfXKAbpvMY1mfeft8pw5Vm0kY2mWQx7GtKNfeeXTP0erWre1SChIa+oVR1WirFp2OGm5rhwDHDoru47fEJV8eZDLfKU/aDc4bVdlrILugE2Qy92XWZr3eknOVzGRZK6fnpXki8YsVWhyWT42JEvjDOZ/i9cEEcycBah1aAIQxhyA+LoWH9t+mV099Xi30ex3G+X/wgEJ7H0Cs/aJXrQlR0+8Lu+4VDXn3Y+Z4/ujrH1ErVJ7PXCbASxvT29edBffFqfmyzoRqOdTVUTM6GR33kz0PBHu03LL6Bb0K3w6CYk/QeCCtrv6HXN8Xf7e8O+tpvuOwZgn6kiLpeh3m/vi53y8edWmy7YXQ3utBfdrsOH/h8824bPoK5X3TB0FyJLhia1yKdMDSObTpiaI6hNAYjd8SwuOLzLcqbtvq+dt7Qzy+d3jTXVacpCqADhlLMq49Pp2F9a6EpHqcDhmUo7s3ALKh9LU3PVztgWAvTWA9VQ98wNG29oRSz2tBajagyRnK03lB8ahau1E8tO22o6wnmyjWdNtT25moz7bShdli9c8lQO+Z8dclQO1xxylC70gRDGMIQhjCEIQxhCEMYwhCGzzBcOG+obtCGIQxhCEMY0hrSHcFj2n/ohqFxP75FQzpBw5kKNg0TQkNTLLY9wzWhoSmizp7hltCwOVIpqW11/uFzi9rBQc3tZUYnaDj4MvHSl1uuO/Q+lFe0oTIH5aKX5jpUtxw/E7rNyz+B8tA998/6uhuBbQXK89rcP3OP+xDhM5TnJkradB2PkHhT0tOgM6bDyquGtOeXxi0wpPwa/g/nCLfgbEjis6DdP89bun8mO3uXGJJnDnA+N4Jgzm9hJYFXyJWjxLOSo4Q7z4wl+HIFWYNnnphbS0wm2XJ2WRIU7uddKxWlbzl33pAhBeI5/yH1LYcr/+E5h2VoLYclU77VolifPA9pFnPlIb1S5pLNNrPt5IkNdrU8jAatyCWrNB/5m4TA38jG9wcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAALrOXwogXskX6iywAAAAAElFTkSuQmCC" ><a href="https://www.linkedin.com/in/sundaram-kumar-jha-4a1675287?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BMwBu%2F871RPCYsCiGDTF8mw%3D%3D">SUNDARAM KUMAR (23EEE42)</a><BR><BR><img id="icons" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAdVBMVEX///8AAAD6+vrb29vr6+vh4eGWlpYVFRWioqK2trb8/PxjY2Nra2sEBAT4+PiIiIh0dHRZWVnBwcEkJCQqKiqlpaVHR0fQ0NBnZ2eurq4xMTEbGxsgICBdXV3l5eU1NTV8fHyAgICQkJBBQUFPT0/U1NTFxcXmPlVpAAAEqklEQVR4nO2da3uiMBBGA0iFVAQvqPVSrbr9/z9xQWvFEKLdOhnIvudTW3mMp4nkwiQjBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4BDy5hf/3xnKr7eSsvH9eZDv4ygdjGbLlfc0kvV2tsnSaPzObSeGcTZ5npiGyW48ZHIr21KQkdpdyAKmxhqOTuUntHqntx+F1u18MUxpzRRS3241ShFMrQp63jSw6OdLEVv2K4mVfoSUnEHQ83JLdsU/Mie/v2goSozsfBd5muiZ2I5iwFGDJUWpFm43Uvi276JVpj69orDbD6qk5O1UhqyCnkc/uhkxG46oBQNmQfqbjZ3ZhImMVnDI7VdAO1/k6+wvJMTdPn8jTYibKWdvf2FCWIXyndvuBOXy1Jhb7sSY0JBnXqgSERryjkkvpISG/LfSkgGh4cZcdKL98elQDk1n9wrfjYNeOP4g1Cs4EBpuzUWnlwHVcF/UIlk1LgkN18aS55Ur54QNdUVo2Pyhk5NgZbTxh8qvgNDQVOyLci1h38ljuJbqk807X9pfQLccJQ2l1gcadJXIY1hfXKAbpvMY1mfeft8pw5Vm0kY2mWQx7GtKNfeeXTP0erWre1SChIa+oVR1WirFp2OGm5rhwDHDoru47fEJV8eZDLfKU/aDc4bVdlrILugE2Qy92XWZr3eknOVzGRZK6fnpXki8YsVWhyWT42JEvjDOZ/i9cEEcycBah1aAIQxhyA+LoWH9t+mV099Xi30ex3G+X/wgEJ7H0Cs/aJXrQlR0+8Lu+4VDXn3Y+Z4/ujrH1ErVJ7PXCbASxvT29edBffFqfmyzoRqOdTVUTM6GR33kz0PBHu03LL6Bb0K3w6CYk/QeCCtrv6HXN8Xf7e8O+tpvuOwZgn6kiLpeh3m/vi53y8edWmy7YXQ3utBfdrsOH/h8824bPoK5X3TB0FyJLhia1yKdMDSObTpiaI6hNAYjd8SwuOLzLcqbtvq+dt7Qzy+d3jTXVacpCqADhlLMq49Pp2F9a6EpHqcDhmUo7s3ALKh9LU3PVztgWAvTWA9VQ98wNG29oRSz2tBajagyRnK03lB8ahau1E8tO22o6wnmyjWdNtT25moz7bShdli9c8lQO+Z8dclQO1xxylC70gRDGMIQhjCEIQxhCEMYwhCGzzBcOG+obtCGIQxhCEMY0hrSHcFj2n/ohqFxP75FQzpBw5kKNg0TQkNTLLY9wzWhoSmizp7hltCwOVIpqW11/uFzi9rBQc3tZUYnaDj4MvHSl1uuO/Q+lFe0oTIH5aKX5jpUtxw/E7rNyz+B8tA998/6uhuBbQXK89rcP3OP+xDhM5TnJkradB2PkHhT0tOgM6bDyquGtOeXxi0wpPwa/g/nCLfgbEjis6DdP89bun8mO3uXGJJnDnA+N4Jgzm9hJYFXyJWjxLOSo4Q7z4wl+HIFWYNnnphbS0wm2XJ2WRIU7uddKxWlbzl33pAhBeI5/yH1LYcr/+E5h2VoLYclU77VolifPA9pFnPlIb1S5pLNNrPt5IkNdrU8jAatyCWrNB/5m4TA38jG9wcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAALrOXwogXskX6iywAAAAAElFTkSuQmCC"><a href="https://www.linkedin.com/in/vishal-kumar-7b2716299?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B5GAvUqtqR3Gvs%2F5yldqoZA%3D%3D">VISHAL KUMAR (23EEE31)</a><BR><BR><img id="icons" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAdVBMVEX///8AAAD6+vrb29vr6+vh4eGWlpYVFRWioqK2trb8/PxjY2Nra2sEBAT4+PiIiIh0dHRZWVnBwcEkJCQqKiqlpaVHR0fQ0NBnZ2eurq4xMTEbGxsgICBdXV3l5eU1NTV8fHyAgICQkJBBQUFPT0/U1NTFxcXmPlVpAAAEqklEQVR4nO2da3uiMBBGA0iFVAQvqPVSrbr9/z9xQWvFEKLdOhnIvudTW3mMp4nkwiQjBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4BDy5hf/3xnKr7eSsvH9eZDv4ygdjGbLlfc0kvV2tsnSaPzObSeGcTZ5npiGyW48ZHIr21KQkdpdyAKmxhqOTuUntHqntx+F1u18MUxpzRRS3241ShFMrQp63jSw6OdLEVv2K4mVfoSUnEHQ83JLdsU/Mie/v2goSozsfBd5muiZ2I5iwFGDJUWpFm43Uvi276JVpj69orDbD6qk5O1UhqyCnkc/uhkxG46oBQNmQfqbjZ3ZhImMVnDI7VdAO1/k6+wvJMTdPn8jTYibKWdvf2FCWIXyndvuBOXy1Jhb7sSY0JBnXqgSERryjkkvpISG/LfSkgGh4cZcdKL98elQDk1n9wrfjYNeOP4g1Cs4EBpuzUWnlwHVcF/UIlk1LgkN18aS55Ur54QNdUVo2Pyhk5NgZbTxh8qvgNDQVOyLci1h38ljuJbqk807X9pfQLccJQ2l1gcadJXIY1hfXKAbpvMY1mfeft8pw5Vm0kY2mWQx7GtKNfeeXTP0erWre1SChIa+oVR1WirFp2OGm5rhwDHDoru47fEJV8eZDLfKU/aDc4bVdlrILugE2Qy92XWZr3eknOVzGRZK6fnpXki8YsVWhyWT42JEvjDOZ/i9cEEcycBah1aAIQxhyA+LoWH9t+mV099Xi30ex3G+X/wgEJ7H0Cs/aJXrQlR0+8Lu+4VDXn3Y+Z4/ujrH1ErVJ7PXCbASxvT29edBffFqfmyzoRqOdTVUTM6GR33kz0PBHu03LL6Bb0K3w6CYk/QeCCtrv6HXN8Xf7e8O+tpvuOwZgn6kiLpeh3m/vi53y8edWmy7YXQ3utBfdrsOH/h8824bPoK5X3TB0FyJLhia1yKdMDSObTpiaI6hNAYjd8SwuOLzLcqbtvq+dt7Qzy+d3jTXVacpCqADhlLMq49Pp2F9a6EpHqcDhmUo7s3ALKh9LU3PVztgWAvTWA9VQ98wNG29oRSz2tBajagyRnK03lB8ahau1E8tO22o6wnmyjWdNtT25moz7bShdli9c8lQO+Z8dclQO1xxylC70gRDGMIQhjCEIQxhCEMYwhCGzzBcOG+obtCGIQxhCEMY0hrSHcFj2n/ohqFxP75FQzpBw5kKNg0TQkNTLLY9wzWhoSmizp7hltCwOVIpqW11/uFzi9rBQc3tZUYnaDj4MvHSl1uuO/Q+lFe0oTIH5aKX5jpUtxw/E7rNyz+B8tA998/6uhuBbQXK89rcP3OP+xDhM5TnJkradB2PkHhT0tOgM6bDyquGtOeXxi0wpPwa/g/nCLfgbEjis6DdP89bun8mO3uXGJJnDnA+N4Jgzm9hJYFXyJWjxLOSo4Q7z4wl+HIFWYNnnphbS0wm2XJ2WRIU7uddKxWlbzl33pAhBeI5/yH1LYcr/+E5h2VoLYclU77VolifPA9pFnPlIb1S5pLNNrPt5IkNdrU8jAatyCWrNB/5m4TA38jG9wcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAALrOXwogXskX6iywAAAAAElFTkSuQmCC"><a href="https://www.linkedin.com/in/yash-raj-b2070b208?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B%2B%2FZNlWw0TOquuuJnFx3XUw%3D%3D">YASH KUMAR (23IOT24)</P></a>
        <div><img id="dev" src="https://media.licdn.com/dms/image/D4E03AQGUXlWOpesh_Q/profile-displayphoto-shrink_400_400/0/1712782450164?e=1720656000&v=beta&t=v8WwYMZBJbpzh3watfpet7P97CM2Ak925EvuhdYDsTQ">
            <img id="dev" src="https://media.licdn.com/dms/image/D4D03AQHIuXmahQq38g/profile-displayphoto-shrink_400_400/0/1714026956519?e=1720656000&v=beta&t=m_kuQqvO_3K-7emnXuyylRg_ND1yxOJ4Y47m8GnD0dc">
            <img id="dev" src="https://media.licdn.com/dms/image/D5603AQFwcA_Lo4KFkg/profile-displayphoto-shrink_400_400/0/1705651365759?e=1720656000&v=beta&t=YDUhWiORWeBX860cLYCyXFZictRsLKX-riqgo-WWm5U"></div>
        </div>
    </section>
    <script>
        let p=0;
        const img=document.getElementById("ph");
        const l=document.getElementById("left");
        const r=document.getElementById("right");
        let a='https://media.licdn.com/dms/image/D4E22AQFD3cdpRTSXDA/feedshare-shrink_800/0/1715012966726?e=1717632000&v=beta&t=m6jIkK8tWJpP0p5TY6esLY9H3nhoohah89BmrIiC8c8';
        let b='https://media.licdn.com/dms/image/D4E22AQET86hrxLq43A/feedshare-shrink_800/0/1715013026525?e=1717632000&v=beta&t=49F8o7nRtPj4imDXOy38j7AOgxV6m8qMQHEwlvGCuEs';
        let c='https://media.licdn.com/dms/image/D4E22AQHYd4DAgJGj1w/feedshare-shrink_800/0/1715013002964?e=1717632000&v=beta&t=r_pluh3XtOjIsgqpXj9Xy32kR_s9oNTfbgTJAqfG4p8';
        let d='https://media.licdn.com/dms/image/D4E22AQHqtG8njN6Iyw/feedshare-shrink_800/0/1715013291130?e=1717632000&v=beta&t=nYvfMyIZlf8XxJwgLBk2i75QkfpW1Lgjms57HWdVcBg';
        img.src='https://media.licdn.com/dms/image/D4E22AQFD3cdpRTSXDA/feedshare-shrink_800/0/1715012966726?e=1717632000&v=beta&t=m6jIkK8tWJpP0p5TY6esLY9H3nhoohah89BmrIiC8c8';
        l.addEventListener('click',function(){
            if(p>0){p--;}
            else{
                p=3;
            }
                switch(p){
                    case 0:img.src=a;break;
                    case 1:img.src=b;break;
                    case 2:img.src=c;break;
                    case 3:img.src=d;break;
                }
            })
        r.addEventListener('click',function(){
            if(p<4){p++;}
            else{
                p=0;
            }
                switch(p){
                    case 0:img.src=a;break;
                    case 1:img.src=b;break;
                    case 2:img.src=c;break;
                    case 3:img.src=d;break;
                }
            })
    </script>
</body>
</html>