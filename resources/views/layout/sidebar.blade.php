
<style>
		:root {
    --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont,
    "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}


* {
    padding: 0;
    margin: 0;
    border: none;
}

*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

nav {
    display: block;
}

body {
    margin: 0;
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
    Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 16px;
    font-weight: 400;
    line-height: 1.5;
    color: #515151;
    text-align: left;
    background-color: #deaee9;
}

h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

a {
    color: #3f84fc;
    text-decoration: none;
    background-color: transparent;
}

a:hover {
    color: #0458eb;
    text-decoration: underline;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: "Nunito", sans-serif;
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}

h1, .h1 {
    font-size: 2.5rem;
    font-weight: normal;
}



.dashboard-app {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-flex: 2;
    -webkit-flex-grow: 2;
    -ms-flex-positive: 2;
    flex-grow: 2;
    margin-top: 84px;
}



.dashboard-nav {
    /* min-width: 238px; */
    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;
    overflow: auto;
    background-color:darkcyan;
}



.dashboard-nav header {
    min-height: 84px;
    padding: 8px 27px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: aqua;
}



.dashboard-nav a {
    color: #100606;
}

.dashboard-nav a:hover {
    text-decoration: none;
}

.dashboard-nav {
    background-color: darkcyan;
}

.dashboard-nav a {
    color: #fff;
}



.dashboard-nav-item {
    min-height: 56px;
    padding: 8px 20px 8px 70px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    letter-spacing: 0.02em;
    transition: ease-out 0.5s;
}

.dashboard-nav-item i {
    width: 36px;
    font-size: 19px;
    margin-left: -40px;
}

.dashboard-nav-item:hover {
    background: #5cb85c;;
}
..dashboard-nav-list{
    background-color: darkcyan;
}



.nav-item-divider {
    height: 1px;
    margin: 1rem 0;
    overflow: hidden;
    background-color: rgba(236, 238, 239, 0.3);
}

@media (min-width: 992px) {
    .dashboard-app {
        margin-left: 238px;
    }

    .dashboard-compact .dashboard-app {
        margin-left: 0;
    }
}


@media (max-width: 768px) {
    .dashboard-content {
        padding: 15px 0px;
    }
}

@media (max-width: 992px) {
    .dashboard-nav {
        display: none;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        z-index: 1070;
    }

    .dashboard-nav.mobile-show {
        display: block;
    }
}

@media (max-width: 992px) {
    .dashboard-nav header .menu-toggle {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }
}

@media (min-width: 992px) {
    .dashboard-toolbar {
        left: 238px;
    }

    .dashboard-compact .dashboard-toolbar {
        left: 0;
    }
}



.box
{
  position:relative;
  width:100%;
  height:80px;
  /* background:blue; */
  overflow:hidden;

}
.box-search
{
  /* position: absolute; */
  height:60px;
  width:100%;
  background:white;
  left: 100px;
  top: 0px;
  z-index:5;
  border-top:4px solid grey;
  border-bottom:4px solid grey;

}
input[type="search"]
{
  width:100%;
  display:inline-block;
  overflow:hidden;
  border:none;
  font-size:40px;

}
*:focus {
    outline: none;
}
.box-search:before
{
  content:"";
  width:100%;
  height:66px;
  position: absolute;
  transform:skewX(25deg);
  z-index:-999;
  left: calc(0% - 70px);
  top:-4px;
  border-top:4px solid orange;
  border-right:none;
  border-left:4px solid #fff;
  border-bottom:4px solid #fff;
  background:#fff;

 box-shadow: inset 4px -4px orange ;
}
.brand-logo{
    font-size:20px;
}
.menu-toggle{
    font-size:30px;
}


	</style>

<div class="headerd" style="height: 70px;margin-left: 266px;">

  <div class="box">
      <div class="box-search">
        <input type="search" placeholder="Search ...">
      </div>
    </div>

</div>

<div class='dashboard'>
    <div class="dashboard-nav">
        <header>
            <a href="#" class="menu-toggle">Admin </a>
            <a href="#" class="brand-logo"> <span>MusicOnline</span></a>
        </header>
        <nav class="dashboard-nav-list" style="background-color: darkcyan;">
            <a href="{{ route('dashboard')}}" class="dashboard-nav-item"> Home Page</a>
            <a href="{{ route('users.index_user')}}" class="dashboard-nav-item active"> Users Management</a>
            <a href="{{ route('category.index')}}" class="dashboard-nav-item"> Categorys Management </a>
            <a href="{{ route('product.index')}}" class="dashboard-nav-item"> Products Management </a>
            {{-- <a href="#" class="dashboard-nav-item"> xxxxxxxx    </a> --}}
            <div class="nav-item-divider"></div>
            <a href="{{ route('index') }}" class="dashboard-nav-item"> View Index </a>
            <a href="{{ route('logout') }}" class="dashboard-nav-item"> Logout </a>
        </nav>
    </div>
    <div class='dashboard-app'>
        <header class='dashboard-toolbar'>
            <a href="#" class="menu-toggle"></a>
        </header>
        <div class='dashboard-content'>

        </div>
    </div>
</div>

<div class="contentd" style="height: 790px;margin-left: 266px;">


