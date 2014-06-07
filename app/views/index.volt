<!DOCTYPE html>
<html>
	<head>
		<title>Phalcon PHP Framework</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        {{ assets.outputCss() }}
	</head>


	<body>


    <div id="wrapper">

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Expandir Navegaci&oacute;</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/blog">Gestion Transparente</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav verticalLeftBar">
                    <li>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar Entidad" id="query" name="query" value="">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
                            </div>
                        </div>

                        <ul class="SearchList">
                            <?php foreach ($categories as $category) { ?>
                            <?php if ($category->type == 0 && ($category->category_parent_id == 0)) { ?>
                            <li>
                                <a href="/blog/projects/"><?php print $category->name; ?></a>
                                <ul>
                                    <?php foreach ($subCategories as $subCategory) { ?>
                                    <?php if ($subCategory->type == 0 && ($subCategory->category_parent_id == $category->id)) { ?>
                                    <li>
                                        <a href="/blog/projects/"><?php print $subCategory->name; ?></a>
                                    </li>
                                    <?php } ?>
                                    <?php } ?>
                                </ul>
                            </li>
                            <?php } ?>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </nav>


        <div id="page-wrapper" class="navigation">
            <!--<div class="home"></div>-->
        </div>



		{{ content() }}

        {{ assets.outputJs() }}


        <!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    </body>
</html>