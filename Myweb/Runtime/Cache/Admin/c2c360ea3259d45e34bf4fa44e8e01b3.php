<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>公共头</title>

<link href="/phpstudy/Team-Project/Project/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
<link href="/phpstudy/Team-Project/Project/Public/Admin/css/datepicker3.css" rel="stylesheet">
<link href="/phpstudy/Team-Project/Project/Public/Admin/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			


			<li class="parent ">
				<a href="#">
					<span class="glyphicon glyphicon-list"></span> Dropdown <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 3
						</a>
					</li>
				</ul>
			</li>





			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Login Page</a></li>
		</ul>
		<div class="attribution">More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
        
        <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
		






		<!--/.row-->






		
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div><!--/.row-->
		


		<!-- 表格 -->

	
  <div class="bootstrap-table">
   <div class="fixed-table-toolbar">
    <div class="columns btn-group pull-right">
     <button class="btn btn-default" type="button" name="refresh" title="Refresh"><i class="glyphicon glyphicon-refresh icon-refresh"></i></button>
     <button class="btn btn-default" type="button" name="toggle" title="Toggle"><i class="glyphicon glyphicon glyphicon-list-alt icon-list-alt"></i></button>
     <div class="keep-open btn-group" title="Columns">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th icon-th"></i> <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
       <li><label><input data-field="id" value="1" checked="checked" type="checkbox" /> Item ID</label></li>
       <li><label><input data-field="name" value="2" checked="checked" type="checkbox" /> Item Name</label></li>
       <li><label><input data-field="price" value="3" checked="checked" type="checkbox" /> Item Price</label></li>
      </ul>
     </div>
    </div>
    <div class="pull-right search">
     <input class="form-control" placeholder="Search" type="text" />
    </div>
   </div>
   <div class="fixed-table-container">
    <div class="fixed-table-header">
     <table></table>
    </div>
    <div class="fixed-table-body">
     <div class="fixed-table-loading" style="top: 37px; display: none;">
      Loading, please wait…
     </div>
     <table data-toggle="table" data-url="tables/data1.json" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" class="table table-hover"> 
      <thead> 
       <tr>
        <th class="bs-checkbox " style="width: 36px; ">
         <div class="th-inner ">
          <input name="btSelectAll" type="checkbox" />
         </div>
         <div class="fht-cell"></div></th>
        <th style="">
         <div class="th-inner sortable">
          Item ID
         </div>
         <div class="fht-cell"></div></th>
        <th style="">
         <div class="th-inner sortable">
          Item Name
          <span class="order"><span class="caret" style="margin: 10px 5px;"></span></span>
         </div>
         <div class="fht-cell"></div></th>
        <th style="">
         <div class="th-inner sortable">
          Item Price
         </div>
         <div class="fht-cell"></div></th>
       </tr> 
      </thead> 
      <tbody>






       <tr data-index="0">
        <td class="bs-checkbox"><input data-index="0" name="toolbar1" type="checkbox" /></td>
        <td style="">9</td>
        <td style="">Item 9</td>
        <td style="">$9</td>
       </tr>
      
      
      
      </tbody>
     </table>
    </div>
    <div class="fixed-table-pagination">
     <div class="pull-left pagination-detail">
      <span class="pagination-info">Showing 1 to 10 of 21 rows</span>
      <span class="page-list"><span class="btn-group dropup"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="page-size">10</span> <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
         <li class="active"><a href="javascript:void(0)">10</a></li>
         <li><a href="javascript:void(0)">25</a></li>
         <li><a href="javascript:void(0)">50</a></li>
         <li><a href="javascript:void(0)">100</a></li>
        </ul></span> records per page</span>
     </div>
     <div class="pull-right pagination">
      <ul class="pagination">
       <li class="page-first disabled"><a href="javascript:void(0)">&lt;&lt;</a></li>
       <li class="page-pre disabled"><a href="javascript:void(0)">&lt;</a></li>
       <li class="page-number active disabled"><a href="javascript:void(0)">1</a></li>
       <li class="page-number"><a href="javascript:void(0)">2</a></li>
       <li class="page-number"><a href="javascript:void(0)">3</a></li>
       <li class="page-next"><a href="javascript:void(0)">&gt;</a></li>
       <li class="page-last"><a href="javascript:void(0)">&gt;&gt;</a></li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 

		<!-- end表格 -->


		<!--/.row-->
			








		<!--/.row-->




	</div>	<!--/.main-->

	<script src="/phpstudy/Team-Project/Project/Public/Admin/js/jquery-1.11.1.min.js"></script>
	<script src="/phpstudy/Team-Project/Project/Public/Admin/js/bootstrap.min.js"></script>
	<script src="/phpstudy/Team-Project/Project/Public/Admin/js/chart.min.js"></script>
	<script src="/phpstudy/Team-Project/Project/Public/Admin/js/chart-data.js"></script>
	<script src="/phpstudy/Team-Project/Project/Public/Admin/js/easypiechart.js"></script>
	<script src="/phpstudy/Team-Project/Project/Public/Admin/js/easypiechart-data.js"></script>
	<script src="/phpstudy/Team-Project/Project/Public/Admin/js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>