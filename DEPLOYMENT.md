# Guia de Deployment - Site Grupo Hineni

## 🚀 Preparação para Deploy

### 1. Pré-requisitos no Servidor

- [ ] Apache 2.4+ com mod_rewrite habilitado
- [ ] PHP 7.4 ou superior
- [ ] SSL/TLS certificate (HTTPS)
- [ ] Email configurado (SMTP ou mail())
- [ ] Domínio apontando para o servidor

### 2. Verificar Configurações PHP

```bash
# SSH no servidor
ssh seu_usuario@seu_servidor

# Testar PHP
php -v

# Verificar extensões necessárias
php -m | grep -E 'curl|openssl|mbstring|json'

# Verificar se mail() está habilitado
php -i | grep "sendmail_path"
```

### 3. Preparar Diretórios

```bash
# Acessar pasta web (geralmente /var/www ou public_html)
cd /home/seu_usuario/public_html

# Criar backup se houver site antigo
mv ./public_html ./public_html.backup

# Criar novo diretório (opcional - pode colocar na raiz)
mkdir -p site_grupohineni_html
```

## 📤 Métodos de Upload

### Opção A: FTP (FileZilla ou similar)

1. Conectar ao servidor FTP
2. Navegar até `public_html/` ou raiz do domínio
3. Fazer upload de todos os arquivos PHP
4. Fazer upload do `.htaccess`
5. Verificar permissões (geralmente 644 para arquivos, 755 para diretórios)

### Opção B: Git (Recomendado)

```bash
# No servidor, clonar repositório
cd /home/seu_usuario/public_html
git clone https://github.com/fcgoesdev/site_grupohineni_html.git

# Ou fazer pull se já foi clonado
git pull origin main
```

### Opção C: SFTP via SCP

```bash
# Do seu computador
scp -r ./site_grupohineni_html/* seu_usuario@seu_servidor:/home/seu_usuario/public_html/

# Ou com diretório
scp -r ./site_grupohineni_html seu_usuario@seu_servidor:/home/seu_usuario/public_html/
```

## 🔧 Configuração Pós-Upload

### 1. Ajustar Permissões

```bash
# SSH no servidor
ssh seu_usuario@seu_servidor
cd /home/seu_usuario/public_html/site_grupohineni_html

# Arquivos PHP
chmod 644 *.php
chmod 644 includes/*.php

# Diretórios
chmod 755 .
chmod 755 includes/
chmod 755 assets/

# .htaccess (se não for lido, tentar 644)
chmod 644 .htaccess
```

### 2. Configurar Email

#### Se usar mail() padrão:

```bash
# Testar envio de email
echo "<?php mail('seu@email.com', 'Teste', 'Teste de email'); ?>" > /tmp/test.php
php /tmp/test.php
```

#### Se usar SMTP (Gmail, SendGrid, etc):

Editar `enviar-contato.php` e instalar PHPMailer:

```bash
cd /home/seu_usuario/public_html/site_grupohineni_html
composer require phpmailer/phpmailer
```

Então atualizar `enviar-contato.php` para usar PHPMailer (exemplo):

```php
<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'seu-email@gmail.com';
    $mail->Password = 'sua-senha-app';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('seu-email@gmail.com', 'Grupo Hineni');
    $mail->addAddress('contato@grupohineni.com.br');
    $mail->addReplyTo($dados['email']);

    $mail->Subject = $assunto;
    $mail->msgHTML($corpoEmail);

    $mail->send();
    $status = 'success';
} catch (Exception $e) {
    $status = 'error';
}
?>
```

### 3. Habilitar mod_rewrite (Apache)

```bash
# SSH no servidor
sudo a2enmod rewrite

# Editar Apache config
sudo nano /etc/apache2/sites-available/seu-dominio.conf

# Adicionar:
<Directory /home/seu_usuario/public_html>
    AllowOverride All
    Options Indexes FollowSymLinks
    Require all granted
</Directory>

# Reiniciar Apache
sudo systemctl restart apache2
```

### 4. Atualizar DNS (se novo domínio)

```
Tipo: A Record
Nome: seu-dominio.com
IP: [seu-ip-do-servidor]

Tipo: CNAME
Nome: www.seu-dominio.com
Aponta para: seu-dominio.com
```

Aguardar propagação DNS (até 24 horas).

### 5. Testar HTTPS/SSL

```bash
# Usar Let's Encrypt (gratuito)
sudo certbot certonly --apache -d seu-dominio.com -d www.seu-dominio.com

# Ou importar certificado existente
sudo cp seu-certificado.crt /etc/ssl/certs/
sudo cp sua-chave-privada.key /etc/ssl/private/
```

## ✅ Verificação Pós-Deploy

### 1. Teste de Acesso

```bash
# Testar se site está acessível
curl -I https://seu-dominio.com
curl -I https://seu-dominio.com/contato

# Deve retornar HTTP 200
```

### 2. Teste de Funcionalidade

Abrir no browser e testar:

1. **Navegação**
   - [ ] Home carrega
   - [ ] Todos os links funcionam
   - [ ] Menu mobile responsivo

2. **Formulário de Contato**
   - [ ] Preencher e enviar
   - [ ] Email chega em contato@grupohineni.com.br
   - [ ] Mensagem de sucesso aparece
   - [ ] Email de confirmação chega no user

3. **Filtros**
   - [ ] Página "Nossos Clientes" carrega
   - [ ] Filtros funcionam
   - [ ] Clientes destacados aparecem primeiro

4. **Performance**
   - [ ] Homepage carrega em < 3s
   - [ ] Imagens carregam
   - [ ] Sem erros no console do navegador

### 3. Checklist de Segurança

```bash
# Verificar se .htaccess está sendo lido
curl -I https://seu-dominio.com/enviar-contato.php

# Deve redirecionar ou retornar 405 (não 404)

# Testar que acesso direto a includes/ é bloqueado
curl https://seu-dominio.com/includes/header.php

# Não deve retornar código PHP
```

### 4. Monitorar Logs

```bash
# Erros Apache
tail -f /var/log/apache2/error.log

# Acessos
tail -f /var/log/apache2/access.log

# Erros PHP
tail -f /var/log/php.log
```

## 🐛 Troubleshooting

### Erro 404 em páginas não-root

**Problema**: `/quem-somos` retorna 404
**Solução**: Verificar se mod_rewrite está habilitado

```bash
sudo a2enmod rewrite
sudo systemctl restart apache2
```

### Formulário não envia email

**Problema**: Form envia mas email não chega
**Solução**: Verificar logs

```bash
# Ver se email foi enviado
mail -p

# Testar mail() diretamente
php -r "mail('seu@email.com', 'Test', 'Test'); echo 'Sent';"

# Se não funcionar, usar SMTP (ver secção anterior)
```

### Erro de permissão em upload de arquivos

**Problema**: Pode't write files
**Solução**: Ajustar permissões

```bash
chown -R www-data:www-data /home/seu_usuario/public_html/site_grupohineni_html
chmod -R 755 /home/seu_usuario/public_html/site_grupohineni_html
```

### CSS/JS não carregam

**Problema**: Styles e scripts da CDN não aparecem
**Solução**: Verificar HTTPS e CORS

```bash
# Verificar se .htaccess está bloqueando
curl -v https://seu-dominio.com/

# Pode ser necessário adicionar no .htaccess:
Header always set Access-Control-Allow-Origin "*"
```

## 📊 Monitoramento Contínuo

### Configurar Alertas

```bash
# Cron para verificar se site está up
0 * * * * curl -I https://seu-dominio.com || mail -s "Site down" admin@grupohineni.com.br
```

### Backup Automático

```bash
# Backup diário
0 2 * * * tar -czf /backups/site-$(date +%Y%m%d).tar.gz /home/seu_usuario/public_html/site_grupohineni_html/
```

### Logs de Formulário

Pode adicionar logging em `enviar-contato.php`:

```php
// Adicionar ao final de enviar-contato.php
error_log("Email enviado: " . $dados['email'] . " - " . $status);
```

## 🎉 Deploy Completado!

Se todos os testes passarem:

1. Comunicar aos clientes que site está no ar
2. Testar em múltiplos browsers e dispositivos
3. Monitorar logs nos primeiros dias
4. Coletar feedback e fazer ajustes

---

**Próximas Melhorias** (opcional):
- [ ] Adicionar Google Analytics
- [ ] Implementar CDN para imagens
- [ ] Adicionar Chat em tempo real
- [ ] Integrar com CRM (Hubspot, Pipedrive)
- [ ] Adicionar sistema de newsletter
