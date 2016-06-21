<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_f9268913a845402359f84af31748cefcec130521d9fa8bc6a875ea375c380fa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_42095d903e21170e55085ac20fd7b9f741768d721b1822db527a86fb9d0e610f = $this->env->getExtension("native_profiler");
        $__internal_42095d903e21170e55085ac20fd7b9f741768d721b1822db527a86fb9d0e610f->enter($__internal_42095d903e21170e55085ac20fd7b9f741768d721b1822db527a86fb9d0e610f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42095d903e21170e55085ac20fd7b9f741768d721b1822db527a86fb9d0e610f->leave($__internal_42095d903e21170e55085ac20fd7b9f741768d721b1822db527a86fb9d0e610f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be7e54193bd0c1d1a6859ccaf697ba9e4afc15664524937e9b59b273f4102145 = $this->env->getExtension("native_profiler");
        $__internal_be7e54193bd0c1d1a6859ccaf697ba9e4afc15664524937e9b59b273f4102145->enter($__internal_be7e54193bd0c1d1a6859ccaf697ba9e4afc15664524937e9b59b273f4102145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_be7e54193bd0c1d1a6859ccaf697ba9e4afc15664524937e9b59b273f4102145->leave($__internal_be7e54193bd0c1d1a6859ccaf697ba9e4afc15664524937e9b59b273f4102145_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
