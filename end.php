<?php 

function static_page() 
{
    echo '
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bower_components/aws-sdk/dist/aws-sdk.min.js"></script>
    <script src="js/sns.js"></script>

    ';
}

function dynamic()
{
    static_page();
    echo "
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>";
}

?>
