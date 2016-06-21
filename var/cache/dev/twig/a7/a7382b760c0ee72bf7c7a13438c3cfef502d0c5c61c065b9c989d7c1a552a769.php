<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_81df84c0deeb706d7145b399db72e16282ab37ac648039aa5a326406ccaed32b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb01f840cbe53b2012ac2f6fc813cc21ddd2e76f3579367179f5b1dbba1bdbb4 = $this->env->getExtension("native_profiler");
        $__internal_cb01f840cbe53b2012ac2f6fc813cc21ddd2e76f3579367179f5b1dbba1bdbb4->enter($__internal_cb01f840cbe53b2012ac2f6fc813cc21ddd2e76f3579367179f5b1dbba1bdbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb01f840cbe53b2012ac2f6fc813cc21ddd2e76f3579367179f5b1dbba1bdbb4->leave($__internal_cb01f840cbe53b2012ac2f6fc813cc21ddd2e76f3579367179f5b1dbba1bdbb4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3886a7161934e88e3b860195501d89c91abbdd0fa5b1aa5d9d8a70e3eb52dad2 = $this->env->getExtension("native_profiler");
        $__internal_3886a7161934e88e3b860195501d89c91abbdd0fa5b1aa5d9d8a70e3eb52dad2->enter($__internal_3886a7161934e88e3b860195501d89c91abbdd0fa5b1aa5d9d8a70e3eb52dad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3886a7161934e88e3b860195501d89c91abbdd0fa5b1aa5d9d8a70e3eb52dad2->leave($__internal_3886a7161934e88e3b860195501d89c91abbdd0fa5b1aa5d9d8a70e3eb52dad2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
