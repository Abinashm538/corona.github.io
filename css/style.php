<style type="text/css">
    html{
        scroll-behavior: smooth;
    }
    *{margin:0; padding:0; box-sizing: border-box; font-family: 'Mulish', sans-serif;}

.nav_style{
    background-color:#a29bfe!important;

}
.nav_style a{
    color:white;
}
.main-header{
    height:450px;
    width:100%
}
.rightside h1{
    font-size: 3rem;
}
.corona_rot img{
    animation: corona 3s linear infinite;
}
@keyframes corona {
    0% { transform: rotate(0);}
    100% { transform: rotate(360deg);}
    
}
.leftside img{
   animation: pulse 5s linear infinite;
}
@keyframes pulse {
    0%{ transform:scale(.75);}
    20%{ transform:scale(1);}
    40%{ transform:scale(.75);}
    60%{ transform:scale(1);}
    80%{ transform:scale(.75);}
    100%{ transform:scale(1);}

    
}
.corona_update{
    margin:0 0 30px 0;
}
.corona_update h3{
    color:#ff7675;
}
.sub_section{
    background-color: #bfafdb
}
.footer_style{
    background-color: #a29bfe!important;
}
.footer_style p{
    margin-bottom:0!important;
}
#myBtn {
    float:right;
    bottom:30px;
    right:40px;
    z-index:99;
    border:none;
    outline:none;
    background-color:#00A8FF;
    color:white;
    cursor:pointer;
    padding:10px;
    border-radius:10px;
}
#myBtn:hover {
    background:#606060;
}

</style>