<!DOCTYPE html>
<html lang="ko">
<head>
  <?php
  require("defaulttool.php");
   ?>
   <style>
   .skill
   {
     height:200px;
     background-color: pink;
   }
   .font
   {
     font-size:32px;
   }
   .dddd
   {
          float:left;
   }
   .font1{
     font-size:17px;
   }

   .dd
   {
     float:right;

   }
   @media(max-width:1000px)
   {
     .hiddenMobile
     {
       display:none;

     }
   }
   .fix
   {
     position:fixed;
     z-index: 6;
   }
   @media(min-width:1000px)
   {
     .hiddenPC
     {
       display:none;

     }
   }
   </style>
</head>

  <body>
    <div class="test1" style="position:fixed ; z-index: 7 ; background-color:white">
      <?php
      require("default.php");
       ?>
    </div>
    <div class="test2">
      <?php
      require("default.php");
       ?>
    </div>

  <div class="container" >

    <div class="row mx-auto"style="width: 100%;">
      <div class="col-lg-2 " style="background-color:pink;"><!-- 네비바 시작부분--->
        <ul class="nav flex-column hiddenMobile "><!--네비바 pc버전-->
          <li class="nav-item">
            <a class="nav-link active" href="#">프로필</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul><!--네비바 pc버전끝-->

        <ul class="nav justify-content-center hiddenPC fix" style="background-color:white;"><!--네비바 모바일-->
          <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul><!--네비바 모바일버전끝-->
        <ul class="nav justify-content-center hiddenPC " style="background-color:white; visibility:hidden;"><!--네비바 모바일-->
          <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul><!--네비바 모바일버전끝-->
      </div>
      <div class="col-lg-10 "  >
          <div class="col-md-6" style="float:left">
              <img src="./image/soulmaster.png"  class="img-fluid mx-auto d-block offset-md-1" alt="Responsive image"
              style="margin-left: auto; margin-right: auto; display: block;">
          </div>
          <div class="col-md-6 dd">
            <table class="table table-hover" >
                    <tr  class="ddd font">
                      <td colspan="2" class="text-center">
                        프로필
                      </td>
                    </tr>
                    <tr class="ddd font1">
                      <td class="ddd ">
                        직업계열
                      </td>
                      <td class="ddd ">
                        시그너스
                      </td>
                    </tr>
                    <tr class="ddd font1">
                      <td class="ddd ">
                        무기
                      </td>
                      <td class="ddd ">
                        한손검,두손검
                      </td>
                    </tr>
                    <tr class="ddd font1">
                      <td class="ddd ">
                        주스텟
                      </td>
                      <td class="ddd ">
                        str
                      </td>
                    </tr>
                    <tr class="ddd font1">
                      <td class="ddd ">
                        이름
                      </td>
                      <td class="ddd ">
                        소울마스터
                      </td>
                    </tr>
                  </table>
          </div>
          ㄹㅇㅇㄴㄹㄴㄹㄴㄹㄴㄹㄴㄹ
      </div>
    </div>
</div>
     <?php
     require("footer.php");
      ?>


       </body>
     </html>
