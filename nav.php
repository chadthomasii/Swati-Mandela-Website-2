
<style>

nav
{
    box-shadow: 0 4px 2px -2px rgba(0,0,0,.2);

}

ul {
      margin: 0;
      padding: 0;
      list-style-type: none;
      background: #fff;
      position: relative;

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
 
ul li:hover {
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
 
@media(max-width: 768px) {
      nav div {
            display: block;
      }
 
      ul {
            display: none;
            position: static;
            background: #fff;
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

<nav>

    <div>
    
        <i class="fa fa-bars"></i>
    </div>

    <ul class="main-menu">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="#">Speaking <i class="fas fa-caret-down"></i></a>
        
            <ul class="sub-menu">
                <li><a href="PressKit.docx">Press Kit</a></li>
                <li><a href="/reviews">Reviews</a></li>

            </ul>
        </li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>