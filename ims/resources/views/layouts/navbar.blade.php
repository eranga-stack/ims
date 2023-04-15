

<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  
}
a {
    color: inherit;
    text-decoration: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

</style>
</head>

<ul>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"></form>
  <button style="float:right;padding: 14px 14px"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
  </button>

</ul>


