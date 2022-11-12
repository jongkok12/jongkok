
<?php
   $konten = file_get_contents("https://livedraw-hongkong1.blogspot.com/");
   $pecah1 = explode("</head>",$konten);
   $pecah2 = explode("<script",$pecah1[1]);
   echo $pecah2[0];
?>
<style>
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,sub,sup,tt,var,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,caption,tbody,tfoot,thead,tr,th,td,input,textarea{border:0;font-size:12px;font-weight:400;vertical-align:top;background:#000000;outline:none;margin:0;padding:0;}
html,body{width:100%;height:100%;}
body{font:normal 12px Arial, Arial, Helvetica, sans-serif;color:#757575;text-shadow: 1px 1px #808080;}
.outerbox{-moz-border-radius:5px;-webkit-border-radius:5px 5px 5px 5px;border-radius:5px 5px 5px 5px;border:#b4b4b4 1px solid;vertical-align:top;-moz-box-shadow:0 0 2px 1px #ddd;-webkit-box-shadow:0 0 2px 1px #ddd;box-shadow:0 0 2px 1px #ddd;width:350px;padding:4px;}
.outerboxsp{-moz-border-radius:5px;-webkit-border-radius:5px 5px 5px  5px;border-radius:5px 5px 5px 5px;border:#b4b4b4 1px solid;-moz-box-shadow:0 0 2px 1px #ddd;-webkit-box-shadow:0 0 2px 1px #ddd;box-shadow:0 0 2px 1px #ddd;padding:4px;}
.resultTable{font-family:Arial;width:340px;}
.resultTable2{width:100%;margin:0;}
.bane1{width:50%;margin:0;}
table.bane1, table.bane1 th, table.bane1 td{ border:3px ridge grey}
table.bane1, table.bane1 th, table.bane1 td{ cellpadding:5px;cellspacing:5px;}
.bane{text-align:center;font-size:15px;font-weight:700;background:linear-gradient(to bottom, #bdf9a9 0%,#78d160 17%,#5bf450 50%,#3ac345 51%,#41d641 59%,#5eef4a 71%,#3cc23a 84%,#318b25 100%);color: maroon;height:25px;vertical-align:middle;border:1px solid #b4b4b4;}
.resultdrawdate{text-align:left;font-size:14px;color:#333;height:25px;vertical-align:middle;}
.resultdrawdate1{text-align:left;background-color:#000000;font-size:14px;color:#333;height:25px;vertical-align:middle;border: 1px solid #b4b4b4;}
.resultdrawdate2{text-align:right;background-color:#000000;font-size:14px;color:#333;height:25px;vertical-align:middle;border: 1px solid #b4b4b4;}
.resultprizelable{text-align:center;font-size:15px;font-weight:700;background:linear-gradient(to bottom, #bdf9a9 0%,#78d160 17%,#5bf450 50%,#3ac345 51%,#41d641 59%,#5eef4a 71%,#3cc23a 84%,#318b25 100%);color: maroon;height:25px;vertical-align:middle;border:1px solid #b4b4b4;}
.resultprizettlable{text-align:center;font-size:15px;font-weight:700;background-color:#412;color:#fff;height:25px;vertical-align:middle;}
.result5dprizelable{text-align:center;font-size:14px;background-color:#ccc;color:#000;width:11%;vertical-align:middle;}
.resulttop{font-size:26px;color:#303030;font-weight:700;text-align:center;background-color:#fff;border-color:#ccc;border-style:solid;border-width:1px;}
.resulttop1{font-size:26px;color:#ffff00;font-weight:700;text-align:center;background-color:#000000;border-color:#ccc;border-style:solid;border-width:1px;border:1px solid #b4b4b4;}
.resulttop2{font-size:26px;color:#ffff00;font-weight:700;text-align:center;background-color:#000000;border-color:#ccc;border-style:solid;border-width:1px;border:1px solid #b4b4b4;}
.resulttop3{font-size:26px;color:#ffff00;font-weight:700;text-align:center;background-color:#000000;border-color:#ccc;border-style:solid;border-width:1px;border:1px solid #b4b4b4;}
.resultbottom{text-align:center;font-size:24px;color:#000;width:15%;background-color:#ccc;border-color:#ccc;border-style:solid;border-width:1px;}
.resultbottom1{text-align:center;font-size:19px;color:#fff;width:15%;background-color:#000000;border-color:#b4b4b4;border-style:solid;border-width:1px;}
.resultbottom2{text-align:center;font-size:19px;color:#fff;width:15%;background-color:#000000;border-color:#b4b4b4;border-style:solid;border-width:1px;}
.resultbottomtoto{text-align:center;font-size:20px;color:#000;width:16.5%;border-color:#ccc;border-style:solid;border-width:1px;}
.resultbottomtoto2{text-align:center;font-size:20px;color:#000;width:12.5%;border-color:#ccc;border-style:solid;border-width:1px;}
.resulttoto{background-color:#0378BB;font-weight:40;font-size:18px;text-align:center;vertical-align:middle;color:#fff;height:25px;}
.hasil{background-color:#4b1312;font-weight:40;font-size:18px;text-align:center;vertical-align:middle;color:#fff;height:50px;}
.resultm4dlable{background-color:#FF0;font-weight:700;font-size:18px;text-align:center;vertical-align:middle;color:#444;height:45px;}
.resulttotolable{background-color:#AD0006;font-weight:700;font-size:18px;text-align:center;vertical-align:middle;color:#fff;height:45px;}
.resultstc4dlable{background-color:#F8C100;font-weight:700;font-size:18px;text-align:center;vertical-align:middle;color:#060;height:45px;}
.resultsteclable{background-color:green;font-weight:700;font-size:18px;text-align:center;vertical-align:middle;color:#fff;height:45px;}
.resultsg4dlable{background-color:#0378BB;font-weight:700;font-size:18px;text-align:center;vertical-align:middle;color:#fff;height:45px;}
.logosg4dlable{background:linear-gradient(to bottom, #bdf9a9 0%,#78d160 17%,#5bf450 50%,#3ac345 51%,#41d641 59%,#5eef4a 71%,#3cc23a 84%,#318b25 100%);font-weight:700;font-size:18px;text-align:center;vertical-align:middle;color:#fff;height:45px;border:1px solid #b4b4b4;}
.resultbottomm4d{text-align:center;font-size:20px;color:#000;width:9%;border-color:#555;border-style:solid;border-width:1px}
a {text-decoration: none;}
.run{width: 50%;font-size: 20px; color: #fff;}

</style>
<script type='text/javascript'>
  setTimeout(function() {
  location.reload();
}, 5000);
   </script>