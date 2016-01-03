<?php

/* profiles/openchurch/themes/openchurch_theme/templates/field--field-audio.html.twig */
class __TwigTemplate_423904946bc91a582c9123b733659f7f82590bf43a1b12df7e1430346157f622 extends Twig_Template
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
        $tags = array("set" => 39, "if" => 51, "for" => 55);
        $filters = array("clean_class" => 39);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class'),
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
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass((isset($context["field_name"]) ? $context["field_name"] : null));
        // line 41
        $context["classes"] = array(0 => "field", 1 => ((("field-" . \Drupal\Component\Utility\Html::getClass(        // line 43
(isset($context["entity_type"]) ? $context["entity_type"] : null))) . "--") . (isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 2 => ("field-name-" .         // line 44
(isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 3 => ("field-type-" . \Drupal\Component\Utility\Html::getClass(        // line 45
(isset($context["field_type"]) ? $context["field_type"] : null))), 4 => ("field-label-" .         // line 46
(isset($context["label_display"]) ? $context["label_display"] : null)), 5 => (((        // line 47
(isset($context["label_display"]) ? $context["label_display"] : null) == "inline")) ? ("clearfix") : ("")));
        // line 50
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 51
        if ( !(isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
            // line 52
            echo "    <div class=\"field__label\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</div>
  ";
        }
        // line 54
        echo "  <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "field-items"), "method"), "html", null, true));
        echo ">
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "      <audio controls=\"controls\"><source src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "\" type=\"audio/mpeg\" /></audio>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/openchurch/themes/openchurch_theme/templates/field--field-audio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 58,  74 => 56,  70 => 55,  65 => 54,  59 => 52,  57 => 51,  52 => 50,  50 => 47,  49 => 46,  48 => 45,  47 => 44,  46 => 43,  45 => 41,  43 => 39,);
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
/* {% set field_name_class = field_name|clean_class %}*/
/* {%*/
/* set classes = [*/
/*   'field',*/
/*   'field-' ~ entity_type|clean_class ~ '--' ~ field_name_class,*/
/*   'field-name-' ~ field_name_class,*/
/*   'field-type-' ~ field_type|clean_class,*/
/*   'field-label-' ~ label_display,*/
/*   label_display == 'inline' ? 'clearfix',*/
/* ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {% if not label_hidden %}*/
/*     <div class="field__label">{{ label }}</div>*/
/*   {% endif %}*/
/*   <div{{ content_attributes.addClass('field-items') }}>*/
/*     {% for item in items %}*/
/*       <audio controls="controls"><source src="{{ item.content }}" type="audio/mpeg" /></audio>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
