<?php

/* profiles/openchurch/themes/openchurch_theme/templates/field--field-images.html.twig */
class __TwigTemplate_8e92ca605fdbc4ea76b423fa249655b2fa987589d3dc256755dd3ae7abcba936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("for" => 40);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 39
        echo "<div class=\"cycle-slideshow\" data-cycle-slides=\"> img, > a\">
  ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  <div class=\"cycle-pager\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/openchurch/themes/openchurch_theme/templates/field--field-images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 43,  50 => 41,  46 => 40,  43 => 39,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a field.*/
/*  **/
/*  * To override output, copy the "field.html.twig" from the templates directory*/
/*  * to your theme's directory and customize it, just like customizing other*/
/*  * Drupal templates such as page.html.twig or node.html.twig.*/
/*  **/
/*  * Instead of overriding the theming for all fields, you can also just override*/
/*  * theming for a subset of fields using*/
/*  * @link themeable Theme hook suggestions. @endlink For example,*/
/*  * here are some theme hook suggestions that can be used for a field_foo field*/
/*  * on an article node type:*/
/*  * - field--node--field-foo--article.html.twig*/
/*  * - field--node--field-foo.html.twig*/
/*  * - field--node--article.html.twig*/
/*  * - field--field-foo.html.twig*/
/*  * - field--text-with-summary.html.twig*/
/*  * - field.html.twig*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - label_hidden: Whether to show the field label or not.*/
/*  * - title_attributes: HTML attributes for the title.*/
/*  * - label: The label for the field.*/
/*  * - content_attributes: HTML attributes for the content.*/
/*  * - items: List of all the field items. Each item contains:*/
/*  *   - attributes: List of HTML attributes for each item.*/
/*  *   - content: The field item's content.*/
/*  * - entity_type: The entity type to which the field belongs.*/
/*  * - field_name: The name of the field.*/
/*  * - field_type: The type of the field.*/
/*  * - label_display: The display settings for the label.*/
/*  **/
/*  * @see template_preprocess_field()*/
/*  *//* */
/* #}*/
/* <div class="cycle-slideshow" data-cycle-slides="> img, > a">*/
/*   {% for item in items %}*/
/*     {{ item.content }}*/
/*   {% endfor %}*/
/*   <div class="cycle-pager"></div>*/
/* </div>*/
/* */
