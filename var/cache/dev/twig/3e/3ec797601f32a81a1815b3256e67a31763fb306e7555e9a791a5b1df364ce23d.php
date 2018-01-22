<?php

/* Administration/AdminDashboard.html.twig */
class __TwigTemplate_e3f99d6a6498d2bf19a31f62aaca8216cdfc2bd9114e3c4fcd019005dd5f3202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/AdminDashboard.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18cf2108056feb2a4e7b0a072eba5982296e21c08f7d5e438a7d1d288fda46ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18cf2108056feb2a4e7b0a072eba5982296e21c08f7d5e438a7d1d288fda46ea->enter($__internal_18cf2108056feb2a4e7b0a072eba5982296e21c08f7d5e438a7d1d288fda46ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/AdminDashboard.html.twig"));

        $__internal_588cab17e0d9e418e6db5ed3b804376aa0b3ffb50246c6f929271cb61d4f50df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588cab17e0d9e418e6db5ed3b804376aa0b3ffb50246c6f929271cb61d4f50df->enter($__internal_588cab17e0d9e418e6db5ed3b804376aa0b3ffb50246c6f929271cb61d4f50df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/AdminDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18cf2108056feb2a4e7b0a072eba5982296e21c08f7d5e438a7d1d288fda46ea->leave($__internal_18cf2108056feb2a4e7b0a072eba5982296e21c08f7d5e438a7d1d288fda46ea_prof);

        
        $__internal_588cab17e0d9e418e6db5ed3b804376aa0b3ffb50246c6f929271cb61d4f50df->leave($__internal_588cab17e0d9e418e6db5ed3b804376aa0b3ffb50246c6f929271cb61d4f50df_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2f5b6a026adf6248dc0cfab5e2112881559e0a2069660493cd32350647537ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f5b6a026adf6248dc0cfab5e2112881559e0a2069660493cd32350647537ee->enter($__internal_a2f5b6a026adf6248dc0cfab5e2112881559e0a2069660493cd32350647537ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4af64a575eb1bae9727b590e36fbc405d90d374170bb5bfd9df7f7ff1a664f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4af64a575eb1bae9727b590e36fbc405d90d374170bb5bfd9df7f7ff1a664f9->enter($__internal_a4af64a575eb1bae9727b590e36fbc405d90d374170bb5bfd9df7f7ff1a664f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
               ";
        // line 8
        echo "              <h5 class=\"card-title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "</h5>
              <p class=\"card-text\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->getSourceContext()); })()), "type", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
        
    </div>
    <div>
        <table id=\"userstable\">
            <h2 class=\"h2tabdashboard\">Comptes naturalistes à valider</h2> 
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Mail</th>
              <th>Carte Professionnelle</th>
              <th>Action à faire</th>
            </tr>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 24, $this->getSourceContext()); })()), "content", array()), "userqueued", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "            <form method=\"post\">
                <tr>
                   <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
                   <input type=\"hidden\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\" name=\"_userid\"></input>
                   <td>
                       <button type=\"submit\" value=\"validate\" formaction=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validateuser");
            echo "\">Valider</button>
                       <button type=\"submit\" value=\"downgrade\" formaction=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("downgradeuser");
            echo "\">Rétrograder</button>
                   </td>
                </tr>
            </form>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    
        </table>

        <table id=\"observationtable\">
            <h2 class=\"h2tabdashboard\">Observations</h2> 
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Mail</th>
              <th>Carte Professionnelle</th>
              <th>Action à faire</th>
            </tr>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 50, $this->getSourceContext()); })()), "content", array()), "userqueued", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 51
            echo "            <tr>
               <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
               <td> <button>Valider</button> <button>Rétrograder</button></td>
            </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                ";
        // line 60
        echo "        </table>

        <table id=\"obsqueudtable\">
            <h2 class=\"h2tabdashboard\">Observations à valider</h2> 
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Mail</th>
              <th>Carte Professionnelle</th>
              <th>Action à faire</th>
            </tr>
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 71, $this->getSourceContext()); })()), "content", array()), "userqueued", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 72
            echo "            <tr>
               <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
               <td> <button>Valider</button> <button>Rétrograder</button></td>
            </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                ";
        // line 81
        echo "        </table>

        <table id=\"articletable\">
            <h2 class=\"h2tabdashboard\">Articles du blog</h2> 
            <tr>
              <th>Titre</th>
              <th>Date</th>
              <th>Texte</th>
              <th>Action à faire</th>

            </tr>
                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 92, $this->getSourceContext()); })()), "content", array()), "articles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 93
            echo "            <tr>
            <form method=\"post\">
                <td><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_single", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</a></td>
               <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "dateArticle", array()), "d/m/Y"), "html", null, true);
            echo "</td>
               <td>";
            // line 97
            echo twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array())), 0, 55);
            echo "</td>
               <input type=\"hidden\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()), "html", null, true);
            echo "\" name=\"_articleid\"></input>
               <td>
                   <button type=\"submit\" formaction=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_article", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">Modifier</button>
                   <button type=\"submit\" formaction=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_article", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">Supprimer</button>
               </td>
            </tr>
            <tr><button type=\"submit\" formaction=\"";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_article");
            echo "\">Ecrire un article</button></tr>
            </form>   
            
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                ";
        // line 109
        echo "        </table>
    </div>
";
        
        $__internal_a4af64a575eb1bae9727b590e36fbc405d90d374170bb5bfd9df7f7ff1a664f9->leave($__internal_a4af64a575eb1bae9727b590e36fbc405d90d374170bb5bfd9df7f7ff1a664f9_prof);

        
        $__internal_a2f5b6a026adf6248dc0cfab5e2112881559e0a2069660493cd32350647537ee->leave($__internal_a2f5b6a026adf6248dc0cfab5e2112881559e0a2069660493cd32350647537ee_prof);

    }

    public function getTemplateName()
    {
        return "Administration/AdminDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 109,  271 => 108,  261 => 104,  255 => 101,  251 => 100,  246 => 98,  242 => 97,  238 => 96,  232 => 95,  228 => 93,  224 => 92,  211 => 81,  209 => 80,  199 => 76,  195 => 75,  191 => 74,  187 => 73,  184 => 72,  180 => 71,  167 => 60,  165 => 59,  155 => 55,  151 => 54,  147 => 53,  143 => 52,  140 => 51,  136 => 50,  122 => 38,  111 => 34,  107 => 33,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 25,  78 => 24,  60 => 9,  55 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
               {#<img class=\"card-img-top\" src=\"{{user.image}}\" alt=\"{{user.firstname}}\"  style=\"height: 170px;\"> #}
              <h5 class=\"card-title\">{{user.firstname}}</h5>
              <p class=\"card-text\">{{user.type}}</p>
            </div>
        </div>
        
    </div>
    <div>
        <table id=\"userstable\">
            <h2 class=\"h2tabdashboard\">Comptes naturalistes à valider</h2> 
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Mail</th>
              <th>Carte Professionnelle</th>
              <th>Action à faire</th>
            </tr>
                {% for user in data.content.userqueued %}
            <form method=\"post\">
                <tr>
                   <td>{{user.lastname}}</td>
                   <td>{{user.firstname}}</td>
                   <td>{{user.email}}</td>
                   <td>{{user.procard}}</td>
                   <input type=\"hidden\" value=\"{{user.id}}\" name=\"_userid\"></input>
                   <td>
                       <button type=\"submit\" value=\"validate\" formaction=\"{{path('validateuser')}}\">Valider</button>
                       <button type=\"submit\" value=\"downgrade\" formaction=\"{{path('downgradeuser')}}\">Rétrograder</button>
                   </td>
                </tr>
            </form>
                {% endfor %}    
        </table>

        <table id=\"observationtable\">
            <h2 class=\"h2tabdashboard\">Observations</h2> 
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Mail</th>
              <th>Carte Professionnelle</th>
              <th>Action à faire</th>
            </tr>
                {% for user in data.content.userqueued %}
            <tr>
               <td>{{user.lastname}}</td>
               <td>{{user.firstname}}</td>
               <td>{{user.email}}</td>
               <td>{{user.procard}}</td>
               <td> <button>Valider</button> <button>Rétrograder</button></td>
            </tr>
                {% endfor %}
                {# wire buttons to actions to validate or not the accounts #}
        </table>

        <table id=\"obsqueudtable\">
            <h2 class=\"h2tabdashboard\">Observations à valider</h2> 
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Mail</th>
              <th>Carte Professionnelle</th>
              <th>Action à faire</th>
            </tr>
                {% for user in data.content.userqueued %}
            <tr>
               <td>{{user.lastname}}</td>
               <td>{{user.firstname}}</td>
               <td>{{user.email}}</td>
               <td>{{user.procard}}</td>
               <td> <button>Valider</button> <button>Rétrograder</button></td>
            </tr>
                {% endfor %}
                {# wire buttons to actions to validate or not the accounts #}
        </table>

        <table id=\"articletable\">
            <h2 class=\"h2tabdashboard\">Articles du blog</h2> 
            <tr>
              <th>Titre</th>
              <th>Date</th>
              <th>Texte</th>
              <th>Action à faire</th>

            </tr>
                {% for article in data.content.articles %}
            <tr>
            <form method=\"post\">
                <td><a href=\"{{path('article_single', {'id': article.id})}}\">{{article.title}}</a></td>
               <td>{{article.dateArticle|date(\"d/m/Y\")}}</td>
               <td>{{article.content|striptags|slice(0, 55)|raw}}</td>
               <input type=\"hidden\" value=\"{{article.id}}\" name=\"_articleid\"></input>
               <td>
                   <button type=\"submit\" formaction=\"{{path('modify_article', {'id' : article.id})}}\">Modifier</button>
                   <button type=\"submit\" formaction=\"{{path('delete_article', {'id' : article.id})}}\">Supprimer</button>
               </td>
            </tr>
            <tr><button type=\"submit\" formaction=\"{{path('new_article')}}\">Ecrire un article</button></tr>
            </form>   
            
                {% endfor %}
                {# wire buttons to actions to validate or not the accounts #}
        </table>
    </div>
{% endblock %}
", "Administration/AdminDashboard.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\AdminDashboard.html.twig");
    }
}
