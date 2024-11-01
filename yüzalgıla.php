<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopernik Pizza</title>
    <!--STYLE CSS-->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/main.css">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
@import 'main.css';

.box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(30rem,1fr));
    gap: 2rem;
}


/* Header Section Start */


.header{
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:0 7%;
    margin:2rem 7%;
    border-radius: 30rem;
    box-shadow:0px 0px 17px -2px rgba(0,0,0,0.75);
    position: sticky;
    top: 0;
    z-index: 1000;
   
}

.header .search-form{
    position: absolute;
    top: 115%;
    right: 7%;
    background-color: #fff;
    width: 50rem;
    height: 5rem;
    display: flex;
    align-items: center;
    border-radius: 3rem;
    box-shadow:0px 0px 17px -2px rgba(0,0,0,0.75);
    transform: scaleY(0);
}

.header .search-form.active{
    transform: scaleY(1);
}


.header .search-form input{
    border: none;
    padding-left: 2rem;
    border-radius: 3rem;
    width: 100%;
}

.header .search-form i{
    margin:0 1rem;
    font-size: 1.8rem;
    color:var(--main-color);
    border-bottom: 0.1rem solid transparent;
    cursor: pointer;
}


.header .logo img{
    height: 10rem;
}

.header .navbar a{
    margin:0 1rem;
    font-size: 1.6rem;
    color:var(--main-color);
    border-bottom: 0.1rem solid transparent;
}

.header .navbar .active,.header .navbar a:hover{
    border-color: var(--main-color);
    padding-bottom: 0.5rem;  
}

.header .buttons button{
    margin-left: 2rem;
    cursor:pointer;
    font-size: 2.5rem;
    background-color: transparent;
    border:none;
    color: var(--main-color);

}

.header .buttons i:hover{
    opacity:0.6;
}

.header .cart-items-container{
    position: absolute;
    top: 95%;
    height: calc(100vh - 9rem);
    width: 35rem;
    background-color: #fff;
    box-shadow:0px 20px 14px 0px rgb(0 0 0 / 75%);
    display: none;

}

.header .cart-items-container.active{
    right: 3rem;
    display: block;
}

.header .cart-items-container .cart-item{
   position: relative;
   display: flex;
   align-items: center;
   gap: 1.5rem;
   padding: 1.5rem;
}

.header .cart-items-container .cart-item:hover{
    box-shadow:0px 20px 14px 0px rgb(0 0 0 / 75%);
 }

.header .cart-items-container img{
    height: 7rem;
}

.header .cart-items-container i{
    position: absolute;
    right: 1rem;
    top: 1rem;
    cursor: pointer;
    font-size: 2rem;
    color: var(--main-color);
}

.header .cart-items-container .content{
    font-size: 1.5rem;
}

.header .cart-items-container a{
    width: 100%;
    text-align: center;
    border-radius: unset; /* border radius yokmuş gibi davranır */  
}


/* Header Section End */

/* Home Section Start */

.home{
    min-height:100vh;
    background-image: url(/kopernik-pizza/images/home.jpg);
    background-size: cover;
    margin-top: -14.4rem;
    display: flex;
    align-items: center;
}

.home .content{
    min-width: 20rem;
}
.home .content h3{
    font-size: 6rem;
    color: #fff;
}

.home .content p{
    font-size: 2rem;
    color: #ccc;
    font-weight: 300;
    line-height:2.2rem;
    padding:1rem 0;
    letter-spacing: 0.2rem;
}

.btn{
    font-size: 1.7rem;
    color: #fff;
    display: inline-block; /* yeni eklenen element yana gelir */
    margin-top: 1rem;
    padding: 2rem 3.75rem;
    border-radius: 30rem;
    background-color: var(--main-color);
    border:0.2rem solid white;
}

/* Home Section End */


/* Menu Section Start */


.heading{
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #fff;
    border-bottom: 0.5rem solid white;
}



 .box-container .box .box-head img{
    width:100%;
    object-fit: cover;
}

.box-container .box{
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    align-items: flex-start;
    background-color: #fff;
    padding: 2rem;
    border-radius: 3rem;
    min-height: 60rem;
    color: var(--main-color);
}

 .box-container .box .box-head .menu-category{
    font-size: 1.5rem;
}

.box-container .box .box-head h3{
    font-size: 2.5rem;
    padding: 1.5rem 0;
}

.box-container .box .box-head .price{
    font-size: 2.5rem;
}

.box-container .box .box-head .price span{
    text-decoration: line-through;
    font-size: 1.5rem;
    font-weight: 300;
    
}

 .btn:hover{
    opacity: 0.8;
}

/* Menu Section End */

/* Products Section Start */

.box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(30rem,1fr));
    gap: 2rem;
}

 .box-container .box{
    background-color: #fff;
    text-align: center;
    position:relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    padding: 3rem;
    border-radius: 3rem;
}

.products .box-container .box .box-head{
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  z-index: 10;
}
 
.products .box-container .box .box-head .title{
  font-size: 2.5rem;
}

.products .box-container .box .box-head .name{
    font-size: 3rem;
    font-weight: 600;
    text-align: start;
    overflow-wrap: anywhere;
}

.heading{
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #fff;
    border-bottom: 0.5rem solid white;
}


.products .box-container .box .box-head img{
    height: 30rem;
}
    
.products .box-container .box .box-body{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    position: relative;
    z-index: 10;
}
    
.products .box-container .box .box-body .info{
    display: flex;
    flex-direction: column;
    align-items: center;
}


.products .box-container .box .box-body .info b{
    padding: 2rem;
    font-size: 2.2rem;
}

.products .box-container .box .box-body .info span{
    font-size: 1.7rem;
    padding-bottom: 2rem;
}


.products .box-container .box .box-body .product-btn a{
   display: flex;
   align-items: center;
   justify-content: center;
   width: 6.5rem;
   height: 6.5rem;
   border: 0.2rem solid var(--main-color);
   border-radius:50%;
   background-color: var(--main-color);
   color: white;
   font-size: 2rem;
}

/* Products Section End */

/* About Section Start */



.about .about-container{
    display: flex;
    justify-content: center;
}

.about .about-container .content p{
  font-size: 2rem;
  color: white;
  padding:1.5rem 0;
}

.about .about-container .content h1{
    font-size: 3rem;
}


.about .about-container .image img{
   width: 100%;
    object-fit: cover;
    padding-right: 4rem;
}



/* About Section End */



/* Review Section Start */
.review .box p{
    font-size: 1.5rem;
    font-weight: 600;
    letter-spacing: 0.1rem;
    font-style: italic;
}

.review .box img{
    padding:2rem 0;
    border-radius:50%;
    height: 15rem;
}


.review .box h3{
   font-size: 2rem;
   padding-bottom: 1.5rem;
}

.review .box .stars i{
    font-size: 1.8rem;
    color: gold;
    
 }

/* Review Section End */

/* Contact Section Start */


.contact .box-container .map{
 flex: 1 1 45rem;
 width: 100%;
 object-fit: cover;
}

.contact .box-container form{
    flex: 1 1 45rem;
    width: 100%;
    object-fit: cover;
    padding:5rem 2rem;
    text-align: center;
    background-color: skyblue;
}

.contact .box-container form .input-box{
    margin:3rem 0;

}

.contact .box-container form .input-box i{
    font-size: 3rem;
    margin-bottom: 2rem;
    color:var(--main-color);
}

.contact .box-container form .input-box i:hover{
    color: #ccc;
}

.contact .box-container form .input-box input{
    width: 100%;
    font-size: 1.9rem;
    border:0.3rem solid var(--main-color);
}

.contact .box-container form h3{
    font-size: 3.5rem;
    color: var(--main-color);
}

/* Contact Section End */

/* Blogs Section Start */


.blogs .box-container .box .image{
    height: 25rem;
    overflow: hidden;
    width: 100%;
}

.blogs .box-container .box img{
    width: 100%;
    object-fit: cover;
    height: 100%;
    border-radius: 3rem;
}

.blogs .box-container .box:hover .image img{
    transform: scale(1.1);
}


.blogs .box-container .box a{
    font-size: 2.2rem;
}

.blogs .box-container .box span{
    font-size: 1.5rem;
}

.blogs .box-container .box p{
    font-size: 1.5rem;
}

/* Blogs Section End */

/* Footer Section Start */


footer .footer-container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #fff;
}

footer .footer-container .items-icon ul {
    display: flex;
    align-items: center;
    justify-content: center;
}

footer .footer-container .items-icon a{
    margin: 2rem;
    font-size: 2rem;
}
footer .footer-container .items-icon a:hover{
  opacity: 0.6;
}

.btn-2{
    font-size: 1.3rem;
    color: #fff;
    display: inline-block; /* yeni eklenen element yana gelir */
    padding: 1rem 1.2rem;
    margin:1rem 1.2rem;
    background-color: var(--main-color);
    border:0.2rem solid white;
}

.btn-2:hover{
  opacity: 0.6;
}


.search input{
    padding:1rem 5rem 1rem 0;
    font-size: 1.7rem;
    margin:1.5rem 2rem 0 0;
}



.btn-3{
    font-size: 1.7rem;
    color: #fff;
    display: inline-block; /* yeni eklenen element yana gelir */
    margin-top: 1rem;
    padding: 1rem 3.75rem;
    border-radius: 30rem;
    background-color: var(--main-color);
    border:0.2rem solid white;

}

.btn-3:hover{   
opacity: 0.6;
}


footer .footer-container p{
    font-size: 2rem;
}

footer .footer-container span{
    font-size: 2rem;
    color: var(--main-color);
}

footer .footer-container form{
    padding: 2rem 0;
    
}

footer .footer-container a.active{
    background-color: var(--black-color);
    
}


/* Footer Section End */


/* Responsive Start */

@media(max-width:991px){
  html{
    font-size: 55%;
  }

  .header{
    padding: 1.5rem 2rem;
  }

  .header .logo img{
    height: 7rem;
  }
  
  section{
    padding: 2rem;
  }

  .products .box-container .box .box-head .name{
    font-size: 3.4rem;
  }
  

}

@media(max-width:768px){
    .home {
        width: 100%;
    }
    
    #bar{
        display:inline-block !important;
      }

      .header .navbar{
        position: absolute;
        top: 95%;
        background-color: #fff;
        height: calc(100vh-9rem);
        width: 30rem;
        box-shadow:0px 20px 14px 0px rgb(0 0 0 / 75%);
        display: none;
     
      }

      .header .navbar a{
       color: var(--main-color);
       display: block;
       margin: 1.5rem;
       padding:0.5rem;
       font-size:2rem;
      }

      .header .navbar.active{
        right: 3rem;
        display: block;
      }
      
    

      .home .content h3{
        font-size:2.8rem;
        display: inline-block;
      }

      .home .content p{
        font-size:1.8rem;
        display: inline-block;

      }

      @media(max-width:550px){
       .about-container{
        display: flex;
        flex-direction: column;
       }

       .about-container .image{
        padding-bottom:3rem;
       }

      }

      

      



}


:root{  /*Değişken tanımlama */
 --main-color:red;
 --black-color:#0e0e0e;
 --border:0.1rem solid rgba(255,255,255,0.4);
}


*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-decoration: none;
    text-transform: capitalize;
    transition: 0.2s ease; /* üzerine gelindiğinde tak diye gelmek yerine yavaş gelme efekti */
    outline: none;
    font-family: 'Poppins', sans-serif;
}



html{
    font-size: 62.5%; /* 1rem = 10px oldu   direkt font-size:10px de diyebilirdik */
    overflow-x: hidden; /*aşağıda scroll çıkmasını engeller */
    scroll-padding-top: 9rem;
    scroll-behavior: smooth; /* güzel bir geçiş efekti*/
}


html::-webkit-scrollbar {  /*scrollun kayan tarafının tamamı  */
    width: 1.5rem;  
    background-color: var(--main-color);
    
}

html::-webkit-scrollbar-thumb{ /* scrollun kayan kısmı */
    background-color: beige;
    border: 0.2rem solid black;
}

body{
    background-color: var(--main-color);
}

section{ 
    padding: 3.5rem 7%;/* yeni bir section eklendiğinde aynı hızada olması için */
}

a{
    color: var(--main-color);
    text-decoration: none;
    cursor: pointer;
}

button{
    cursor: pointer;
}

footer{
    text-align: center;
}

#bar{
    display: none;
}
</style>
<body>
    <!--Header Section Start-->
    <header class="header">
        <a href="#" class="logo">
            <img src="images/logo.png" alt="chef photo">
        </a>
        <nav class="navbar">
            <a href="index.html" class="active">Ana Sayfa</a>
            <a href="about.html" class="">Hakkımızda</a>
            <a href="menu.html" class="">Menü</a>
            <a href="products.html" class="">Şefin Spesialleri</a>
            <a href="review.html" class="">Yorumlar</a>
            <a href="contact.html" class="">İletişim</a>
            <a href="blogs.html" class="">Blog</a>
        </nav>

        <div class="buttons">
            <button id="search-btn"><i class="fa-solid fa-magnifying-glass fa-bounce"></i></button>
            <button id="shopping-btn"><i class="fa-solid fa-cart-shopping fa-bounce"></i></button>
            <button id="bar"><i class="fa-solid fa-bars fa-bounce"></i></button>
        </div>

        <div class="search-form">
            <input type="text" class="search-input" id="search-box" placeholder="Ara"> 
            <i class="fa-solid fa-magnifying-glass fa-bounce"></i>
        </div>

      <div class="cart-items-container ">
        <div class="cart-item">
        <i class="fas fa-times"></i>
        <img src="images/menu-2.png" alt="menu">
        <div class="content">
            <h3>Doydum Burger</h3>
            <div class="price">135 TL</div>
        </div>

        </div>
        <div class="cart-item">
        <i class="fas fa-times"></i>
        <img src="images/menu-3.png" alt="menu">
        <div class="content">
            <h3>arazumut <span>Pizza</span></h3>
            <div class="price">165 TL</div>
        </div>

        </div>
        <div class="cart-item">
        <i class="fas fa-times"></i>
        <img src="images/menu-4.png" alt="menu">
        <div class="content">
            <h3>Github Burger</h3>
            <div class="price">170 TL</div>
        </div>

        </div>
        <div class="cart-item">
        <i class="fas fa-times"></i>
        <img src="images/menu-1.png" alt="menu">
        <div class="content">
            <h3>Mini Pizza</h3>
            <div class="price">80 TL</div>
        </div>

        </div>

        <a href="#" class="btn">Siparişi ver</a>
      </div>

    </header>
     <!--Header Section End-->

     <!--Home Section Start-->
     <section class="home">
        <div class="content">
        <h3>arazumut <span>Pizza</span></h3> 
        <p>Galaksinin en sıcak pizzası</p><br>
        <a href="#" class="btn">Şimdi Sipariş Verin </a> 
        </div>
        
     </section>
     
     <!--Home Section End-->

    <!--Menu Section Start-->
   <section class="menu">
    <h1 class="heading"><span>Menü</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="box-head">
                <img src="images/menu-1.png" alt="pizza">
                <span class="menu-category">Pizza</span>
                <h3>Mini Pizza</h3>
                <div class="price">80 TL <span>95 TL</span></div>
            </div>
            <div class="box-body">
                <a href="#" class="btn">Sepete Ekle</a>
            </div>
        </div>
        <div class="box">
            <div class="box-head">
                <img src="images/menu-2.png" alt="smash burger">
                <span class="menu-category">Burger</span>
                <h3>Doydum Burger</h3>
                <div class="price">135 TL <span>150 TL</span></div>
            </div>
            <div class="box-body">
                <a href="#" class="btn">Sepete Ekle</a>
            </div>
        </div>
        <div class="box">
            <div class="box-head">
                <img src="images/menu-3.png" alt="mushroom pizza">
                <span class="menu-category">Pizza</span>
                <h3>Kopernik Pizza</h3>
                <div class="price">165 TL <span>180 TL</span></div>
            </div>
            <div class="box-body">
                <a href="#" class="btn">Sepete Ekle</a>
            </div>
        </div>
        <div class="box">
            <div class="box-head">
                <img src="images/menu-4.png" alt="3x deluxe burger">
                <span class="menu-category">Burger</span>
                <h3>Github Burger</h3>
                <div class="price">170 TL <span>200 TL</span></div>
            </div>
            <div class="box-body">
                <a href="#" class="btn">Sepete Ekle</a>
            </div>
        </div>
    </div>
   </section>
    
    <!--Menu Section End-->


    <!--Product Section Start-->

   <section class="products">
    <h1 class="heading">Şefin Spesialleri</h1>
    <div class="box-container">
    <div class="box">
        <div class="box-head">
            <span class="title">Burger</span>
            <a href="#" class="name">Özel Fantastiko Burger</a>
            <div class="image">
                <img src="images/product-1.png" alt="Special Mexico Burger" >   
            </div>
        </div>
        <div class="box-body">
           <div class="info">
            <b class="price">155 TL</b>
            <span class="amount">110gr / 300 Cal</span>
           </div>
           <div class="product-btn">
            <a href="#">
                <i class="fas fa-plus"></i>
            </a>
           </div>
        </div>
    </div>
    <div class="box">
        <div class="box-head">
            <span class="title">Etliekmek</span>
            <a href="#" class="name">Özel Gonya Etliekmeği</a>
            <div class="image">
                <img src="images/etliekmek.png" alt="Etliekmek" >   
            </div>
        </div>
        <div class="box-body">
           <div class="info">
            <b class="price">100 TL</b>
            <span class="amount">131.9gr / 277 Cal</span>
           </div>
           <div class="product-btn">
            <a href="#">
                <i class="fas fa-plus"></i>
            </a>
           </div>
        </div>
    </div>
    <div class="box">
        <div class="box-head">
            <span class="title">Burger</span>
            <a href="#" class="name">Özel Meksiko Burger</a>
            <div class="image">
                <img src="images/product-2.png" alt="Special Mexico Burger" >   
            </div>
        </div>
        <div class="box-body">
           <div class="info">
            <b class="price">160 TL</b>
            <span class="amount">125gr / 350 Cal</span>
           </div>
           <div class="product-btn">
            <a href="#">
                <i class="fas fa-plus"></i>
            </a>
           </div>
        </div>
    </div>
    <div class="box">
        <div class="box-head">
            <span class="title">Burger</span>
            <a href="#" class="name">Özel Döner Burger</a>
            <div class="image">
                <img src="images/dark-product.png" alt="Special Mexico Burger">   
            </div>
        </div>
        <div class="box-body">
           <div class="info">
            <b class="price">170 TL</b>
            <span class="amount">135gr / 400 Cal</span>
           </div>
           <div class="product-btn">
            <a href="#">
                <i class="fas fa-plus"></i>
            </a>
           </div>
        </div>
    </div>
    </div>
    </section>

    <!--Product Section End-->

     <!--About Section Start-->

     <section class="about">
        <h1 class="heading">Hakkımızda</h1> 
        <div class="about-container">
            <div class="image">
            <img src="images/about.jpg" alt="hamburger with fried potatoes" width="50%">
        </div>
        <div class="content">
            <h1>Bu güzelim lezzetlerin sırrı nerede saklı?</h1>
            <p>Bu lezzet tarif edilemez.Şaka şaka gerçekten böyle lezzetlerin sırrını öğrenmek istiyorsanız <br><a href="https://www.linkedin.com/in/serdar-alkan-ab5233270/" target="_blank" style="color: black;"><i class="fa-brands fa-linkedin fa-bounce" style="color: #0A66C2;"></i> Linkedin hesabımdan bana ulaşın.</a><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nostrum, et a corporis mollitia dicta, eos asperiores doloribus reprehenderit eius omnis vero quae suscipit possimus dolores dolore dolorum ipsam. Sed quas ullam optio asperiores, incidunt ipsam praesentium. Repellat recusandae minima aspernatur odio iste sunt vel placeat maiores non neque. In.</p>
            <a href="#" class="btn">Daha Fazla Bilgi Edinin</a>
        </div>
        
        </div>

     </section>
     <!--About Section End-->

 <!--Review Section Start-->
  <section class="review">
    <h1 class="heading">Müşteri Yorumları</h1> 
    <div class="box-container">
        <div class="box">
            <img src="images/quote.png" alt="quote">
            <p>Aman Allah'ım bu nasıl bir lezzet böyle ben hayatımda böyle bir lezzet görmedim.Mutlaka gelmelisiniz buraya.Bundan böyle favori restaurantım burası.</p>
             <img src="images/s8010tiZ_400x400.jpg" alt="somer-cheff" class="user">
             <h3>Somer Şef</h3>
             <div class="stars">
                <i class="fa-solid fa-star fa-bounce"></i>
                <i class="fa-solid fa-star fa-bounce"></i>
                <i class="fa-solid fa-star fa-bounce"></i>
                <i class="fa-solid fa-star-half fa-bounce"></i>
             </div>
        </div>
        <div class="box">
            <img src="images/quote.png" alt="quote">
            <p>Yemekler şahane bu lezzetlere ek olarak tavuklarla ilgili lezzetler gelirse çok güzel olur.Özellikle tavuklu pizza ve kızarmış tavuk burger denemeyi çok isterim.</p>
             <img src="images/atik_sef.png" alt="atik-cheff" class="user">
             <h3>Atike Şef</h3>
             <div class="stars">
                <i class="fa-solid fa-star fa-bounce"></i>
                <i class="fa-solid fa-star fa-bounce"></i>
                <i class="fa-solid fa-star fa-bounce"></i>
                <i class="fa-solid fa-star-half fa-bounce"></i>
             </div>
        </div>
        <div class="box">
            <img src="images/quote.png" alt="quote">
            <p>Restaurantın sahibi olduğumdan demiyorum başka yere gitmem hep burda yerim şahaneeeee lezzet.Şeflerimi tebrik ediyorum ailecek favori mekanımız burası.</p>
             <img src="images/benkamil.jpg" alt="serdar-cheff" class="user">
             <h3>Serdar Şef</h3>
             <div class="stars">
                <i class="fa-solid fa-star fa-bounce"></i>
                <i class="fa-solid fa-star fa-bounce"></i>
                <i class="fa-solid fa-star fa-bounce"></i>
                <i class="fa-solid fa-star fa-bounce"></i>
             </div>
        </div>
        <div class="box">
            <img src="images/quote.png" alt="quote">
            <p>Normalde hiç bir yemeği beğenmem annemin yemekleri dışında.Şahane bir lezzet,annemin tek rakibi bu restaurant olabilir.  </p>
             <img src="images/S6ktDSHT_400x400.jpg" alt="mehmet-cheff" class="user">
             <h3>Mehmet Şef</h3>
             <div class="stars">
                <i class="fa-solid fa-star fa-bounce"></i>
                <i class="fa-solid fa-star fa-bounce"></i>
                <i class="fa-solid fa-star fa-bounce"></i>
                <i class="fa-solid fa-star-half fa-bounce"></i>
             </div>
        </div>
    </div>
  </section>

 <!--Review Section End-->


  <!--Contact Section Start-->
 <section class="contact">
    <h1 class="heading">Bize Ulaşın</h1> 
    <div class="box-container">
        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Kosova,%20Veysel%20Karani%20Cd.%20No:131/A,%2042250%20Sel%C3%A7uklu/Konya+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe>
    <form action="">

        <h3>Bizimle İletişime Geçin</h3>
            <div class="input-box"> 
                <i class="fas fa-user"></i>
            <input type="text"placeholder="İsminizi giriniz">
        </div>
        
        <div class="input-box">  
            <i class="fas fa-envelope"></i>
            <input type="email"placeholder="Mail adresinizi giriniz">
        </div>
       
             <div class="input-box">  
                <i class="fas fa-phone"></i>
            <input type="number"placeholder="Telefon numaranızı giriniz">
        </div>
        <button class="btn" type="submit">Şimdi İletişime Geçin</button>
        </div>
        

    </form>
 </section>


  <!--Contact Section End-->

  <!--Blogs Section Start-->
   <section class="blogs">
    <h1 class="heading">Blog</h1> 
    <div class="box-container">
        <div class="box">
            <div class="image">
            <img src="images/blog-1.jpg" alt="blog-1">    
            </div>
            <div class="content">
                <a href="#" class="title">Islak hamburger nasıl yapılır?</a>
            </div>
            <span style="color: black;">Serdar Şef / 10 Mart, 2022</span>
            <p>İlk olarak köfteleri hazırlayın. İsteğinize göre dana, hindi veya tavuk etinden köfteler yapabilirsiniz. Köfteleri şekillendirin ve pişirin.
                Köfteleri pişirirken, bir tavada veya ızgarada hamburger ekmeğini hafifçe ısıtın.
                Ekmeğin alt kısmına isteğinize göre sosları sürün (ketçap, mayonez, hardal vb.).
                Üzerine pişmiş köfteyi yerleştirin.
                Köftenin üzerine kaşar peyniri dilimlerini koyun ve biraz erimesi için üzerine bir kapak kapatın veya biraz bekleyin.
                Diğer tarafta, soğan, domates ve turşuyu hazırlayın.
                Kaşar peyniri eridikten sonra, üzerine isteğinize göre soğan, domates ve turşu dilimlerini ekleyin.
                Ekmeğin üst kısmını kapatın ve servis yapmadan önce isteğe bağlı olarak turşu suyu ile ıslatın.
                Islak hamburgeriniz hazır! <br> <span style="color: black; font-size:larger;">Afiyet olsun!</span></p>
            <a href="#" class="btn">Devamını okuyun</a>
        </div>
        <div class="box">
            <div class="image">
            <img src="images/blog-2.jpg" alt="blog-2">
            </div>
            <div class="content">
                <a href="#" class="title">Hamburger Nasıl Yenmeli?</a>
            </div>
            <span style="color: black;">Somer Şef / 12 Nisan, 2022</span><br>
            <p><span style="font-size: larger; color: black">Hamburgeri tutma </span><br> Hamburgeri yemek için en yaygın yöntemlerden biri, iki elinizle hamburgeri tutmaktır. Hamburgeri sıkıca kavrayın ancak çok sıkmayın, aksi takdirde malzemeleri dışarıya sıkabilirsiniz.<br>

                <span style="font-size: larger; color: black">Yavaş yiyin</span><br> Hamburgeri yavaşça yemeye özen gösterin. Bu, lezzetin tadını çıkarmanıza ve doymuş hissetmenize yardımcı olacaktır.<br>
                
                <span style="font-size: larger; color: black">Düzenli ısırıklar alın</span><br> Hamburgeri yemek için düzenli ısırıklar alın. Bu, hamburgerin her bir bileşeninin tadını bir arada denemenizi sağlar.<br>
                
                <span style="font-size: larger; color: black">Lezzetleri karıştırın</span><br> Hamburgerdeki farklı lezzetleri deneyimlemek için malzemeleri karıştırabilirsiniz. Örneğin, her ısırıkta biraz et, peynir, marul ve sos almak için hamburgeri döndürebilirsiniz.<br>
                
                <span style="font-size: larger; color: black">Sosları kullanın</span><br> Hamburgerinizi soslarla lezzetlendirebilirsiniz. Klasik olarak ketçap, mayonez ve hardal gibi soslar tercih edilebilir. Ancak, kişisel tercihinize göre farklı soslar da kullanabilirsiniz.<br>
                
                <span style="font-size: larger; color: black">Eşlik eden yiyeceklerle tamamlayın</span><br> Hamburgerinizi patates kızartması, mısır cipsi veya turşu gibi eşlik eden yiyeceklerle tamamlayabilirsiniz. Bu, lezzetli bir fast-food deneyimi sunar.</p><br>
            <a href="#" class="btn">Devamını okuyun</a>
        </div>
        <div class="box">
            <div class="image">
            <img src="images/blog-3.jpg" alt="blog-3">    
            </div>
            <div class="content">
                <a href="#" class="title">Sunum neden çok önemli?</a>
            </div>
            <span style="color: black;">Mehmet Şef / 24 Haziran, 2022</span>
            <p><span style="font-size: larger; color: black;">İştahı artırır</span><br> İyi bir şekilde sunulmuş bir hamburger, göz alıcı ve çekici görünebilir. Bu, insanların iştahını artırabilir ve hamburgeri yemeye daha istekli hale getirebilir.<br>

                <span style="font-size: larger; color: black;">Lezzeti vurgular</span><br> Hamburgerin doğru bir şekilde sunulması, içindeki malzemelerin ve lezzetlerin vurgulanmasını sağlar. Renkli malzemelerin düzenli ve estetik bir şekilde yerleştirilmesi, hamburgerin lezzetini gösterir.<br>
                
                <span style="font-size: larger; color: black;">Profesyonel bir imaj yaratır</span><br> Restoranlar ve kafeler gibi işletmeler için, hamburgerin dikkat çekici bir şekilde sunulması, müşterilere profesyonel bir izlenim verir. Bu da müşterilerin tekrar gelme olasılığını artırabilir.<br>
                
                <span style="font-size: larger; color: black;">Marka imajını güçlendirir</span><br> Hamburgerin sunumu, bir restoran veya fast-food zincirinin marka imajını yansıtabilir. Markaya özgü sunum tarzları, müşterilerin markayı tanıması ve hatırlaması için önemlidir.<br>
                
                <span style="font-size: larger; color: black;">İnstagram ve diğer medya etkileşimleri için önemli</span><br> Görsel olarak çekici bir hamburger, müşterilerin sosyal medya platformlarında paylaşma olasılığını artırabilir. Bu da restoranın veya markanın tanıtımına yardımcı olabilir.<br>
                
                Kalite algısını etkiler: Hamburgerin dikkatlice ve özenle sunulması, müşterilere kaliteli bir yeme deneyimi sunduğu algısını yaratır. Bu da müşteri memnuniyetini artırabilir.</p>
            <a href="#" class="btn">Devamını okuyun</a>
        </div>
    </div>
   </section>

   <!--Footer Start-->
   <footer>
     <div class="footer-container">

     
        <div class="search">
         <form action="">
         <input type="text" placeholder="Ara">
        <button class="btn-3">Ara</button> 
         </form>
        
         
        </div>
        <div class="items-icon">
           <a href="#"><i class="fa-brands fa-facebook fa-bounce" target="_blank"></i></a>
           <a href="#"><i class="fa-brands fa-twitter fa-bounce" target="_blank"></i></i></a>
           <a href="https://www.instagram.com/k.umutarazz/" target="_blank"><i class="fa-brands fa-instagram fa-bounce"></i></a>
           <a href="https://www.linkedin.com/https://www.linkedin.com/in/kamil-umut-araz-56712629a//" target="_blank"><i class="fa-brands fa-linkedin fa-bounce"></i></a>
           <a href="#"><i class="fa-brands fa-pinterest fa-bounce" target="_blank"></i></a>      
           <a href="https://github.com/arazumut" target="_blank"><i class="fa-brands fa-github fa-bounce"></i>  </a>      

          
        </div>

        <div class="items-sections">
            <a href="index.html" class="btn-2 active">Menü</a>
            <a href="about.html" class="btn-2">Hakkımızda</a>
            <a href="menu.html" class="btn-2">Menü</a>
            <a href="products.html" class="btn-2">Şefin Spesialleri</a>
            <a href="review.html" class="btn-2">Eleştiriler</a>
            <a href="contact.html" class="btn-2">İletişim</a>
            <a href="blogs.html" class="btn-2">Blog</a>
        </div>

        <p><span>Kamil Umut Araz</span> tarafından oluşturulmuştur | Her hakkı saklıdır</p>    
    </div>

   </footer>

   <!--Footer End-->


</body>

</html>
<script src="js/script.js"></script>
<?php

$pythonScript = 'yüzalgılama.py';
$result = shell_exec("python3 $pythonScript");

echo $result;
?>
