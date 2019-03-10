<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Strict//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-strict.dtd">
<html>
<head>
    <title>etetet.net</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <style type="text/css">
        /* Mass Reset -------------------------------------- */
        html, body, form, fieldset {
            margin: 0;
            padding: 0;
            font: 90%/1.4 Verdana, Arial, Helvetica, sans-serif;
        }

        h1, h2, h3, h4, h5, h6, p, pre,
        blockquote, ul, ol, dl, address {
            margin: 1em, 0;
            padding: 0;
        }

        li, ul, ol, dl {
            margin: 0;
            padding: 0;
        }

        dd, blockquote {
            margin-left: 1em;
        }

        button, label {
            cursor: pointer;
        }

        fieldset {
            border: none;
        }

        input, select, textarea {
            font-size: 100%
        }

        body {
            text-align: center;
            background: #D2D2D4;
        }

        p {
            margin: 0 10px 10px
        }

        blockquote {
            margin: 0;
            padding: 5px;
            background-color: #EFFEFF;
        }

        blockquote cite {
            font-size: 85%;
            font-weight: bold;
            padding-right: .8em;
        }

        a {
            text-decoration: none;
        }

        a:link {
            color: Navyblue;
        }

        a:visited {
            color: Navyblue;
        }

        a:hover {
            color: blue;
            text-decoration: underline;
        }

        a:active {
            color: Navyblue;
        }

        .posthilit {
            background-color: #F3BFCC;
            color: #BC2A4D;
            padding: 0 2px 1px;
        }

        .author {
            font-style: italic;
            font-size: 12px;
            color: gray;
        }

        .disclaimer {
            padding: 0 10px 10px 10px;
            font-size: 11px;
            line-height: 1;
            color: gray;
        }

        .left {
            float: left;
            text-align: left;
        }

        .right {
            text-align: right;
        }

        #header h1 {
            height: 80px;
            margin: 0;
            margin-top: 3px;
            line-height: 80px;
            padding-left: 100px;
            background: transparent;
            color: RoyalBlue;
        }

        #container {
            text-align: left
        }

        #content p {
            line-height: 1.4
        }

        #subSide1 {
            background: #FFFFFF
        }

        #subSide2 {
            background: #FFFFFF
        }

        #footer {
            background: #333;
            color: #FFFEE6
        }

        #footer p {
            margin: 0;
            padding: 5px 10px
        }

        #container {
            margin: 0 auto;
            width: 975px;
            background-image: url("");
            background-repeat: no-repeat;
            background-color: #FFFFFF
        }

        #content {
            clear: both;
        }

        #subSide1 {
            float: right;
            width: 630px;
            padding: 10px 15px 10px 0
        }

        #subSide2 {
            float: left;
            width: 303px;
            padding: 7px 0 10px 15px
        }

        #footer {
            clear: both;
            width: 100%;
            margin-bottom: 20px
        }

        #content .pad {
            padding: 0 12px;
        }

        #subSide1 img {
            width: 99.5%;
            display: block;
            border: 1px solid #cccccc
        }

        #subSide1 .imgl200 {
            width: 200px;
            border: none;
            padding-right: 15px;
        }

        #subSide2 img {
            width: 99.5%;
            display: block;
            border: 1px solid #cccccc
        }

        #subSide2 .text {
            color: darkgreen;
            font-size: 85%;
        }

        #logInOut {
            text-align: right;
            padding-right: 6px;
        }

        #logInOut a {
            text-decoration: none;
            color: #aaaaaa;
        }

        #logInOut a:hover {
            text-decoration: underline;
        }

        .postNotes {
            background: lightYellow;
            border: 1px solid silver;
            border-top: 5px solid silver;
            padding: 10px;
            margin-top: 3px;
            margin-bottom: 3px;
            position: fixed;
            bottom: 1%;
            width: 280px;
        }

        .credit {
            background: lightYellow;
            border: 1px solid silver;
            border-top: 5px solid silver;
            padding: 10px;
            margin-top: 3px;
            margin-bottom: 3px;
        }

        .forumlist {
            background: lightYellow;
            font-weight: bold;
            border: 1px solid silver;
            border-top: 5px solid silver;
            padding-bottom: 15px;
            padding-left: 20px;
            margin-top: 10px;
        }

        .forumlist li {
            list-style-type: none;
            margin: 0;
        }

        .forumlist li a {
            text-decoration: none;
        }

        .forumlist li a:link {
            color: CornflowerBlue;
        }

        .forumlist li a:visited {
            color: CornflowerBlue;
        }

        .forumlist li a:hover {
            color: blue;
            text-decoration: underline;
        }

        .forumlist li a:active {
            color: CornflowerBlue;
        }

        .forumcat {
            padding-top: 15px;
            font-size: 18px;
            color: CornflowerBlue;
        }

        .forumitem {
        }

        .announce {
            font-weight: bold;
        }

        #topicList {
            background-color: #ecf3f7;
            padding: 10px;
        }

        .forumTitle {
            font-size: 140%;
        }

        #topicList ul {
        }

        #topicList li {
            list-style-type: none;
        }

        #topicList li a {
            text-decoration: none;
        }

        .postTitle {
            background-color: lavender;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 140%;
        }

        .postPagination {
            font-size: 70%;
        }

        .post {
            background-color: lavender;
            padding: 20px 10px;
        }

        .postAuthor {
            color: Blue;
            font-size: 85%;
            font-weight: bold;
        }

        .postAuthor span {
            color: LightSlateGray;
            font-size: 80%;
            font-weight: normal;
        }

        .postID {
            color: LightSteelBlue;
            font-size: 85%;
            text-align: right;
            padding-bottom: 10px;
        }

        #autoSEARCH a {
            text-decoration: none;
        }

        #autoSEARCH a:hover {
            text-decoration: underline;
        }

        .autoSEARCH, .autoSEARCH a {
            color: Peru;
            font-weight: bold;
        }

        .sBREADCRUMB, .sBREADCRUMB a {
            color: Brown;
        }

        #message {
            width: 100%;
            font-size: 14px;
        }

        #subject {
            width: 60%;
        }

        #postform {
            width: 97%;
        }

        #editBox {
            width: 645px;
            position: fixed;
            bottom: 1%;
            background-color: white;
            padding: 5px 0;
        }

        .sortable {
            WIDTH: 100%
        }

        .sortable a {
            text-decoration: none;
        }

        .sortable, .sortable TD {
            BORDER: #ccc 1px solid;
            BORDER-COLLAPSE: collapse;
            FONT-SIZE: 12px;
            FONT-FAMILY: Courier New, Tahoma, Verdana, Helvetica, sans-serif;
        }

        .sortable THEAD TH, .sortable TBODY TH, .sortable TBODY TR TD {
            PADDING-RIGHT: .75em;
            PADDING-LEFT: .75em;
            PADDING-TOP: .15em;
            PADDING-BOTTOM: .15em;
            COLOR: #666;
        }

        .sortable THEAD TH, .sortable TBODY TH {
            BACKGROUND: #ffffff;
            BORDER-LEFT: #ccc 1px solid;
        }

        .sortable TBODY TR {
            BACKGROUND: #fafafb;
            TEXT-ALIGN: left;
        }

        .sortable TBODY TR:hover, .sortable TBODY TR.hoverfix {
            BACKGROUND: #ffffff
        }

        .sortable TFOOT TD, .sortable TFOOT TH {
            PADDING: 4px;
            BORDER-TOP: #ccc 1px solid;
            BORDER-LEFT-STYLE: none;
            BACKGROUND: #ffffff;
            COLOR: #666;
        }

        .sortable CAPTION {
            PADDING-RIGHT: .5em;
            PADDING-LEFT: .5em;
            PADDING-TOP: .3em;
            PADDING-BOTTOM: .3em;
            FONT-SIZE: 120%;
            COLOR: #666;
            TEXT-ALIGN: left;
        }

        .sortable TBODY TR TD A {
            PADDING: 0 4px 2px;
        }

        .sortable TBODY TR TD A:link {
            COLOR: blue;
        }

        .sortable TBODY TR TD A:visited {
            COLOR: blue;
        }

        .sortable TBODY TR TD A:hover {
            COLOR: white;
            BACKGROUND-COLOR: blue;
        }

        .sortable TBODY TR TD A:active {
            COLOR: blue;
        }

        #menu1 {
            color: #DDDDDD;
            font-family: "Lucida Grande", Arial, Helvetica, sans-serif;
            font-size: 20px;
            font-size-adjust: none;
            font-stretch: normal;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            width: 100%;
            line-height: 1.2em;
        }

        #menu1 a {
            color: #DDDDDD;
            text-decoration: none;
        }

        #menu1 a:hover {
            color: #ffffff;
        }

        #menu1 #ulMain { /* all lists */
            height: 35px;
        }

        #menu1 ul { /* all lists */
            padding: 0;
            margin: 0;
            list-style: none;
            background: #303053 none repeat scroll 0%;
        }

        #menu1 li { /* all list items */
            float: left;
            position: relative;
            padding: 0.2em 0.87em;
            margin: 0;
            width: auto;
        }

        #menu1 li:hover { /* all list items */
            background-color: #555555;
            color: #ffffff;
            opacity: .7;
        }

        #menu1 li.current { /* all list items */
            background-color: #555555;
            color: #ffffff;
            opacity: .7;
        }

        #menu1 li.current a.current { /* all list items */
            color: #ffffff;
        }

        #menu1 li ul { /* second-level lists */
            display: none;
            position: absolute;
            top: 2.5em;
            left: 0;
            font-size: 14px;
        }

        #menu1 li:hover ul, #menu1 li.over ul {
            /* lists nested under hovered list items */
            display: block;
        }

        #menu1 li ul li {
            float: none;
            padding: 0em 0.87em;
        }
    </style>
    {{--<style type="text/css">--}}
    {{--<b>[phpBB Debug] PHP Notice</b>: in file <b>/home/admin/lab307PL1/sysFuncHTML.php</b> on line <b>140</b>: <b>include_once(/home/tehat.com/web/public/slideshow/cssSlideShow.php): failed to open stream: No such file or directory</b><br />--}}
    {{--<b>[phpBB Debug] PHP Notice</b>: in file <b>/home/admin/lab307PL1/sysFuncHTML.php</b> on line <b>140</b>: <b>include_once(): Failed opening '/home/tehat.com/web/public/slideshow/cssSlideShow.php' for inclusion (include_path='.:/opt/local/lib/php')</b><br />--}}
    {{--</style>--}}
</head>
<body style="background:#756A56 none no-repeat scroll 0 0;"><a name="top"></a>
<div id="container" style="background: #ffffff url(upload/YenChi/banner/daimac.jpg) no-repeat scroll 0 0">
    <div id="header">
        <style>
            a {
                PADDING: 0 4px 2px;
            }

            a:link {
                COLOR: #8C703E;
            }

            a:visited {
                COLOR: #8C703E;
            }

            a:hover {
                text-decoration: none;
                COLOR: white;
            }
        </style>
        <div id="logInOut">
            <div id="logInOut">
                <a href="./ucp.php?mode=register&amp;sid=61cab484e681faef57cf5660a894d4c9">Register</a> .
                <a href="./ucp.php?mode=login&amp;sid=61cab484e681faef57cf5660a894d4c9">Login</a>
            </div>
        </div>
        <h1 style="font-family: 'Lucida Grande';float:left;width:25%"></h1>
    </div>
    <div id="wrapper">
        <div id="content">
            <div id="menu1">
                <ul id="ulMain" style="background:#4D3A1A none no-repeat scroll 0 0;">
                    <li>
                        <a href="http://etetet.net/bb">bìa</a></li>
                    <li>
                        <a href="http://etetet.net/bb/search.php?search_time=144000&amp;search_id=searchback">đối&nbsp;thoại</a>
                    </li>
                    <li>
                        <a href="http://etetet.net/bb/viewtopic.php?f=17&amp;t=1525&amp;start=0&amp;gallery">HHiếu</a>
                    </li>
                    <li>
                        <a href="http://etetet.net/bb/viewtopic.php?f=24&amp;t=1101&amp;start=0&amp;gallery">tàn&nbsp;phai</a>
                    </li>
                    <li>
                        <a href="http://etetet.net/bb/viewtopic.php?f=23&amp;t=1733&amp;start=0&amp;gallery">thừa&nbsp;giấy</a>
                    </li>
                    <li>
                        <a href="http://etetet.net/bb/viewtopic.php?f=25&amp;t=1498&amp;start=0&amp;gallery">trắng&nbsp;đen</a>
                    </li>
                    <li>
                        <a href="http://etetet.net/bb/viewtopic.php?f=23&amp;t=2234&amp;start=0&amp;gallery">pcl&nbsp;&amp;&nbsp;ngữ...</a>
                    </li>
                </ul>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <div id="subSide1">
        <img src="home/days_end.jpg"/>days_end - Tôn Thất Bằng<br/><br/><br/>
    </div>
    <div id="subSide2">
        <div class="credit" style="background:#FFFBF5 none no-repeat scroll 0 0;">
            <div style="padding-left:60px;">
                <div style="padding-right:10px;">
                    <span style="font-size: 85%; line-height: 116%;">
                        <span style="font-weight: bold"><br/><br/><br/><br/>
                            <span style="color: #564B23">b ặ t</span>
                            <span style="color: #F7F7F7">.</span>
                            <span style="color: #564B23">l ờ i</span>
                            <span style="color: #F7F7F7">.</span>
                            <span style="color: #A58E43">a n</span>
                            <span style="color: #F7F7F7">.</span>
                            <span style="color: #A58E43">n h i ê n</span>
                        </span>
                    </span>
                    <span style="font-size: 85%; line-height: 116%;"><br/><br/><br/>
                        <span style="color: #303030">có con chim đứng giữa trời<br/>một mình yên lặng <br/>bặt lời<br/>an nhiên<br/><br/><br/>cách chia là một ưu phiền<br/>rót tâm trí đổ về <br/>miền khác xa<br/><br/><br/>lặng yên<br/>ngưng bặt phong ba<br/>thảnh thơi đậu mé ngói và<br/>nhìn mây<br/><br/><br/>đôi cánh là đôi bàn tay<br/>mỏi vươn<br/>xếp lại<br/>nhìn ngày đang trôi...</span></span><br/><br/><br/>
                    <span style="font-size: 90%; line-height: 116%;">
                        <a href="http://www.etetet.net/bb/search.php?author=dinhnguyen" class="postlink">
                            <span style="color: gray">
                                <span style="font-weight: bold">đ ì n h n g u y ê n</span></span></a><br/><br/><br/></span>
                </div>
            </div>
            <br/>
        </div>
    </div>
    <div id="footer" style="background:#E9E6E1 none no-repeat scroll 0 0;">
        <p></p>
    </div>
</div>
</body>
</html>
