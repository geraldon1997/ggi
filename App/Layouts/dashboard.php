<?php
use App\Models\User;

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= ASSETS; ?>dashboard/css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="<?= ASSETS; ?>dashboard/js/chart-js-config.js"></script>
    <script src="<?= ASSETS; ?>dashboard/js/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="<?= ASSETS; ?>images/ggl-logo.png" type="image/x-icon">
    <title><?= APP_NAME; ?></title>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="<?= DASHBOARD; ?>" class="spur-logo"><i class="fas fa-bolt"></i> <span><?= APP_ABBRV; ?></span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="<?= DASHBOARD; ?>" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>

                <?php if (User::userRole() === 'admin') : ?>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-users"></i> Users </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="<?= ACTIVE_MEMBERS; ?>" class="dash-nav-dropdown-item">Active members</a>
                        <a href="<?= INACTIVE_MEMBERS; ?>" class="dash-nav-dropdown-item">Inactive members</a>
                        <a href="<?= MODERATORS; ?>" class="dash-nav-dropdown-item">Moderators</a>

                    </div>
                </div>
                <?php endif; ?>

                <?php if (User::isMember() && User::hasProfile() || User::isAdmin() || USER::isModerator()) : ?>
                <div class="dash-nav-dropdown ">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-cube"></i> Investments </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="<?= ACTIVE_INVESTMENT; ?>" class="dash-nav-dropdown-item">Active</a>
                        <a href="<?= PENDING_INVESTMENT; ?>" class="dash-nav-dropdown-item">Pending</a>
                        <a href="<?= COMPLETED_INVESTMENT; ?>" class="dash-nav-dropdown-item">Completed</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-file"></i> Withdrawals </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="<?= PENDING_WITHDRAWAL; ?>" class="dash-nav-dropdown-item">Pending</a>
                        <a href="<?= COMPLETED_WITHDRAWAL; ?>" class="dash-nav-dropdown-item">Completed</a>
                    </div>
                </div>
                
                <a href="<?= WALLET; ?>" class="dash-nav-item">
                        <i class="fas fa-wallet"></i> Wallet
                </a>
                
                <a href="<?= REFERRALS; ?>" class="dash-nav-item">
                    <i class="fas fa-user-friends"></i> Referrals
                </a>

                <a href="<?= BONUS; ?>" class="dash-nav-item">
                    <i class="fas fa-plus-square"></i> Bonus
                </a>
                <?php endif; ?>
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                
                <i>welcome back, <b><?= $_SESSION['email']; ?></b></i>
                <div class="tools">
                
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="<?= PROFILE; ?>">Profile</a>
                            <button class="dropdown-item" id="logout">Logout</button>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    {{content}}
                </div>
                
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= ASSETS; ?>dashboard/js/spur.js"></script>
    <script src="<?= ASSETS; ?>dashboard/js/jquery-2.2.4.min.js"></script>

    <script>
        $('#logout').click(()=>{
            $.ajax({
                type : 'POST',
                url : '/user/logout',
                data : {
                    logout : 1
                },
                success : (response) => {
                    if (response) {
                        setTimeout(()=>{
                            window.location = '/user/signin'
                        }, 1000);
                    }
                }
            });
        });
    </script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fc8a821a1d54c18d8efeef2/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>