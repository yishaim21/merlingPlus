<?php
/*+***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 1.1 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 *************************************************************************************************************************************/
class YetiForceUpdate{
	var $modulenode;
	var $return = true;
	var $dropTablePicklist = array();
	var $filesToDelete = array(
		'languages/he_il/Events.php',
		'languages/he_il/Rss.php',
		'languages/he_il/OSSMailView.php',
		'languages/he_il/Users.php',
		'languages/he_il/MyBackup.php',
		'languages/he_il/ServiceContracts.php',
		'languages/he_il/RequirementCards.php',
		'languages/he_il/OutsourcedProducts.php',
		'languages/he_il/Leads.php',
		'languages/he_il/.',
		'languages/he_il/Emails.php',
		'languages/he_il/Services.php',
		'languages/he_il/NewOrders.php',
		'languages/he_il/Please make sure that the Outgoing server and your email address is configured to receive email notification',
		'languages/he_il/HolidaysEntitlement.php',
		'languages/he_il/Import.php',
		'languages/he_il/OSSMail.php',
		'languages/he_il/Home.php',
		'languages/he_il/Webservices.php',
		'languages/he_il/Faq.php',
		'languages/he_il/Vendors.php',
		'languages/he_il/Portal.php',
		'languages/he_il/Reports.php',
		'languages/he_il/LettersIn.php',
		'languages/he_il/Calendar.php',
		'languages/he_il/AJAXChat.php',
		'languages/he_il/ProjectMilestone.php',
		'languages/he_il/Reservations.php',
		'languages/he_il/OSSDocumentControl.php',
		'languages/he_il/SMSNotifier.php',
		'languages/he_il/OSSMailScanner.php',
		'languages/he_il/Project.php',
		'languages/he_il/Assets.php',
		'languages/he_il/Products.php',
		'languages/he_il/PaymentsOut.php',
		'languages/he_il/ProjectTask.php',
		'languages/he_il/PurchaseOrder.php',
		'languages/he_il/OSSSoldServices.php',
		'languages/he_il/OSSTimeControl.php',
		'languages/he_il/OSSOutsourcedServices.php',
		'languages/he_il/LettersOut.php',
		'languages/he_il/HelpDesk.php',
		'languages/he_il/PriceBooks.php',
		'languages/he_il/Settings/BruteForce.php',
		'languages/he_il/Settings/TreesManager.php',
		'languages/he_il/Settings/LayoutEditor.php',
		'languages/he_il/Settings/BackUp.php',
		'languages/he_il/Settings/ModuleManager.php',
		'languages/he_il/Settings/..',
		'languages/he_il/Settings/DataAccess.php',
		'languages/he_il/Settings/Vtiger.php',
		'languages/he_il/Settings/Roles.php',
		'languages/he_il/Settings/Webforms.php',
		'languages/he_il/Settings/PublicHoliday.php',
		'languages/he_il/Settings/OSSPasswords.php',
		'languages/he_il/Settings/Menu.php',
		'languages/he_il/Settings/SupportProcesses.php',
		'languages/he_il/Settings/PBXManager.php',
		'languages/he_il/Settings/Mail.php',
		'languages/he_il/Settings/Search.php',
		'languages/he_il/Settings/Profiles.php',
		'languages/he_il/Settings/Users.php',
		'languages/he_il/Settings/RealizationProcesses.php',
		'languages/he_il/Settings/Leads.php',
		'languages/he_il/Settings/Payments.php',
		'languages/he_il/Settings/MarketingProcesses.php',
		'languages/he_il/Settings/Workflows.php',
		'languages/he_il/Settings/Currency.php',
		'languages/he_il/Settings/CustomerPortal.php',
		'languages/he_il/Settings/.',
		'languages/he_il/Settings/Picklist.php',
		'languages/he_il/Settings/CronTasks.php',
		'languages/he_il/Settings/CustomView.php',
		'languages/he_il/Settings/OSSMail.php',
		'languages/he_il/Settings/QuickCreateEditor.php',
		'languages/he_il/Settings/Home.php',
		'languages/he_il/Settings/SalesProcesses.php',
		'languages/he_il/Settings/Widgets.php',
		'languages/he_il/Settings/WidgetsManagement.php',
		'languages/he_il/Settings/Dav.php',
		'languages/he_il/Settings/ApiAddress.php',
		'languages/he_il/Settings/PickListDependency.php',
		'languages/he_il/Settings/GlobalPermission.php',
		'languages/he_il/Settings/Calendar.php',
		'languages/he_il/Settings/OSSDocumentControl.php',
		'languages/he_il/Settings/ConfReport.php',
		'languages/he_il/Settings/Groups.php',
		'languages/he_il/Settings/SMSNotifier.php',
		'languages/he_il/Settings/OSSMailScanner.php',
		'languages/he_il/Settings/SharingAccess.php',
		'languages/he_il/Settings/MobileApps.php',
		'languages/he_il/Settings/HideBlocks.php',
		'languages/he_il/Settings/LangManagement.php',
		'languages/he_il/Settings/FinancialProcesses.php',
		'languages/he_il/Settings/OSSProjectTemplates.php',
		'languages/he_il/Settings/Updates.php',
		'languages/he_il/Settings/ModTracker.php',
		'languages/he_il/Calculations.php',
		'languages/he_il/OSSProjectTemplates.php',
		'languages/he_il/Quotes.php',
		'languages/he_il/ModTracker.php',
		'languages/he_il/Invoice.php',
		'languages/he_il/Potentials.php',
		'languages/he_il/CallHistory.php',
		'languages/he_il/OSSCosts.php',	
		
		//layout
		'layouts/vlayout/skins/glabal_style.css',
		//'layouts/vlayout/skins/login.css',
		'layouts/vlayout/skins/twilight/style.css',
		//'libraries/bootstrap3/css/bootstrap.min.css',
		'libraries/jquery/select2/select2.full.min.js',
		'libraries/jquery/select2/select2-bootstrap.min.css',
		'/libraries/jquery/chosen/chosen.bootstrap.min.css',
		
		// reminder
		//'cron/SendReminder.service',
		
		// mail
		//'modules/Emails/mail.php',
		
		// SMSNotifier
		//'layouts/vlayout/modules/Vtiger/SendSMSForm.tpl',
		//'modules/SMSNotifier/SMSNotifier.php',
		//'modules/SMSNotifier/actions/MassSaveAjax.php',
		//'modules/SMSNotifier/models/ISMSProvider.php',
		//'modules/SMSNotifier/models/Record.php',
		//'modules/SMSNotifier/providers/slng.php',
		
		//'modules/Vtiger/helpers/Util.php',
		
	);

	function YetiForceUpdate($modulenode) {
		$this->modulenode = $modulenode;
	}
	function preupdate() {
		$this->recurseCopy('cache/updates/files','');
	}
	
	function update() {		
		$this->updateFiles();			
	}
	function postupdate() {
		Vtiger_Deprecated::createModuleMetaFile();
		Vtiger_Access::syncSharingAccess();
		return true;
	}
	
	function recurseCopy($src,$dst) {
		global $root_directory;
		if(!file_exists( $src ) )
			return;
		$dir = opendir($src); 
		@mkdir($root_directory.$dst); 
		while(false !== ( $file = readdir($dir)) ) { 
			if (( $file != '.' ) && ( $file != '..' )) { 
				if ( is_dir($src . '/' . $file) ) { 
					$this->recurseCopy($src . '/' . $file,$dst . '/' . $file); 
				} else {
					copy($root_directory.$src . '/' . $file,$root_directory.$dst . '/' . $file);
					unlink($root_directory.$src . '/' . $file);
				}
			} 
		} 
		closedir($dir); 
		rmdir($src);
	}
}