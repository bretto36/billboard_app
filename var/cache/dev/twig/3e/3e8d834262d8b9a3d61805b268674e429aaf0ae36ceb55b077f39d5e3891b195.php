<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f802be3f709c158af0f324bbc4a55affd6bd7f9a006feca188dadf4fe88c25f3 extends Twig_Template
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
        $__internal_1cf54e55d2ac6c71f2b326dfb18861cfeb73ba09f1b483eeee8492b3aeaaad44 = $this->env->getExtension("native_profiler");
        $__internal_1cf54e55d2ac6c71f2b326dfb18861cfeb73ba09f1b483eeee8492b3aeaaad44->enter($__internal_1cf54e55d2ac6c71f2b326dfb18861cfeb73ba09f1b483eeee8492b3aeaaad44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1cf54e55d2ac6c71f2b326dfb18861cfeb73ba09f1b483eeee8492b3aeaaad44->leave($__internal_1cf54e55d2ac6c71f2b326dfb18861cfeb73ba09f1b483eeee8492b3aeaaad44_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
