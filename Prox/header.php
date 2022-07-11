
        <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand" href="./" style="transform: scale(1);margin: 0px 0px 0px 0px;">pro x</a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
<?php
        
    if(isset($_SESSION['user_name']))
    {   

?>
                    <<ul class="navbar-nav ms-auto">
                        <li class="nav-item nav-link"><a class="nav-link active" href="./">Home</a></li>
                        <li class="nav-item nav-link"><a class="nav-link active nav-link" href="./about.php">About</a></li>
                        <li class="nav-item nav-link"><a class="nav-link active" href="./cart.php">cart</a></li>
                        <li class="nav-item nav-link"><a class="nav-link active"><?php print_r($_SESSION['user_name']['user_name']) ?></a></li>
                        <li class="nav-item nav-link"><a class="nav-link active" href="./logout.php">logout</a></li>
                        
                    </ul>

<?php 
    }
    else
    {
?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item nav-link"><a class="nav-link active" href="./">Home</a></li>
                        <li class="nav-item nav-link"><a class="nav-link active nav-link" href="./about.php">About</a></li>
                        <li class="nav-item nav-link"><a class="nav-link active" href="./login.php">login</a></li>
                        <li class="nav-item nav-link"><a class="nav-link active" href="./signup-page.php">signup</a></li>
                        <li class="nav-item nav-link"><a class="nav-link active" href="./cart.php">cart</a></li>
                    </ul>
<?php
    }
?>
                </div>
                <div></div>
            </div>
        </nav>
        