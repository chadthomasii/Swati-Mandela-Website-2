
<style>

nav ul
{
    margin: 0;
    padding: 0;
    list-style-type: none;
    background-color: #fff;
    position: relative;
}

nav li
{
    display: inline-block;
    cursor:pointer;
}

nav ul li a
{
    color: var(--main-color);
    text-decoration: none;
    padding: 15px;
    display: block;

}
nav ul li:hover [href]
{
    color: #fff;
}

ul li:hover,
ul li:hover ul li
{
    background-color:var(--main-color);

}


/* Sub Menu */

nav ul ul
{
    position: absolute;
    min-width: 200px;
}

ul ul li
{
    display: block;
}




</style>

<nav>
    <ul>
        <li><a class="tag" href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="#">Speaking</a>
        
            <ul>
                <li><a href="PressKit.docx">Press Kit</a></li>
                <li><a href="/reviews">Reviews</a></li>

            </ul>
        </li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>