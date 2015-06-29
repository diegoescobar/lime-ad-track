        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Home
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                        
                        
                        <div> <!-- if you need user information, just put them into the $_SESSION variable and output them here -->
							Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
							Try to close this browser tab and open it again. Still logged in! ;)
							
							<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
							<a href="index.php?logout">Logout</a>
							                        
                        
                        <pre><?php get_clicks(); ?></pre></div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->