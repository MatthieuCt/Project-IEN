{capture name='title'}{label get="TXT_MENU_EDIT_TITLE"|default:"Edit menu"}{/capture}
{include file="common/form_extra_header.tpl" form_title=$smarty.capture.title}

{include file="common/form.tpl" form_name=$form_name}

{include file="common/form_extra_footer.tpl"}
{literal}<script>$(document).ready(function(){load_parent_menu();});</script>{/literal}
