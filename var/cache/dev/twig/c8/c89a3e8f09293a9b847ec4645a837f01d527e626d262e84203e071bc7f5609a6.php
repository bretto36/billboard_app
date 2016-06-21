<?php

/* @EasyAdmin/default/field_json_array.html.twig */
class __TwigTemplate_46dbe748b88416ba5ba6577dbe519cff7f772039055caeb3dc402bd20dae9e9e extends Twig_Template
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
        $__internal_ce189fc9f6c9424df63c209456db43a4baaeda573d2566c562818b8759c4f560 = $this->env->getExtension("native_profiler");
        $__internal_ce189fc9f6c9424df63c209456db43a4baaeda573d2566c562818b8759c4f560->enter($__internal_ce189fc9f6c9424df63c209456db43a4baaeda573d2566c562818b8759c4f560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_json_array.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > 0)) {
                // line 3
                echo "        <ul>
            ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 5
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                echo "        </ul>
    ";
            } else {
                // line 9
                echo "        <div class=\"empty collection-empty\">
            <span class=\"label label-empty\">";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
        </div>
    ";
            }
        } else {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ", ")), "html", null, true);
            echo "
";
        }
        
        $__internal_ce189fc9f6c9424df63c209456db43a4baaeda573d2566c562818b8759c4f560->leave($__internal_ce189fc9f6c9424df63c209456db43a4baaeda573d2566c562818b8759c4f560_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_json_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  50 => 10,  47 => 9,  43 => 7,  34 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     {% if value|length > 0 %}*/
/*         <ul>*/
/*             {% for element in value %}*/
/*                 <li>{{ element }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% else %}*/
/*         <div class="empty collection-empty">*/
/*             <span class="label label-empty">{{ 'label.empty'|trans({}, 'EasyAdminBundle') }}</span>*/
/*         </div>*/
/*     {% endif %}*/
/* {% else %}*/
/*     {{ value|join(', ')|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
