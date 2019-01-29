
<style>

.navigation
{
    box-shadow: 0 4px 2px -2px rgba(0,0,0,.2);

}



ul {
    margin: 0 auto;
    padding: 0;
    list-style-type: none;
    background: #fff;
    position: relative;
    max-width: 1200px;
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

ul section h1
{
    font-family: "Pacifico";
    font-size: 28px;
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
    }

    nav div h1 
    {
        float: right;
        color: var(--main-color);
        font-family: "Pacifico";
        font-size: 23px;
        margin-right: 20px;
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
        <h1 class="logo-text">Swati</h1>
        <i class="fa fa-bars"></i>
    </div>

    <ul class="main-menu">

        <section>
            <h1>Swati</h1>
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