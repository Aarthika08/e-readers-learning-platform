<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<head>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    
<link href="abt.css" rel="stylesheet"/>
<style>
 .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  .topnav a.active {
    background-color: #04AA6D;
    color: white;
  }
</style>
</head>
<body>
<h1>About us</h1>
 <!-- <ul>
 <li>Home</li>
 <li>About us</li>
 <li>contanct us</li>
 <li>visit</li>
 <li>write</li>
 <li>Login</li>
 </ul> -->
 <div class="topnav" style="overflow: hidden;
    background-color: #333;">
  <a style=" float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;" class="active" href="#home">Home</a>
  <a href="#news" style=" float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;">News</a>
  <a href="#contact" style=" float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;">Contact</a>
  <a href="#about" style=" float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;">About</a>
</div>
<div id="main">
<div>
<img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=656,h=814,fit=crop/presson88qto/img-AGBB766zW4uV2J9M.png" alt=""/>
<img style="width:100%;height:25%" src="data:image/jpeg;base64,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" alt=""/>

</div>
    <xsl:for-each select="books/book">
    <div class="sub" >
    <h2  style="font-size:16px "><xsl:value-of select="title"/>   
    </h2>
<p style="font-size:12px "><xsl:value-of select="description"/>
</p>
</div>
</xsl:for-each>
</div>


<div class="vision" style="background:black;color:white ;display:flex">
<div class="mission" style="padding: 30px;
    margin: 50px ;">
<!-- <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=656,h=814,fit=crop/presson88qto/img-AGBB766zW4uV2J9M.png" alt=""/> -->
<h1>Mission</h1>
<p >We're on a mission to change the way the market .Rather than other services or another,we want to give a free service for the people,users,clients and all ,to use read the book.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, temporibus, quod vel odit tenetur accusantium maxime aliquam totam quia, mollitia repellendus expedita amet quidem et ipsa exercitationem nobis sint enim.
</p>
</div>
<div class="mission"  style="padding: 30px;
    margin: 50px ;">
<!-- <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=656,h=814,fit=crop/presson88qto/img-AGBB766zW4uV2J9M.png" alt=""/> -->
<h1>vision</h1>
<p>We want to live in tnhe world where people can serve the other people regardlessly.Find the good compromise from the other end .That's why we take a lot of time and care in getting our user a good use of the website.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dignissimos eum consequuntur molestiae impedit blanditiis error quod, dolorum ut, quaerat velit minus temporibus amet soluta, culpa maiores fugiat repellat quas.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore amet reprehenderit vitae non corporis iste sequi accusamus atque magnam accusantium omnis quis facilis nesciunt voluptatum commodi, veritatis ut minus architecto.
</p>
</div>
</div>

<div style="border: 1px;
border-color: black;
border-style: solid;
display: flex;
padding: 10px;
margin: 30px 50px 10px 50px;
flex-wrap: nowrap;
justify-content: space-between;
background-color: aliceblue;
">
  
  <!-- <div style="width: 800px;">
    <h1 style="width: 500px;">Contact us</h1><br>
      <form action="" method="post" style="float: left;
      width: 290px;
      font-size: 18px;
      font-style: normal;
      font-family: sans-serif;
      margin-left: 90px;">
      
        <label >FullName</label>
        <br>
        <input type="text" id="name" placeholder="Name"><br>
        <label >Email</label><br>
        <input type="email" name="email" id="email" placeholder="email address"><br>
        <label >Feedback</label><br>
<textarea name="msg" id="msg" cols="25" rows="4" placeholder="Message"></textarea>  
<input style="background-color: #2553b8;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
" type="submit" id="submit" value="submit">
    </form> -->
    <div style="width: 800px;">
    <h1>Contact us</h1>
    <form action="" method="post" style="float: left;
      width: 290px;
      font-size: 18px;
      font-style: normal;
      font-family: sans-serif;
      margin-left: 90px;">

<label >FullName</label>
<input type="text"  placeholder="Name"/>    
<br/>
<label >Email</label>
<input type="email" name="email" id="email"/>
<br/>
<label >Feedback</label>
<br/>
<textarea name="msg" id="msg" cols="25" rows="4" placeholder="Message"></textarea>  
<input style="background-color: #2553b8;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
" type="submit" id="submit" value="submit"/>
      </form>
      </div>
      <div>
  <br/><br/>
  <span class="fa fa-map-marker">Address</span>
  <p class="text"> 198 West 21th Street, Suite 721 New York NY 10016</p>

  <span class="fa fa-phone">Phone:</span>
  <p><a href="tel://1234567920">+ 1235 2355 98</a></p>

  <span class="fa fa-paper-plane">Email</span>
    

    <p><a href="/cdn-cgi/l/email-protection#0a63646c654a73657f7879637e6f24696567"><span class="__cf_email__" data-cfemail="41282f272e01382e3433322835246f222e2c">[email&#160;protected]</span></a></p>
    <span class="fa fa-globe">Website</span>
  <p> <a href="#">yoursite.com</a></p>
</div>
  <!-- <iframe style="width: 600px; height: 400px; float: right;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.025053893657!2d78.0789779748951!3d9.882132090217358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c58f98cfb84d%3A0x29f51efea3e84bf2!2sThiagarajar%20College%20of%20Engineering!5e1!3m2!1sen!2sin!4v1683460710319!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

      <!-- <div style="width: 980px; float: right;" >
        
  <iframe style="width: 600px; height: 400px; float: right;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.025053893657!2d78.0789779748951!3d9.882132090217358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c58f98cfb84d%3A0x29f51efea3e84bf2!2sThiagarajar%20College%20of%20Engineering!5e1!3m2!1sen!2sin!4v1683460710319!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> -->
      

  </div>

  


</body>
</html>
</xsl:template>
</xsl:stylesheet>
