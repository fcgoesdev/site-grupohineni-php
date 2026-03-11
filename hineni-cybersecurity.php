<?php $pageTitle = "Hineni Cybersecurity"; ?>
<?php include 'includes/header.php'; ?>

<style>
    .gradient-security { background: linear-gradient(135deg, #003D82 0%, #1A5F7A 100%); }
</style>

<!-- Hero Section -->
<section class="gradient-security text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Hineni Cybersecurity</h1>
        <p class="text-xl opacity-90">Proteção completa contra ameaças cibernéticas para seu negócio</p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold mb-12 text-center text-gray-900">Serviços Completos de Segurança e Desenvolvimento</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg p-8 border-2 border-purple-200">
                <div class="gradient-security text-white rounded-lg p-3 w-12 h-12 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m7 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Testes de Penetração</h3>
                <p class="text-gray-700 mb-4">Avaliação completa da segurança através de simulações de ataques reais, identificando vulnerabilidades antes que os cibercriminosos as encontrem.</p>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>✓ Testes de aplicações web</li>
                    <li>✓ Testes de infraestrutura</li>
                    <li>✓ Teste de engenharia social</li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg p-8 border-2 border-purple-200">
                <div class="gradient-security text-white rounded-lg p-3 w-12 h-12 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Análise de Vulnerabilidades</h3>
                <p class="text-gray-700 mb-4">Scanning automático e manual de sistemas para detectar pontos fracos, fornecendo relatórios detalhados com priorização de riscos.</p>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>✓ Scanning de redes</li>
                    <li>✓ Análise de código-fonte</li>
                    <li>✓ Avaliação de configurações</li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg p-8 border-2 border-purple-200">
                <div class="gradient-security text-white rounded-lg p-3 w-12 h-12 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Segurança de APIs</h3>
                <p class="text-gray-700 mb-4">Proteção contra vulnerabilidades em APIs REST e SOAP, incluindo autenticação, autorização, rate limiting e detecção de abuso.</p>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>✓ Testes de segurança de API</li>
                    <li>✓ Implementação de WAF</li>
                    <li>✓ Monitoramento de tráfego</li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-slate-50 rounded-lg p-8 border-2 border-blue-200">
                <div class="gradient-security text-white rounded-lg p-3 w-12 h-12 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Consultoria em Segurança</h3>
                <p class="text-gray-700 mb-4">Orientação especializada para estabelecer políticas de segurança, conformidade regulatória (LGPD, GDPR) e planos de resposta a incidentes.</p>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>✓ Auditoria de segurança</li>
                    <li>✓ Plano de continuidade</li>
                    <li>✓ Treinamento de equipe</li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-slate-50 rounded-lg p-8 border-2 border-blue-200">
                <div class="gradient-security text-white rounded-lg p-3 w-12 h-12 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4m0 6v2a2 2 0 01-2 2h-2.5a1 1 0 00-.8.4l-1.9 2.533a1 1 0 01-1.6 0l-1.9-2.533a1 1 0 00-.8-.4H5a2 2 0 01-2-2v-6.5"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Desenvolvimento Web Seguro</h3>
                <p class="text-gray-700 mb-4">Criação de websites e aplicações web modernos com segurança em primeiro lugar, implementando as melhores práticas de proteção desde o desenvolvimento.</p>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>✓ Sites com segurança integrada</li>
                    <li>✓ Aplicações web resistentes a ataques</li>
                    <li>✓ Testes de segurança integrados</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-16 bg-gray-50 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold mb-12 text-center text-gray-900">Benefícios da Segurança Proativa</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-lg transition">
                <div class="text-4xl mb-4">🛡️</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Proteção de Dados</h3>
                <p class="text-gray-700">Proteção contra roubo de informações sensíveis e cumprimento de regulamentações de privacidade como LGPD e GDPR.</p>
            </div>
            <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-lg transition">
                <div class="text-4xl mb-4">⚡</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Continuidade de Negócio</h3>
                <p class="text-gray-700">Redução de downtime e perdas financeiras através de planos de recuperação de desastres e backup automático.</p>
            </div>
            <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-lg transition">
                <div class="text-4xl mb-4">💰</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Redução de Custos</h3>
                <p class="text-gray-700">Prevenção de brechas de segurança evita custos de remediação, multas regulatórias e danos à reputação.</p>
            </div>
            <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-lg transition">
                <div class="text-4xl mb-4">🔒</div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Confiança de Clientes</h3>
                <p class="text-gray-700">Demonstração de compromisso com segurança aumenta confiança de clientes e parceiros comerciais.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold mb-12 text-center text-gray-900">Tecnologias que Utilizamos</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg p-6 text-center border border-purple-200">
                <h4 class="font-semibold text-gray-900">Metasploit</h4>
                <p class="text-sm text-gray-600 mt-2">Framework de testes de penetração</p>
            </div>
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg p-6 text-center border border-purple-200">
                <h4 class="font-semibold text-gray-900">Burp Suite</h4>
                <p class="text-sm text-gray-600 mt-2">Testing de segurança web</p>
            </div>
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg p-6 text-center border border-purple-200">
                <h4 class="font-semibold text-gray-900">OWASP ZAP</h4>
                <p class="text-sm text-gray-600 mt-2">Scanner de vulnerabilidades</p>
            </div>
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg p-6 text-center border border-purple-200">
                <h4 class="font-semibold text-gray-900">Nessus</h4>
                <p class="text-sm text-gray-600 mt-2">Scanning de vulnerabilidades</p>
            </div>
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg p-6 text-center border border-purple-200">
                <h4 class="font-semibold text-gray-900">Wireshark</h4>
                <p class="text-sm text-gray-600 mt-2">Análise de tráfego de rede</p>
            </div>
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg p-6 text-center border border-purple-200">
                <h4 class="font-semibold text-gray-900">Ghidra</h4>
                <p class="text-sm text-gray-600 mt-2">Análise de malware</p>
            </div>
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg p-6 text-center border border-purple-200">
                <h4 class="font-semibold text-gray-900">ELK Stack</h4>
                <p class="text-sm text-gray-600 mt-2">SIEM e monitoramento</p>
            </div>
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg p-6 text-center border border-purple-200">
                <h4 class="font-semibold text-gray-900">Kubernetes</h4>
                <p class="text-sm text-gray-600 mt-2">Orquestração segura</p>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases Section -->
<section class="py-16 bg-gray-50 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold mb-12 text-center text-gray-900">Casos de Uso</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg p-8 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-3">🏢 Empresas em Crescimento</h3>
                <p class="text-gray-700 mb-4">Implementação de controles de segurança enquanto escalam operações, evitando vulnerabilidades comuns em crescimento acelerado.</p>
            </div>
            <div class="bg-white rounded-lg p-8 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-3">🏦 Setor Financeiro</h3>
                <p class="text-gray-700 mb-4">Conformidade com PCI DSS, proteção contra fraude, detecção de anomalias e segurança de transações críticas.</p>
            </div>
            <div class="bg-white rounded-lg p-8 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-3">🏥 Saúde e Telemedicina</h3>
                <p class="text-gray-700 mb-4">Proteção de dados HIPAA, segurança de sistemas de saúde, conformidade com regulamentações de privacidade.</p>
            </div>
            <div class="bg-white rounded-lg p-8 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-3">🛒 E-Commerce</h3>
                <p class="text-gray-700 mb-4">Proteção de dados de clientes, segurança de pagamentos, prevenção de fraude e chargeback.</p>
            </div>
            <div class="bg-white rounded-lg p-8 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-3">🏭 Manufatura e IoT</h3>
                <p class="text-gray-700 mb-4">Segurança de redes OT, proteção de máquinas conectadas e prevenção de paradas não planejadas.</p>
            </div>
            <div class="bg-white rounded-lg p-8 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-3">📱 Aplicações Mobile</h3>
                <p class="text-gray-700 mb-4">Teste de segurança de apps, proteção contra reverse engineering e detecção de vulnerabilidades específicas de mobile.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="gradient-security text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6">Proteja Seu Negócio Hoje</h2>
        <p class="text-xl mb-8 opacity-90">Não espere por um incidente de segurança. Converse com Fabio e nossos especialistas em cybersecurity para uma avaliação gratuita.</p>
        <a href="/contato.php" class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition inline-block">
            Solicitar Avaliação de Segurança
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
