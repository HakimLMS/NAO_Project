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
        $__internal_7ee5782732a77039cd1c5797e7a234d1c9a1b3e770e5bcee4afde64cb32f8efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee5782732a77039cd1c5797e7a234d1c9a1b3e770e5bcee4afde64cb32f8efa->enter($__internal_7ee5782732a77039cd1c5797e7a234d1c9a1b3e770e5bcee4afde64cb32f8efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/AdminDashboard.html.twig"));

        $__internal_61dcc965d211778acf66ee8a6b49666a849926c24a1c281fb67a052aa0fbb716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61dcc965d211778acf66ee8a6b49666a849926c24a1c281fb67a052aa0fbb716->enter($__internal_61dcc965d211778acf66ee8a6b49666a849926c24a1c281fb67a052aa0fbb716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/AdminDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ee5782732a77039cd1c5797e7a234d1c9a1b3e770e5bcee4afde64cb32f8efa->leave($__internal_7ee5782732a77039cd1c5797e7a234d1c9a1b3e770e5bcee4afde64cb32f8efa_prof);

        
        $__internal_61dcc965d211778acf66ee8a6b49666a849926c24a1c281fb67a052aa0fbb716->leave($__internal_61dcc965d211778acf66ee8a6b49666a849926c24a1c281fb67a052aa0fbb716_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_25815fa5526d5817c7a2cf95e2072df90232591eca05abb8c1a355fb15097844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25815fa5526d5817c7a2cf95e2072df90232591eca05abb8c1a355fb15097844->enter($__internal_25815fa5526d5817c7a2cf95e2072df90232591eca05abb8c1a355fb15097844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77b604a0b6e72768163df5eec603b7d71428fc708c9408650a6a084096576844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b604a0b6e72768163df5eec603b7d71428fc708c9408650a6a084096576844->enter($__internal_77b604a0b6e72768163df5eec603b7d71428fc708c9408650a6a084096576844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
               ";
        // line 11
        echo "        </div>
        
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
            
            </form>   
            
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                <tr><button type=\"submit\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_article");
        echo "\">Ecrire un article</a></button></tr>    
        </table>
    </div>
";
        
        $__internal_77b604a0b6e72768163df5eec603b7d71428fc708c9408650a6a084096576844->leave($__internal_77b604a0b6e72768163df5eec603b7d71428fc708c9408650a6a084096576844_prof);

        
        $__internal_25815fa5526d5817c7a2cf95e2072df90232591eca05abb8c1a355fb15097844->leave($__internal_25815fa5526d5817c7a2cf95e2072df90232591eca05abb8c1a355fb15097844_prof);

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
        return array (  260 => 108,  247 => 101,  243 => 100,  238 => 98,  234 => 97,  230 => 96,  224 => 95,  220 => 93,  216 => 92,  203 => 81,  201 => 80,  191 => 76,  187 => 75,  183 => 74,  179 => 73,  176 => 72,  172 => 71,  159 => 60,  157 => 59,  147 => 55,  143 => 54,  139 => 53,  135 => 52,  132 => 51,  128 => 50,  114 => 38,  103 => 34,  99 => 33,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 25,  70 => 24,  55 => 11,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
               {#<a href=\"{{path('modifyuser')}}\"><img class=\"card-img-top\" src=\"{{asset('build/img/'~user.image)}}\" alt=\"{{user.firstname}}\" style=\"height: 170px;\"></a>
              <h5 class=\"card-title\">{{user.firstname}}</h5>
              <p class=\"card-text\">{{user.type}}</p>
            </div>#}
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
            
            </form>   
            
                {% endfor %}
                <tr><button type=\"submit\"><a href=\"{{path('new_article')}}\">Ecrire un article</a></button></tr>    
        </table>
    </div>
{% endblock %}
", "Administration/AdminDashboard.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\AdminDashboard.html.twig");
    }
}
