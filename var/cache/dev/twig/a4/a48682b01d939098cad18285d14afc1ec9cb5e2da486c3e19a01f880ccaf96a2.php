<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_65c08d56f4fa2157b9fe6d57c609c5652a4abaf339d6eb3fee4bd706d71e8d8b extends Twig_Template
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
        $__internal_259d27682e6fa7a0f55662a167f8d84b478229e66c0b4f687ed6c84995d9a471 = $this->env->getExtension("native_profiler");
        $__internal_259d27682e6fa7a0f55662a167f8d84b478229e66c0b4f687ed6c84995d9a471->enter($__internal_259d27682e6fa7a0f55662a167f8d84b478229e66c0b4f687ed6c84995d9a471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_259d27682e6fa7a0f55662a167f8d84b478229e66c0b4f687ed6c84995d9a471->leave($__internal_259d27682e6fa7a0f55662a167f8d84b478229e66c0b4f687ed6c84995d9a471_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
