
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
   <meta name="author" content="code edit">
    <meta name="theme-color" content="#2f2d41">
  <!-- Created by Niush Sitaula -->
        <title>GIG SLOTTHAI</title>
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
  <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="apple-touch-icon" href="favicons/5486-dist-code_logo.png">
    <link rel="shortcut icon" href="favicons/4365-dist-code_logo.png" type="image/x-icon">
    <link rel="manifest" href="manifest.json">
 
      <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/card.css">
         <style media="screen">
      body {
        
        margin: 0;
        padding: 0;
      }
      #message {
        
        max-width: 1000px;
        margin: 10px auto 16px;
        padding: 32px 24px;
        border-radius: 10px;
      }
      #message h2 {
        color: #ffa100;
        font-weight: bold;
        font-size: 30px;
        margin: 0 0 8px;
      }
      #message h1 {
        font-size: 22px;
        font-weight: 300;
        color: rgba(0, 0, 0, 0.6);
        margin: 0 0 16px;
      }
      #message p {
        line-height: 140%;
    
        font-size: 14px;
      }
      #message a {
        display: block;
        text-align: center;
        background: #039be5;
        text-transform: uppercase;
        text-decoration: none;
        color: white;
        padding: 16px;
        border-radius: 4px;
      }
      #message,
      #message a {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
      }
      #load {
        color: rgba(0, 0, 0, 0.4);
        text-align: center;
        font-size: 13px;
      }
      @media (max-width: 600px) {
        body,
        #message {
          margin-top: 0;
          box-shadow: none;
        }
      }
      table {
        margin-top: 10px;
        border: 2px solid black;
        border-collapse: collapse;
        width: 100%;
      }

      table td {
        border: 1px solid black;
      }

      table td.shrink {
        white-space: wrap;
        font-size: 19px;
        padding: 5px;
        background-color: yellow;
      }
      table td.shrink_context {
        white-space: wrap;
        font-size: 19px;
        padding: 5px;
        background-color: rgb(0, 255, 106);
      }
      table td.shrink_top {
        white-space: nowrap;
        background-color: black;
        color: white;
        font-size: 25px;
      }
      table td.expand {
        width: 99%;
        white-space: wrap;
        font-size: 19px;
        padding: 5px;
      }
      table td.expand_top {
        width: 99%;
        white-space: wrap;
        background-color: black;
      }
      tr:hover {
        background-color: gray;
      }

      button {
        background-color: #07AF0E; /* Green */
        border: none;
        color: white;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 25px;
        border-radius: 5px;
        -webkit-transition-duration: 0.9s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
      }

      button:hover {
        background-color: #FF5F00;
        color: black;
      }
      #keep, #logouts, #logins, #tb1{
          display: none;
      }

        * {
  margin: 0;
  box-sizing: border-box;
}

.header__left img {
  height: 40px;
}

.user__avatar {
  border-radius: 50%;
  width: 45px;
}

.header {
  padding: 15px 20px;
  display: flex;
  justify-content: space-between;
  position: sticky;
  background-color: white;
  z-index: 100;
  top: 0;
  box-shadow: 0 5px 8px -9px rgba(0, 0, 0, 0.75);
}

.header__left {
  display: flex;
  align-items: center;
  justify-content: space-evenly;
}

.header__input {
  display: flex;
  align-items: center;
  background-color: #eff2f5;
  padding: 10px;
  margin-left: 10px;
  border-radius: 999px;
}

.header__input input {
  border: none;
  background-color: transparent;
  outline-width: 0;
}

.header__middle {
  display: flex;
  flex: 1;
  justify-content: center;
}

.header__option .material-icons {
  font-size: xx-large;
  color: gray;
}

.header__option:hover .material-icons {
  color: #2e81f4;
}

.header__option {
  display: flex;
  align-items: center;
  padding: 0 30px;
  cursor: pointer;
}

.header__option.active .material-icons {
  color: #2e81f4;
}

.header__option.active {
  border-bottom: 4px solid #2e81f4;
}

.header__option:hover {
  background-color: #eff2f5;
  border-radius: 10px;
  align-items: center;
  padding: 0 30px;
  border-bottom: none;
}

.header__info {
  display: flex;
  align-items: center;
}

.header__info h4 {
  margin-left: 10px;
}

.header__right {
  display: flex;
  align-items: center;
}

.header__right .material-icons {
  color: gray;
  margin: 0 10px;
}

.header__right .material-icons:hover {
  cursor: pointer;
}

/* sidebar  */

.sidebarRow {
  display: flex;
  align-items: center;
  padding: 10px;
  cursor: pointer;
}

.sidebarRow:hover {
  background-color: lightgray;
  border-radius: 10px;
}

.sidebarRow h4 {
  margin-left: 20px;
  font-weight: 600;
}

.sidebarRow .material-icons {
  font-size: xx-large;
  color: #2e81f4;
}

/* story */
.story {
  position: relative;
  background-repeat: no-repeat;
  background-size: cover;
  width: 120px;
  height: 200px;
  box-shadow: 0px 5px 17px -7px rgba(0, 0, 0, 0.75);
  border-radius: 10px;
  margin-right: 10px;
  transition: transform 100ms ease-in;
  cursor: pointer;
}

.story:hover {
  transform: scale(1.07);
}

.story__avatar {
  margin: 10px;
  color: blue;
}

.story h4 {
  position: absolute;
  bottom: 20px;
  left: 20px;
  color: white;
}

.storyReel {
  padding: 10px 0;
  display: flex;
}

.main__body {
  display: flex;
}


.feed {
  flex: 1;
  padding: 30px 100px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  
}

.sidebar {
  padding: 25px 10px;
  flex: 0.33;
}

/* message sender */

.messageSender {
  display: flex;
  margin: 0px 20px 0px 20px;
  flex-direction: column;
  background-color: #FFE00050;
  border-radius: 30px;
  box-shadow: 0px 5px 7px -7px rgba(0, 0, 0, 0.75);
  width: 100%;
}

.messageSender__top {
  display: flex;
  align-items: center;
  border-bottom: 1px solid #eff2f5;
  padding: 15px;
}

.messageSender__top form {
  flex: 1;
  display: flex;
}

.messageSender__top form input {
  flex: 1;
  outline-width: 0;
  border: none;
  padding: 10px 10px;
  margin: 0 10px;
  border-radius: 999px;
  background-color: #eff2f5;
}

.messageSender__bottom {
  display: flex;
  justify-content: space-evenly;
}

.messageSender__option {
  padding: 8px;
  display: flex;
  align-items: center;
  color: gray;
  margin: 5px;
}

.messageSender__option h3 {
  font-size: medium;
  margin-left: 10px;
}

.messageSender__option:hover {
  cursor: pointer;
  background-color: #eff2f5;
  border-radius: 20px;
}

/* post */

.post {
  width: 100%;
  margin: 15px 40px 0px 40px;
  border-radius: 15px;
  background-color: #00000090;
  box-shadow: 0px 5px 7px -7px rgba(0, 0, 0, 0.75);
}

.post__image img {
  width: 100%;
}

.post__top {
  display: flex;
  position: relative;
  align-items: center;
  padding: 15px;
}

.post__avatar {
  margin-right: 10px;
}

.post__topInfo h3 {
  font-size: medium;
}

.post__topInfo p {
  font-size: small;
  color: gray;
}

.post__bottom {
  margin-top: 10px;
  margin-bottom: 10px;
  padding: 5px 25px;
}

.post__options {
  padding-top: 10px;
  border-top: 1px solid lightgray;
  display: flex;
  justify-content: space-evenly;
  font-size: medium;
  color: gray;
  cursor: pointer;
  padding: 15px;
}

.post__option {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 5px;
  flex: 1;
}

.post__option p {
  margin-left: 0px;
}

.post__option:hover {
  background-color: #eff2f5;
  border-radius: 10px;
}

@media (max-width: 768px) {
  .sidebar {
    display: none;
  }

  .header__input input {
    display: none;
  }

  .header__middle {
    display: none;
  }

  .header__info {
    display: none;
  }

  .widgets {
    display: none;
  }

  .feed {
    margin-top: 20px;
    width: 100%;
    padding: 0;
  }

  .story h4 {
    font-size: 10px;
  }

  .story img {
    width: 40px;
  }
}

@media (min-width: 320px) {
  .storyReel {
    width: 100%;
    overflow-x: scroll;
  }
}

@media (min-width: 769px) and (max-width: 1440px) {
  /* CSS To Target 767 px width of screen */

  .feed {
    width: 50%;
    padding: 10px 50px;
  }
}
#page1{
    display: none;
}


    </style>
</head>
<body>
      <div class="snowflakes" aria-hidden="true">
    <div class="snowflake">
      * 
    </div>
    <div class="snowflake">
      *
    </div>
    <div class="snowflake">
      ❤
    </div>
    <div class="snowflake">
      ❉ 
   </div>
    <div class="snowflake">
      ❋
    </div>
    <div class="snowflake">
      ❊  
    </div>
    <div class="snowflake">
      ❄
    </div>
    <div class="snowflake">
      ❅
    </div>
    <div class="snowflake">
      ✰
    </div>
    <div class="snowflake">
      ❁
    </div>
    <div class="snowflake">
     ❄
    </div>
    <div class="snowflake">
      ❁
    </div>
    <div class="snowflake">
      ❄
    </div>
    <div class="snowflake">
      ❅
    </div>
    <div class="snowflake">
      ✰
    </div>
    <div class="snowflake">
      ❃
    </div>
    <div class="snowflake">
      ✹
    </div>
    <div class="snowflake">
      ❆
    </div>
    <div class="snowflake">
      ✹
    </div>
    <div class="snowflake">
      ✰
    </div>
     <!--nav bar   -->
   <div> 
   <ul>
   <li class="dropdown bg-d">
    <a href="javascript:void(0)" class="dropbtn">เมนู</a>
    <!--div class="dropdown-content">
          <a href="abi.html">abi</a> 
           <a href="pacman.html">doggy</a>
                             <a href="sohan.html">มัมมี</a>
                                <a  href="gothamxo.html">พีจีเพย์</a>                              <a href="web3.html">พีจีเพย์88</a>
                                  <a href="toy.html">ทอย</a>
                                  <a href="profile.html">club</a>
                                  <a href="at.html">ออโต้โพส</a>
                                  <a href="gig.html">การตลาด</a>
                                  <a href="ben.html">bensin</a>
        </div-->
      </li>
    </ul>
  </div>
    <!--  end nav  --> 
       <div id="page1">    
    <div id="message">
      <center><h2>Welcome Back !</h2><p class="expand" id="displayName">Loading. . .</p></center>

      <center>
        <img
          src="img/avtar.png"
          style="border-radius: 10px;"
          width="150px"
          height="150px"
          id="profileImage"
        />
      </center>
      <center>
          <br>
        <button id="logins" onclick="login()">login</button>
        <button id="logouts" onclick="logout()">logout</button>
        <!--button onclick="sendMessage()">liff.sendMessage()</button>
        <button onclick="scanCode()">liff.scanCode()</button>
        <button onclick="openWindow()">liff.openWindow()</button>
        <button onclick="closeWindow()">liff.closeWindow()</button>
        <button onclick="shareTargetPicker()">liff.shareTargetPicker()</button-->
      </center>
      <table id="tb1">
        <tr>
          <td class="shrink_top">* Profile</td>
          <td class="expand_top">
            <button onclick="getProfile()">View raw JSON Data</button>
          </td>
        </tr>
        <tr>
          <td class="shrink">userId</td>
          <td class="expand" id="userId">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink">displayName</td>
          <td class="expand" id="displayName">Loading. . .</td>
        </tr>
        <tr>
          <td class="shrink">statusMessage</td>
          <td class="expand" id="statusMessage">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink">Email</td>
          <td class="expand" id="email">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink">pictureUrl</td>
          <td class="expand">
            <a id="pictureUrl" target="_blank">Loading . . .</a>
          </td>
        </tr>
        </table>
        <table id="keep"> 
        <tr>
          <td class="shrink_top">* LIFF Context</td>
          <td class="expand_top"></td>
        </tr>
        <tr>
          <td class="shrink_context">liff.getOS()</td>
          <td class="expand" id="getOS">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink_context">liff.getLanguage()</td>
          <td class="expand" id="getLanguage">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink_context">liff.getVersion()</td>
          <td class="expand" id="getVersion">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink_context">liff.isInClient()</td>
          <td class="expand" id="isInClient">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink_context">liff.isLoggedIn()</td>
          <td class="expand" id="isLoggedIn">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink_context">liff.getAccessToken()</td>
          <td class="expand" id="getAccessToken">
            <button onclick="getAccessToken()">show AccessToken</button>
          </td>
        </tr>
        <tr>
          <td class="shrink_context">liff.getContext()</td>
          <td class="expand" id="">
            <button onclick="getContext()">show raw JSON Data</button>
          </td>
        </tr>
        <tr>
          <td class="shrink_context">| -> type</td>
          <td class="expand" id="context_type">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink_context">| -> viewType</td>
          <td class="expand" id="context_viewType">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink_context">| -> userId</td>
          <td class="expand" id="context_userId">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink_context">| -> utouId</td>
          <td class="expand" id="context_utouId">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink_context">| -> roomId</td>
          <td class="expand" id="context_roomId">Loading . . .</td>
        </tr>
        <tr>
          <td class="shrink_context">| -> groupId</td>
          <td class="expand" id="context_groupId">Loading . . .</td>
        </tr>
      </table>
    </div>
       </div>
     <!-- end page1 --> 
     

     
     
     
    <div id="page2">
        <div class="feed">
        <!-- message sender starts -->
        <div class="messageSender">
          <div class="messageSender__top">
            <img
              class="user__avatar"
              src="img/avtar.png"
          style="border-radius: 10px;"
          width=""
          height=""
          id="profileImage"
        />
          <form method="post"> 
              <input class="messageSender__input" name="post_content" rows="7" cols="40" id="posts" placeholder="คุณคิดอะไรอยู่......" type="text"   required/>
            </form>
           
          </div>

          
        </div>
        <!-- message sender ends -->

        <!-- post starts -->
        <div class="post">
          <div class="post__top">
            <img
              class="user__avatar post__avatar"
              src="" 
              alt=""
            /><!--รูปคนโพส-->
            <div class="post__topInfo">
              <h3>Somanath Goudar</h3>
              <p>25 April at 20:30</p>
            </div>
          </div>

          <div class="post__bottom">
            <p>Message</p>
          </div>

          <div class="post__image">
            <img
              src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2Fyc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80"
              alt=""
            />
          </div>

          <div class="post__options">
            <div class="post__option">
              <span class="material-icons"> thumb_up </span>
              
            </div>

            <div class="post__option">
              <span class="material-icons"> chat_bubble_outline </span>
             
            </div>

            <div class="post__option">
              <span class="material-icons"> near_me </span>
            
            </div>
          </div>
        </div>
        <!-- post ends -->

        <!-- post starts -->
        <div class="post">
          <div class="post__top">
            <img
              class="user__avatar post__avatar"
              src="data:image/png;base64,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"
              alt=""
            />
            <div class="post__topInfo">
              <h3>Somanath Goudar</h3>
              <p>25 April at 20:30</p>
            </div>
          </div>

          <div class="post__bottom">
            <p>Post Without Image</p>
          </div>

          <div class="post__options">
            <div class="post__option">
              <span class="material-icons"> thumb_up </span>
             
            </div>

            <div class="post__option">
              <span class="material-icons"> chat_bubble_outline </span>
              
            </div>

            <div class="post__option">
              <span class="material-icons"> near_me </span>
             
            </div>
          </div>
        </div>
        <!-- post ends -->

        <!-- post starts -->
        <div class="post">
          <div class="post__top">
            <img
              class="user__avatar post__avatar"
              src=""
              alt=""
            />
            <div class="post__topInfo">
              <h3>Somanath Goudar</h3>
              <p>25 April at 20:30</p>
            </div>
          </div>

          <div class="post__bottom">
            <p>Message</p>
          </div>

          <div class="post__image">
            <img src="https://wallpapercave.com/wp/wp7357832.jpg" alt="" />
          </div>

          <div class="post__options">
            <div class="post__option">
              <span class="material-icons"> thumb_up </span>
             
            </div>

            <div class="post__option">
              <span class="material-icons"> chat_bubble_outline </span>
            
            </div>

            <div class="post__option">
              <span class="material-icons"> near_me </span>
            
            </div>
          </div>
        </div>
        <!-- post ends -->
      </div>
        
        
        
        
        
        
        
    </div>
    <!-- end page 2 -->
 <footer>
    <p id="load">Develop with ♡ by Bensin</p>
</footer>   
</div>
    <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
    <script src="js/liff-init.js?1234"></script>
    <script src="js/liff-functions.js?12345"></script>
     <script>
    async function main() {
      await liff.init({ liffId: "1656907941-LJw00vr3" })
      if (liff.isLoggedIn()) {
        document.getElementById("logouts").style.display = "block";
        
       //  window.location.replace("feed.php");
        if (!liff.isInClient()) {
            
          document.getElementById("logouts").style.display = "block"
        }
      } else {
         alert('กรุณา เข้าสู่ระบบ\n\n by แอดกิ๊ก')
              window.location.replace("profile.html");
            
       // document.getElementById("logins").style.display = "block"
      }
    }
    main()
  </script>
  </body>
</html>