<!DOCTYPE html>
<html lang="en">

<title>My Dashboard</title>
<link rel="stylesheet" href="../css/styles.css">
<?php include "./subheader_small_business_views.php"; ?>

<div class="dashboard-body">
    <h1 class="dashboard-title">Dashboard</h1>
    <h4 class="user-name">Welcome, Raiyan Al Sultan</h4>

    <div class="recent-expense">
        <div class="current-balace-div">
            <h2 class="current-balance-title">CURRENT BALANCE</h2>
            <h3 class="balance-amount">$40,0000</h3>
        </div>
        <div class="recent-expense-list">
            <h3 class="recent-expense-title">Recent Expenses</h3>
            <p class="date">06 Jan, 2024</p>
            <!-- expense cart -->
            <?php 
                for ($i=0; $i < 3; $i++){
                    include "./expenses_card_views.php";
                }
            ?>
        </div>
    </div>
</div>


<!-- animation on scroll js  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>