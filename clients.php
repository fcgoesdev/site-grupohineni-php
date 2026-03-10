<?php
// Dados editáveis dos clientes - pode ser facilmente modificado
$clients = [
    [
        "name" => "TechCorp Soluções",
        "category" => "marketing",
        "featured" => true,
        "description" => "ROI +400% em 6 meses com estratégia digital integrada",
        "website" => "",
        "logo" => "TechCorp"
    ],
    [
        "name" => "E-Commerce Plus",
        "category" => "ecommerce",
        "featured" => true,
        "description" => "Aumento de 250% nas conversões com otimização de UX",
        "website" => "",
        "logo" => "ECommerce"
    ],
    [
        "name" => "Consultoria Jurídica Silva",
        "category" => "consultoria",
        "featured" => false,
        "description" => "Presença digital renovada e leads qualificados",
        "website" => "",
        "logo" => "Silva"
    ],
    [
        "name" => "FinanceX Investimentos",
        "category" => "financa",
        "featured" => true,
        "description" => "Sistema de segurança implementado com testes de penetração",
        "website" => "",
        "logo" => "FinanceX"
    ],
    [
        "name" => "MediCare Clínica",
        "category" => "saude",
        "featured" => false,
        "description" => "Plataforma HIPAA-compliant com gestão de pacientes",
        "website" => "",
        "logo" => "MediCare"
    ],
    [
        "name" => "Indústria Metalúrgica Brasil",
        "category" => "industrial",
        "featured" => false,
        "description" => "Automação de processos com economia de 30% em custos",
        "website" => "",
        "logo" => "Metalúrgica"
    ],
    [
        "name" => "Startup EdTech Solutions",
        "category" => "educacao",
        "featured" => true,
        "description" => "Plataforma de aprendizado com 50k+ usuários ativos",
        "website" => "",
        "logo" => "EdTech"
    ],
    [
        "name" => "Agência de Viagens Premium",
        "category" => "turismo",
        "featured" => false,
        "description" => "Sistema de reservas com integração de múltiplos fornecedores",
        "website" => "",
        "logo" => "Viagens"
    ],
    [
        "name" => "Rede Retail Nacional",
        "category" => "varejo",
        "featured" => true,
        "description" => "POS integrado com análise de vendas em tempo real",
        "website" => "",
        "logo" => "Retail"
    ],
    [
        "name" => "Transportadora Logística",
        "category" => "logistica",
        "featured" => false,
        "description" => "Rastreamento GPS com otimização de rotas e redução de 20% no combustível",
        "website" => "",
        "logo" => "Logística"
    ]
];

// Categorias disponíveis
$categories = [
    "marketing" => "Marketing Digital",
    "ecommerce" => "E-Commerce",
    "consultoria" => "Consultoria",
    "financa" => "Finanças",
    "saude" => "Saúde",
    "industrial" => "Industrial",
    "educacao" => "Educação",
    "turismo" => "Turismo",
    "varejo" => "Varejo",
    "logistica" => "Logística"
];

return [
    'clients' => $clients,
    'categories' => $categories
];
?>
