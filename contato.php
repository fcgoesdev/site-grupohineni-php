<?php $pageTitle = "Contato"; ?>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="gradient-blue-purple text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Fale Conosco</h1>
        <p class="text-xl opacity-90">Estamos aqui para responder suas dúvidas e agendar uma consultoria</p>
    </div>
</section>

<!-- Contact Information Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <div class="bg-white rounded-lg p-8 shadow-sm border border-gray-200 text-center">
                <div class="text-4xl mb-4">📧</div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Email</h3>
                <p class="text-gray-700 mb-2">contato@grupohineni.com.br</p>
                <p class="text-sm text-gray-600">Responderemos em até 24 horas</p>
            </div>

            <div class="bg-white rounded-lg p-8 shadow-sm border border-gray-200 text-center">
                <div class="text-4xl mb-4">💬</div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">WhatsApp</h3>
                <p class="text-gray-700 mb-2">+55 43 9 9113-2227</p>
                <p class="text-sm text-gray-600">Atendimento rápido via WhatsApp</p>
            </div>

            <div class="bg-white rounded-lg p-8 shadow-sm border border-gray-200 text-center">
                <div class="text-4xl mb-4">⏰</div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Horário</h3>
                <p class="text-gray-700 mb-2">Seg. - Sex.: 09:00 - 18:00</p>
                <p class="text-sm text-gray-600">Suporte 24/7 para emergências</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-16 bg-gray-50 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-bold mb-8 text-center text-gray-900">Envie uma Mensagem</h2>

        <?php
        $showMessage = false;
        $messageType = '';
        $messageText = '';

        if ($_GET && isset($_GET['status'])) {
            $showMessage = true;
            if ($_GET['status'] === 'success') {
                $messageType = 'success';
                $messageText = 'Sua mensagem foi enviada com sucesso! Em breve entraremos em contato.';
            } elseif ($_GET['status'] === 'error') {
                $messageType = 'error';
                $messageText = 'Ocorreu um erro ao enviar sua mensagem. Tente novamente ou entre em contato via WhatsApp.';
            }
        }
        ?>

        <?php if ($showMessage): ?>
        <div class="mb-8 p-4 rounded-lg <?php echo $messageType === 'success' ? 'bg-green-50 border border-green-200 text-green-800' : 'bg-red-50 border border-red-200 text-red-800'; ?>">
            <?php echo $messageText; ?>
        </div>
        <?php endif; ?>

        <form method="POST" action="/enviar-contato.php" class="bg-white rounded-lg p-8 shadow-sm">
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2" for="nome">Nome Completo *</label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-600"
                       type="text" id="nome" name="nome" required placeholder="Seu nome">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2" for="email">Email *</label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-600"
                       type="email" id="email" name="email" required placeholder="seu@email.com">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2" for="telefone">Telefone *</label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-600"
                       type="tel" id="telefone" name="telefone" required placeholder="(43) 9 9999-9999">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2" for="empresa">Empresa *</label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-600"
                       type="text" id="empresa" name="empresa" required placeholder="Nome da sua empresa">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2" for="servico">Serviço de Interesse *</label>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-600"
                        id="servico" name="servico" required>
                    <option value="">Selecione um serviço</option>
                    <option value="Hineni Digital">Hineni Digital</option>
                    <option value="Hineni Cybersecurity">Hineni Cybersecurity</option>
                    <option value="Ambos">Ambos os serviços</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2" for="mensagem">Mensagem *</label>
                <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-600 h-32"
                          id="mensagem" name="mensagem" required placeholder="Conte-nos mais sobre seu projeto..."></textarea>
            </div>

            <div class="mb-6">
                <label class="flex items-center">
                    <input type="checkbox" name="privacidade" required class="mr-3">
                    <span class="text-sm text-gray-700">Concordo com a política de privacidade *</span>
                </label>
            </div>

            <button type="submit" class="w-full gradient-blue-purple text-white py-3 rounded-lg font-semibold hover:shadow-lg transition">
                Enviar Mensagem
            </button>
        </form>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl font-bold mb-12 text-center text-gray-900">Perguntas Frequentes</h2>
        <div class="space-y-6">
            <details class="bg-white rounded-lg p-6 shadow-sm border border-gray-200 cursor-pointer group">
                <summary class="font-semibold text-gray-900 flex justify-between items-center">
                    Quanto custa um projeto com vocês?
                    <span class="group-open:rotate-180 transition">▼</span>
                </summary>
                <p class="text-gray-700 mt-4">Os custos variam conforme o escopo e complexidade do projeto. Oferecemos consultoria gratuita inicial para avaliar suas necessidades e apresentar uma proposta personalizada sem compromisso.</p>
            </details>

            <details class="bg-white rounded-lg p-6 shadow-sm border border-gray-200 cursor-pointer group">
                <summary class="font-semibold text-gray-900 flex justify-between items-center">
                    Quanto tempo leva para um projeto?
                    <span class="group-open:rotate-180 transition">▼</span>
                </summary>
                <p class="text-gray-700 mt-4">O prazo depende do tipo de projeto. Um website pode levar 4-8 semanas, enquanto testes de penetração são mais ágeis (2-4 semanas). Discutiremos cronograma específico durante a consultoria.</p>
            </details>

            <details class="bg-white rounded-lg p-6 shadow-sm border border-gray-200 cursor-pointer group">
                <summary class="font-semibold text-gray-900 flex justify-between items-center">
                    Vocês trabalham com empresas pequenas?
                    <span class="group-open:rotate-180 transition">▼</span>
                </summary>
                <p class="text-gray-700 mt-4">Sim! Trabalhamos com empresas de todos os tamanhos. Temos soluções escaláveis desde startups até grandes corporações. Cada projeto é adaptado ao orçamento e necessidades do cliente.</p>
            </details>

            <details class="bg-white rounded-lg p-6 shadow-sm border border-gray-200 cursor-pointer group">
                <summary class="font-semibold text-gray-900 flex justify-between items-center">
                    Qual é seu suporte após o projeto?
                    <span class="group-open:rotate-180 transition">▼</span>
                </summary>
                <p class="text-gray-700 mt-4">Oferecemos suporte técnico contínuo, manutenção, atualizações e otimizações. Você pode contratar um plano de suporte mensal ou solicitar serviços conforme necessário.</p>
            </details>

            <details class="bg-white rounded-lg p-6 shadow-sm border border-gray-200 cursor-pointer group">
                <summary class="font-semibold text-gray-900 flex justify-between items-center">
                    Como é o processo de desenvolvimento?
                    <span class="group-open:rotate-180 transition">▼</span>
                </summary>
                <p class="text-gray-700 mt-4">Seguimos um processo estruturado: Discovery → Estratégia → Design → Desenvolvimento → Testes → Deploy → Suporte. Você fica envolvido em cada etapa com comunicação clara e entregáveis periódicos.</p>
            </details>

            <details class="bg-white rounded-lg p-6 shadow-sm border border-gray-200 cursor-pointer group">
                <summary class="font-semibold text-gray-900 flex justify-between items-center">
                    Vocês assinam NDAs e contratos de confidencialidade?
                    <span class="group-open:rotate-180 transition">▼</span>
                </summary>
                <p class="text-gray-700 mt-4">Absolutamente! Trabalhamos com NDAs e contratos padrão para garantir a confidencialidade de seus dados e projetos. A segurança e privacidade são prioridades para nós.</p>
            </details>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
