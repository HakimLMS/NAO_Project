<?php

/* form_table_layout.html.twig */
class __TwigTemplate_96cd836cbe473a3f65e139ab813b74ca4bd2b8959a08b3bb3171c48130d4be69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_115ff9ae052572dff91cdf77d9c16df5464b70d31c13d6a543e935173087cc56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115ff9ae052572dff91cdf77d9c16df5464b70d31c13d6a543e935173087cc56->enter($__internal_115ff9ae052572dff91cdf77d9c16df5464b70d31c13d6a543e935173087cc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_fd6b2e109472b47198f9025448f6d4a661a8b79552abb2feb9450f7ecc576e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6b2e109472b47198f9025448f6d4a661a8b79552abb2feb9450f7ecc576e9a->enter($__internal_fd6b2e109472b47198f9025448f6d4a661a8b79552abb2feb9450f7ecc576e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_115ff9ae052572dff91cdf77d9c16df5464b70d31c13d6a543e935173087cc56->leave($__internal_115ff9ae052572dff91cdf77d9c16df5464b70d31c13d6a543e935173087cc56_prof);

        
        $__internal_fd6b2e109472b47198f9025448f6d4a661a8b79552abb2feb9450f7ecc576e9a->leave($__internal_fd6b2e109472b47198f9025448f6d4a661a8b79552abb2feb9450f7ecc576e9a_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0ff6cfb96b830d70a589665b4b35eb90a22d09c84eae83ac9c92a6525b631da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff6cfb96b830d70a589665b4b35eb90a22d09c84eae83ac9c92a6525b631da0->enter($__internal_0ff6cfb96b830d70a589665b4b35eb90a22d09c84eae83ac9c92a6525b631da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_34b5a3f07c483b77611c754569dbf4b55a81ff012687da736440799e0a112f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b5a3f07c483b77611c754569dbf4b55a81ff012687da736440799e0a112f98->enter($__internal_34b5a3f07c483b77611c754569dbf4b55a81ff012687da736440799e0a112f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_34b5a3f07c483b77611c754569dbf4b55a81ff012687da736440799e0a112f98->leave($__internal_34b5a3f07c483b77611c754569dbf4b55a81ff012687da736440799e0a112f98_prof);

        
        $__internal_0ff6cfb96b830d70a589665b4b35eb90a22d09c84eae83ac9c92a6525b631da0->leave($__internal_0ff6cfb96b830d70a589665b4b35eb90a22d09c84eae83ac9c92a6525b631da0_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7ed3812e826d8f3312336fcad18f41a16099b9e3475444f36dbb37b066e77e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed3812e826d8f3312336fcad18f41a16099b9e3475444f36dbb37b066e77e4c->enter($__internal_7ed3812e826d8f3312336fcad18f41a16099b9e3475444f36dbb37b066e77e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c258d8f9bc711c743a4d2295799c0b130fc6ff2fbe2bfaa5285843c9ae778e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c258d8f9bc711c743a4d2295799c0b130fc6ff2fbe2bfaa5285843c9ae778e99->enter($__internal_c258d8f9bc711c743a4d2295799c0b130fc6ff2fbe2bfaa5285843c9ae778e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_c258d8f9bc711c743a4d2295799c0b130fc6ff2fbe2bfaa5285843c9ae778e99->leave($__internal_c258d8f9bc711c743a4d2295799c0b130fc6ff2fbe2bfaa5285843c9ae778e99_prof);

        
        $__internal_7ed3812e826d8f3312336fcad18f41a16099b9e3475444f36dbb37b066e77e4c->leave($__internal_7ed3812e826d8f3312336fcad18f41a16099b9e3475444f36dbb37b066e77e4c_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_9784ccb4ec4436e43aadef3a520f60758aec7d84ef33bf43faf7f36d3875fe69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9784ccb4ec4436e43aadef3a520f60758aec7d84ef33bf43faf7f36d3875fe69->enter($__internal_9784ccb4ec4436e43aadef3a520f60758aec7d84ef33bf43faf7f36d3875fe69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_d0a2d94b6ec7103cfa172bada46a8114ea61ff64989f03db2c0e189e698dc5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a2d94b6ec7103cfa172bada46a8114ea61ff64989f03db2c0e189e698dc5aa->enter($__internal_d0a2d94b6ec7103cfa172bada46a8114ea61ff64989f03db2c0e189e698dc5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_d0a2d94b6ec7103cfa172bada46a8114ea61ff64989f03db2c0e189e698dc5aa->leave($__internal_d0a2d94b6ec7103cfa172bada46a8114ea61ff64989f03db2c0e189e698dc5aa_prof);

        
        $__internal_9784ccb4ec4436e43aadef3a520f60758aec7d84ef33bf43faf7f36d3875fe69->leave($__internal_9784ccb4ec4436e43aadef3a520f60758aec7d84ef33bf43faf7f36d3875fe69_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_c0a640d17711b81be6bfd5613d2d84a3b90fca9238a09005c62bd50966089352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a640d17711b81be6bfd5613d2d84a3b90fca9238a09005c62bd50966089352->enter($__internal_c0a640d17711b81be6bfd5613d2d84a3b90fca9238a09005c62bd50966089352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_5e6225c96de838e604c0798071bf870a70fc018040ba690bd28f75a7c940892e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e6225c96de838e604c0798071bf870a70fc018040ba690bd28f75a7c940892e->enter($__internal_5e6225c96de838e604c0798071bf870a70fc018040ba690bd28f75a7c940892e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_5e6225c96de838e604c0798071bf870a70fc018040ba690bd28f75a7c940892e->leave($__internal_5e6225c96de838e604c0798071bf870a70fc018040ba690bd28f75a7c940892e_prof);

        
        $__internal_c0a640d17711b81be6bfd5613d2d84a3b90fca9238a09005c62bd50966089352->leave($__internal_c0a640d17711b81be6bfd5613d2d84a3b90fca9238a09005c62bd50966089352_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
