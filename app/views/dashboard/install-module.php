<?php if ( ! defined('BASE_PATH') ) exit('No direct script access allowed');
/**
 * Module installer view
 *  
 * @license GPLv3
 * 
 * @since       5.0.6
 * @package     eduTrac SIS
 * @author      Joshua Parker <joshmac3@icloud.com>
 */
$app = \Liten\Liten::getInstance();
$app->view->extend('_layouts/dashboard');
$app->view->block('dashboard');
$screen = 'imod';
?>

<ul class="breadcrumb">
	<li><?=_t( 'You are here' );?></li>
	<li><a href="<?=get_base_url();?>dashboard/" class="glyphicons dashboard"><i></i> <?=_t( 'Dashboard' );?></a></li>
	<li class="divider"></li>
    <li><a href="<?=get_base_url();?>dashboard/modules/" class="glyphicons package"><i></i> <?=_t( 'System Modules' );?></a></li>
	<li class="divider"></li>
	<li><?=_t( 'Install Modules' );?></li>
</ul>

<h3><?=_t( 'Install Modules' );?></h3>
<div class="innerLR">

	<?=_etsis_flash()->showMessage();?>
    
    <?php jstree_sidebar_menu($screen); ?>
    
    <div class="tab-pane <?=($app->hook->has_filter('sidebar_menu')) ? 'col-md-12' : 'col-md-10';?>" id="search-users">
        <div class="widget widget-heading-simple widget-body-white margin-none">
            <div class="widget-body">

                <div class="alerts alerts-info center">
                    <p><?=sprintf( _t('Use this screen to install/upgrade modules. If you need to install a plugin, you need to visit <a href="%s"><strong>this screen</strong></a>.'), get_base_url() . 'plugins/install/');?></p>
                </div>

            </div>
        </div>
        <div class="separator bottom"></div>
    </div>
    
    <div class="separator bottom"></div>

	<!-- Form -->
	<form class="form-horizontal margin-none" action="<?=get_base_url();?>dashboard/install-module/" id="validateSubmitForm" method="post" autocomplete="off" enctype="multipart/form-data">
		
		<!-- Widget -->
		<div class="widget widget-heading-simple widget-body-gray <?=($app->hook->has_filter('sidebar_menu')) ? 'col-md-12' : 'col-md-10';?>">
		
			<!-- Widget heading -->
			<div class="widget-head">
				<h4 class="heading"><font color="red">*</font> <?=_t( 'Indicates field is required' );?></h4>
			</div>
			<!-- // Widget heading END -->
			
			<div class="widget-body">
			
				<!-- Row -->
				<div class="row">
					<!-- Column -->
					<div class="col-md-6">
						
						<!-- Group -->
						<div class="form-group col-md-12">
						<div class="fileupload fileupload-new margin-none" data-provides="fileupload">
						  	<div class="input-group">
						    	<div class="form-control col-md-3"><i class="fa fa-file fileupload-exists"></i> <span class="fileupload-preview"></span></div>
						    	<span class="input-group-btn">
						    		<span class="btn btn-default btn-file"><span class="fileupload-new"><?=_t( 'Select file' );?></span><span class="fileupload-exists"><?=_t( 'Change' );?></span><input type="file" name="module_zip" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload"><?=_t( 'Remove' );?></a>
						    	</span>
						  	</div>
						</div>
						</div>
                        <!-- // Group END -->
						
					</div>
					<!-- // Column END -->
				</div>
				<!-- // Row END -->
			
				<hr class="separator" />
				
				<!-- Form actions -->
				<div class="form-actions">
					<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i><?=_t( 'Submit' );?></button>
				</div>
				<!-- // Form actions END -->
				
			</div>
		</div>
		<!-- // Widget END -->
		
	</form>
	<!-- // Form END -->
	
</div>	
		
		</div>
		<!-- // Content END -->
<?php $app->view->stop(); ?>