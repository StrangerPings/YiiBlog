<?php
	$baseUrl = Yii::app()->request->baseUrl;
?>
<div class="container">

        <div class="row">
            <div class="col-lg-8">

                 <?php
						if($model)
						{
							foreach($model as $item) {							
					?>
						
							<div class="col-md-12 blogShort">
							<a href="<?=$baseUrl;?>/site/viewpost/<?=$item['post_ID']?>" class="ctna">
						     <h1><?= $item['post_title'];?></h1>
						          
						         <em>Post: <?= $item['date'];?>   </em>
						     <article class="post"><p>
						         <?= $item['post_content'];?>   
						         </p></article>
						         </a>
						     <a class="btn btn-blog pull-right marginBottom10" href="<?=$baseUrl;?>/site/viewpost/<?=$item['post_ID']?>">READ MORE</a> 
						 </div>
						
					 <?php
							}
							}
							else
							{
								echo "Not found blog";
							}
							
					 ?>

            </div>

             <?php $this->widget('application.components.RightPost', array(
			 			
			)); ?>
        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
 <style type="text/css">
 .ctna:hover{
 	    text-decoration: none;
 }
 .post{
 	margin-top: 10px;
 }
	.blogShort{ border-bottom:1px solid #ddd;}
.add{background: #333; padding: 10%; height: 300px;}

.nav-sidebar { 
    width: 100%;
    padding: 8px 0; 
    border-right: 1px solid #ddd;
}
.nav-sidebar a {
    color: #333;
    -webkit-transition: all 0.08s linear;
    -moz-transition: all 0.08s linear;
    -o-transition: all 0.08s linear;
    transition: all 0.08s linear;
}
.nav-sidebar .active a { 
    cursor: default;
    background-color: #34ca78; 
    color: #fff; 
}
.nav-sidebar .active a:hover {
    background-color: #37D980;   
}
.nav-sidebar .text-overflow a,
.nav-sidebar .text-overflow .media-body {
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis; 
}

.btn-blog {
    color: #ffffff;
    background-color: #37d980;
    border-color: #37d980;
    border-radius:0;
    margin-bottom:10px
}
.btn-blog:hover,
.btn-blog:focus,
.btn-blog:active,
.btn-blog.active,
.open .dropdown-toggle.btn-blog {
    color: white;
    background-color:#34ca78;
    border-color: #34ca78;
}
 h2{color:#34ca78;}
 .margin10{margin-bottom:10px; margin-right:10px;}
 </style>