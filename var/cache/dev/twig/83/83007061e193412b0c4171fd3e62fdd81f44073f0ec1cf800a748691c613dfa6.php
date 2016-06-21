<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_3eed63c2f0be01a5f2c10f4bdf6ce891971748e422d2354058f3473a58844231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_95f317ad4647c9d54e4aa3140c3e5e9b043d93afc28756ade58ad24fc970b6e1 = $this->env->getExtension("native_profiler");
        $__internal_95f317ad4647c9d54e4aa3140c3e5e9b043d93afc28756ade58ad24fc970b6e1->enter($__internal_95f317ad4647c9d54e4aa3140c3e5e9b043d93afc28756ade58ad24fc970b6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95f317ad4647c9d54e4aa3140c3e5e9b043d93afc28756ade58ad24fc970b6e1->leave($__internal_95f317ad4647c9d54e4aa3140c3e5e9b043d93afc28756ade58ad24fc970b6e1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e6a6d794bd1bce84fa1a691fe4a1fafd23edda873ea70d2cf34ed17fc7f6b6e = $this->env->getExtension("native_profiler");
        $__internal_3e6a6d794bd1bce84fa1a691fe4a1fafd23edda873ea70d2cf34ed17fc7f6b6e->enter($__internal_3e6a6d794bd1bce84fa1a691fe4a1fafd23edda873ea70d2cf34ed17fc7f6b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3e6a6d794bd1bce84fa1a691fe4a1fafd23edda873ea70d2cf34ed17fc7f6b6e->leave($__internal_3e6a6d794bd1bce84fa1a691fe4a1fafd23edda873ea70d2cf34ed17fc7f6b6e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
