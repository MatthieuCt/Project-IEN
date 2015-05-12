{capture name='title'}{label get="TXT_ARTICLE_EDIT_TITLE"|default:"Edit article"}{/capture}
{include file="common/form_extra_header.tpl" form_title="Edycja menu"}

{include file="common/form.tpl" form_name=$form_name}

{include file="common/form_extra_footer.tpl"}
{literal}<script>$(document).ready(function(){load_parent_menu();});</script>{/literal}