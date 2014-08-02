<?php
/**
 * @package project
 * @version 0.4.0.0
 * @author Roman Konertz <konertz@open-lims.org>
 * @copyright (c) 2008-2014 by Roman Konertz
 * @license GPLv3
 * 
 * This file is part of Open-LIMS
 * Available at http://www.open-lims.org
 * 
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * version 3 of the License.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
 * See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, see <http://www.gnu.org/licenses/>.
 */

/**
 * 
 */
/*
$LANG['ProjectException'] 												= "A Project related error occurs!";

$LANG['ProjectIDMissingException'] 										= "The Project-ID is missing!";
$LANG['ProjectNotFoundException'] 										= "The requested Project was not found!";
$LANG['ProjectSetNextStatusException'] 									= "Could not set next status!";
$LANG['ProjectUserSetQuotaException'] 									= "Could not set user quota!";

$LANG['ProjectCreateException'] 										= "Could not create Project!";
$LANG['ProjectCreateProjectExistsException'] 							= "Project already exists!";
$LANG['ProjectCreateStatusException'] 									= "Could not create initial Project status!";
$LANG['ProjectCreateFolderException'] 									= "Could not create Project main folder!";
$LANG['ProjectCreateStatusFolderException'] 							= "Could not create status folder!";
$LANG['ProjectCreateStatusSubFolderException'] 							= "Could not create status sub folder!";
$LANG['ProjectCreateSupplementaryFolderException'] 						= "Could not create supplementary folder!";
$LANG['ProjectCreateDescriptionException'] 								= "Could not create Project description!";
$LANG['ProjectCreateMasterDataException'] 								= "Could not create Project master-data!";
$LANG['ProjectCreatePermissionUserException'] 							= "Could not create user/owner permission!";
$LANG['ProjectCreatePermissionLeaderException'] 						= "Could not create Organisation Unit leader permission!";
$LANG['ProjectCreatePermissionGroupException'] 							= "Could not create group permission!";
$LANG['ProjectCreatePermissionOrganisationUnitException'] 				= "Could not create Organisation Unit permission!";
$LANG['ProjectCreatePermissionQualityManagerException'] 				= "Could not create quality-manager permission!";

$LANG['ProjectDeleteException'] 										= "Could not delete Project!";
$LANG['ProjectDeleteContainsSubProjectsException'] 						= "Could not delete Project - Project contains Sub-Project!";
$LANG['ProjectDeleteFolderException'] 									= "Could not delete Project folder!";
$LANG['ProjectDeleteItemException'] 									= "Could not delete Project items!";
$LANG['ProjectDeleteLinkException'] 									= "Could not delete Project links!";
$LANG['ProjectDeleteLogException'] 										= "Could not delete Project log!";
$LANG['ProjectDeletePermissionException'] 								= "Could not delete Project permissions!";
$LANG['ProjectDeleteStatusException'] 									= "Could not delete Project status!";
$LANG['ProjectDeleteTaskException'] 									= "Could not delete Project tasks!";

$LANG['ProjectMoveException'] 											= "Could not move the Project!";
$LANG['ProjectMoveProjectExistsException'] 								= "Could not move the Project - The project already exists!";
$LANG['ProjectMovePermissionException'] 								= "An error occurs during permission changes!";
$LANG['ProjectMoveFolderException'] 									= "Could not move the folder!";

$LANG['ProjectSecurityException'] 										= "A security error occurs!";
$LANG['ProjectAccessDeniedException'] 									= "Project access denied!";
$LANG['ProjectChangeException'] 										= "Could not change permission!";

$LANG['ProjectItemException'] 											= "A Project Item error occurs!";
$LANG['ProjectItemLinkException'] 										= "Could not link an Item!";
$LANG['ProjectItemUnlinkException'] 									= "Could not unlink an Item!";
$LANG['ProjectItemNotFoundException'] 									= "Project Item not found!";

$LANG['ProjectLogException'] 											= "A Project Log error occurs!";
$LANG['ProjectLogCreateException'] 										= "Could not create Project Log!";
$LANG['ProjectLogDeleteException'] 										= "Could not delete Project Log!";
$LANG['ProjectLogNotFoundException'] 									= "Project Log not found!";
$LANG['ProjectLogIDMissingException'] 									= "Project Log ID is missing!";
$LANG['ProjectLogItemLinkException'] 									= "Could not link an Item to the Project Log!";

$LANG['ProjectPermissionException'] 									= "A Project Permission error occurs!";
$LANG['ProjectPermissionUserException'] 								= "A Project Permission User error occurs!";
$LANG['ProjectPermissionUserCreateException'] 							= "Could not create the User permission!";
$LANG['ProjectPermissionUserCreateVirtualFolderException'] 				= "Could not create the virtual folder!";
$LANG['ProjectPermissionUserDeleteException'] 							= "Could not delete the User permission!";
$LANG['ProjectPermissionUserDeleteVirtualFolderException'] 				= "Could not delete the virtual folder!";
$LANG['ProjectPermissionOrganisationUnitException'] 					= "A Project Permission Organisation Unit error occurs!";
$LANG['ProjectPermissionOrganisationUnitCreateException'] 				= "Could not create the Organisation Unit permission!";
$LANG['ProjectPermissionOrganisationUnitCreateVirtualFolderException'] 	= "Could not create the virtual folder!";
$LANG['ProjectPermissionOrganisationUnitDeleteException'] 				= "Could not delete the Organisation Unit permission!";
$LANG['ProjectPermissionOrganisationUnitDeleteVirtualFolderException'] 	= "Could not delete the virtual folder!";
$LANG['ProjectPermissionGroupException'] 								= "A Project Permission Group error occurs!";
$LANG['ProjectPermissionGroupCreateException'] 							= "Could not create the Group permission!";
$LANG['ProjectPermissionGroupCreateVirtualFolderException'] 			= "Could not create the virtual folder!";
$LANG['ProjectPermissionGroupDeleteException'] 							= "Could not delete the Group permission!";
$LANG['ProjectPermissionGroupDeleteVirtualFolderException'] 			= "Could not delete the virtual folder!";
$LANG['ProjectPermissionNotFoundException'] 							= "Project Permission not found!";
$LANG['ProjectPermissionIDMissingException'] 							= "The Project Permission ID is missing!";

$LANG['ProjectSecurityException'] 										= "Project Security Error!";
$LANG['ProjectSecurityChangeException'] 								= "Project Security change faield!";
$LANG['ProjectSecurityAccessDeniedException'] 							= "Project Access Denied!";

$LANG['ProjectStatusException'] 										= "A Project status error occurs!";
$LANG['ProjectStatusCreateException'] 									= "Could not create the Project status!";
$LANG['ProjectStatusDeleteException'] 									= "Could not delete the Project status!";
$LANG['ProjectStatusNotFoundException'] 								= "Project status not found!";
$LANG['ProjectStatusIDMissingException'] 								= "The Project status ID is missing!";

$LANG['ProjectTaskException'] 											= "A Project task error occurs!";
$LANG['ProjectTaskCreateException'] 										= "Could not create the Project task!";
$LANG['ProjectTaskCreateAttachException'] 								= "Could not attach the Project task!";
$LANG['ProjectTaskDeleteException'] 										= "Could not delete the Project task!";
$LANG['ProjectTaskNotFoundException'] 									= "Project task not found!";
$LANG['ProjectTaskIDMissingException'] 									= "The Project task ID is missing!";

$LANG['ProjectTemplateException'] 										= "A Project template error occurs!";
$LANG['ProjectTemplateCreateException'] 								= "Could not create the template!";
$LANG['ProjectTemplateCreateOLDLNotFoundException'] 					= "OLDL file not found!";
$LANG['ProjectTemplateCreateOLDLCreateException'] 						= "Could not create OLDL entry!";
$LANG['ProjectTemplateDeleteException'] 								= "Could not delete the template!";
$LANG['ProjectTemplateDeleteInUseException'] 							= "The template is in use!";
$LANG['ProjectTemplateDeleteOLDLDeleteException'] 						= "Could not delete the OLDL entry!";
$LANG['ProjectTemplateNotFoundException'] 								= "Project template not found!";
$LANG['ProjectTemplateIDMissingException'] 								= "The Project tempalte ID is missing!";
$LANG['ProjectTemplateCategoryCreateException'] 						= "Could not create the template category!";
$LANG['ProjectTemplateCategoryDeleteException'] 						= "Could not delete the template category!";
$LANG['ProjectTemplateCategoryNotFoundException'] 						= "Project Tempalte Category not found!";
$LANG['ProjectTemplateCategoryIDMissingException'] 						= "The Project tempalte category ID is missing!";
*/
$LANG['ProjectException'] 												= "发生了一个与项目相关的错误!";

$LANG['ProjectIDMissingException'] 										= "项目标签遗失!";
$LANG['ProjectNotFoundException'] 										= "查询的项目没有找到!";
$LANG['ProjectSetNextStatusException'] 									= "无法设置下一个状态!";
$LANG['ProjectUserSetQuotaException'] 									= "无法设置用户配额!";

$LANG['ProjectCreateException'] 										= "不能建立项目!";
$LANG['ProjectCreateProjectExistsException'] 							= "该项目早已存在!";
$LANG['ProjectCreateStatusException'] 									= "无法创建初始项目状态!";
$LANG['ProjectCreateFolderException'] 									= "无法创建项目主目录!";
$LANG['ProjectCreateStatusFolderException'] 							= "无法创建状态目录!";
$LANG['ProjectCreateStatusSubFolderException'] 							= "无法创建项目子目录!";
$LANG['ProjectCreateSupplementaryFolderException'] 						= "无法创建补充目录!";
$LANG['ProjectCreateDescriptionException'] 								= "无法创建项目描述!";
$LANG['ProjectCreateMasterDataException'] 								= "无法创建项目基本数据!";
$LANG['ProjectCreatePermissionUserException'] 							= "无法完成用户/所有者 授权!";
$LANG['ProjectCreatePermissionLeaderException'] 						= "无法创建组织单位领导授权!";
$LANG['ProjectCreatePermissionGroupException'] 							= "无法创建组授权!";
$LANG['ProjectCreatePermissionOrganisationUnitException'] 				= "无法创建组织单位授权!";
$LANG['ProjectCreatePermissionQualityManagerException'] 				= "无法创建质量管理者授权!";

$LANG['ProjectDeleteException'] 										= "无法删除项目!";
$LANG['ProjectDeleteContainsSubProjectsException'] 						= "无法删除项目-项目包含子项目!";
$LANG['ProjectDeleteFolderException'] 									= "无法删除项目文件夹!";
$LANG['ProjectDeleteItemException'] 									= "无法删除项目内容!";
$LANG['ProjectDeleteLinkException'] 									= "无法删除项目链接!";
$LANG['ProjectDeleteLogException'] 										= "无法删除项目日志!";
$LANG['ProjectDeletePermissionException'] 								= "无法删除项目授权!";
$LANG['ProjectDeleteStatusException'] 									= "无法删除项目状态!";
$LANG['ProjectDeleteTaskException'] 									= "无法删除项目任务!";

$LANG['ProjectMoveException'] 											= "无法移动目标项目!";
$LANG['ProjectMoveProjectExistsException'] 								= "无法移动目标项目-项目早已存在!";
$LANG['ProjectMovePermissionException'] 								= "在授权改变是产生错误!";
$LANG['ProjectMoveFolderException'] 									= "无法移动目录!";

$LANG['ProjectSecurityException'] 										= "发生一个安全性的错误!";
$LANG['ProjectAccessDeniedException'] 									= "项目访问被拒绝!";
$LANG['ProjectChangeException'] 										= "无法改变授权!";

$LANG['ProjectItemException'] 											= "一个项目内容发生错误!";
$LANG['ProjectItemLinkException'] 										= "无法连接到一个项目事件!";
$LANG['ProjectItemUnlinkException'] 									= "无法解除一个项目事件的连接!";
$LANG['ProjectItemNotFoundException'] 									= "项目事件没有找到!";

$LANG['ProjectLogException'] 											= "发生一个项目日志错误!";
$LANG['ProjectLogCreateException'] 										= "无法建立项目日志!";
$LANG['ProjectLogDeleteException'] 										= "无法删除项目日志!";
$LANG['ProjectLogNotFoundException'] 									= "项目日志没有找到Project Log not found!";
$LANG['ProjectLogIDMissingException'] 									= "项目日志ID遗失!";
$LANG['ProjectLogItemLinkException'] 									= "在链接项目日志中连接项目事件发生错误!";

$LANG['ProjectPermissionException'] 									= "发生一个项目授权错误!";
$LANG['ProjectPermissionUserException'] 								= "发生一个用户项目授权错误!";
$LANG['ProjectPermissionUserCreateException'] 							= "无法建立用户授权!";
$LANG['ProjectPermissionUserCreateVirtualFolderException'] 				= "无法建立虚拟目录!";
$LANG['ProjectPermissionUserDeleteException'] 							= "无法删除用户授权!";
$LANG['ProjectPermissionUserDeleteVirtualFolderException'] 				= "无法删除虚拟目录!";
$LANG['ProjectPermissionOrganisationUnitException'] 					= "发生一个组织单位的项目授权错误!";
$LANG['ProjectPermissionOrganisationUnitCreateException'] 				= "无法建立组织单位的授权!";
$LANG['ProjectPermissionOrganisationUnitCreateVirtualFolderException'] 	= "无法建立虚拟目录!";
$LANG['ProjectPermissionOrganisationUnitDeleteException'] 				= "无法删除组织单位授权!";
$LANG['ProjectPermissionOrganisationUnitDeleteVirtualFolderException'] 	= "无法删除虚拟目录!";
$LANG['ProjectPermissionGroupException'] 								= "发生一个组项目授权错误!";
$LANG['ProjectPermissionGroupCreateException'] 							= "无法建立组授权!";
$LANG['ProjectPermissionGroupCreateVirtualFolderException'] 			= "无法建立虚拟目录!";
$LANG['ProjectPermissionGroupDeleteException'] 							= "无法删除组授权!";
$LANG['ProjectPermissionGroupDeleteVirtualFolderException'] 			= "无法删除虚拟目录!";
$LANG['ProjectPermissionNotFoundException'] 							= "项目授权没有找到!";
$LANG['ProjectPermissionIDMissingException'] 							= "项目授权ID遗失!";

$LANG['ProjectSecurityException'] 										= "项目产生安全性错误!";
$LANG['ProjectSecurityChangeException'] 								= "项目安全级别改变错误!";
$LANG['ProjectSecurityAccessDeniedException'] 							= "项目访问被拒绝!";

$LANG['ProjectStatusException'] 										= "发生一个项目状态错误!";
$LANG['ProjectStatusCreateException'] 									= "无法建立项目状态!";
$LANG['ProjectStatusDeleteException'] 									= "无法删除项目状态!";
$LANG['ProjectStatusNotFoundException'] 								= "项目状态没有发现!";
$LANG['ProjectStatusIDMissingException'] 								= "项目状态ID遗失!";

$LANG['ProjectTaskException'] 											= "发生一个项目任务错误!";
$LANG['ProjectTaskCreateException'] 									= "无法建立项目任务!";
$LANG['ProjectTaskCreateAttachException'] 								= "无法关联到项目任务!";
$LANG['ProjectTaskDeleteException'] 									= "无法删除项目任务!";
$LANG['ProjectTaskNotFoundException'] 									= "项目任务没有找到!";
$LANG['ProjectTaskIDMissingException'] 									= "项目任务ID遗失!";

$LANG['ProjectTemplateException'] 										= "发生一个项目模板错误!";
$LANG['ProjectTemplateCreateException'] 								= "无法建立模板!";
$LANG['ProjectTemplateCreateOLDLNotFoundException'] 					= "OLDL 文件没有找到!";
$LANG['ProjectTemplateCreateOLDLCreateException'] 						= "无法建立 OLDL 通道!";
$LANG['ProjectTemplateDeleteException'] 								= "无法删除模板!";
$LANG['ProjectTemplateDeleteInUseException'] 							= "模板正在使用!";
$LANG['ProjectTemplateDeleteOLDLDeleteException'] 						= "无法删除 OLDL 通道!";
$LANG['ProjectTemplateNotFoundException'] 								= "项目模板没有找到!";
$LANG['ProjectTemplateIDMissingException'] 								= "项目模板ID遗失!";
$LANG['ProjectTemplateCategoryCreateException'] 						= "无法建立模板类别!";
$LANG['ProjectTemplateCategoryDeleteException'] 						= "无法删除模板类别!";
$LANG['ProjectTemplateCategoryNotFoundException'] 						= "项目模板类别没有找到!";
$LANG['ProjectTemplateCategoryIDMissingException'] 						= "项目模板ID遗失!";

?>
