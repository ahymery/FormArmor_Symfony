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

/* accueil/index.html.twig */
class __TwigTemplate_c6060ba8b6f17d73a1e48b43236f33db extends Template
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
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "accueil/index.html.twig", 1);
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
        yield "\t
\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t  <!-- Indicators -->
\t  <ol class=\"carousel-indicators\">
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"4\"></li>
\t  </ol>

\t  <!-- Wrapper for slides -->
\t  <div class=\"carousel-inner\" role=\"listbox\">
\t\t<div class=\"item active\">
\t\t  <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/formation1.jpg"), "html", null, true);
        yield "\" alt=\"Image1 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>Des formateurs à votre service.</p>
\t\t  </div>
\t\t</div>

\t\t<div class=\"item\">
\t\t  <img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/formation2.jpg"), "html", null, true);
        yield "\" alt=\"Image2 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>Un équipement de qualité et à disposition.</p>
\t\t  </div>
\t\t</div>

\t\t<div class=\"item\">
\t\t  <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/formation3.jpg"), "html", null, true);
        yield "\" alt=\"Image3 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>De multiples formations diplomantes.</p>
\t\t  </div>
\t\t</div>

\t\t<div class=\"item\">
\t\t  <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/formation4.jpg"), "html", null, true);
        yield "\" alt=\"Image4 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>L'accompagnement de vos projets professionnels</p>
\t\t  </div>
\t\t</div>
\t\t
\t\t<div class=\"item\">
\t\t  <img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/formation5.jpg"), "html", null, true);
        yield "\" alt=\"Image5 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>Une formation à proximité et dans une ambiance chaleureuse.</p>
\t\t  </div>
\t\t</div>
\t  </div>

\t  <!-- Left and right controls -->
\t  <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t<span class=\"sr-only\">Previous</span>
\t  </a>
\t  <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t<span class=\"sr-only\">Next</span>
\t  </a>
\t</div>
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu1').attr('class', 'active');
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
        return "accueil/index.html.twig";
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
        return array (  136 => 49,  125 => 41,  114 => 33,  103 => 25,  92 => 17,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block FormArmor_body %}
\t
\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t  <!-- Indicators -->
\t  <ol class=\"carousel-indicators\">
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"4\"></li>
\t  </ol>

\t  <!-- Wrapper for slides -->
\t  <div class=\"carousel-inner\" role=\"listbox\">
\t\t<div class=\"item active\">
\t\t  <img src=\"{{asset('images/formation1.jpg')}}\" alt=\"Image1 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>Des formateurs à votre service.</p>
\t\t  </div>
\t\t</div>

\t\t<div class=\"item\">
\t\t  <img src=\"{{asset('images/formation2.jpg') }}\" alt=\"Image2 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>Un équipement de qualité et à disposition.</p>
\t\t  </div>
\t\t</div>

\t\t<div class=\"item\">
\t\t  <img src=\"{{asset('images/formation3.jpg') }}\" alt=\"Image3 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>De multiples formations diplomantes.</p>
\t\t  </div>
\t\t</div>

\t\t<div class=\"item\">
\t\t  <img src=\"{{asset('images/formation4.jpg') }}\" alt=\"Image4 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>L'accompagnement de vos projets professionnels</p>
\t\t  </div>
\t\t</div>
\t\t
\t\t<div class=\"item\">
\t\t  <img src=\"{{asset('images/formation5.jpg') }}\" alt=\"Image5 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>Une formation à proximité et dans une ambiance chaleureuse.</p>
\t\t  </div>
\t\t</div>
\t  </div>

\t  <!-- Left and right controls -->
\t  <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t<span class=\"sr-only\">Previous</span>
\t  </a>
\t  <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t<span class=\"sr-only\">Next</span>
\t  </a>
\t</div>
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu1').attr('class', 'active');
\t\t});
\t</script>
\t
{% endblock %}", "accueil/index.html.twig", "C:\\wamp64\\www\\FormArmor\\templates\\accueil\\index.html.twig");
    }
}
