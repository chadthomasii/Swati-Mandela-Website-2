
<style>

.navigation
{

}

nav ul
{
    box-shadow: 0 4px 2px -2px rgba(0,0,0,.2);

}

ul {
    margin: 0 auto;
    list-style-type: none;
    background: #fff;
    position: relative;
    max-width: 1200px;
    z-index: 10;

}


.main-menu::after 
{
  content: "";
  clear: both;
  display: table;
}

.main-menu > li
{
    float: right;
}


.main-menu > li:nth-child(2)
{
    margin-right: 15px;
}

ul section
{
    color: var(--main-color);
    display: inline-block;
    margin-left: 15px;
    
}

ul section img
{
    height: 43px;
    cursor:pointer;
}

 
ul section a
{
    cursor: pointer;
    font-size: 1.2em;
    padding: 0px 2px;
    text-decoration: none;
    color: var(--main-color);
    transition: all 0.1s ease-in-out;
}

ul section a:hover
{
    color: #60afde;
    transform: scale(1.2);
    
}

.main-menu section:nth-child(4)
{
    margin-right: 10px;
}

ul li {
      display: inline-block;
}
 
ul li a {
      color: var(--main-color);
      text-decoration: none;
      padding: 15px;
      display: block;
}
 
.navigation ul li:hover {
    background-color: #f3f3f3;
}

 
ul ul {
      position: absolute;
      min-width: 200px;
      background: lightgrey;
      display: none;
}
 
ul ul li {
      display: block;
      background: #fff;
}
 
ul li:hover ul {
      display: block;
}
 
ul li i {
      color: var(--main-color);
      float: right;
      padding-left: 5px;
}
 
nav div {
      background: #fff;
      color: var(--text-color);
      font-size: 24px;
      padding: 0.6em;
      cursor: pointer;
      display: none;
}
 
@media(max-width: 768px) 
{
    nav div {
        display: block;
        border-bottom: solid 2px var(--main-color);
        padding-bottom: 0px;
    }

    nav div::after 
    {
    content: "";
    clear: both;
    display: table;
    }

    nav div i 
    {
        font-size: 40px;
        margin-top:10px;
    }

    nav div h1 
    {
        float: right;
        color: var(--main-color);
        font-family: "Pacifico";
        font-size: 30px;
        margin-right: 3px;
    }

    nav div h1 img
    {
        height: 50px;
        cursor:pointer;
    }

    nav div h1 a
    {
        text-decoration: none;
        color: var(--main-color);
        font-size: 0.8em;
    }

    .navigation ul {
        display: none;
        position: static;
        background: #fff;
    }

    ul section 
    {
        display: none;
    }

    .main-menu > li
    {
        float: none;
    }

    .main-menu > li:nth-child(2)
    {
        margin-right: 0px;
    }

    ul li {
        display: block;
    }

    ul ul {
        position: static;
        background: #fff;
    }
}

</style>

<nav class="navigation">

    

    <div>
        <h1 class="logo-text"><img src="img/logo.png">
            <a class="fab fa-instagram  left-padding"href="https://instagram.com" target="_blank" style="padding-left: 10px"></a>
            <a class="fab fa-linkedin "href="https://linkedin.com" target="_blank"></a>
            <a class="fab fa-twitter "href="https://twitter.com" target="_blank"></a>
            <a class="fab fa-facebook "href="https://facebook.com" target="_blank"></a>
        </h1>
        
        <i class="fa fa-bars"></i>

        
    </div>

    <ul class="main-menu">

        <section>
            <a href="/"><img src="img/logo.png"></a>
            <a class="fab fa-instagram  "href="https://instagram.com" target="_blank" style="padding-left: 3px"></a>
            <a class="fab fa-linkedin "href="https://linkedin.com" target="_blank"></a>
            <a class="fab fa-twitter "href="https://twitter.com" target="_blank"></a>
            <a class="fab fa-facebook "href="https://facebook.com" target="_blank"></a>
            
            
        </section>
        
        <li><a href="/contact">Contact</a></li>
        <li><a href="#">Speaking <i class="fas fa-caret-down"></i></a>
            <ul class="sub-menu">
                <li><a href="PressKit.docx">Press Kit</a></li>
                <li><a href="/reviews">Reviews</a></li>

            </ul>
        </li>
        <li><a href="/about">About</a></li>
        <li><a href="/">Home</a></li>
        
    </ul>
</nav>