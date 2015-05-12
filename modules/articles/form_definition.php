<?php
$form_name = "permission_form";


if($_SESSION['S_GroupID'] == '1'){
    $forms = array(
        "form_save"     => "save.php",
        "return_action" => "list",
        "return_module" => "articles",
        "table_name" => "article",
        "id"        =>      "",
        "fields"        => array(
            array(
                "name"  => "lang_id",
                "label" =>  label("TXT_ARTICLE_LANG"),
                "type"  => "text",
                "type"  => "combo",
                "combovalues" => createDictionary("lang_id", "`lang`", "id", "lang_name", "1 asc", "1=1", null, "-- Please choose --"),
                "default"       => "",
                "validate"      => "notempty"
            ),
            array(
                "name"  => "page_id",
                "label" => label("TXT_ARTICLE_PAGE"),
                "type"  => "text",
                "type"  => "combo",
                "combovalues" => createDictionary("page_id", "`page`", "id", "page_name", "1 asc", "1=1", null, "-- Please choose --"),
                "default"       => "",
                "validate"      => "notempty"
            ),
            array(
                "name"  => "article_name",
                "label" => label("TXT_ARTICLE_NAME"),
                "type"  => "text",
                "params"        => "maxlength=128 size=28",
                "default"       => "",
                "validate"      => "notempty"
            ),
            array(
                "name"  => "article_publish",
                "label" => "Publish/Unpublish",
                "type"  => "text",
                "default"       => "",
                "validate"      => "notempty"
            ),
            array(
                "name"  => "visible_flag",
                "label" => label("TXT_ARTICLE_ACTIVE"),
                "type"  => "text",
                "default"       => "",
                "validate"      => "notempty"
            )
        )
    );
}

else
{
    $forms = array(
        "form_save"     => "save.php",
        "return_action" => "list",
        "return_module" => "articles",
        "table_name" => "article",
        "id"        =>      "",
        "fields"        => array(
            array(
                "name"  => "lang_id",
                "label" =>  label("TXT_ARTICLE_LANG"),
                "type"  => "text",
                "type"  => "combo",
                "combovalues" => createDictionary("lang_id", "`lang`", "id", "lang_name", "1 asc", "1=1", null, "-- Please choose --"),
                "default"       => "",
                "validate"      => "notempty"
            ),
            array(
                "name"  => "page_id",
                "label" => label("TXT_ARTICLE_PAGE"),
                "type"  => "text",
                "type"  => "combo",
                "combovalues" => createDictionary("page_id", "`page`", "id", "page_name", "1 asc", "1=1", null, "-- Please choose --"),
                "default"       => "",
                "validate"      => "notempty"
            ),
            array(
                "name"  => "article_name",
                "label" => label("TXT_ARTICLE_NAME"),
                "type"  => "text",
                "params"        => "maxlength=128 size=28",
                "default"       => "",
                "validate"      => "notempty"
            ),
            array(
                "name"  => "article_content",
                "label" => "Article content",
                "type"  => "tinymce",
                "params"        => "maxlength=10000",
                "default"       => "",
                "validate"      => "notempty"
            ),
            array(
                "name"  => "article_publish",
                "label" => "Publish/Unpublish",
                "type"  => "text",
                "default"       => "",
                "validate"      => "notempty"
            ),
                    array(
            "name"  => "visible_flag",
            "label" => label("Active"),
            "type"  => "combo",
            "combovalues"        => createDictionaryFromArray("active", array( 0=>" - ".label("TXT_ARTICLE_ACTIVE_NO")." - ",1=>" - ".label("TXT_ARTICLE_ACTIVE_YES")." - " ), 0),
            "default"       => "",
            "validate"      => "notempty"
        ),
        )
    );
    
}


?>
