<?php
/**
 * Script de envio de formulário de contato
 * Processa dados do formulário e envia email
 */

// Inicialização
$status = 'error';
$redirect = '/contato.php';

// Validação de requisição
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: $redirect?status=error");
    exit;
}

// Sanitização de dados
$dados = [
    'nome' => isset($_POST['nome']) ? trim($_POST['nome']) : '',
    'email' => isset($_POST['email']) ? trim($_POST['email']) : '',
    'telefone' => isset($_POST['telefone']) ? trim($_POST['telefone']) : '',
    'empresa' => isset($_POST['empresa']) ? trim($_POST['empresa']) : '',
    'servico' => isset($_POST['servico']) ? trim($_POST['servico']) : '',
    'mensagem' => isset($_POST['mensagem']) ? trim($_POST['mensagem']) : '',
];

// Validação de campos obrigatórios
$camposObrigatorios = ['nome', 'email', 'telefone', 'empresa', 'servico', 'mensagem'];
foreach ($camposObrigatorios as $campo) {
    if (empty($dados[$campo])) {
        header("Location: $redirect?status=error");
        exit;
    }
}

// Validação de email
if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
    header("Location: $redirect?status=error");
    exit;
}

// Validação de privacidade
if (!isset($_POST['privacidade'])) {
    header("Location: $redirect?status=error");
    exit;
}

// Preparação do email
$emailDestino = 'contato@grupohineni.com.br';
$assunto = 'Novo Contato - Grupo Hineni: ' . $dados['nome'];

// Corpo do email em HTML
$corpoEmail = "
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; background: #f9f9f9; }
        .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 8px 8px 0 0; text-align: center; }
        .content { background: white; padding: 20px; border-radius: 0 0 8px 8px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #667eea; }
        .footer { margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #999; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>Novo Contato Recebido</h1>
        </div>
        <div class='content'>
            <div class='field'>
                <span class='label'>Nome:</span> " . htmlspecialchars($dados['nome']) . "
            </div>
            <div class='field'>
                <span class='label'>Email:</span> <a href='mailto:" . htmlspecialchars($dados['email']) . "'>" . htmlspecialchars($dados['email']) . "</a>
            </div>
            <div class='field'>
                <span class='label'>Telefone:</span> " . htmlspecialchars($dados['telefone']) . "
            </div>
            <div class='field'>
                <span class='label'>Empresa:</span> " . htmlspecialchars($dados['empresa']) . "
            </div>
            <div class='field'>
                <span class='label'>Serviço de Interesse:</span> " . htmlspecialchars($dados['servico']) . "
            </div>
            <div class='field'>
                <span class='label'>Mensagem:</span><br>
                <pre style='background: #f5f5f5; padding: 10px; border-radius: 4px; white-space: pre-wrap;'>" . htmlspecialchars($dados['mensagem']) . "</pre>
            </div>
            <div class='footer'>
                <p>Este email foi enviado automaticamente pelo formulário de contato do site Grupo Hineni.</p>
            </div>
        </div>
    </div>
</body>
</html>
";

// Headers do email
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: noreply@grupohineni.com.br\r\n";
$headers .= "Reply-To: " . $dados['email'] . "\r\n";

// Envio do email
if (mail($emailDestino, $assunto, $corpoEmail, $headers)) {
    // Email enviado com sucesso
    $status = 'success';

    // Opcional: Enviar email de confirmação para o usuário
    $assuntoConfirmacao = 'Recebemos sua mensagem - Grupo Hineni';
    $corpoConfirmacao = "
    <html>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { font-family: Arial, sans-serif; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; background: #f9f9f9; }
            .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 8px 8px 0 0; text-align: center; }
            .content { background: white; padding: 20px; border-radius: 0 0 8px 8px; }
            .footer { margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #999; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>Obrigado pelo Contato!</h1>
            </div>
            <div class='content'>
                <p>Olá " . htmlspecialchars($dados['nome']) . ",</p>
                <p>Recebemos sua mensagem com sucesso! Um de nossos especialistas entrará em contato em breve para discutir como podemos ajudar seu negócio.</p>
                <p>Se você tiver dúvidas urgentes, sinta-se à vontade para nos contatar via WhatsApp: <strong>+55 43 9 9113-2227</strong></p>
                <p>Atenciosamente,<br><strong>Grupo Hineni</strong></p>
                <div class='footer'>
                    <p>Este email foi enviado automaticamente. Por favor, não responda este email. Use nosso formulário de contato ou WhatsApp para uma resposta mais rápida.</p>
                </div>
            </div>
        </div>
    </body>
    </html>
    ";

    $headersConfirmacao = "MIME-Version: 1.0\r\n";
    $headersConfirmacao .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headersConfirmacao .= "From: contato@grupohineni.com.br\r\n";

    // Enviar email de confirmação (não verifica resultado)
    @mail($dados['email'], $assuntoConfirmacao, $corpoConfirmacao, $headersConfirmacao);
} else {
    // Erro ao enviar email
    $status = 'error';
}

// Redirecionar com status
header("Location: $redirect?status=$status");
exit;
?>
