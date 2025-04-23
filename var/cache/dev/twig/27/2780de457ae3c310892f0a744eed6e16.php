<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* Admin/formation.html.twig */
class __TwigTemplate_a0ad5f4c467911ed7dfbb4a74136f82f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'FormArmor_body' => [$this, 'block_FormArmor_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/formation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/formation.html.twig"));

        $this->parent = $this->loadTemplate("admin_layout.html.twig", "Admin/formation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_FormArmor_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "FormArmor_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        yield "\t<h2>AFFICHAGE DES FORMATIONS</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<th>Libelle</th>
\t\t\t<th>Niveau</th>
\t\t\t<th>Type</th>
\t\t\t<th>Diplomante</th>
\t\t\t<th>Dur&eacute;e</th>
\t\t\t<th>Cout de revient</th>
\t\t\t<th colspan=\"2\">Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lesFormations"]) || array_key_exists("lesFormations", $context) ? $context["lesFormations"] : (function () { throw new RuntimeError('Variable "lesFormations" does not exist.', 18, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 19
            yield "\t\t\t\t<tr ";
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19) % 2 == 0)) {
                yield " class=\"success\" ";
            } else {
                yield " class=\"info\" ";
            }
            yield ">
\t\t\t\t\t<td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "libelle", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "niveau", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "typeForm", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
\t\t\t\t\t";
            // line 24
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "diplomante", [], "any", false, false, false, 24) == 1)) {
                // line 25
                yield "\t\t\t\t\t\t<td>Oui</td>
\t\t\t\t\t";
            } else {
                // line 27
                yield "\t\t\t\t\t\t<td>Non</td>
\t\t\t\t\t";
            }
            // line 29
            yield "\t\t\t\t\t<td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "duree", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "coutrevient", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
\t\t\t\t\t<td><a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminFormationModif", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminFormationSupp", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\">Supprimer</a></td>
\t\t\t\t</tr>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "\t\t</tbody>
\t</table>
\t
\t";
        // line 38
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["lesFormations"]) || array_key_exists("lesFormations", $context) ? $context["lesFormations"] : (function () { throw new RuntimeError('Variable "lesFormations" does not exist.', 38, $this->source); })()));
        yield "
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu3').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/formation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  181 => 38,  176 => 35,  159 => 32,  155 => 31,  151 => 30,  146 => 29,  142 => 27,  138 => 25,  136 => 24,  132 => 23,  128 => 22,  124 => 21,  120 => 20,  110 => 19,  93 => 18,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin_layout.html.twig' %}
{% block FormArmor_body %}
\t<h2>AFFICHAGE DES FORMATIONS</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<th>Libelle</th>
\t\t\t<th>Niveau</th>
\t\t\t<th>Type</th>
\t\t\t<th>Diplomante</th>
\t\t\t<th>Dur&eacute;e</th>
\t\t\t<th>Cout de revient</th>
\t\t\t<th colspan=\"2\">Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for formation in lesFormations %}
\t\t\t\t<tr {# si le nombre de passages dans la boucle est pair #} {% if loop.index is even %} class=\"success\" {% else %} class=\"info\" {% endif %}>
\t\t\t\t\t<td>{{formation.id}}</td>
\t\t\t\t\t<td>{{formation.libelle}}</td>
\t\t\t\t\t<td>{{formation.niveau}}</td>
\t\t\t\t\t<td>{{formation.typeForm}}</td>
\t\t\t\t\t{% if (formation.diplomante == 1) %}
\t\t\t\t\t\t<td>Oui</td>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<td>Non</td>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<td>{{formation.duree}}</td>
\t\t\t\t\t<td>{{formation.coutrevient}}</td>
\t\t\t\t\t<td><a href=\"{{ path('adminFormationModif', {'id': formation.id}) }}\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"{{ path('adminFormationSupp', {'id': formation.id}) }}\">Supprimer</a></td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t
\t{{ knp_pagination_render(lesFormations) }}
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu3').attr('class', 'active');
\t\t});
\t</script>
\t
{% endblock %}", "Admin/formation.html.twig", "C:\\wamp64\\www\\FormArmor\\templates\\admin\\formation.html.twig");
    }
}
