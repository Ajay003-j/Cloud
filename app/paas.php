<?php
session_start();
if (empty($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PaaS Service - CloudApp</title>
<style>
/* Global */
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI', Tahoma, sans-serif;}
body{background:#f9f9f9;color:#333;line-height:1.6;}
a{text-decoration:none;color:#0072ff;}
a:hover{text-decoration:underline;}

/* Header */
header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 50px;
    background:#fff;
    box-shadow:0 2px 6px rgba(0,0,0,0.1);
}
header h1{font-size:24px;font-weight:700;}
nav a{margin-left:20px;font-weight:500;color:#333;}
nav a:hover{color:#0072ff;}

/* Hero Section */
.hero{
    background: linear-gradient(180deg,#00c6ff,#0072ff);
    color:#fff;
    text-align:center;
    padding:100px 20px;
}
.hero h2{font-size:48px;margin-bottom:20px;}
.hero p{font-size:18px;max-width:700px;margin:0 auto 30px auto;}
.hero button{
    padding:15px 30px;
    font-size:16px;
    font-weight:600;
    color:#0072ff;
    background:#fff;
    border:none;
    border-radius:6px;
    cursor:pointer;
}
.hero button:hover{background:#f0f0f0;}

/* Content Section */
.content{
    max-width:1000px;
    margin:50px auto;
    padding:0 20px;
}

/* Description */
.description{
    margin-bottom:40px;
}
.description h3{font-size:24px;margin-bottom:15px;color:#0072ff;}
.description p{font-size:16px;color:#555;}

/* Pricing Section */
.pricing{
    display:flex;
    flex-wrap:wrap;
    gap:20px;
    margin-bottom:50px;
}
.price-card{
    background:#fff;
    border-radius:12px;
    padding:30px;
    width:300px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    transition:transform 0.2s,box-shadow 0.2s;
}
.price-card:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
}
.price-card h4{font-size:20px;margin-bottom:10px;color:#0072ff;}
.price-card p{font-size:14px;margin-bottom:15px;}
.price-card .price{font-size:24px;font-weight:bold;margin-bottom:15px;}

/* Features Section */
.features{
    display:flex;
    flex-wrap:wrap;
    gap:20px;
    margin-bottom:50px;
}
.feature-card{
    background:#fff;
    border-radius:12px;
    padding:25px;
    width:300px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}
.feature-card h4{font-size:18px;margin-bottom:10px;color:#0072ff;}
.feature-card p{font-size:14px;color:#555;}

/* Footer */
footer{
    text-align:center;
    padding:30px;
    background:#f1f1f1;
    color:#333;
    font-size:14px;
}

/* Responsive */
@media(max-width:768px){
    header{flex-direction:column;align-items:flex-start;}
    nav{margin-top:10px;}
    .pricing,.features{flex-direction:column;align-items:center;}
}
</style>
</head>
<body>

<header>
    <h1>CloudApp</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="#">PaaS</a>
        <a href="iaas.php">IaaS</a>
        <a href="#">VPN</a>
        <a href="login.php">Login</a>
    </nav>
</header>

<section class="hero">
    <h2>PaaS Service</h2>
    <p>Powerful Platform as a Service for your cloud applications. Deploy and manage applications with ease, using scalable infrastructure and built-in services.</p>
    <button>Launch PaaS</button>
</section>

<div class="content">

    <!-- Description Section -->
    <div class="description">
        <h3>Per-Second Billing</h3>
        <p>Per-second billing removes the cost of unused compute time from your bill. This particularly helps workloads that run over irregular time periods. Amazon EC2 usage is billed in one-second increments, with a minimum of 60 seconds. The same is true for provisioned storage for Amazon Elastic Block Store (Amazon EBS) volumes. Per-second billing applies to all purchase options. It's available across all Regions and Availability Zones for these instances:</p>
        <ul>
            <li>Amazon Linux</li>
            <li>Windows</li>
            <li>Red Hat Enterprise Linux</li>
            <li>Ubuntu</li>
            <li>Ubuntu Pro</li>
        </ul>
    </div>

    <!-- Pricing Section -->
    <h3 style="color:#0072ff;margin-bottom:20px;">Pricing</h3>
    <div class="pricing">
        <div class="price-card">
            <h4>Free Tier</h4>
            <p class="price">Free</p>
            <p>1 vCPU, 1GB RAM, 10GB Storage</p>
            <p>Use basic compute resources at no cost for trial purposes.</p>
        </div>
        <div class="price-card">
            <h4>Paid Tier</h4>
            <p class="price">$0.05 / Hour</p>
            <p>Custom vCPU, RAM, Storage options</p>
            <p>Flexible billing for production workloads with premium features.</p>
        </div>
    </div>

    <!-- Features Section -->
    <h3 style="color:#0072ff;margin-bottom:20px;">Key Features</h3>
    <div class="features">
        <div class="feature-card">
            <h4>Scalable Compute</h4>
            <p>Launch virtual machines on-demand and scale capacity up or down automatically.</p>
        </div>
        <div class="feature-card">
            <h4>Secure Storage</h4>
            <p>Persistent storage options with encryption and high durability.</p>
        </div>
        <div class="feature-card">
            <h4>Global Availability</h4>
            <p>Deploy instances across multiple regions and availability zones for high availability.</p>
        </div>
        <div class="feature-card">
            <h4>Flexible OS Support</h4>
            <p>Run your workloads on Linux, Windows, Ubuntu, Red Hat, and more.</p>
        </div>
    </div>

</div>

<footer>
    &copy; 2025 CloudApp. All rights reserved.
</footer>

</body>
</html>
