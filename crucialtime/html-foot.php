</body>
<style>
    footer{

        display:flex;
        flex-wrap:wrap;
        justify-content:center;
        align-items:flex-start;
        background:#001a2d;
        height:250px;
        width:100%;

        color:#fff;
        font-size:14px;

        /*border-top:1px solid #9b7553;*/
        /*border-top:1px dashed #9f7e52;*/
    }
    .footer-bar{
        display:flex;
        flex-wrap:wrap;
        justify-content:center;
        align-items:center;
        height:200px;
        width:100%;
    }
    .footer-left1{
        display:flex;
        flex-direction:row;
        justify-content:center;
        align-content:center;

        height:100px;
        width:250px;

        border-right:solid 2px #fff;
    }
    .footer-left1 img{
        width:80px;
    }
    .footer-left2{
        display:flex;
        flex-direction:column;
        flex-wrap:wrap;
        align-content:center;
        justify-content:flex-start;

        height:100px;
        width:250px;

        border-right:solid 2px #fff;
    }
    .footer-left2 a{
        margin:0 12px;
        color:#fff;
        text-decoration:none;
    }


    .footer-right1{
        display:flex;
        flex-direction:column;
        /*flex-wrap:wrap;*/
        align-items:center;
        justify-content:flex-start;

        height:100px;
        width:250px;
        border-right:solid 2px #fff;
    }
    .footer-right1 span{
        padding-bottom:10px;
    }
    .footer-right1 img{
        cursor:pointer;
        height:25px;
        margin:0 10px 10px;
    }
    .footer-right1 i{
        cursor:pointer;
        margin:0 10px;
    }
    .footer-right2{
        display:flex;
        flex-direction:column;
        /*flex-wrap:wrap;*/
        align-items:center;
        justify-content:flex-start;

        height:100px;
        width:250px;
    }
    .footer-right2 span{
        padding-bottom:10px;
    }
    .footer-right2 p{
        margin-bottom:10px;
    }

    .copyRight{
        /*height:20px;*/
        margin-bottom:29px;
    }

    @media screen and (max-width:450px){
        footer{
            height:310px;
            padding:10px 0 20px;
        }
        .footer-bar{
            height:280px;
        }
        .footer-left1{
            margin:20px 0;
            border-right:solid 0px #fff;
        }
        .footer-left2{
            display:none;
        }


        .footer-right1{
            display:none;
        }
        .footer-right2{
            margin:20px 0;
            border-right:solid 0px #fff;
        }

        .copyRight{
            display:none;
        }

    }



</style>
<footer>
    <div class="footer-bar">

        <div class="footer-left1">
            <a href="index_.php">
                <img class="logo" src="imgs/logo2.png" alt="">
            </a>
        </div>
        <div class="footer-left2">
            <a class="padding_left padding_20" href="">首頁</a>
            <a class="padding_left" href="">時尚品味</a>
            <a class="padding_left" href="">運動機能</a>
            <a class="padding_left" href="">品牌介紹</a>
            <a class="padding_left padding_20" href="">相關知識</a>
            <a class="padding_left" href="">會員中心</a>
            <a class="padding_left" href="">購物車</a>
            <a class="padding_left" href="">收藏清單</a>
        </div>

        <div class="footer-right1">
            <span>社群連結</span>

            <div class="foot-icon-bar">
                <br>
                <a class="" href="member-center.php">
                    <img class="icon1" src="images/fb.svg" alt="">
                </a>
                <a class="" href="member-center.php">
                    <img class="icon1" src="images/ig.svg" alt="">
                </a>
                <a class="" href="member-center.php">
                    <img class="icon1" src="images/tw.svg" alt="">
                </a>

            </div>
        </div>
        <div class="footer-right2">
            <span>聯絡我們</span>

            <p>Email: crucialtime@gmail.com</p>
            <p>客服電話: 0800-555-666</p>
        </div>

    </div>

    <div class="copyRight">
        Copyright © 2018 Crucial Time all rights reserved.
    </div>
</footer>
</html>