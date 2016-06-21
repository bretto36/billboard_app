<?php

/* EasyAdminBundle:default:menu.html.twig */
class __TwigTemplate_9a98584b1122365f810038ed46913b331dfc56c61e8f7ebb4c74907082686c47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb4d3ab20b2c951372c5ef474c268853285352c60d096e65d7b3d128089f1187 = $this->env->getExtension("native_profiler");
        $__internal_eb4d3ab20b2c951372c5ef474c268853285352c60d096e65d7b3d128089f1187->enter($__internal_eb4d3ab20b2c951372c5ef474c268853285352c60d096e65d7b3d128089f1187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $this->displayBlock('main_menu', $context, $blocks);
        // line 51
        echo "</ul>

";
        // line 53
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_eb4d3ab20b2c951372c5ef474c268853285352c60d096e65d7b3d128089f1187->leave($__internal_eb4d3ab20b2c951372c5ef474c268853285352c60d096e65d7b3d128089f1187_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_0a9e713806bc11bf18f495b99a76656ba5d43bb62778436a40d9dc488e55b149 = $this->env->getExtension("native_profiler");
        $__internal_0a9e713806bc11bf18f495b99a76656ba5d43bb62778436a40d9dc488e55b149->enter($__internal_0a9e713806bc11bf18f495b99a76656ba5d43bb62778436a40d9dc488e55b149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_0a9e713806bc11bf18f495b99a76656ba5d43bb62778436a40d9dc488e55b149->leave($__internal_0a9e713806bc11bf18f495b99a76656ba5d43bb62778436a40d9dc488e55b149_prof);

    }

    // line 34
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_c77e7ba980f73e1700b7eed45f2a48340fa8aa1bab01108a4523ad1fbdb2f150 = $this->env->getExtension("native_profiler");
        $__internal_c77e7ba980f73e1700b7eed45f2a48340fa8aa1bab01108a4523ad1fbdb2f150->enter($__internal_c77e7ba980f73e1700b7eed45f2a48340fa8aa1bab01108a4523ad1fbdb2f150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.menu"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "            <li class=\"";
            echo ((($this->getAttribute($context["item"], "type", array()) == "divider")) ? ("header") : (""));
            echo " ";
            echo (( !twig_test_empty($this->getAttribute($context["item"], "children", array()))) ? ("treeview") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array()))) ? ("active") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
            echo "\">
                ";
            // line 37
            echo $context["helper"]->getrender_menu_item($context["item"]);
            echo "

                ";
            // line 39
            if ( !twig_test_empty((($this->getAttribute($context["item"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "children", array()), array())) : (array())))) {
                // line 40
                echo "                    <ul class=\"treeview-menu\">
                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 42
                    echo "                            <li class=\"";
                    echo ((($this->getAttribute($context["subitem"], "type", array()) == "divider")) ? ("header") : (""));
                    echo " ";
                    echo (((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index0", array())) && ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array())))) ? ("active") : (""));
                    echo "\">
                                ";
                    // line 43
                    echo $context["helper"]->getrender_menu_item($context["subitem"]);
                    echo "
                            </li>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                    </ul>
                ";
            }
            // line 48
            echo "            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    ";
        
        $__internal_c77e7ba980f73e1700b7eed45f2a48340fa8aa1bab01108a4523ad1fbdb2f150->leave($__internal_c77e7ba980f73e1700b7eed45f2a48340fa8aa1bab01108a4523ad1fbdb2f150_prof);

    }

    // line 53
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_279ecca459c1275718dd5bc89aca6ad820e6517c2fd64ef0fef655da268ec7c4 = $this->env->getExtension("native_profiler");
        $__internal_279ecca459c1275718dd5bc89aca6ad820e6517c2fd64ef0fef655da268ec7c4->enter($__internal_279ecca459c1275718dd5bc89aca6ad820e6517c2fd64ef0fef655da268ec7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_279ecca459c1275718dd5bc89aca6ad820e6517c2fd64ef0fef655da268ec7c4->leave($__internal_279ecca459c1275718dd5bc89aca6ad820e6517c2fd64ef0fef655da268ec7c4_prof);

    }

    // line 1
    public function getrender_menu_item($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ca09a3784dc26d3f4ecd0b0448e818fa44e8c1482d6ca176a5efb746bd7ee2a0 = $this->env->getExtension("native_profiler");
            $__internal_ca09a3784dc26d3f4ecd0b0448e818fa44e8c1482d6ca176a5efb746bd7ee2a0->enter($__internal_ca09a3784dc26d3f4ecd0b0448e818fa44e8c1482d6ca176a5efb746bd7ee2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "menu_index", array()), "submenuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "link")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "url", array())) : (((($this->getAttribute(                // line 8
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "route")) ? ($this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array()))) : (((($this->getAttribute(                // line 9
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "entity")) ? ($this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "entity", array()), "action" => "list"), (isset($context["menu_params"]) ? $context["menu_params"] : $this->getContext($context, "menu_params"))), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array())))) : (((($this->getAttribute(                // line 10
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "route") && (is_string($__internal_1fcfdf8bc9439f103236319b4d5b588bd6855372804373b92813cd433cbe4ed6 = (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path"))) && is_string($__internal_10901142074572108faee4389ef68e8f554b98c7dde4d13d00060cdf27dc806a = $this->env->getExtension('routing')->getPath("easyadmin")) && ('' === $__internal_10901142074572108faee4389ef68e8f554b98c7dde4d13d00060cdf27dc806a || 0 === strpos($__internal_1fcfdf8bc9439f103236319b4d5b588bd6855372804373b92813cd433cbe4ed6, $__internal_10901142074572108faee4389ef68e8f554b98c7dde4d13d00060cdf27dc806a))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), twig_array_merge((isset($context["menu_params"]) ? $context["menu_params"] : $this->getContext($context, "menu_params")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_ca09a3784dc26d3f4ecd0b0448e818fa44e8c1482d6ca176a5efb746bd7ee2a0->leave($__internal_ca09a3784dc26d3f4ecd0b0448e818fa44e8c1482d6ca176a5efb746bd7ee2a0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 25,  256 => 24,  251 => 23,  245 => 22,  235 => 21,  232 => 20,  229 => 19,  226 => 18,  223 => 17,  220 => 12,  218 => 10,  217 => 9,  216 => 8,  215 => 7,  213 => 6,  210 => 5,  204 => 3,  201 => 2,  186 => 1,  175 => 53,  168 => 50,  153 => 48,  149 => 46,  132 => 43,  125 => 42,  108 => 41,  105 => 40,  103 => 39,  98 => 37,  87 => 36,  69 => 35,  63 => 34,  52 => 31,  45 => 53,  41 => 51,  39 => 34,  35 => 32,  33 => 31,  30 => 30,  28 => 29,  25 => 28,);
    }
}
/* {% macro render_menu_item(item) %}*/
/*     {% if item.type == 'divider' %}*/
/*         {{ item.label|trans }}*/
/*     {% else %}*/
/*         {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}*/
/*         {% set path =*/
/*             item.type == 'link' ? item.url :*/
/*             item.type == 'route' ? path(item.route, item.params) :*/
/*             item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :*/
/*             item.type == 'empty' ? '#' : ''*/
/*         %}*/
/* */
/*         {# if the URL generated for the route belongs to the backend, regenerate*/
/*            the URL to include the menu_params to display the selected menu item*/
/*            (this is checked comparing the beginning of the route URL with the backend homepage URL)*/
/*         #}*/
/*         {% if item.type == 'route' and (path starts with path('easyadmin')) %}*/
/*             {% set path = path(item.route, menu_params|merge(item.params)) %}*/
/*         {% endif %}*/
/* */
/*         <a href="{{ path }}" {% if item.target|default(false) %}target="{{ item.target }}"{% endif %}>*/
/*             {% if item.icon is not empty %}<i class="fa {{ item.icon }}"></i>{% endif %}*/
/*             <span>{{ item.label|trans }}</span>*/
/*             {% if item.children|default([]) is not empty %}<i class="fa fa-angle-left pull-right"></i>{% endif %}*/
/*         </a>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as helper %}*/
/* */
/* {% block main_menu_before %}{% endblock %}*/
/* */
/* <ul class="sidebar-menu">*/
/*     {% block main_menu %}*/
/*         {% for item in easyadmin_config('design.menu') %}*/
/*             <li class="{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}">*/
/*                 {{ helper.render_menu_item(item) }}*/
/* */
/*                 {% if item.children|default([]) is not empty %}*/
/*                     <ul class="treeview-menu">*/
/*                         {% for subitem in item.children %}*/
/*                             <li class="{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}">*/
/*                                 {{ helper.render_menu_item(subitem) }}*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </li>*/
/*         {% endfor %}*/
/*     {% endblock main_menu %}*/
/* </ul>*/
/* */
/* {% block main_menu_after %}{% endblock %}*/
/* */
